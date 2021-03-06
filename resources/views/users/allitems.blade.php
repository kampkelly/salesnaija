@extends('layouts.new_master')

@section('content')
	<div style="height: 30px"></div>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
	<h3 class="text-center">My Products</h3>
	<a href="#mycryptos" class="text-warning">Cryptocurrencies am selling</a>

	@if($countproducts >= 1)
	@foreach($products as $product)
	<div class="row" style="position: relative;">
		<div class="col-xs-12 col-sm-5 col-md-4">
			<h4 class="panel-titl"><a href="/product/{{$product->slug}}" style="color: grey;">{{$product->title}}</a></h4>
			<img src="{{ asset('uploads/cover/'.$product->image) }}" class="img-responsive img-thumbnail">
		</div>
		<div class="col-xs-12 col-sm-7 col-md-8 hide-smartphone hide-tablet" style="position: absolute; bottom: 0; right: 0;">
			Price: <span style="color: green;"> &#8358;{{$product->price}}</span>; <span style="color: green;">{{$product->condition}}</span> 
			<span>in {{$product->category->name}}</span> <br>
				<a href="/product/edit/{{$product->slug}}" class="btn btn-warning">Edit Product</a> <a href="/product/{{$product->slug}}" class="btn btn-info">View Product</a> <span class="badge">viewed {{$product->viewcounts}} times</span>
		</div>	
		<div class="col-xs-12 col-sm-7 col-md-8 hide-mini-laptop hide-desktop">
			Price: <span style="color: green;"> &#8358;{{$product->price}}</span>; <span style="color: green;">{{$product->condition}}</span> 
			<span>in {{$product->category->name}}</span> <br>
				<a href="/product/edit/{{$product->slug}}" class="btn btn-warning">Edit Product</a> <a href="/product/{{$product->slug}}" class="btn btn-info">View Product</a> <span class="badge">viewed {{$product->viewcounts}} times</span>
		</div>	
	</div>
	<hr>
	@endforeach
	@else
	<a href="/new/product">click here to sell</a>
		<h4>Hey {{Auth::user()->name}}, You are not selling any products at the moment,  </h4>
	@endif

	<h4 class="text-center" id="mycryptos">My Cryptocurrencies</h4>
	@foreach($cryptocurrencies as $cryptocurrency)
		<p class="small">Am selling {{$cryptocurrency->currency}}s at &#8358;{{$cryptocurrency->price}}/{{$cryptocurrency->currency}} <a href="/cryptocurrency/edit/{{$cryptocurrency->id}}">Edit</a> <a href="/mycryptocurrency/delete/{{$cryptocurrency->id}}">Delete</a></p>
	@endforeach
	

	</div>
	@include('partials/sidebar')
	</section>
	</div>
	
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">



</script>
