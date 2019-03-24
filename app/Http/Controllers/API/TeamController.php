<?php

namespace App\Http\Controllers\API;

use App\Http\Models\Team;
use Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{

    public function store(Request $request)
    {

    }

    public function index()
    {
        return Team::all();
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
