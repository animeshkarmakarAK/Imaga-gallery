
<!DOCTYPE html>
<html>
<head>
	<title>admin-HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


	<h1>UPLOAD IMAGE</h1>
	<div class="container">
		<div class="row" align="center">
			{{-- <form action="{{ url('/chitrokor') }}" enctype="mulipart/form-data" method = "POST">
							{{csrf_field()}}
				<input type="text" name="author">			
               <input type="file" name="image_file">
               <input type="submit" name="add" value="add">
			</form>
 --}}


   								<form action="{{ url('chitrokor') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="container" style="margin-top: 100px; text-align:center">
                                        	{{-- <div class="row" align="center" style="margin-top: 100px;"> --}}

                                        	<div class="form-group row">
                                            <label for="author_name" class="col-md-4 col-form-label text-md-right">Enter author name </label>
                                            <div class="col-md-6">
                                                <input id="author_name" type="text" class="form-control" name="author_name">
                                
                                            </div>
                                        </div>



										<div class="form-group row">
											<label for="photo_name" class="col-md-4 col-form-label text-md-right">photo name :  </label>
											<div class="col-md-6">
												<input id="photo_name" type="text" class="form-control" name="photo_name">
											</div>
										</div>



										<div class="form-group row">
											<label for="photo_description" class="col-md-6 col-form-label text-md-right">short description :</label>
											<div class="col-md-8">
												<textarea id="description" class="form-control" name="description">
													
												</textarea>
											</div>
										</div


                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-6 col-form-label text-md-right">Uploading  Image</label>
                                            <div class="col-md-10">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Upload Image</button>
                                            </div>
                                        </div>
                                        		
                                        	</div>
                                        </div>

                                    </form>
     </div>
</div>
</body>
</html>
