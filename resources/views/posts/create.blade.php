@extends('layouts.new_master')

@section('content')
@include('partials/mobile_search')
	<div style="height: 0px"></div>
	<div class="container">
	<div style="height: 0px"></div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
	<section class="container-fluid">
    <!--LOOP post STARTS-->
        <div class="container-fluid all_innovations" style="padding-left: 30px">
            <h3 class="text-center">Create New Post</h3>        
            <form action="/admin/posts" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="post_title" class="control-label">Title</label>
                        <div class="col-sm-12 col-sm-offset-0">
                            <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Post Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body" class="control-label">Post Body</label>
                        <div class="col-sm-12 col-sm-offset-0">
                            <textarea name="body" id="body" class="form-control" rows="5" style="resize:none;" placeholder="Body of Post"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 col-sm-offset-0">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
            </form>
            
        </div>
        <!--LOOP post ENDS-->
     </section>
	</div>
	@include('partials/sidebar')
	</div>

@endsection
