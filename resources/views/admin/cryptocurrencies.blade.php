@extends('layouts.new_master')

@section('content')
	<div style="height: 20px"></div>
	<div class="container">
	<div style="height: 10px"></div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
	<section class="container-fluid">
		<h4 class="text-center">Manage Your Cryptocurrencies</h4>
		<a href="/cryptocurrency/new" id="show">Sell Cryptocurrency</a>
		<hr>
			<div class="container-fluid all_innovations" style="padding-left: 30px">
	            <div class="table-responsive">
	            	<table class="table table-hover">
	            		<thead>
	            			<tr>
	            				<th class="td0_5">S/N</th>
	            				<th class="td1">Title</th>
	            				<th>Admin</th>
	            				<th>Edit</th>
	            				<th>Delete</th>
	            			</tr>
	            		</thead>
	            		<tbody>
	            		@foreach($cryptocurrencies as $cryptocurrency)  
	            			<tr>
	            				<td class="td0_5">{{$loop->iteration}}</td>
	            				<td class="td1 small">{{$cryptocurrency->user->name}} is selling at <span style="color: #DF8109;">N{{$cryptocurrency->price}}/{{$cryptocurrency->currency}}</td>
	            				<td> </td>
	            				<td><a href="/admin/post/edit/{{$cryptocurrency->slug}}" class="btn btn-info btn-xs">Edit</a></td>
	            			<!--	<td><a href="/admin/post/delete/{{$cryptocurrency->slug}}" class="btn btn-danger btn-xs">Delete</a></td> -->
	            				<td>
	            					<form action="/cryptocurrency/delete/{{$cryptocurrency->id}}" method="post" value="DELETE" class="form-inline first-form" style="paddng-left: 100px;" role="form" files="true" enctype="multipart/form-data">
						                {{ csrf_field() }}
						                <input type="text" name="cryptocurrency_id" value="{{$cryptocurrency->id}}" hidden="true">
						                <input type="submit" name="submit" id="submit" class="form-control btn btn-xs btn-danger" value="Delete Cryptocurrency">
						            </form>
	            				</td>
	            			</tr>
	            		 @endforeach
	            		</tbody>
	            	</table>
	            </div>
        	</div>
	</section>
	</div>
	@include('partials/sidebar')
	</div>
	
	
	
@endsection
