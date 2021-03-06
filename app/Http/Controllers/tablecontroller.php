<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Http\Resources\RatingResource;
use App\Http\Resources\RatWithMovieResource;

class tablecontroller extends Controller
{
    //
    public function selectMovieByIdWithResource(Request $request){
        $userid = $request->input('user_id','');
        if ($userid == '')
            return 'error input, please enter user_id';
        $movies = Rating::where('user_id', $userid)->get();
        return RatingResource::collection($movies);
    }
    public function updateDataResource(Request $request){
        $userid = $request->input('user_id','');
        $movieid = $request->input('movie_id','');
        $rate = $request->input('rating','');
        Rating::where('user_id',$userid)-> where('movie_id',$movieid)->update(['rating'=>$rate]);
        $update_data = Rating::where('user_id', $userid)->get();
        return $update_data;
    }

    public function insertDataResource(Request $request){
        $userid = $request->input('user_id','');
        $movieid = $request->input('movie_id','');
        $rate = $request->input('rating','');
        Rating::insert(['user_id' => $userid, 'movie_id' => $movieid , 'rating' => $rate]);
        $afteruserid = Rating::where('user_id', $userid)->get();
        return RatingResource::collection($afteruserid);
    }
    public function deleteDataResource(Request $request){
        $userid = $request->input('user_id','');
        $movieid = $request->input('movie_id','');
        Rating::where('user_id', $userid ) -> where('movie_id', $movieid ) -> delete();
        $afteruserid = Rating::where('user_id', $userid)->get();
        return RatingResource::collection($afteruserid);
    }
    public function recordResource(Request $request){
        $userid = $request->input('user_id','');
        $movies = Rating::join('movies', 'ratings.movie_id','=','movies.movie_id')->where('user_id', $userid)->select(array('title','rating'))->get();
        return view('record',['movies'=> $movies]);
    }

}
