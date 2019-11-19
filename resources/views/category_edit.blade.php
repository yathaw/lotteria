@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Update Existing Categroy </h1>
			</div>

			<div class="col-12">
				<a href="{{ asset('category') }}" class="btn btn-outline-primary float-right"> 
					<i class="fas fa-backward pr-2"></i>
					Go Back
				</a>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="{{route('category.update',  $category->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')


					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $category->name }}">

					    	<p style="color: red;"> {{$errors->first('name') }} </p>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-10">
					   		<button type="submit" class="btn btn-primary">
					   			<i class="fa fa-upload"></i> Update
					   		</button>
					    </div>
					</div>


				</form>
			</div>
		</div>
	</div>


@endsection
