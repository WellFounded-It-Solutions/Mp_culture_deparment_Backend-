<?php include("header.php");?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/typeahead-js/typeahead.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map"></script> -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



<form action="<?php echo base_url();?>add_purchaseorder" method="post" enctype="multipart/form-data">


<div class="form-row">


<div class="form-group col-md-3">
<label class="form-label">Purchase Date</label>
<input type="date" name="purchasedate" id="purchasedate" class="form-control" placeholder="Purchase Date">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Bill No</label>
<input type="text" name="billno" id="billno" class="form-control" placeholder="Bill No">
<div class="clearfix"></div>
</div>


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
<input class="form-check-input" type="radio" name="maindiscount" value="1">
<span class="form-check-label">Percentage</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="maindiscount" value="2">
<span class="form-check-label">Amount</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="maindiscount" value="3">
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
<th>S.No.</th>
<th>Product</th>
<th>Unit</th>
<th>Quantity</th>
<th>Basic Price</th>
<th>GST(%)</th>
<th>Rate</th>
<th>Free Quantity</th>
<th>Discount(%)</th>
<th>Discount(Rs.)</th>
<th>Total Amount</th>
<th></th>
</tr>

<div class="field_wrapper">
        <!-- <td><input type="text" name="field_name[]" value=""/></td> -->
        <!-- <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a> -->
        

        <a href="javascript:void(0)" class="add_button btn btn-success"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add Product</a>
        
        
        
</div>









<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<tr><td><input class="form-control" type="text" id="sno" name="sno[]"/></td><td><div class="search-container"><input type="text" id="search" placeholder="Product Name" name="search[]" required class="search form-control"/><div id="display" class="display" style="background: white; width: 540px;"></div></div></div></td><td><select class="custom-select" name="unit[]" id="unit"><option>Select</option><?php foreach($unit as $ut) { ?><option value="<?php echo $ut['id'];?>"><?php echo $ut['unit'];?></option><?php } ?></select></td><td><input class="form-control" type="text" id="quantity" name="quantity[]"/></td><td><input class="form-control" type="text" id="basic" name="basic[]"/></td><td><select class="custom-select" name="gst[]" id="gst"><option>Select</option><?php foreach($tax as $tx) { ?><option value="<?php echo $tx['id'];?>"><?php echo $tx['tax'];?></option><?php } ?></select></td><td><input class="form-control" type="text" id="rate" name="rate[]"/></td><td><input class="form-control" type="text" id="freeqty" name="freeqty[]"/></td><td><input class="form-control" type="text" id="discountper" name="discountper[]"/></td><td><input class="form-control" type="text" id="discountamt" name="discountamt[]"/></td><td><input class="form-control" type="text" id="rate" name="rate[]"/></td><td><a href="javascript:void(0);" class="remove_button btn btn-danger"><span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true">-</span></a></td><tr/>'; //New input field html 
    //$('body').find('.field_wrapper:last').after(fieldHTML);
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){             
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>

<script>

function fill(Value) {
	 
   //$('#search').val(Value);
   $('.display').hide();
   $('#pdisplay').hide();
}
$(document).ready(function() {
   //$("#search").keydown(function() {
    var mygroup = {};
    $(document).on('keydown', '.search', function() {
        //$(".search").each(function() {
       var name = $(this).val();
       if (name == "") {
           $(".display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "<?php echo base_url();?>home/productsearch",
               data: {
                   search: name
               },
               success: function(html) {
                //alert(name);
                   $(".display").html(html).show();
                   //$('#search').val($(this).text());
                   //$('#search').text(li.val());
                   //$('#search').val();
               }
           });
       }
      
   //}); 
    });
   $(document).on("click","li", function(){
        
        $('.search').val($(this).text());
        $('#mrp').val($(this).text());
        //$('#citylist').fadeOut("fast");
        var productid = $(this).val();
   //$('#pdisplay').show();
   // AJAX request
   $.ajax({
     url:'<?=base_url()?>home/getallproducts',
     method: 'post',
     data: {productid:productid},
     dataType: 'json',
     success: function(response){
        //alert(productid);
       // Remove options
       //$('#sel_area').find('option').not(':first').remove();

       // Add options
       $.each(response,function(index,data){
        $(".display").hide();
         $('#mrp').val(data['mrp']);
       });
     }
    });
    
      }); 


});

</script>

<script>
    
function calc() 
{
  var qty = document.getElementById("quantity").value;
  var bp = document.getElementById("basic").value;
  //var gst = document.getElementById("gst").value;
  var rate = document.getElementById("rate").value;
  //var total = document.getElementById("total").value;
  var original = qty*bp;
  var gst = (bp*0.18)/100;
  var net = bp+gst;
  var total = net*qty;
  if (!isNaN(total))    
    document.getElementById("rate").value = total;
}
    
</script>



<tr>
<th colspan="4" class="text-right">Total Amount </th>
<th><input class="form-control" type="text" id="total" name="total"/></th>
<th colspan="4" class="text-right">Tax Amount </th>
<th><input class="form-control" type="text" id="totaltax" name="totaltax"/></th>
</tr>
<tr>
<th colspan="10" class="text-right">Net Payable:</th>
<th colspan="2"><input class="form-control" type="text" id="nettotal" name="nettotal"/></th>
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







<?php include("footer.php");?>
