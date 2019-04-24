@extends('layout.app');

@section('body-content')


@if (session('MailSuccess'))
    <div class="alert alert-success">
        {{ session('MailSuccess') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="contact " style="margin-left: 50px;">
	<h1>Contact us</h1>
<form action="contact" method = "POST" enctype="multipart/form-data" autocomplete="on">
	@csrf
			<div class="form-group col-5">
				<label for = "name">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter your Name" required="true">
			</div>

			<div class="form-group col-5">
				<label for = "email">E-mail</label>
				<input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required="true" >
			</div>

			<div class="form-group col-5">
				<label for = "message">Message</label>
				<textarea class="form-control" name = "message" rows="3" placeholder="Type Message" >{{old('message')}}</textarea>
			</div>


		 	<button type="submit" class="btn btn-primary">Send Message</button>


</form> 
</div>

@endsection