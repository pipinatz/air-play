<?php

namespace App\Http\Controllers;

use App\Models\Game as GameModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
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

    public function getAllGames()
    {
        // $counter = GameModel::all();
        
        // if (sizeof($counter) > 18) {
        //     $games = GameModel::orderBy('id', 'DESC')->paginate(18);
        //     return $games;
        // } else {
        //     $games = GameModel::orderBy('id', 'DESC');
        //     return $games;
        // }
        
        $games = GameModel::orderBy('id', 'DESC')->paginate(18);
        return $games;
    }

    public function getGameView()
    {

        $gameList = GameController::getAllGames();

        return view('games', [
            'title' => 'airPlay | Games',
            'games' => $gameList
        ]);
    }

    public function getGameViewbyPlatform($platform)
    {

        $gameList = GameModel::where('platform', $platform)->orderBy('id', 'DESC')->paginate(18);

        return view('games', [
            'title' => 'airPlay | Games',
            'games' => $gameList
        ]);
    }


    public function getGameViewbyGenre($genre)
    {

        $gameList = GameModel::where('category', $genre)->orderBy('id', 'DESC')->paginate(18);

        return view('games', [
            'title' => 'airPlay | Games',
            'games' => $gameList
        ]);
    }

    public function getGameDetail($gameID)
    {

        $result = GameModel::where('id', $gameID)->first();

        return $result;
    }

    public function getGameDetailView($gameID)
    {

        $game = GameController::getGameDetail($gameID);

        $reviewController = new ReviewController();
        $review = $reviewController->getReviewByGameID($gameID);
        $title = 'airPlay | ' . trim($game->title);

        return view('game_detail_v2', [
            'title' => $title,
            'game' => $game,
            'review' => $review
        ]);
    }

    public function getLastGamesCreated()
    {

        $userID = session()->get('userID');
        $games = GameModel::where('member_id', $userID)->take(4)->orderBy('id', 'desc')->get();

        return $games;
    }

    public function getCreateGameFormView()
    {

        return view('creatorStudioContentCreate', [
            'title' => 'Creator Studio | Create Game',
        ]);
    }

    public function createGame(Request $gameData)
    {

        $validatedData = $gameData->validate([
            'title' => 'required|min:5|max:24',
            'genre' => 'required',
            'platform' => 'required',
            'description' => 'required',
            'minimumOS' => 'required',
            'minimumMemory' => 'required',
            'minimumProcessor' => 'required',
            'minimumGraphic' => 'required',
            'minimumStorage' => 'required',
            'recommendedOS' => 'required',
            'recommendedMemory' => 'required',
            'recommendedProcessor' => 'required',
            'recommendedGraphic' => 'required',
            'recommendedStorage' => 'required',
            'game' => 'required',
            'image' => 'required'
        ]);

        $game = new GameModel();

        $game->member_id = session()->get('userID');
        $game->title = $validatedData['title'];
        $game->category = $validatedData['genre'];
        $game->platform = $validatedData['platform'];
        $game->description = $validatedData['description'];
        $game->minimumOS = $validatedData['minimumOS'];
        $game->minimumMemory = $validatedData['minimumMemory'];
        $game->minimumProcessor = $validatedData['minimumProcessor'];
        $game->minimumGraphic = $validatedData['minimumGraphic'];
        $game->minimumStorage = $validatedData['minimumStorage'];
        $game->recommendedOS = $validatedData['recommendedOS'];
        $game->recommendedMemory = $validatedData['recommendedMemory'];
        $game->recommendedProcessor = $validatedData['recommendedProcessor'];
        $game->recommendedGraphic = $validatedData['recommendedGraphic'];
        $game->recommendedStorage = $validatedData['recommendedStorage'];
        $game->excerpt = Str::limit(strip_tags($validatedData['description']), 110, '...');
        $game->game = $validatedData['game'];
        $game->image = $gameData->file('image')->store('game-images');
        $game->date_created = date('Y-m-d H:i:s');
        $game->date_updated = $game->date_created;

        $game->save();

        return redirect()->intended('/CreatorStudio/Overview')->with('createSuccess', 'Create Game Success');
    }

    public function getCreatorStudioGamesView()
    {

        $userID = session()->get('userID');
        $games = GameModel::where('member_id', $userID)->orderBy('id', 'desc')->paginate(4);

        return view('creatorStudioContent', [
            'title' => 'Creator Studio | My Games',
            'games' => $games
        ]);
    }

    public function getCreatorStudioGameDetailFormView($id)
    {

        $game = GameController::getGameDetail($id);
        $title = 'My Games | ' . trim($game->title);

        return view('creatorStudioContentDetail', [
            'title' => $title,
            'game' => $game

        ]);
    }

    public function updateGame(Request $gameData, $gameID)
    {

        $validatedData = $gameData->validate([
            'title' => 'required|min:5|max:24',
            'genre' => 'required',
            'platform' => 'required',
            'description' => 'required',
            'minimumOS' => 'required',
            'minimumMemory' => 'required',
            'minimumProcessor' => 'required',
            'minimumGraphic' => 'required',
            'minimumStorage' => 'required',
            'recommendedOS' => 'required',
            'recommendedMemory' => 'required',
            'recommendedProcessor' => 'required',
            'recommendedGraphic' => 'required',
            'recommendedStorage' => 'required',
            'game' => 'required'
        ]);

        $game = GameModel::where('id', $gameID)->first();;

        $game->member_id = session()->get('userID');
        $game->title = $validatedData['title'];
        $game->category = $validatedData['genre'];
        $game->platform = $validatedData['platform'];
        $game->description = $validatedData['description'];
        $game->minimumOS = $validatedData['minimumOS'];
        $game->minimumMemory = $validatedData['minimumMemory'];
        $game->minimumProcessor = $validatedData['minimumProcessor'];
        $game->minimumGraphic = $validatedData['minimumGraphic'];
        $game->minimumStorage = $validatedData['minimumStorage'];
        $game->recommendedOS = $validatedData['recommendedOS'];
        $game->recommendedMemory = $validatedData['recommendedMemory'];
        $game->recommendedProcessor = $validatedData['recommendedProcessor'];
        $game->recommendedGraphic = $validatedData['recommendedGraphic'];
        $game->recommendedStorage = $validatedData['recommendedStorage'];
        $game->excerpt = Str::limit(strip_tags($validatedData['description']), 110, '...');
        $game->game = $gameData->game;

        if ($gameData->file('image')) {
            Storage::delete($gameData->oldImage);
            $validateData['image'] = $gameData->file('image')->store('game-images');
            $game->image = $validateData['image'];
        }

        $game->date_updated = $game->date_created;

        $game->save();

        return redirect('/CreatorStudio/Overview')->with('updateSuccess', 'Update Game Success');
    }

    public function deleteGame($gameID)
    {

        $game = GameModel::where('id', $gameID)->first();

        if ($game->image) {
            Storage::delete($game->iamge);
        }

        GameModel::destroy($gameID);

        return redirect('/CreatorStudio/Overview')->with('deleteSuccess', 'Delete Game Success');
    }
}
