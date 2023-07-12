# SSA Wordpress Custom Eloquent

## Installation
...
composer require ldaliwan/ssa-wordpress-eloquent


## Description
* This is all about integrate the model that can easily get the CRUD method which 
avoiding the redudant on calling the wordpress insert update and delete methods.


## How to use

<?php

//in model
namespace App;

use Ldaliwan\SsaWordpressEloquent\Illuminate\Eloquent;

class User extends Model
{
    protected $table = 'users';
}

//in controller or any class

use App\User;

public function store($attr = [])
{
    $user = new User();

    $user->create([
        'first_name' => 'John',
        'last_name' => 'Doe'
    ]);
}



