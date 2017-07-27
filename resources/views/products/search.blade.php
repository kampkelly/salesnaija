@extends('layouts.master')

@section('content')
	<div style="height: 60px"></div>
	<h3 class="text-center">{{$query}}</h3>
	<div style="height: 40px"></div>
	<section class="container">
	<style type="text/css">
		#hov {
		    position: relative;
		    display: inline-block;
		}
		#hov .shw {
		    visibility: hidden; 
		/* display: none; */
		    
		    color: white;
		    text-align: center;
		    border-radius: 6px;
		    padding: 5px;
		    background-color: #286090;

		    /* Position the tooltip */
		    position: absolute;
		    left: 0px;
		    z-index: 1;
		}
		.pael {
			border-radius: 7px;
			background-color: #fafafa;
		}
		.pael:hover {
		  /*  visibility: visible; */
		  cursor: pointer;
		/*  background-color: #CCCCCC; */
		  transition: 1s;
		}
	</style>
	<?php $tuples=['game','books','ps4','xbox','fifa17','nintendo','sega','consoles','pes','god of war', 'mesut ozil', 'sanchez', 'lacazette', 'ramsey', 'walcott', 'cazorla', 'kolscieny,', 'gibbs', 'monreal', 'wilshere', 'oxlade', 'coquelin', 'mustafi']  ?>
		<div class="row">
		@if(isset($details))
		<h4>Yourr search for {{$query}}:</h4>
			@foreach($details as $product)
			@if( $loop->iteration == 7)
	           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	                <div class="panel panel-primary">
	                	<div class="panel-heading">
	                		<h3 class="panel-title">Buy or Sell Bitcoins</h3>
	                		
	                	</div>
	                	<div class="panel-body row">
	                		<div class="col-xs-7 col-sm-4 col-md-4 col-lg-4">
	                			<img src=" {{ asset('homepage/bitcoin.jpg') }} " class="img-responsive img-rounded" style="heght: 60px;">
	                		</div>
	                		<div class="col-xs-7 col-sm-4 col-md-4 col-lg-8">
	                		<p class="small">We offer the sale of any amount of bitcoins, pay in naira and get bitcoins, dollars, pounds, etc. We also serve as outlets for those who wants to sell.</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	        @else
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="hov" class="hv">
					
					<div class="pael container-fluid row" style="width: 100%;">
						<div class="col-xs-5 col-sm-4 col-md-4 col-lg-6">
							<img src="{{ asset('uploads/'.$product->image) }}" class="img-responsive">
							<span>Seller: {{$product->user->name}}</span>
						</div>
						<div class="col-xs-7 col-sm-4 col-md-4 col-lg-6">
							<h5>{{$product->condition}}</h5>
							<h6>{{$product->title}}</h6>
							<em>{{$product->price}}</em>
							<p class="small">{{str_limit($product->description, 15)}}</p>
							<a href="#">See more</a>
						</div>
					</div>
						<div class="shw" style="width: 92%;">
							<p class="small">A brand new macbook pro retina display. 8gb ram, core15, 120gb ssd, battery lasts up to 10hours.
							Accessories included are original charger, laptop casing, bag. Bonus: 4gb usb drive. 
							<div class="more" style="position: relative;">
								<div class="photos" style="display: none; position: absolute; z-index: 99; bottom: 0px;">
									<!--here-->
									<div id="carousel-id" class="carousel slide" data-ride="carousel" style="width: 40%;">
										<ol class="carousel-indicators">
											<li data-target="#carousel-id" data-slide-to="0" class=""></li>
											<li data-target="#carousel-id" data-slide-to="1" class=""></li>
											<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
										</ol>
										<div class="carousel-inner">
											
											@foreach($product->productsphoto as $photo)
											@if($loop->iteration == 1)
												<div class="item active">
													<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" class="img" alt="Third slide" src="{{ asset('uploads/'.$photo->image) }}" style="height: 300px" width="100%">
													<div class="container">
														<div class="carousel-caption">
															
															<p><a class="btn btn-lg btn-primary btn-xs" href="#" role="button">Close</a></p>
														</div>
													</div>
												</div>
											@else
												<div class="item">
													<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" class="img" alt="Third slide" src="{{ asset('uploads/'.$photo->image) }}" style="height: 300px" width="100%">
													<div class="container">
														<div class="carousel-caption">
															
															<p><a class="btn btn-lg btn-primary btn-xs" href="#" role="button">Browse gallery</a></p>
														</div>
													</div>
												</div>
											@endif
											@endforeach
										</div>
										<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
									<!--here-->
								</div>
								<a href="#" style="color: #DF8109;">See more photos</a>
							</div>
							</p>
							<span class="small">Seller's information:<br> Contact: {{$product->phone}}, Address: No.5 Gapiona Junction Centreal Road</span>
						</div>
						<div style="height: 50px"></div>
				</div>
			@endif	
				
			@endforeach	
		@endif
		@if(isset($message))
			<h4>{{$message}}</h4>
		@endif
		</div>
		
	
	</section>
	
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("section #hov").mouseover(function() {
	//	$(this).css('cursor', 'pointer');
		$(this).find(".shw").css({"visibility": "visible", "border": "1px solid #fafafa", "transition-delay": "0.5s"});
	//	$(this).find(".shw").slideDown(1000);
	}); 

	$("section #hov").mouseleave(function() {
		$(this).find(".shw").css({"visibility": "hidden", "border": "1px solid #fafafa"});
		//$(this).find(".shw").slideUp(1000);
	//	$(this).find(".shw").css({"background-color": "#286090", "border": "1px solid #fafafa"});
	}); 

	$("section #hov").mouseover(function() {
		var ths = this;
		$(".more").click(function() {
			$(this).find(".photos").show();
		});
	});

	$("section #hov").mouseover(function() {
		var ths = this;
		$(".carousel").mouseleave(function() {
			$(ths).find(".photos").hide();
		});
	});

});
</script>
