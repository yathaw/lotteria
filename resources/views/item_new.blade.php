@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Add New Item </h1>
			</div>

			<div class="col-12">
				<a href="{{ asset('item') }}" class="btn btn-outline-primary float-right"> 
					<i class="fas fa-backward pr-2"></i>
					Go Back
				</a>
			</div>

		</div>

		<div class="row mt-5">
			<div class="col align-self-center">
				<form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf

					<div class="form-group row">
						<label for="image" class="col-sm-2 col-form-label"> Image </label>
					    <div class="col-sm-10">
					    	<input type="file"  id="image" name="image">
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">

					    	<p style="color: red;"> {{$errors->first('name') }} </p>
					    </div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label"> Price </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ old('price') }}">

					    	<p style="color: red;"> {{$errors->first('price') }} </p>
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Category </label>
					    <div class="col-sm-10">
					    	<select class="form-control" name="category">
					    		@foreach($categories as $category)
									<option value="{{ $category->id }}"> {{ $category->name }} </option>
					    		@endforeach
					    	</select>
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Description </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" name="description"> {{ old('description') }}</textarea>

					    	<p style="color: red;"> {{$errors->first('description') }} </p>
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
