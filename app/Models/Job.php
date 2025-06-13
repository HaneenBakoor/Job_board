<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job
{
public static function all(){

    return[
     ['title'=>'software engineer' , 'salary'=>'$4000'],
     ['title'=>'graphic designer' , 'salary'=>'$5000']

    ];
}
}
