@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Update Existing Item </h1>
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
				<form action="{{route('item.update', $item->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <input type="hidden" name="oldphoto" value="{{ $item->photo }}">


					<div class="form-group row">
						<label for="image" class="col-sm-2 col-form-label"> Image </label>
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
									<img src="{{ $item->photo }}" class="img-fluid" width="100px" height="90px">
								</div>
							
								<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
									<input type="file"  id="image" name="image">
								</div>
							</div>


					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Name </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $item->name }}">

					    	<p style="color: red;"> {{$errors->first('name') }} </p>
					    </div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label"> Price </label>
					    <div class="col-sm-10">
					    	<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ $item->price }}">

					    	<p style="color: red;"> {{$errors->first('price') }} </p>
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Category </label>
					    <div class="col-sm-10">
					    	<select class="form-control" name="category">
					    		@foreach($categories as $category)
									
									<option value="{{ $category->id }}"  @if($item->category_id == $category->id) {{'selected'}} @endif> {{ $category->name }} </option>


					    		@endforeach
					    	</select>
					    </div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> Description </label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" name="description"> {{ $item->description }}</textarea>

					    	<p style="color: red;"> {{$errors->first('description') }} </p>
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
