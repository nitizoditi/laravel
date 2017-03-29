@extends('layouts.master')

@section('title')
payment
@endsection

@section('content')
<div class="main-container">
    <div class="main-content">
         <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                         <h1>
                             <i class="ace-icon fa fa-leaf green"></i>
                             <span class="red">SMS</span>
                             <span class="white" id="id-text2">Application</span>
                         </h1>
                         <h4 class="blue" id="id-company-text">&copy; Customers Verification</h4>
                    </div>
                    <div class="space-6"></div>
                     <div class="position-relative">
                         <div id="login-box" class="login-box visible widget-box no-border">
                             <div class="widget-body">
                                 <div class="widget-main">
                                     <h4 class="header blue lighter bigger">
                                         <i class="ace-icon fa fa-cc-stripe green"></i>
                                         Payment
                                     </h4>
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
                                     <form method="post" action="">
                                         <fieldset>
                                            <label class="block clearfix">
                                                <p><b>Name: </b>{{$result->fname}} {{$result->lname}} </p>
                                                <p><b>Price:</b></p>
                                            </label>                                          
                                            <input type="hidden" name="_token" value="{{Session::token() }}" >

                                             <div class="space"></div>

                                             <div class="clearfix">                        

                                                 <button type="button" class="width-35 pull-right btn btn-sm btn-primary">
                                                     <i class="ace-icon fa fa-key"></i>
                                                     <span class="bigger-110">verify</span>
                                                 </button>
                                             </div>

                                             <div class="space-4"></div>
                                         </fieldset>
                                     </form>
                                     <div class="space-6"></div>
                                 </div><!-- /.widget-main -->                                
                             </div><!-- /.widget-body -->
                         </div><!-- /.login-box -->                   
                     </div><!-- /.position-relative -->
                 </div>
             </div><!-- /.col -->
        </div><!-- /.row -->
     </div><!-- /.main-content -->
</div><!-- /.main-container -->
@endsection