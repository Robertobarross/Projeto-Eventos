<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [ // É necessário informar que o campo intens é um array //
        'itens' => 'array'];

    protected $dates = ['date']; // É necessário informar que o campo data foi criado //

    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
