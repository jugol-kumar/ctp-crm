<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['qut_date', 'due_date'];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function invoice(){
        return $this->hasOne(Invoice::class, 'quotation_id');
    }



}
