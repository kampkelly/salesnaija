@extends('layouts.new_master')

@section('content')
<style type="text/css">
    #bk_second {
      /*  background-image: -webkit-linear-gradient(rgba(16, 52, 53, 0.592156862745098), rgba(0, 0, 0, 0.6980392156862745)), url("/homepage/new/business.jpg"); */
        background-image: -webkit-linear-gradient(left, rgba(23, 22, 22, 0.58), rgba(23, 22, 22, 0.58)), url("/homepage/new/business.jpg");
        background-position: center;
        background-size: cover;
    }
    input {
        color: white;
        background-color: #F8F8F8;
    }
    .square-thumb {
            width: 200px;
            height: 600px;
        }
</style>
<div class="new_cover" style="margin-top: 10px;">
    <div style="height: 10px" class="search_top"></div>
    <div style="margin-top: -10px" class="search_desktop"></div>
    <div class="container firstsection" style="background-color: #f5fafd; height: 86vh;">
    <h3 class="text-center" style="color: #DF8109; text-shadow: 0.3px 0.3px #DF8109;">Find a Product, contact Seller, Buy! It's that easy.</h3>
    <h4 class="text-center">Everything IT- Computers, Phones, Software, Accessories ...</h4>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12">
                        <h4 class="text-center intrtext1" style="color: #236d9d; text-shadow: 0.2px 0.2px #236d9d;">Our Categories</h4>
                        <ul class="list-unstyled tet-center intrext1">
                        @foreach($categories as $category)
                            <li><h5><a href="/category/{{$category->id}}"> {{$category->name}}</a></h5></li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12">
                        <h4 class="text-center intrtext1" style="color: #236d9d;">Buy Cryptocurrencies</h4>
                        <ul class="list-unstyled text-cnter intrtxt1">
                            <li class=""><h5><a href="/cryptocurrencies">Bitcoins</a></h5></li>
                            <li class=""><h5><a href="/cryptocurrencies">Perfect Money</a></h5></li>                
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
            @if(Auth::check())

            @else
            <div class="text-center">
                <h5 class="text-capitalize"><b>Want to sell?</b> Start Now...</h5>
                <form action="/toregister" method="post" class="form-inline first-form" style="paddng-left: 100px;" role="form" files="true" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="product_title" id="product_title" class="form-control" required="required" placeholder="Product Title" required="true">
                    <input type="number" name="price" id="price" class="form-control" required="required" placeholder="Price" required="true">
                    <input type="submit" name="submit" id="submit" class="form-control btn btn-sm btn-warning" value="Continue">
                </form>
            </div>
            @endif
                 <!--carousel-->
                 <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="homepage/new/3.jpg" style="filter: blur(0px) brightness(0.8) grayscale(0%);">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3>Be Satisfied With What You Get!</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="homepage/new/2remod.jpg" class="img-responsive" style="filter: blur(0px) brightness(0.8) grayscale(10%);">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3>Everything Tech Related.</h3>
                                    <p></p>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Products</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="homepage/new/1.jpg" style="filter: blur(0px) brightness(0.8) grayscale(20%);">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h2 style=" ">Buy New or Used Items</h2>
                                    <p></p>
                                    <p><a class="btn btn-lg btn-warning" href="#" role="button">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                 <!--carousel-->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 top_selling">
                <h4 class="text-center" style="color: #236d9d;">Top Selling Products</h4>
                @foreach($prods as $prod)
                    <div href="#" style="position: relative; padding-left: 50px;">
                        <a href="#">
                        <h5 style="position: absolute; padding: 0px 10px 0px 10px; top: 20%; z-index: 1; color: white;">Microsoft Surface Pro Laptop N350,000</h5>
                        <img src="homepage/new/1.jpg" class="img-responsive img-rounded" style="height: 120px; width: 100%; filter: blur(0px) brightness(0.8) grayscale(20%);">
                        </a>
                    </div>
                    <div style="height: 20px;"></div>
                @endforeach
            </div>
        </div>
    </div>
    <div style="height: 50px;"></div>

    <div style="background-color: #236d9d; height: 40vh; padding-top: 30px;" class="second_section">
        <h3 class="text-center" style="color: white;">SalesNaija - linking you to all your IT gadgets with ease</h3>
        <h4 class="text-center" style="color: white;">Search for a product in any location in Nigeria, contact seller, pick up the product.</h4>
        <div class="text-center">
            <a href="/products" class="btn btn-warning btn-lg">Browse Products</a>
        </div>
    </div>

   
    <!--products section-->
    <?php $ka=['game','boy','boy','boy','boy','boy','boy','boy','boy','boy','boy','boy',]; ?>
    <div style="height: 45px;"></div>
    <section class="row container-fluid third_section">
        <h3 class="text-center">Latest Products</h3>
        @foreach($products as $product)
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 kkks" style="padding: 0px 30px 0px 30px;" >
                <div style="background-color: #FAFAFA;">
                    <a href="/product/{{$product->slug}}">
                            <h5 class="text-center">{{str_limit($product->title, 20)}}</h5>
                            <h5><b>N{{$product->price}}</b> {{$product->condition}}</h5>
                            <img src="{{ asset('uploads/'.$product->image) }}" class="img-responsive img-rounded" style="posiion: absolute; mx-width: 100%;max-hight: 100%;op: 40%;
                  lft: 0%;">
                    </a>
                </div>
                    <div style="height: 15px;"></div>
            </div>
        @endforeach
    </section>
    <section class="bitcoin_section container">
    <h3 class="text-center">Buy Cryptocurrencies</h3>
    <ul class="list-group">
    @foreach($cryptocurrencies as $cryptocurrency)
        <li class="list-group-item">{{$cryptocurrency->user->name}} is selling at <span style="color: #DF8109;">N{{$cryptocurrency->price}}/{{$cryptocurrency->currency}}</span></li>
    @endforeach
    </ul>
    </section>


     <section style="height: 100vh; background-color: white;" class="fourth_section">
        <div class="container" style="height: 32vh;">
            <h3 class="text-center">Categories</h3>
            <div class="row">
            @foreach($categories as $category)
            @if($loop->iteration <= 3)
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 kkks">        
                     <div style="position: relative; padding-eft: 50px;">
                        <a href="/category/{{$category->id}}">
                            <h4 style="position: absolute; pading: 0px 10px 0px 10px;">{{$category->name}}</h4>
                            <img src="{{ asset('categories/'.$category->image) }}" class="img-responsive img-rounded" style="height: 200px; width: 100%; filter: blur(0px) brightness(0.8) grayscale(20%);">
                        </a>
                    </div>
                    <div style="height: 20px;"></div>
                </div>
            @endif
            @endforeach
            </div>
            <div class="row">
                  <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"> 

                </div>       
            @foreach($categories as $category)
            @if($loop->iteration == 4)
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-5 kkks">        
                     <div style="position: relative; padding-eft: 50px;">
                        <a href="/category/{{$category->id}}">
                            <h4 style="position: absolute; pading: 0px 10px 0px 10px;">{{$category->name}}</h4>
                            <img src="{{ asset('categories/'.$category->image) }}" class="img-responsive img-rounded" style="height: 200px; width: 100%; filter: blur(0px) brightness(0.8) grayscale(20%);">
                        </a>
                    </div>
                     <div style="height: 20px;"></div>
                </div>
            @endif
            @endforeach
                 <div class="col-xs-6 col-sm-3 col-md-3 col-lg-5 kkks">        
                     <div style="position: relative; padding-eft: 50px;">
                        <a href="/cryptocurrencies">
                            <h4 style="position: absolute; paddng: 0px 10px 0px 10px;">{{$category->name}}</h4>
                            <img src="homepage/new/3.jpg" class="img-responsive img-rounded" style="height: 200px; width: 100%; filter: blur(0px) brightness(0.8) grayscale(20%);">
                        </a>
                    </div>

                </div>
                  <div class="col-xs-4 col-sm-3 col-md-3 col-lg-1"> 

                </div>       
            </div>
        </div>
    </section>


    <section class="container fifth_section" style="background:linear-gradient(#f8d8ac, #efa63e); height: 54vh;">
         <form action="/newregister" method="POST" class="form-horizontal first-form" role="form" files="true" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h4 class="text-ceter" style="text-decoration: underline;">Contact Us:</h4>
                <div class="form-group">
                    <label for="contact_name" class="col-xs-3 col-sm-4 col-md-4 col-lg-2 control-label">Name <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="contact_name" id="contact_name" class="form-control" required="required" placeholder="Full Name" required="true" minlength="4" style="background-color: #f2f2f2;">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="contact_email" class="col-xs-3 col-sm-4 col-md-4 col-lg-2 control-label">Email <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                        <input type="text" name="contact_email" id="contact_email" class="form-control" required="required" placeholder="Email Address" required="true" style="background-color: #f2f2f2;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact_msg" class="col-xs-3 col-sm-4 col-md-4 col-lg-2 control-label">Message <span class="asterisks">*</span></label>
                    <div class="col-xs-8 col-sm-5 col-md-4 col-lg-4">
                    <textarea class="form-control" rows="5" placeholder="Type Message" name="contact_msg"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-8 col-md-7 col-lg-4 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-block btn-sm">
                            Leave a Message
                        </button>
                    </div>
                </div>
        </form>
    </section>
 </div>   
    <!--products section-->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
//    jQuery('.nailthumb-container').nailthumb();
    var imgHeight = document.getElementById('firstimgheight').offsetHeight;
    document.getElementById("secondimgheight").innerHTML = imgHeight;
   // var ig = '10px';
   // $('#secondimgheight').css("height", imgHeight);
});

</script>