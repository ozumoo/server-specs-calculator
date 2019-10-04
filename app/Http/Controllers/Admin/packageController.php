<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class packageController extends Controller
{
	public function index()
    {
        return view('admin.packages.index');
    }

    public function show($id)
    {
        $client = User::findOrFail($id);
        return view('admin.packages.edit',compact('client'));

    }


    public function create()
    {
        return view('admin.packages.create');

    }

    public function store()
    {
        $client = new User;
        $req = Request::all();

        $client->type = 'client';
        $client->name = $req['name'];
        $client->email = $req['email'];
        $client->password = bcrypt($req['password']);
        $client->save();

        return redirect(action('Admin\clientController@index'));
    }
    public function update($id)
    {
        $client = User::findOrFail($id);   
        $req = Request::all();

        $client->name = $req['name'];
        $client->email = $req['email'];
        $client->password = bcrypt($req['password']);
        $client->save();

        return redirect(action('Admin\clientController@index'));
    }



	public function deletePackage()
	{
		
	}

	public function packageDT()
	{
		
	}
}
