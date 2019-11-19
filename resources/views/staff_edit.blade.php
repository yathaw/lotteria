@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Add New Staff </h1>
			</div>

			<div class="col-12">
				<a href="{{ asset('staff') }}" class="btn btn-outline-primary float-right"> 
					<i class="fas fa-backward pr-2"></i>
					Go Back
				</a>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="{{route('staff.update', $staff->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    
					
					<input type="hidden" name="oldphoto" value="{{ $staff->photo }}">

					<input type="hidden" name="oldpassword" value="{{ $staff->password }}">


					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">
					    	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  							<li class="nav-item">
	    							<a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Old Profile </a>
	  							</li>
	  
		  						<li class="nav-item">
		    						<a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New Profile</a>
		  						</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
									<img src="{{ $staff->photo }}" class="img-fluid" width="100px" height="90px">
								</div>
							
								<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
									<input type="file"  id="profile" name="profile">
								</div>
							</div>
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $staff->name }}" required autocomplete="name" placeholder="Enter Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					    	
					    </div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label"> Email </label>
					    <div class="col-sm-10">
					    	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $staff->email }}" required autocomplete="email" placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					    </div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label"> Password </label>
					    <div class="col-sm-10">
					    	<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">

					    	<p style="color: red;"> {{$errors->first('password') }} </p>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			<i class="fas fa-upload"></i>
					   			Update
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>


@endsection
