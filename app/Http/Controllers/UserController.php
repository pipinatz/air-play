<?php

namespace App\Http\Controllers;

use App\Models\Admin as AdminModel;
use App\Models\Member as MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getRegisterView()
    {

        return view('register', [
            'title' => "Sign-up"
        ]);
    }

    public function register(Request $newUser)
    {

        $validatedData = $newUser->validate([
            'username' => 'required|min:5|max:24|alpha_num',
            'email' => 'required|unique:members|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        $user = new MemberModel();

        $user->userType = 'member';
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->image = '';
        $user->donationCode = '';
        $user->developerAlias = $validatedData['username'];

        $user->save();

        return redirect('/Login')->with('success', 'Registration successfull');
    }

    public function getLoginView()
    {

        return view('login', [
            'title' => "App Name | Login"
        ]);
    }

    public function login(Request $userData)
    {

        $credentials = $userData->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $userData->session()->regenerate();

            $userInfo = MemberModel::where('email', '=', $userData->email)->firstOrFail();

            $userData->session()->put('userType', $userInfo->userType);
            $userData->session()->put('username', $userInfo->username);
            $userData->session()->put('email', $userInfo->email);
            $userData->session()->put('userID', $userInfo->id);
            $userData->session()->put('profileImage', $userInfo->image);

            return redirect()->intended('/');
        }
        if (Auth::guard('admin')->attempt($credentials)) {
            $userData->session()->regenerate();

            $userInfo = AdminModel::where('email', '=', $userData->email)->firstOrFail();

            $userData->session()->put('userType', $userInfo->userType);
            $userData->session()->put('username', $userInfo->username);
            $userData->session()->put('email', $userInfo->email);
            $userData->session()->put('userID', $userInfo->id);
            $userData->session()->put('profileImage', $userInfo->image);

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'There was a problem with your login.');
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function getHomeView()
    {

        $gameController = new GameController;
        $forumController = new ForumController;
        $newsController = new NewsController;

        $game = $gameController->getAllGames();
        $forum = $forumController->getAllForum();
        $news = $newsController->getAllNews();

        return view('home', [
            'title' => "AirPlay | Home",
            'game' => $game,
            'forum' => $forum,
            'news' => $news
        ]);
    }

    public function getAdminData()
    {

        $adminData = AdminModel::where('id', session()->get('userID'))->first();

        return $adminData;
    }

    public function getMemberData()
    {

        $memberData = MemberModel::where('id', session()->get('userID'))->first();

        return $memberData;
    }

    public function getProfileView()
    {

        $user = '';

        if (session()->get('userType') == 'member') {

            $user = UserController::getMemberData();
        } else if (session()->get('userType') == 'admin') {

            $user = UserController::getAdminData();
        }

        return view('profile', [
            'title' => 'airPlay | Profile',
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {

        $user = MemberModel::where('id', session()->get('userID'))->first();

        $credentials = $request->validate([
            'username'  => 'required|min:5|max:24|alpha_num',
            'newPassword'  => 'nullable|min:8|max:16',
            'developerName' => 'required|min:8|max:24|alpha_num',
            'donationLink' => 'nullable',
            'image' => 'image'
        ]);

        if ($request->file('image')) {
            Storage::delete($request->oldImage);
            $credentials['image'] = $request->file('image')->store('public/storage/profile-images');
            $user->image = $credentials['image'];
            $request->session()->put('profileImage', $user->image);
        }

        $user->username = $credentials['username'];
        $user->developerAlias = $credentials['developerName'];

        if ($credentials['newPassword'] != null) {
            $user->password = bcrypt($credentials['newPassword']);;
        }
        if ($credentials['donationLink'] != null) {
            $user->donationCode = $credentials['donationLink'];
        }

        $user->save();

        return redirect('/Profile')->with('success', 'Update profile success');
    }

    public function getCreatorStudioOverviewView()
    {

        $gameController = new GameController;
        $forumController = new ForumController;

        $games = $gameController->getLastGamesCreated();
        $forums = $forumController->getLastForumsCreated();

        return view('creatorStudio', [
            'title' => 'Creator Studio Overview',
            'games' => $games,
            'forums' => $forums
        ]);
    }

    public function getAppManagementOverviewView()
    {

        $newsController = new NewsController;

        $news = $newsController->getLastNewsCreated();

        return view('appManagement', [
            'title' => 'App Management Overview',
            'news' => $news
        ]);
    }
}
