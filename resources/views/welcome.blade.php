@extends('layouts.master')

@section('content')
<section class="home_cover" ng-app="">
	<div style="heght: 60px"></div>
	<div class="top-layer">
		<div class="ism-slider" data-play_type="loop" data-radios="false" id="my-slider">
		  <ol>
		    <li>
		      <img src="ism/image/slides/pics/coffee.jpg" style="filter: blur(2px) brightness(0.5) grayscale(0%);">
		    </li>
		    <li>
		      <img src="ism/image/slides/pics/stones.jpg" style="filter: blur(0px) brightness(0.6) grayscale(0%);">
		    </li>
		    <li>
		      <img src="ism/image/slides/pics/gen3.jpg" style="filter: blur(0px) brightness(0.6) grayscale(0%);">
		    </li>
		  </ol>
		</div>
		<div class="ism_content row">
			<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
				<h3 class="text-center">The Home For All Your Gadgets, Equipments And Cryptocurrencies</h3>
			    <div style="heigt: 20px"></div>
				<p class="text-center text-justify">We serve as and provide all the neccaessary adgets and equipments you need to make your life easier.
 				In need of a phone, computer, softwares, bitcoins, simply search and find the nearest location for it.
				Welcome to Fonoshop - Quick access to your gadgets</p>
				<div class="text-center">
					<a href="/products" class="btn btn-sm btn-primary">Buy Items</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
				<div style="heght: 30px"></div>
				<!-- <h4 class="text-center" style="text-decoration: underline; margin-bottom: 0px;">Sell An Item <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> <label class="small" id="product">Product</label> <span class="small" id="bitcoin">Cryptocurrency</span></h4> -->
				<div class="row seller-div">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<h4 style="paddin-tp: 0px; paddng-bttom: 0px;">Sell <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></h4>
					</div>
	                <div class="col-xs-12 col-sm-9 col-md-5 col-lg-7 text-center" style="margin-top: 0px; margin-bottom: 5px; margin-left: 0px;">
						<a href="#product" class="small btn btn-xs btn-info" id="product" style="cursor: pointer;">Sell Product</a> <a href="#cryptocurrency" class="small btn btn-xs btn-warning" id="bitcoin" style="color: white; cursor: pointer;">Sell Cryptocurrency</a>
					</div>
				</div>
				
				@if(Auth::check())
					<p class="text-center">You are logged in!</p>
					<div class="text-center">
						<p>You can 
						<a href="/myprofile/update/{{Auth::user()->email}}" class="tn bn-sm bn-info" style="font-size: 1.2em; color: #2E6DA4;">Update your profile</a> or 
						view <a href="/myitems/{{Auth::user()->email}}" class="bn bn-sm bn-success" style="font-size: 1.2em; color: #4CAE4C;">your products</a></p>
					</div>
				@else
							
				
				<form action="/newregister" method="POST" class="form-horizontal first-form" role="form" files="true" enctype="multipart/form-data">
					{{ csrf_field() }}
						<h6 class="text-center">Product</h6>
							<div class="form-one">
								<div class="form-group">
					                <label for="email" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Email <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email Address">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-0 col-sm-1 col-md-1 col-lg-1">
									
									</div>
									<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
										<label>Condition</label>
									</div>
									<div class="col-xs-2 col-sm-3 col-md-1 col-lg-1 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="margin-top: -15px">
										<div class="radio">
											<label>
												<input type="radio" name="condition" id="input" value="new">
												New
											</label>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6" style="margin-top: -15px">
										<div class="radio">
											<label>
												<input type="radio" name="condition" id="input" value="used">
												Used
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
					                <label for="product_title" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Title <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="product_title" id="product_title" class="form-control" required="required" placeholder="Product Title">
									</div>
								</div>
								<div class="form-group">
					                <label for="price" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Price <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="price" id="price" class="form-control" required="required" placeholder="Price">
									</div>
								</div>
								<div class="form-group">
					                <label for="price" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Description <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
					                	<textarea class="form-control" rows="2" columns="1" name="description" placeholder="Enter Description"></textarea>
									</div>
								</div>
								<div class="form-group">
					                <label for="photo" class="col-xs-2 col-sm-3 col-md-3 col-lg-3 control-label">Photos <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
									<!--	<input type="file" name="photo" id="photo" placeholder="Enter Title" class="btn btn-success"> --><span class="asterisks small">(at least two photos)</span>
										<input type="file" name="photos[]" id="photo" class="btn btn-success" multiple />
									</div>
								</div>
							</div>
							<div class="form-group">
			                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-sm-offset-3">
			                        <a href="#" id="next_form" class="btn btn-primary btn-block btn-sm">Proceed <span class="glyphicon glyphicon-hand-right"></span></a>
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-sm-offset-3">
			                        <a href="#" id="previous_form" class="btn btn-info btn-block btn-xs" style="display: none;"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
			                    </div>
			                </div>
			                
			                <div class="form-two" style="display: none;">
								<div class="form-group">
					                <label for="name" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Name <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
					                <label for="password" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Pasword <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Enter Password">
									</div>
								</div>
								<div class="form-group">
					                <label for="phone" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Phone <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="Phone Number">
									</div>
								</div>
								<div class="form-group">
					                <label for="phone" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Category <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
			                            <select name="category_id" id="category_id" class="form-control">
			                                @foreach($categories as $category)
			                                    <option value="{{$category->id}}">{{$category->name}}</option>
			                                @endforeach
			                            </select>
			                        </div>
								</div>
								 <div class="form-group">
				                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-sm-offset-3">
				                        <button type="submit" class="btn btn-primary btn-block btn-sm">
				                            Submit
				                        </button>
				                    </div>
				                </div>
			                </div>
		                
		               
				</form>
						
					     <form action="/bitregister" method="POST" class="form-horizontal second-form" role="form" style="display: none;">
					     {{ csrf_field() }}
					     	<h6 class="text-center">Cryptocurrency</h6>
					     		<div class="form-group">
					                <label for="email" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Email <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email Address">
									</div>
								</div>
								<div class="form-group">
					                <label for="password" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Password <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Enter Password">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-5 col-sm-6 col-md-5 col-lg-4 col-md-offset-1 col-lg-offset-1 control-label">
										<div class="form-group">
							                <label for="currency" class="col-xs-5 col-sm-5 col-md-5 col-lg-6 control-label">Currency <span class="asterisks">*</span></label>
							                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-6 col-lg-offset-0">
					                            <select name="currency" id="currency" class="form-control">
					                                <option value="Bitcoin">Bitcoin</option>
					                                <option value="Perfect Money">Perfect Money</option>
					                            </select>
					                        </div>
										</div>
									</div>
									<div class="col-xs-5 col-sm-6 col-md-6 col-lg-4">
										<div class="form-group">
							                <label for="price" class="col-xs-3 col-sm-3 col-md-2 col-lg-3 control-label">Price <span class="asterisks">*</span></label>
							                <div class="col-xs-7 col-sm-9 col-md-6 col-lg-9">
												<input type="number" name="price" id="price" class="form-control" required="required" placeholder="Price/currency">
											</div>
										</div>
									</div>
								</div>	
								<div class="form-group">
					                <label for="name" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Name <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
					                <label for="phone" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label">Phone <span class="asterisks">*</span></label>
					                <div class="col-xs-8 col-sm-8 col-md-7 col-lg-6">
										<input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="Phone Number">
									</div>
								</div>
					     		<div class="form-group">
				                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-sm-offset-3">
				                        <button type="submit" class="btn btn-primary btn-block btn-sm">
				                            Submit
				                        </button>
				                    </div>
				                </div>
					     </form>	  
				@endif
				</div>
			</div>
	</div>
	<div class="row container-fluid show-container" style="diplay: none;">
		<h5 class="text-center" style="margin-top: 0px;">Categories</h5>
		<a href="/category/1" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 showcase">
			<img src=" {{ asset('pics/pic2.png') }}" class="img-responsive img-rounded">
			<h3>Computer/Phones</h3>
		</a>		
		<a href="/category/2" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 showcase">
			<img src=" {{ asset('pics/sof2.jpg') }} " class="img-responsive img-rounded">
			<h3>IT Softwares</h3>
		</a>		
		<a href="/category/3" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 showcase">
			<img src=" {{ asset('pics/gen2.jpg') }} " class="img-responsive img-rounded">
			<h3>General Stuffs</h3>
		</a>		
		<a href="/cryptocurrencies" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 showcase">
			<img src=" {{ asset('pics/buy 6.jpg') }} " class="img-responsive img-rounded">
			<h3>Buy Bitcoins</h3>
		</a>
	</div>

</section>
<div style="height: 3em;"></div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#next_form").click(function() {	
		$(".form-one").slideUp();
		$("#next_form").hide();
		$("#previous_form").show();
		$(".form-two").slideDown();
	});

	$("#previous_form").click(function() {	
		$(".form-two").slideUp();
		$("#previous_form").hide();
		$("#next_form").show();
		$(".form-one").slideDown();
	});

	$("#product").click(function() {	
	//	$(".form-two").slideUp();
		$(".first-form").show();
		$(".second-form").hide();
		//$(".form-one").slideDown();
	});
	$("#bitcoin").click(function() {	
	//	$(".form-two").slideUp();
		$(".first-form").hide();
		$(".second-form").show();
		//$(".form-one").slideDown();
	});
	
});
</script>
