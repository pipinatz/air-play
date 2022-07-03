<?php

namespace App\Http\Controllers;

use App\Models\Review as ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
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

    public function getReviewByGameID($gameID){

        $reviews = ReviewModel::where('game_id', $gameID)->paginate(4);

        return $reviews;

    }

    public function createReview(Request $review, $gameID){

        $validatedData = $review->validate([
            'review' => ['required']
        ]);

        $newReview = new ReviewModel();
        
        $newReview->member_id = session()->get('userID');
        $newReview->game_id = $gameID;
        $newReview->date = date('Y-m-d H:i:s');
        $newReview->review = $validatedData['review'];

        $newReview->save();

        return back()->with('succes', 'Add new review success');
        
    }

    public function updateReview(Request $review, $reviewID){
    
        $validatedData = $review->validate([
            'review' => ['required']
        ]);
    
        $newReview =  ReviewModel::where('id', $reviewID)->first();
        
        $newReview->date = date('Y-m-d H:i:s');
        $newReview->review = $validatedData['review'];
    
        $newReview->save();
    
        return back()->with('success', 'Update review success');
        
    }

    public function deleteReview($reviewID){
    
        $review =  ReviewModel::where('id', $reviewID)->first();
        $review->delete();
    
        return back()->with('success', 'Delete review success');
        
    }
}
