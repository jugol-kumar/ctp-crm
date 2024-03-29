<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function noteCategory(){
        return $this->belongsTo(NoteCategory::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
