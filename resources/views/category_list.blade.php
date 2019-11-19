@extends('template')

@section('content')

	<div class="container" id="addStudentdiv">
		
		<div class="row mt-3">
			<div class="col-12 text-center">
				<h1 class="display-4"> Categroy List </h1>
			</div>

			<div class="col-12">
				<a href="{{ route('category.create') }}" class="btn btn-outline-primary float-right"> 
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

		<div class="mt-5 table-responsive">
			<table class="table table-bordered" id="example">
				<thead>
					<tr>
						<th scope="col"> # </th>
						<th scope="col"> Name </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					@php $i=0; @endphp
					@foreach($categories as $category)

						@php $i++; @endphp
						
						<tr>
							<td> {{ $i }} </td>
							<td> {{ $category->name }} </td>
							<td>
								<div class="row">
									<div class="col-6">
										<a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-warning"> 
											<i class="fas fa-edit"></i>
											Edit
										</a>
									</div>
									<div class="col-6">
										<form method="post" action="{{route('category.destroy',$category->id)}}">
							                @csrf
							                @method('DELETE')
							                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are You Sure')">
											<i class="fas fa-trash"></i>
							                	Delete
							                </button>
							            </form>
									</div>
								</div>
								

								

							</td>
						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>


@endsection
