<?php

namespace App\Http\Controllers\API;

use App\Http\Models\User;
use Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{

    public function store(Request $request)
    {

    }

    public function index(User $user)
    {
        $sort = $_GET['sort'];

        if($sort == ""){
            return $user->clients()->paginate();

        }

        $parameters = explode('|',$sort);


        return $user->clients()->orderBy($parameters[0],$parameters[1])->paginate();
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
