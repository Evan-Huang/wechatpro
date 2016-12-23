<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //模型指定表
    protected $table = 'clients';

    protected $fillable = ['clientname','email','phone'];
}
