@extends('template')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <label class="col-2"> Start Date </label>
                <div class="col-4 form-group">
                    <input type="date" name="startdate" id="startdate" class="form-control">
                </div>
                
                <label class="col-2"> End Date </label>
                <div class="col-4 form-group">
                    <input type="date" name="enddate" id="enddate" class="form-control">
                </div>

            </div>
        </div>
        <div class="col-2">
            <button class="btn btn-success" type="button" id="searchbtn">
                <i class="fas fa-search"></i>
                Search 
            </button>
        </div>
    </div>

    <div class="row justify-content-center mt-3">


        <div class="col-md-8">
            <div class="card" id="report_div">
                <div class="card-header"> </div>

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
                		<tbody id="report_table"></tbody>
                	</table>
                    
                    

                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $("#report_div").hide();

    $('#searchbtn').on('click', function()
    {
        var startdate=$("#startdate").val();
        var enddate=$("#enddate").val();

        console.log("startdate"+startdate);
        console.log("enddate"+enddate);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
                type:'POST',
                url:'search',
                data:{startdate:startdate,enddate:enddate},
                success:function(data)
                {
                    var result = data.searchresult;
                    console.log(result);

                    var subtotal =0;
                    var j =0;
                    var total = 0;
                    var totalqty = 0; 

                    var mytable='';

                    $.each(result,function (i,v) 
                    {
                        j++;

                        var name = v.item_name;
                        var price = v.item_price;
                        var qty = v.qty;

                        totalqty += ++qty;

                        subtotal = parseInt(price) * parseInt(qty);
                        
                        total += subtotal;


                        mytable += '<tr>';

                        mytable += '<td>'+j+'</td>';

                        mytable += '<td>'+name+'</td>';

                        mytable += '<td>'+qty+'</td>';

                        mytable += '<td>'+price+'</td>';

                        mytable += '</tr>';

                    });



                    mytable += '<tr>';

                    mytable += '<td colspan="2">Total </td>';

                    mytable += '<td>'+totalqty+' </td>';
                    mytable += '<td>'+total+'</td>';

                    
                    mytable += '</tr>';

                    $("#report_div").show();
                    var date = startdate+' - '+enddate;
                    $('.card-header').text(date);
                    console.log(mytable);
                    $('tbody').html(mytable);


                }
        });


    });

</script>
@endsection
