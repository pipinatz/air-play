<?php

namespace App\Http\Controllers;

use App\Models\News as NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getNewsView(){

        $news = NewsController::getAllNews();
        $highlight = NewsModel::orderBy('id', 'DESC')->take(2)->get();

        return view('news',[
            'title' => 'airPlay | News',
            'news' => $news,
            'highlight' => $highlight
        ]);
    }

    public function getAllNews(){

        $news = NewsModel::orderBy('id', 'DESC')->paginate(10);

        return $news;
    }

    public function getNewsDetail($id){
        $news = NewsModel::where('id', $id)->first();

        return $news;

    }

    public function getNewsDetailView($id){

        $news = NewsController::getNewsDetail($id);
        $title = 'App Management | '. trim($news->title);
        return view('newsDetail', [
            'title' => $title,
            'news' => $news
        ]);
    }

    public function getLastNewsCreated(){

        $userID = session()->get('userID');
        $news = NewsModel::where('admin_id', $userID)->take(4)->orderBy('id', 'desc')->get();

        return $news;
    }


    public function getNewsDetailFormView($id){

        $news = NewsController::getNewsDetail($id);
        $title = 'App Management | '. trim($news->title);
        return view('appManagementNewsDetail', [
            'title' => $title,
            'news' => $news
        ]);

    }

    public function getCreateNewsFormView(){

        return view('appManagementNewsCreate', [
            'title' => 'App Management | Create News',
        ]);
    }

    public function createNews(Request $newsData){

        $validatedData = $newsData->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        $news = new NewsModel();

        $news->admin_id = session()->get('userID');
        $news->date_created = date('Y-m-d H:i:s');
        $news->date_updated = date('Y-m-d H:i:s');
        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        $news->image = $newsData->file('image')->store('news-images');

        $news->save();

        return redirect()->intended('/AppManagement/Overview')->with('createSuccess', 'Create News Success');
    }

    public function getAppManagementNewsView(){

        $userID = session()->get('userID');
        $news = NewsModel::where('admin_id', $userID)->orderBy('id', 'desc')->paginate(4);
        
        return view('appManagementNews',[
            'title' => 'App Management | News',
            'news' => $news
        ]);
    }

    public function updateNews(Request $newsData, $id){

        $validatedData = $newsData->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);
        
        $news = NewsModel::where('id', $id)->first();
        
        $news->title = $validatedData['title'];
        $news->date_updated = date('Y-m-d H:i:s');
        $news->description = $validatedData['description'];

        if($newsData->file('image')){
            Storage::delete($newsData->oldImage);
            $news->image = $newsData->file('image')->store('images');
        }
        
        $news->save();

        return redirect()->intended('/AppManagement/Overview')->with('updateSuccess', 'Update News Success');
    }

    public function deleteNews($id){

        $news = NewsModel::where('id', $id)->first();

        if($news->image){
            Storage::delete($news->iamge);
        }

        NewsModel::destroy($id);

        return redirect()->intended('/AppManagement/Overview')->with('deleteSuccess', 'Delete News Success');
    }
}
