@extends('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Today Sale List </div>

                <div class="card-body">

                	<table class="table">
                		<thead>
                			<tr>
                				<th> # </th>
                				<th> Name </th>
                				<th> Qty </th>
                				<th> Price </th>
                			</tr>
                		</thead>
                		<tbody>
                			@php 
                				$i=0; $subtotal=0; $total =0; $totalqty = 0;
                			@endphp
                			@foreach($orders as $order)
							
							@php 
								$i++; 
								$item_name = $order->item_name;
								$price = $order->item_price; 
								$qty = $order->qty;

								$totalqty += ++$qty;
								$subtotal = $price * $qty;

								$total += $subtotal;

							@endphp
								<tr>
									<td> {{ $i }}  </td>
									<td> {{ $item_name }} </td>
									<td> {{ $qty }} </td>
									<td> {{ $price }} </td>

								</tr>

                    		@endforeach

                    		<tfoot>
                    			<tr>
                    				<td colspan="2"> Total </td>
                    				<td> {{ $totalqty }} </td>
                    				<td> {{ $total }} </td>
                    			</tr>
                    		</tfoot>

                		</tbody>
                	</table>
                    
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
