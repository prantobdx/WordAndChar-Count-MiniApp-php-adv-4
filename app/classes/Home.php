<?php

namespace App\classes;

class Home
{
    protected $firstName;

    public function index()
    {
        header( 'Location: action.php?MyPages=home' );

    }

}