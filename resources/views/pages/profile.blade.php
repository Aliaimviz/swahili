@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section id="welcome">
	<div class="welcome-text">
		<div class="container">
			<h1>Edit Your Profile</h1>
		</div>
	</div>
	<div class="form-content">
		<div class="container">
			<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left"></div> -->
			<div class="row">
				<div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6">
				@if (session('success'))
				    <div class="alert alert-success">
				        <strong>Success!</strong> {{ session('success') }}
				    </div>
				@elseif(session('alert'))
					<div class="alert alert-danger">
					  <strong>Alert!</strong> {{ session('alert') }}
					</div>
				@endif
				</div>
			<div class="offset-md-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
			
				 <div class="edit-profile-img">
					<div class="edit-profile-inner">
						<!-- <img src="img/customer.png">
						<p>edit</p> -->
						<div class="image-frame">
					<img src="{{ asset('public/img/verified-customer.png') }}">
					<img src="{{ asset('public/img/customer.png') }}">
					<p>Edit</p>
				</div>
					</div>
				</div> 
				
				<div class="form-fields edit-profile-fields">
				<form method="POST" action="{{ route('profile_update') }}">
                			{{ csrf_field() }}
					
					<label>First Name<input type="text" value="{{ $user->first_name }}" name="firstName"></label>
					@if ($errors->has('firstName'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('firstName') }}</strong>
	                    </span>
	                @endif
					<label>Last Name<input type="text" value="{{ $user->last_name }}" name="lastName"></label>
					@if ($errors->has('lastName'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('lastName') }}</strong>
	                    </span>
	                @endif
					<label>Email<input type="Email" value="{{ $user->email }}" name="email"></label>
					@if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
					<label>Language<select class="form-control" name="language">
                        @foreach($lang as $lan)
                            @if($lan->id == $user->language)
                            <option value="{{ $lan->id }}" selected="selected">{{ $lan->language }}</option>
                            @else
                            <option value="{{ $lan->id }}">{{ $lan->language }}</option>
                            @endif
                        @endforeach
                    </select></label>
						

						
					<label>Country<select class="form-control" name="country">
                        @foreach($coun as $co)
                            @if($co->id ==  $user->country)
                            <option value="{{ $co->id }}" selected="selected">{{ $co->country }}</option>
                            @else
                            <option value="{{ $co->id }}">{{ $co->country }}</option>
                            @endif
                        @endforeach
                    </select></label>
					<input type="Submit"  value="SAVE" class="savenaming">
						<a href="#" class="changepass"  data-toggle="modal" data-target="#changepass">CHANGE PASSWORD</a>
						
	            <!-- login-field -->
					</form>
					<div class="clearfix"></div>
					<form method="POST" action="{{ route('creditCard') }}">		
                		{{ csrf_field() }}
						<label>Billing Information:<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></label>
						<label>Credit Card No:<input type="text" value="@if($card){{ $card->card_num }}@endif" name="cardNumber"></label>
						@if ($errors->has('cardNumber'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('cardNumber') }}</strong>
		                    </span>
		                @endif
						<label>Payment Type <div class="img"><img src="{{ asset('public/img/payment-method.png') }}"></div></label>
						<label>Expiration Date<input type="text" placeholder="MM/YY" value="@if($card){{ $card->expiration }}@endif" name="expiry"></label>
						@if ($errors->has('expiry'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('expiry') }}</strong>
		                    </span>
		                @endif
						<label>Card CVC<input type="password" value="@if($card){{ $card->cvc }}@endif" name="cvc"></label>
						@if ($errors->has('cvc'))
		                    <span class="help-block">
		                        <strong>{{ $errors->first('cvc') }}</strong>
		                    </span>
		                @endif
						<input type="Submit"  value="SAVE">
					</form>
				</div>
			</div>
			</div>
			<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left"></div> -->
		</div>	
	</div>
</section>
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1>CHANGE PASSWORD</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="login-fileds">
              <form method="post" action="{{ route('changePassword') }}">
              	{{ csrf_field() }}
                <label style="padding-bottom: 0; margin-bottom: 0;">Old Password<input type="Password" name="current_password"></label>
                @if ($errors->has('current_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('current_password') }}</strong>
                    </span>
                @endif
				<label style="padding-bottom: 0; margin-bottom: 0;">New password<input  type="Password" name="password"></label>
				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
				<label style="padding-bottom: 0; margin-bottom: 0;">Conform password<input  type="Password" name="password_confirmation"></label>
                <input type="submit" value="SAVE" class="su">
              </form>
            </div>
      </div>
     </div>
  </div>
</div>
@endsection