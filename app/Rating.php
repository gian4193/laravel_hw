<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $timestamps = false;
    public function movie()
    {
        #一筆rating中的movie_id 可以對到其中一筆movie表中的一部電影
        return $this->hasOne('App\Movie', 'movie_id', 'movie_id');
    }
}
