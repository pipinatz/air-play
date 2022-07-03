<?php

namespace App\Http\Controllers;

use App\Models\Comment as CommentModel;
use App\Models\Forum as ForumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ForumController extends Controller
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

    public function getAllForum(){

        $result = ForumModel::orderBy('id', 'DESC')->paginate(12);
        
        return $result;

    }

    public function getForumView(){
        
        $forum = ForumController::getAllForum();
        
        return view('community',[
            'title' => 'airPlay | Community',
            'forums' => $forum
        ]);
    }

    public function getForumDetail($id){

        $result = ForumModel::where('id', $id)->first();
        
        return $result;
    }

    public function getForumDetailView($forumID){

        $forumDetail = ForumController::getForumDetail($forumID);

        $forumSuggest = DB::table('forums')->where('id', '!=', $forumID)->get();
        $suggest = $forumSuggest->random(3);

        $commentModel = new CommentController();
        $comments = $commentModel->getCommentByForumID($forumID);
        $title = 'airPlay | '. trim($forumDetail->title);

        return view('communityDetail',[
            'title' => $title,
            'forum' => $forumDetail,
            'suggestion' => $suggest,
            'comments' => $comments
        ]);
    }

    public function getLastForumsCreated(){

        $userID = session()->get('userID');
        $forums = ForumModel::where('member_id', $userID)->take(4)->orderBy('id', 'desc')->get();
    
        return $forums;
    }

    public function getCreateForumFormView(){

        return view('creatorStudioForumCreate', [
            'title' => 'Creator Studio | Create Forum'
        ]);
    }

    public function createForum(Request $forumData){
        
        $validatedData = $forumData->validate([
            'title' => 'required|min:5',
            'description' => 'required'
        ]);

        $forum = new ForumModel();

        $forum->member_id = session()->get('userID');
        $forum->date_created = date('Y-m-d H:i:s');
        $forum->date_updated = date('Y-m-d H:i:s');
        $forum->title = $validatedData['title'];
        $forum->description = $validatedData['description'];
        $forum->excerpt = Str::limit(strip_tags($validatedData['description']), 240, '...');

        $forum->save();

        return redirect()->intended('/CreatorStudio/Overview')->with('createForumSuccess', 'Create Forum Success');

    }

    public function getCreatorStudioForumsView(){
        $userID = session()->get('userID');

        $forums = ForumModel::where('member_id', $userID)->orderBy('id', 'desc')->paginate(4);

        return view('creatorStudioForum', [
            'title' => 'Creator Studio | My Forum',
            'forums' => $forums
        ]);
    }

    public function getCreatorStudioForumDetailFormView($id){

        $forumDetail = ForumController::getForumDetail($id);
        $title = 'My Forum | '. trim($forumDetail->title);

        return view('creatorStudioForumDetail', [
            'title' => $title,
            'forum' => $forumDetail
        ]);
    }

    public function updateForum(Request $forumData, $id){

        $validatedData = $forumData->validate([
            'title' => 'required|min:5',
            'description' => 'required'
        ]);

        $forum = ForumModel::where('id', $id)->first();

        $forum->title = $validatedData['title'];
        $forum->description = $validatedData['description'];
        $forum->date_updated = date('Y-m-d H:i:s');
        $forum->excerpt = Str::limit(strip_tags($validatedData['description']), 240, '...');

        $forum->save();

        return redirect()->intended('/CreatorStudio/Overview')->with('updateForumSuccess', 'Update Forum Success');
    }

    public function deleteForum($forumID){
        
        ForumModel::destroy($forumID);

        return redirect()->intended('/CreatorStudio/Overview')->with('deleteForumSuccess', 'Delete Forum Success');
    }

}
