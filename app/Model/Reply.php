<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //save all
    protected $guarded = [];

    //balasan adalah milik dari pertanyaan tertentu
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    //setiap balasan adalah juga milik user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //setiap balasan juga memilik banyak like
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
