@extends('template')

@section('content')

	<div class="container-fluid">
		
		<div class="row mt-5">
			<div class="col-6">
				

				<div id="accordion" class="accordion">
					<?php 
						foreach($categories as $category):

						$cid = $category->id;
						$cname = $category->name;

					?>
				        <div class="card mb-0">
				            <div class="card-header collapsed" data-toggle="collapse" href="#c_{{ $cid }}">
				                <a class="card-title">
				                    {{ $cname }}
				                </a>
				            </div>
				            <div id="c_{{ $cid }}" class="card-body collapse" data-parent="#accordion" >
				                
				                <div class="container">
				                	<div class="row">
										
										<?php 
											foreach($items as $item):

											$item_id = $item->id;
											$item_name = $item->name;
											$item_price = $item->price;
											$item_photo = $item->photo;
											$item_description = $item->description;
											$item_cid = $item->category_id;

											if ($item_cid == $cid):

										?>

				                		<div class="col-6">

				                			<div class="card my-3">
												
												<img src="<?= $item_photo ?>" class="card-img-top img-fluid" alt="..." style="height: 170px;  object-fit: cover;">
											
												<div class="card-body">
											    	<p class="card-text">
											    		<?= $item_name ?>
											    	</p>
											  	</div>
											  	<div class="card-footer">
											  		<a href="javascript:void(0)" class="btn btn-outline-danger btn-block addtocart" data-id="{{ $item_id }}" data-name="{{ $item_name }}" data-price="{{ $item_price }}" > 
											  			Order
											  		</a>
											  	</div>
											</div>
				                			
				                		</div>
										
										@endif
				                		@endforeach
				                	</div>
				                </div>

				            </div>
				        </div>

			    	@endforeach

			    </div>
				
			</div>
			<div class="col-6">
				<div class="table-responsive" id="shoppingcart_div">
					<table class="table">
						<thead class="bg-danger text-white">
						   	<tr>
						    	<th scope="col"> # </th>
						    	<th scope="col"> Products Name </th>
						    	<th scope="col"> Price </th>
						    	<th scope="col"> Qty </th>
						    	<th scope="col"> Amount </th>
						    	<th scope="col" style="width: 10px"> Remove </th>
						    </tr>
						  </thead>
						  <tbody id="shoppingcart_table"></tbody>

					</table>
				</div>
				
				<div id="checkout_div">
					<img src="{{ asset('lotteria_voucher.png') }}" class="img-fluid mx-auto d-block">
					
					<h4 style="letter-spacing: 12px"> Please call us for </h4>

					<h4 style="letter-spacing: 12px"> Delivery Service </h4>
					<h4 style="letter-spacing: 12px"> Yangon Delivery </h4>

					<h4 style="letter-spacing: 12px"> 09 96 8000 888 </h4>
					<h4 style="letter-spacing: 12px"> 09 96 8000 999 </h4>

					<div class="container-fluid">
						<div class="row">
							<div class="col-3">
								POS#{{ Auth::user()->id }}
							</div>
							<div class="col-3"></div>
							<div class="col-3">
								<span id="invoice_date"></span>
							</div>
							<div class="col-3">
								<span id="time"></span>
							</div>

						</div>
					</div>

					<div class="table-responsive mt-5">
						<table class="table">
							<thead>
							   	<tr>
							    	<th scope="col"> # </th>
							    	<th scope="col"> Products Name </th>
							    	<th scope="col"> Price </th>
							    	<th scope="col"> Qty </th>
							    	<th scope="col"> Amount </th>
							    </tr>
							  </thead>
							  <tbody id="checkout_table">
							  	
							  </tbody>

							  	<tr>
							  		<td colspan="5"> 0000{{ Auth::user()->id }}  :
							  			{{ Auth::user()->name }}

							  		</td>
							  	</tr>
							  	<tr>

							  		<td colspan="5"> ReceiptNr : 
							  			<span id="invoice_number"></span>
							  		</td>

							  	</tr>


						</table>
					</div>
				</div>

				<div id="print_div"></div>

			</div>
		</div>

	    
	</div>

	<script type="text/javascript">

		
		$("#shoppingcart_div").show();
		$("#checkout_div").hide();

		var total=0; var invoiceno; var changemoney=0; var paymoney=0;

		showtable();

	
		// Add Item To localStorage
		$('.addtocart').on('click', function()
		{
			var id = $(this).data('id');
			var name = $(this).data('name');
			var price = $(this).data('price');
			var qty = 1;

			// alert(id);


			var cart = localStorage.getItem('cart');

			if (!cart) 
			{
				var cart = '{"mycart":[]}';
			}

			cart = JSON.parse(cart);

			var mycart = cart.mycart;
			length = mycart.length;

			console.log(length);

			// increase id when id will same
			for(var i=0; i<length; i++)
			{
				if(id == mycart[i].id)
				{
					var exit = 1;
					mycart[i].qty += 1;
				}
			}

			var mylist = {id:id, name:name, price:price, qty:qty};	

			if(!exit)
			{
				cart.mycart.push(mylist);
			}
								
			cart = JSON.stringify(cart);
			localStorage.setItem('cart',cart);

			showtable();

		});

		function showtable()
		{

			var localstorageitem = localStorage.getItem('cart');
			if (localstorageitem) 
			{
				var localstorageitem = JSON.parse(localstorageitem);
				var mycart = localstorageitem.mycart;

				var mytable ='';
				var subtotal =0; 
				var tax = 25;
				var j=1;
				var count;

				$.each(mycart,function (i,v) 
				{
					if (v) 
					{
						var id = v.id;
						var name = v.name;
						var price = v.price;
						var photo = v.image;
						var qty = v.qty;

						var eachtotal = price * qty;

						mytable +='<tr>'+
						'<td>'+j+'</td>'+
						'<td>'+name+'</td>'+
						'<td>'+price+'</td>'+
						'<td>'+
							'<button class="plus_btn btn btn-success btn-sm d-inline" data-id='+i+'> <i class="fas fa-plus fa-sm qty-fa"></i> </button>'+
							'<p id="qty" class="d-inline ml-2 mr-2"> '+ qty +' </p>'+
							'<button class="minus_btn btn btn-success btn-sm d-inline" data-id='+i+'> <i class="fas fa-minus fa-sm qty-fa"></i> </button>'+
						'</td>'+
						
						'<td>'+eachtotal+'</td>'+
						'<td> <a href="javascript:void(0)" data-id='+i+' class="remove"> <i class="fas fa-times-circle fa-lg" style="color: red"></i> </a> </td>'+
						'</tr>';
						subtotal += (price*qty);


						j++;
					}

				})

				total += subtotal;


				mytable +='<tr>'+
								'<td colspan="2" style="text-align: right; font-weight: bolder; color: red; font-size:20px;"> Total Amount:</td>'+
								'<td colspan="5" style="font-weight: bolder; color: red; font-size:20px; text-align:left">'+subtotal+
								'<input type="hidden" id="totalamount"  value='+subtotal+'>'+'</td>'+
							'</tr>';

				mytable +='<tr>'+
								'<td colspan="2" class="text-right"> Pay Amount:</td>'+
								'<td colspan="5"> <input type="number" id="paymoney" class="form-control"> </td>'+
							'</tr>';

				mytable +='<tr>'+
								'<td colspan="2" class="text-right"> Charge :</td>'+
								'<td colspan="5"> <input type="number" id="changemoney" class="form-control"> </td>'+
							'</tr>';

				

				mytable +='<tr>'+
								'<td colspan="7" class="checkout-tbl">'+
									'<a href="javascript:void(0)" class="btn btn-danger btn-block checkoutbtn" data-total="'+subtotal+'">'+
										'<i class="fas fa-cash-register fa-lg"></i> &nbsp; Check Out' +
									'</a>'+
								'</td>'+
						  '</tr>';

				$('#shoppingcart_table').html(mytable);
			}
		}


		// Add Quantity
		$('#shoppingcart_div').on('click','.plus_btn', function()
		{
			var id = $(this).data('id');
			var localstorageitem = localStorage.getItem('cart');

			var localstorageitem = JSON.parse(localstorageitem);
			var mycart = localstorageitem.mycart;
			
			$.each(mycart,function (i,v) 
			{
				if (i == id) 
				{
					v.qty++;
				}
			})
			
			cart = JSON.stringify(localstorageitem);
			localStorage.setItem('cart',cart);
			showtable();

		});

		// Sub Quantity
		$('#shoppingcart_div').on('click','.minus_btn', function()
		{
			var id = $(this).data('id');
			var localstorageitem = localStorage.getItem('cart');

			var localstorageitem = JSON.parse(localstorageitem);
			var mycart = localstorageitem.mycart;
			
			$.each(mycart,function (i,v) 
			{
				if (i == id) 
				{
					v.qty--;
					if (v.qty == 0) 
					{
						mycart.splice(id,1);
					}
				}
			})
			
			cart = JSON.stringify(localstorageitem);
			localStorage.setItem('cart',cart);
			showtable();

		});

		// Remove Item
		$('#shoppingcart_div').on('click','.remove', function()
		{
			var id = $(this).data('id');
			var localstorageitem = localStorage.getItem('cart');

			var localstorageitem = JSON.parse(localstorageitem);
			var mycart = localstorageitem.mycart;
			
			$.each(mycart,function (i,v) 
			{
				if (i == id) 
				{
					mycart.splice(id,1);
				}
			})
			
			cart = JSON.stringify(localstorageitem);
			localStorage.setItem('cart',cart);
			showtable();

		});

		// Check Out Button
		$('#shoppingcart_div').on('click','.checkoutbtn', function()
		{
			var total = $(this).data('total');


			// Checkout
			$("#checkout_div").show();
			$("#shoppingcart_div").hide();



			vocuhertable();

		});

		$("#shoppingcart_div").on("focus","#changemoney",function(event)
		{
                event.preventDefault();
                var finaltotal=$("#totalamount").val();
                paymoney+=$("#paymoney").val();

                changemoney += paymoney - finaltotal;

                // console.log(finaltotal);

               	$("#changemoney").val(changemoney);
                	
            	if(changemoney<0)
            	{
                	$("#paymoney").focus();
              	}

        });

		// Print Button
		$('#print_div').on('click','#printbtn', function()
		{
			var total = $(this).data('total');
        	
        	var cart = localStorage.getItem('cart');
        	var cartobj=JSON.parse(cart);

          	var cartarr = cartobj.mycart;
          	var store_invoiceno = invoiceno;

          	$.ajaxSetup({
              	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              	}
            });

			$.ajax({
                    type:'POST',
                    url:'order',
                    data:{invoiceno:store_invoiceno,total:total,cart:cartarr}    ,
                    success:function(data)
                    {
                    	var printContents =$('#checkout_div').html();
		                var originalContents = document.body.innerHTML;
		                document.body.innerHTML=printContents;
		                window.print();
                		
                		location.reload(); 
      					localStorage.clear();

                    }
                });

		});

		function vocuhertable()
		{

			var localstorageitem = localStorage.getItem('cart');
			if (localstorageitem) 
			{
				var localstorageitem = JSON.parse(localstorageitem);
				var mycart = localstorageitem.mycart;

				var mytable =''; var printtable='';
				var subtotal =0; 
				var tax = 25;
				var j=1;
				var count;

				var changemoney_chck=changemoney;
				var paymoney_chck = parseInt(paymoney);


				$.each(mycart,function (i,v) 
				{
					if (v) 
					{
						var id = v.id;
						var name = v.name;
						var price = v.price;
						var photo = v.image;
						var qty = v.qty;

						var eachtotal = price * qty;

						mytable +='<tr>'+
						'<td>'+j+'</td>'+
						'<td>'+name+'</td>'+
						'<td>'+price+'</td>'+
						'<td>'+
							'<p id="qty" class="d-inline ml-2 mr-2"> '+ qty +' </p>'+
						'</td>'+
						
						'<td>'+eachtotal+'</td>'+
						'</tr>';
						subtotal += (price*qty);


						j++;
					}

				})

				total += subtotal;

				mytable +='<tr>'+
								'<td colspan="2" style="text-align: right; font-weight: bolder; color: red; font-size:20px;"> Total Amount:</td>'+
								'<td colspan="5" style="font-weight: bolder; color: red; font-size:20px; text-align:left">'+subtotal+
								'</td>'+
							'</tr>';

				mytable +='<tr>'+
								'<td colspan="2" class="text-right"> Pay Amount:</td>'+
								'<td colspan="5"><p>'+paymoney_chck+'</p>  </td>'+
							'</tr>';

				mytable +='<tr>'+
								'<td colspan="2" class="text-right"> Charge :</td>'+
								'<td colspan="5"> <p>'+changemoney_chck+'</p> </td>'+
							'</tr>';
				printtable +='<tr>'+
								'<td colspan="5" class="checkout-tbl">'+
									'<a href="javascript:void(0)" class="btn btn-danger btn-block" data-total="'+subtotal+'" id="printbtn">'+
										'<i class="fas fa-print fa-lg"></i> &nbsp; Print' +
									'</a>'+
								'</td>'+
						  '</tr>';
				$('#checkout_table').html(mytable);
				$('#print_div').html(printtable);
				datefn();
				startTime();
			}
		}

		// Date
		function datefn()
		{
			var now = new Date();
			var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
			var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
			
			function fourdigits(number) 
			{
		    	return (number < 1000) ? number + 1900 : number;
		  	}
		  	today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
		  	invoiceno = Date.now();

		  	$('#invoice_number').text(invoiceno);
		  	$('#invoice_date').text(today);
		}

		function checkTime(i) 
		{
  			if (i < 10) {
    			i = "0" + i;
  			}
  			return i;
		}

		function startTime() 
		{
			var today = new Date();
  			var h = today.getHours();
  			var m = today.getMinutes();
  			var s = today.getSeconds();
  
  			// add a zero in front of numbers<10
  			m = checkTime(m);
  			s = checkTime(s);
  			document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
  			t = setTimeout(function() 
  			{
    			startTime()
  			}, 500);
		}



	</script>

@endsection
