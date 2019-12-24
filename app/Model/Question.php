<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //pertanyaan selalu berhubungan dengan user (sipenanya)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //question may has many replies
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    //pertanyaan juga berada dalam ketegori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
