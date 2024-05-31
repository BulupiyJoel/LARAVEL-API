<?php


namespace App\Traits;

use App\Models\User;

trait GetUsers {

    public function getUsers() {
        return User::get(["id","name","email"]);
    }

}
