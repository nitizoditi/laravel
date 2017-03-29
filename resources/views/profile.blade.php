@extends('layouts.layout')

@section('title')
Profile
@endsection

@section('content')
<div class="page-content">
	<div class="page-header">
	<h1>
	Profile
	<small>
	<i class="ace-icon fa fa-angle-double-right"></i>
	Profile Setting
	</small>
	</h1>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<form action="" method="post" class="form-horizontal" >
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Name : </label>
					<div class="col-sm-9">
					<input type="text" name="username" id="username" value="{{ $result->username }}" class="col-xs-10 col-sm-5" placeholder="Username">						
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">First Name : </label>
					<div class="col-sm-9">
					<input type="text" name="fname" id="fname" value="{{ $result->fname }}" class="col-xs-10 col-sm-5" placeholder="First Name">						
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Last Name : </label>
					<div class="col-sm-9">
						<input type="text" name="lname" id="lname" value="{{ $result->lname }}" class="col-xs-10 col-sm-5" placeholder="Last Name">	
					</div>
				</div>
				
				<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email : </label>
						<div class="col-sm-9">
							<input type="email" name="email" disabled id="email" value="{{ $result->email }}" class="col-xs-10 col-sm-5" placeholder="Email">						
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone Number : </label>
					<div class="col-sm-9">
						<input type="text" name="phoneno"  id="phone" value="{{ $result->phoneno }}" class="col-xs-10 col-sm-5" placeholder="Mobile">							
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address : </label>
					<div class="col-sm-9">
					<input type="text" name="address"  id="address" value="{{ $result->address }}" class="col-xs-10 col-sm-5" placeholder="Address">	
						
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> City : </label>
					<div class="col-sm-9">
						<input type="text" name="city"  id="city" value="{{ $result->city }}" class="col-xs-10 col-sm-5" placeholder="City">					
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Postal Code : </label>
					<div class="col-sm-9">
						<input type="text" name="postalcode"  id="postalcode" value="{{ $result->postalcode }}" class="col-xs-10 col-sm-5" placeholder="Postal Code">						
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Country : </label>
					<div class="col-sm-9">
						<input type="text" name="country"  id="country" value="{{ $result->country }}" class="col-xs-10 col-sm-5" placeholder="Country">						
					</div>
				</div>
				<div class="form-group">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit"  class="btn btn-success">Submit</button>
					<a href="javascript:history.back()" class="btn btn-danger">Cancel</a>

				</div>
				</div>
			</form>
		</div>
	</div>
</div>
		<script type="text/javascript">
			jQuery(function(){ //short for $(document).ready(function(){
	

				$("#fname").validate({
                     expression: "if (VAL) return true; else return false;",
                    message: "Please enter first name"
                });$("#lname").validate({
                     expression: "if (VAL) return true; else return false;",
                    message: "Please enter last name"
                });$("#username").validate({
                     expression: "if (VAL) return true; else return false;",
                    message: "Please enter username"
                });$("#email").validate({
                     expression: "if (VAL) return true; else return false;",
                    message: "Please enter email"
                });$("#phone").validate({
                     expression: "if (VAL) return true; else return false;",
                    message: "Please enter phone"
                }); 
			});
			</script>




@endsection