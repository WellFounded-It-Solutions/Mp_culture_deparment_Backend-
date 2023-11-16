<?php include("header.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/typeahead-js/typeahead.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Purchase Order</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>purchaseorder">Purchase Orders</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addpurchaseorder') { echo 'active';}?>"><a href="<?php echo base_url();?>addpurchaseorder">Add Purchase Order</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Add Purchase Order</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_purchaseorder" method="post" enctype="multipart/form-data">


<div class="form-row">




<div class="form-group col-md-3">
<label class="form-label">Purchase Date</label>
<input type="date" name="pdate" id="pdate" class="form-control" placeholder="Purchase Date">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Bill No</label>
<input type="text" name="billno" id="billno" class="form-control" placeholder="Bill No">
<div class="clearfix"></div>
</div>

<form action="<?php echo base_url();?>add_purchaseorder" method="post" enctype="multipart/form-data">
<div class="form-group col-md-3">
<label class="form-label">Vendor</label>
<select class="custom-select" name="vendorid" id="vendorid">
<?php foreach($vendors as $vc) { ?>
<option value="<?php echo $vc['id'];?>"><?php echo $vc['name'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Discount</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="1">
<span class="form-check-label">Percentage</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="2">
<span class="form-check-label">Amount</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="3">
<span class="form-check-label">Material</span>
</label>
<div class="clearfix"></div>
</div>

</div>






</div>
</div>

<div class="card mb-4">
<div class="card-body">
<div class="form-row table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Product</th>
<th>Unit</th>
<th>Quantity</th>
<th>Price</th>
<th>Discount</th>
<th>Tax</th>
<th>Total</th>
<th></th>
</tr>

<tr class="fieldGroup">
    <td colspan="9" align="right">
    <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add Product</a>
    <td>
</tr>

<tr class="fieldGroupCopy" style="display: none;">
<td>
    <input type="text" name="sno" id="sno" class="form-control" placeholder="SNo." maxlength="10">
    </td>
    <td>
   <!--  <td><input id="typeahead-input" class="form-control" type="text" autocomplete="off"></td> -->
<!--<input type="text" name="product" id="shopname" class="form-control" placeholder="ProductName" maxlength="100"> -->
<!-- <select class="form-control" name="products[]" id="products">
<?php foreach($products as $p) { ?>
<option value="<?php echo $p['id'];?>"><?php echo $p['product'];?></option>
<?php } ?>
</select> -->
<td><input type="text" name="id" id="product_id" class="form-control" placeholder="" maxlength="10"></td>
<td><input type="text" name="product" id="product" class="form-control" placeholder="" maxlength="10"></td>
<td><input type="text" name="mrp" id="mrp" class="form-control" placeholder="" maxlength="10"></td>
<td><input type="text" name="unit" id="unit" class="form-control" placeholder="Unit" maxlength="100"></td>
<td><input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" maxlength="100" ></td>
<td><input type="text" name="price" id="price" class="form-control" placeholder="Price" maxlength="100" oninput="calc()"></td>
<td><input type="text" name="discount" id="discount" class="form-control" placeholder="Discount" maxlength="100"></td>
<td><input type="text" name="tax" id="tax" class="form-control" placeholder="Tax" maxlength="100"></td>
<td><input type="text" name="total" id="total" class="form-control" placeholder="Total" maxlength="100"></td>
<td>
    <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>-</a>
</td>
</tr>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>
// baseURL variable



$(document).ready(function(){
    var baseURL= "<?php echo base_url();?>";
    $("#product_id").autocomplete({
        source: function(request, cb){
            console.log(request);
            
            $.ajax({
                url: baseURL+'home/productlist/'+request.term,
                method: 'GET',
                dataType: 'json',
                success: function(res){
                    var result;
                    result = [
                        {
                            label: 'There is no matching record found for '+request.term,
                            value: ''
                        }
                    ];

                    console.log("Before format", res);
                    

                    if (res.length) {
                        result = $.map(res, function(obj){
                            return {
                                label: obj.id,
                                value: obj.id,
                                data : obj
                            };
                        });
                    }

                    console.log("formatted response", result);
                    cb(result);
                }
            });
        },
        select: function( event, selectedData ) {
            console.log(selectedData);

            if (selectedData && selectedData.item && selectedData.item.data){
                var data = selectedData.item.data;

                $('#product').val(data.product);
                $('#mrp').val(data.mrp);
            }
            
        }  
    });  
});



</script>


<tr>
<th colspan="4">Total Amount </th>
<th colspan="4">Tax Amount </th>
</tr>
<tr>
<th colspan="8"class="text-right">Net Payable:     </th>
</tr>








</thead>
<tbody>
</tbody>
</table>


</div>

<div class="clearfix"><br/></div>
<button type="submit" class="btn btn-primary">Save</button>

</form>
</div>
</div>

</div>
</div>

<script type='text/javascript'>
    $(document).ready(function(){

     // Initialize 
   /*  $( "#psearch" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?=base_url()?>Home/productlist/",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#product').val(ui.item.label); // display the selected text
          //$('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      }); */



    });
    </script>

<script>
    
    function calc() 
{
  var price = document.getElementById("price").value;
  var noTickets = document.getElementById("quantity").value;
  //var total = document.getElementById("total").value;
  var total = parseFloat(price) * noTickets
  if (!isNaN(total))
    document.getElementById("total").value = total;
}
    
</script>

<script type="text/javascript">
   $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<tr class="fieldGroup">'+$(".fieldGroupCopy").html()+'</tr>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>


<?php include("footer.php");?>