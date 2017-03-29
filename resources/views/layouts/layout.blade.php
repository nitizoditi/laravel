<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title')</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="public/assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="public/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="public/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="public/assets/css/ace-rtl.min.css" />
		<script src="public/assets/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/jquery.validate.js"></script>
		<script src="public/js/jquery-ui.js"></script>
		<style>
			.ValidationErrors{
				color:red;
			}
		</style>
		<script src="public/assets/js/ace-extra.min.js"></script>
		
	</head>

	<body class="no-skin">
    
            
		@include('includes.header')
	
		<div class="main-container" id="main-container">
                   @include('includes.sidebar')
                    <div class="main-content">
                        <div class="main-content-inner">
                         <div class="space-6"></div>
	                         @if(count($errors) >0)
	                        <div class="alert alert-danger">
	                             @foreach($errors->all() as $error)
	                                <li style="list-style:none;">{{ $error }}</li>
	                             @endforeach
	                        </div>
	                         @endif
	                            <div class="flash-message">
	                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
	                                  @if(Session::has('alert-' . $msg))
	                                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
	                                  @endif
	                                @endforeach
	                            </div>
	                        <div class="space-6"></div> 

                            @yield('content')
                            
                        </div>
                    </div>

                    @include('includes.footer')
                </div>
            
            
            
            
            


		
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="public/assets/js/bootstrap.min.js"></script>
		<script src="public/assets/js/jquery-ui.custom.min.js"></script>
		<script src="public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="public/assets/js/jquery.easypiechart.min.js"></script>
		<script src="public/assets/js/jquery.sparkline.index.min.js"></script>
		<script src="public/assets/js/jquery.flot.min.js"></script>
		<script src="public/assets/js/jquery.flot.pie.min.js"></script>
		<script src="public/assets/js/jquery.flot.resize.min.js"></script>
		<script src="public/assets/js/ace-elements.min.js"></script>
		<script src="public/assets/js/ace.min.js"></script>

	</body>
</html>
