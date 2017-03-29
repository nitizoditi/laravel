@extends('layouts.layout')

@section('title')
Dashboard
@endsection

@section('content')


<!-- #section:basics/content.breadcrumbs -->
<div class="breadcrumbs" id="breadcrumbs">
	<script type="text/javascript">
	try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>

	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
			<li class="active">Dashboard</li>
	</ul><!-- /.breadcrumb -->

</div>
<style>
.small-box {
    border-radius: 2px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    display: block;
    margin-bottom: 20px;
    position: relative;
}
.small-box .icon {
    color: rgba(0, 0, 0, 0.15);
    font-size: 90px;
    position: absolute;
    right: 10px;
    top: -10px;
    transition: all 0.3s linear 0s;
    z-index: 0;
}
.small-box > .small-box-footer {
    background: rgba(0, 0, 0, 0.1) none repeat scroll 0 0;
    color: rgba(255, 255, 255, 0.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}
</style>
<div class="page-content">
<div class="page-header">
	<h1>
		Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			overview &amp; stats
		</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	<div class="col-xs-12">
	<div class="alert alert-block alert-success">
		<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
		</button>
		<i class="ace-icon fa fa-check green"></i>

		Welcome to
		<strong class="green">
		SMS Dashboard	
		</strong>
		
	</div>
	 <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua" style="background-color: #AEC95B !important;color:#fff;">
                <div class="inner" style="padding:10px;">
                  <h3>.</h3>
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green" style="background-color: #8BC1E4 !important;color:#fff;">
                <div class="inner" style="padding:10px;">
                  <h3>.</h3>
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow" style="background-color: #F79263 !important;color:#fff;">
                <div class="inner" style="padding:10px;">
                  <h3>.</h3>
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red" style="background-color: #CC5D5E !important;color:#fff;">
                <div class="inner" style="padding:10px;">
                  <h3>.</h3>
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase "></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

	</div>
</div>
</div>
@endsection

