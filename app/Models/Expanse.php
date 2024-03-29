<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expanse extends Model
{
    use HasFactory;


    protected $guarded = ['id'];
    protected $dates = ['date'];

    public function purpse(){
        return $this->belongsTo(Purpose::class, 'purpose_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function method(){
        return $this->belongsTo(Method::class);
    }


}
