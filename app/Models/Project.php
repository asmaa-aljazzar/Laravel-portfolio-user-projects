<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Project extends Model
{
    // $fillable lists the fields Laravel allows create() to save
    protected $fillable = [
        // if something not here it will give an error
        'title',
        'description',
        'user_id',
        // 'status'
    ];

    public function user (){
        return $this->belongsTo(User::class);
    }
    
}
