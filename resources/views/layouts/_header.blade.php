@php
	$user = \Auth::user();
	$cart =  \App\Cart::where('user_id',$user->id)
		->where('status','pending')
		->first();
@endphp

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{action('Admin\packageController@pricing')}}">Pricing</a></li>
        @if($cart)
			<li><a href="{{url('cart')}}">Cart</a></li>
        @endif
        <li><a href="/logout">LogOut</a></li>
      </ul>
    </div>
</nav>