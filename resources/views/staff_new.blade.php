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
				<form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf


					<div class="form-group row">
						<label for="profile" class="col-sm-2 col-form-label"> Profile </label>
					    <div class="col-sm-10">
					    	<input type="file"  id="profile" name="profile">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name">

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
					    	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			<i class="fas fa-save"></i>
					   			SAVE
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>


@endsection
