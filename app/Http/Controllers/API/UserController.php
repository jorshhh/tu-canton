<?php

namespace App\Http\Controllers\API;

use App\Http\Models\Team;
use App\Http\Models\User;
use Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function store(Request $request)
    {

    }

    public function index(Team $team)
    {
        return $team->users;
    }

    public function edit($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function delete($id)
    {


    }

}
