<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //Mengubah parameter 'id' ke 'slug'
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];

    protected $guarded = []; //cara ini tidak perlu menuliskan semua fild

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

    //Tambakan attribut path
    public function getPathAtrribute()
    {
        return asset("api/question/$this->slug");
    }
}
