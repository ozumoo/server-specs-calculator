<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Cart;
use App\Package;
use DB;

class cartController extends Controller
{
	/**
	 * Add Oredr to cart
	 */
	public function add()
	{
		$req = Request::all();
		$user = \Auth::user();
		$cart =  Cart::where('user_id',$user->id)
			->where('status','pending')
			->first();

		if(!$cart){
			$cart = new Cart;
			$cart->user_id = $user->id;
			$cart->status = 'pending';
			$cart->save();
		}

		$package = Package::findOrFail($req['package_id']);

		$packagePrice  = 0;
		$os_type  = 0;
		$subsucription_type  = 0;
		
		if(!empty($req['windows_per_month'])){
			$os_type = 'windows';
			$subsucription_type = 'monthly';
			$packagePrice = $package->windows_price_per_month;
		}

		if(!empty($req['windows_per_year'])){
			$os_type = 'windows';
			$subsucription_type = 'yearly';
			$packagePrice = $package->windows_price_per_year;
		}

		if(!empty($req['linux_per_month'])){
			$os_type = 'linux';
			$subsucription_type = 'monthly';
			$packagePrice = $package->linux_price_per_month;
		}

		if(!empty($req['linux_per_year'])){
			$os_type = 'linux';
			$subsucription_type = 'yearly';
			$packagePrice = $package->linux_price_per_year;
		}

		$extra_storage_price = $req['extra_storage_price'] ?? 0;

		$packagePrice = str_replace("$", "", $packagePrice);
		$packagePrice = (int) $packagePrice;
		
		DB::table('cart_packages')->insert([
			'cart_id' => $cart->id,

			'vCpu' => $package->vCpu,
			'ram' => $package->ram,
			'disk' => $package->disk,
			'transfer_limit' => $package->transfer_limit,
			'extra_storage_space' => $req['extra_storage_space'] ?? 0,
			'extra_storage_price' => $extra_storage_price,
			'package_price'=>$packagePrice,

			'os_type' => $os_type,
			'subsucription_type' => $subsucription_type,
			'total_price' => $packagePrice + $extra_storage_price,
		]);

		flash('Added To Cart');
		return redirect('/');
	}

	/**
	 * delete cart
	 */
	public function destroy()
	{
		$user = \Auth::user();
		$cart =  Cart::where('user_id',$user->id)
			->where('status','pending')
			->first();
		if(!$cart){
			return redirect('/');
		}	
		$cart->delete();
		return redirect('/');

	}


	/**
	 * delete cart
	 */
	public function deleteOrder($id)
	{
		$user = \Auth::user();
		$order = DB::table('cart_packages')
			->delete($id);
		if(!$order){
			return redirect('/');
		}	
		return redirect('/cart');

	}

	/**
	 * show cart orders
	 */
	public function cart()
	{
		$user = \Auth::user();
		$cart =  Cart::where('user_id',$user->id)
			->where('status','pending')
			->first();
		if(!$cart){
			return redirect('/');
		}
		$orders = DB::table('cart_packages')->where('cart_id',$cart->id)->get();		
		// return $orders;
		return view('cart',compact('orders'));
	}

	/**
	 * show  orders
	 */
	public function orders()
	{
			
	}
}


