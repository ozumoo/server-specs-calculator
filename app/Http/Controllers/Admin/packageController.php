<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Controllers\Controller;
use App\Package;
use DB;
use DataTables;


class packageController extends Controller
{

    public function pricing()
    {
        $packages = Package::orderBy('order','ASC')->get();
        $count = count($packages);
        return view('pricing',compact('packages','count'));
    }


    public function invoice()
    {
        $packages = Package::orderBy('order','ASC')->get();
        $count = count($packages);
        return view('invoice',compact('packages','count'));
    }

	public function index()
    {
        return view('admin.packages.index');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit',compact('package'));

    }


    public function create()
    {
        return view('admin.packages.create');

    }

    public function store()
    {
        $package = new Package;
        $req = Request::all();

        $package->order = $req['order'];
        $package->vCpu = $req['vCpu'];
		$package->ram = $req['ram'];
		$package->disk = $req['disk'];
		$package->transfer_limit = $req['transfer_limit'];
		$package->linux_price_per_month = $req['linux_price_per_month'];
		$package->windows_price_per_month = $req['windows_price_per_month'];
		$package->linux_price_per_year = $req['linux_price_per_year'];
		$package->windows_price_per_year = $req['windows_price_per_year'];

        $package->save();

        return redirect(action('Admin\packageController@index'));
    }
    public function update($id)
    {
        $package = Package::findOrFail($id);   
        $req = Request::all();

        $package->order = $req['order'];
        $package->vCpu = $req['vCpu'];
		$package->ram = $req['ram'];
		$package->disk = $req['disk'];
		$package->transfer_limit = $req['transfer_limit'];
		$package->linux_price_per_month = $req['linux_price_per_month'];
		$package->windows_price_per_month = $req['windows_price_per_month'];
		$package->linux_price_per_year = $req['linux_price_per_year'];
		$package->windows_price_per_year = $req['windows_price_per_year'];
        $package->save();

        return redirect(action('Admin\packageController@index'));
    }



	public function deletePackage($id)
	{
		$package = Package::findOrFail($id);
        $package->delete();
        return back();	
	}

	public function packageDT()
	{
		$user = \Auth::user() ;

        $packages = Package::orderBy('order','ASC');

        return DataTables::of($packages)
        ->addColumn('actions',function($package){
            return 
                '<a href="'.
                 action('Admin\packageController@show',$package->id).'"> Edit <i  title="Edit" class="icon md-edit"></i> </a>'
                .' <span class="datatabe-action-seprator"> | </span> '.
                '<button  onClick="deleteRow('. $package->id   .')" class="btn btn-danger btn-xs" data-title="Delete" data-book-id="3333" data-toggle="modal" data-target="#delete" > Delete <span  title="Delete" class="icon md-delete"></span></button>'
                   ;
        })
        ->rawColumns(['actions'])
        ->make(true);		
	}
}
