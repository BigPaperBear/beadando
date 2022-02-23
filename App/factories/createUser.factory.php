<?php

namespace App\factories;
use Classes\factory;
use App\models\User;
class createUser extends factory{

    function __invoke()
    {
        User::class;
    }

}
