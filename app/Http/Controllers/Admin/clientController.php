<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use DataTables;

class clientController extends Controller
{
	public function index()
    {
        return view('admin.clients.index');
    }

    public function show($id)
    {
        $client = User::findOrFail($id);
        return view('admin.clients.edit',compact('client'));

    }


    public function create()
    {
        return view('admin.clients.create');

    }

    public function store()
    {
        $client = new User;
        $req = Request::all();

        $client->type = 'client';
        $client->name = $req['name'];
        $client->company_name = $req['company_name'];

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
        $client->company_name = $req['company_name'];

        $client->email = $req['email'];
        $client->password = bcrypt($req['password']);
        $client->save();

        return redirect(action('Admin\clientController@index'));
    }

    
    public function deleteClient($id)
    {
        $client = User::findOrFail($id);
        $client->delete();
        return back();
    }

    public function clientDT()
    {	
		$user = \Auth::user() ;

        $clients = User::where('type', 'client')
        	->orderBy('created_at','DESC');

        return DataTables::of($clients)
        ->addColumn('actions',function($client){
            return 
                '<a href="'.
                 action('Admin\clientController@show',$client->id).'"> Edit <i  title="Edit" class="icon md-edit"></i> </a>'
                .' <span class="datatabe-action-seprator"> | </span> '.
                '<button  onClick="deleteRow('. $client->id   .')" class="btn btn-danger btn-xs" data-title="Delete" data-book-id="3333" data-toggle="modal" data-target="#delete" > Delete <span  title="Delete" class="icon md-delete"></span></button>'
                   ;
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
