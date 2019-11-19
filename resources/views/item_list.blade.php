@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Item List </h1>
			</div>

			<div class="col-12">
				<a href="{{ route('item.create') }}" class="btn btn-outline-primary float-right"> 
					<i class="fas fa-plus pr-2"></i>
					Add New
				</a>
			</div>

			@if(session("success_flashmsg") != NULL )
		        <div class="col-md-12 success_msg mt-5">
		            <div class="alert alert-success alert-dismissible fade show" role="alert">
		                <strong> Success !</strong> {{ session("success_flashmsg") }}

		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <i class="ik ik-x"></i>
		                </button>
		            </div>
		        </div>
	        @endif

		</div>

		<div class="row mt-5">

			@foreach($items as $item)

			@php
				$id = $item->id;
				$name = $item->name;
				$price = $item->price;
				$photo = $item->photo;
				$description = $item->description;
				$category_id = $item->category_id;

				$cid = $item->category->id;
				$cname = $item->category->name;
			@endphp
			
			<div class="col-md-4">
          
          		<div class="card mb-4 shadow-sm">
            		<img src="{{ $photo }}" class="card-img-top img-fluid" style="height: 170px;  object-fit: cover;">
            
            		<div class="card-body">
            			<h5> {{ $name }} </h5>
              			{{-- <p class="card-text">{{ $description }}</p> --}}
              
              			<div class="d-flex justify-content-between align-items-center">
                			<div class="btn-group">
								<a href="{{route('item.edit',$id)}}" class="btn btn-outline-secondary btn-sm"> 
									<i class="fas fa-edit"></i>
									Edit
								</a>

								<form method="post" action="{{route('item.destroy',$id)}}">
					                @csrf
					                @method('DELETE')
					                <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are You Sure')">
									<i class="fas fa-trash"></i>
					                	Delete
					                </button>
					            </form>

                  				{{-- <button type="button" class="btn btn-sm btn-outline-secondary">
                  					Edit
                  				</button>
                  				<button type="button" class="btn btn-sm btn-outline-secondary">
                  					Delete
                  				</button> --}}
                			</div>
                			<small class="text-muted"> {{ $cname }} </small>
              			</div>
            		</div>
          		</div>
        	</div>

        	@endforeach
			
			<div class="col-12">
	        	<div class="d-flex justify-content-center">
	                    {{ $items->links() }}             
	            </div>
	        </div>

		</div>
	</div>


@endsection
