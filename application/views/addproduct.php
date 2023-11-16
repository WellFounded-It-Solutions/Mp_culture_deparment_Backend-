<?php 
if(($_SESSION['division']) && ($_SESSION['company']) &&  ($_SESSION['year'])){
 include("header_comp.php");
}elseif(($_SESSION['division'])  && ($_SESSION['company'])){
include("header_comp.php");
}elseif($_SESSION['division']){
include("header_div.php");
}else{
include("header.php");
}?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Product</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>products">Products</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addproduct') { echo 'active';}?>"><a href="<?php echo base_url();?>addproduct">Add Product</a></li>
</ol>
</div>


<div id="accordion2">
<div class="card mb-2">
<div class="card-header bg-primary">
<a class="d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Product Details & Inventory<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>add_product" method="post" enctype="multipart/form-data">


<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Category</label>
<select class="form-control" name="catid" id="catid" required>
<?php foreach($category as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['category'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">SubCategory</label>
<select class="form-control" name="subcatid" id="subcatid" required>
<?php foreach($subcategory as $sct) { ?>
<option value="<?php echo $sct['id'];?>"><?php echo $sct['subcategory'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>


<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Product Name</label>
<input type="text" name="product" id="product" class="form-control" placeholder="Product Name" maxlength="100" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product Image</label>
<input type="file" name="productimage" id="productimage" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Description</label>
<textarea name="description" id="description" class="form-control"></textarea>
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Manufacturer</label>
<select class="custom-select" name="manid" id="manid">
<?php foreach($manufacturers as $man) { ?>
<option value="<?php echo $man['id'];?>"><?php echo $man['name'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product Type</label>
<select class="custom-select" name="producttype" id="producttype">
<option value="1">Consumeable</option>
<option value="2">Stockable</option>
<option value="3">Service</option>  
<option value="4">Managed</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Reorder Point</label>
<input type="text" name="reorderpoint" id="reorderpoint" class="form-control" placeholder="Reorder Point" maxlength="10">
<div class="clearfix"></div>
</div>

</div>




<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">HSN Code</label>
<input type="text" name="hsncode" id="hsncode" class="form-control" placeholder="HSN Code" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product SKU / Barcode</label>
<input type="text" name="barcode" id="barcode" class="form-control" placeholder="Product SKU / Barcode" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Stock Alert Quantity</label>
<input type="text" name="stockalertqty" id="stockalertqty" class="form-control" placeholder="Stock Alert Quantity" maxlength="10">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Status</label>
<select class="custom-select" name="status" id="status">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Out Of Stock</label>
<select class="custom-select" name="outstock" id="outstock">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Allow Negative Stock</label>
<select class="custom-select" name="negstock" id="negstock">
<option value="1">Yes</option>
<option value="0">No</option>
</select>
<div class="clearfix"></div>
</div>

</div>


</div>
</div>
</div>
<div class="card mb-2">
<div class="card-header bg-info">
<a class="collapsed d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" href="#accordion2-2">Product Unit & Pricing<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">


<!-- <div class="form-group col-md-3">
<label class="form-label">MRP (Optional) </label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" maxlength="10">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">MRP (Optional) </label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" maxlength="10">
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">Tax</label>
<select class="custom-select" name="tax" id="tax">
<?php foreach($tax as $tx) { ?>
<option value="<?php echo $tx['id'];?>"><?php echo $tx['tax'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Price Type</label>
<select class="custom-select" name="pricetype" id="pricetype">
<option value="1">Including Tax</option>
<option value="2">Excluding Tax</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Weight (In Gram)</label>
<input type="text" name="weight" id="weight" class="form-control" placeholder="Weight of Product" maxlength="10">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<label class="form-label">MRP-1(<label style="color:red;">* mandatory</label>)</label>
<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Primary Unit</label>
<select class="custom-select" name="primaryunit" id="primaryunit">
<option>Select</option>
<?php foreach($unit as $ut) { ?>
<option value="<?php echo $ut['id'];?>"><?php echo $ut['unit'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">MRP-1</label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" required>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Primary Unit)</label>
<input type="text" name="sellpricepu" id="sellpricepu" class="form-control" placeholder="Sell Price (In Primary Unit)" maxlength="10" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Primary Unit)</label>
<input type="text" name="openingstockpu" id="openingstockpu" class="form-control" placeholder="Opening Stock (In Primary Unit)" maxlength="10" required>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<label class="form-label">MRP-2(<label style="color:red;">Optional</label>)</label>
<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Secondary Unit</label>
<select class="custom-select" name="secondaryunit" id="secondaryunit">
<option>Select</option>
<?php foreach($unit as $ut) { ?>
<option value="<?php echo $ut['id'];?>"><?php echo $ut['unit'];?></option>
<?php } ?>

</select>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">MRP-2</label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" required>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Secondary Unit)</label>
<input type="text" name="sellpricesu" id="sellpricesu" class="form-control" placeholder="Sell Price (In Secondary Unit)" maxlength="10">
<div class="clearfix"></div>
</div>

<!-- <div class="form-group col-md-3">
<label class="form-label">Equivalent Quantity (In Primary Unit)</label>
<input type="text" name="equalqtypu" id="equalqtypu" class="form-control" placeholder="Equivalent Quantity (In Primary Unit)" maxlength="10">
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Secondary Unit)</label>
<input type="text" name="openingstocksu" id="openingstocksu" class="form-control" placeholder="Opening Stock (In Secondary Unit)" maxlength="10">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<label class="form-label">MRP-3(<label style="color:red;">Optional</label>)</label>
<div class="form-row">
<div class="clearfix"><br/></div>
</div>
<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Tertiary Unit</label>
<select class="custom-select" name="tertiaryunit" id="tertiaryunit">
<option>Select</option>
<!-- <option value="1">PC</option>
<option value="2">BUN</option>
<option value="3">DOZ</option>
<option value="4">BOX</option>
<option value="5">BTL</option>
<option value="6">PAC</option>
<option value="7">PCS</option>
<option value="8">SET</option>
<option value="9">BAG</option>
<option value="10">KGS</option>
<option value="11">NOS</option>
<option value="12">UNT</option>
<option value="13">STRIP</option>
<option value="14">CAN</option>
<option value="15">OTH</option>
<option value="16">GM</option>
<option value="17">KG</option>
<option value="18">OUTER</option>
<option value="19">CASE</option> -->
<?php foreach($unit as $ut) { ?>
<option value="<?php echo $ut['id'];?>"><?php echo $ut['unit'];?></option>
<?php } ?>

</select>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">MRP-3 </label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" required>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Tertiary Unit)</label>
<input type="text" name="sellpricetu" id="sellpricetu" class="form-control" placeholder="Sell Price (In Tertiary Unit)" maxlength="10">
<div class="clearfix"></div>
</div>

<!-- <div class="form-group col-md-3">
<label class="form-label">Equivalent Quantity (In Primary Unit)</label>
<input type="text" name="equalqtypu2" id="equalqtypu2" class="form-control" placeholder="Equivalent Quantity (In Primary Unit)" maxlength="10">
<div class="clearfix"></div>
</div> -->

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Tertiary Unit)</label>
<input type="text" name="openingstocktu" id="openingstocktu" class="form-control" placeholder="Opening Stock (In Tertiary Unit)" maxlength="10">
<div class="clearfix"></div>
</div>

</div>



</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-success">
<a class="collapsed d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" href="#accordion2-3">Rewards & Incentive Points<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Reward Point to Customer</label>
<input type="text" name="rewardpoint" id="rewardpoint" class="form-control" placeholder="Reward Point to Customer" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Reward Point Type</label>
<select class="custom-select" name="rewardpointtype" id="rewardpointtype">
<option value="1">Percentage</option>
<option value="2">Amount</option>
</select>
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Incentive Point To Sale Person</label>
<input type="text" name="incentive" id="incentive" class="form-control" placeholder="Incentive Point To Sale Person" maxlength="10">
<div class="clearfix"></div>

</div>
<div class="form-group col-md-6">
<label class="form-label">Incentive Point Type</label>
<select class="custom-select" name="incentivetype" id="incentivetype">
<option value="1">Percentage</option>
<option value="2">Amount</option>
</select>
<div class="clearfix"></div>
</div>

</div>



</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header bg-danger">
<a class="collapsed d-flex justify-content-between text-white text-large text-uppercase" data-toggle="collapse" href="#accordion2-4">Product Specification (If Available)<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-4" class="collapse show" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Size</label>
<input type="text" name="size" id="size" class="form-control" placeholder="Product Size" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Series</label>
<input type="text" name="series" id="series" class="form-control" placeholder="Product Series" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Quality</label>
<input type="text" name="quality" id="quality" class="form-control" placeholder="Product Quality" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Color</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Product Color" maxlength="100">
<div class="clearfix"></div>
</div>


</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Make</label>
<input type="text" name="make" id="make" class="form-control" placeholder="Product Make" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Model</label>
<input type="text" name="model" id="model" class="form-control" placeholder="Product Model" maxlength="100">
<div class="clearfix"></div>
</div>

</div>


<!--<div class="form-row">-->
<!--<div class="form-group col-md-6">-->
<!--<button type="submit" class="btn btn-primary">Save</button>-->
<!--<div class="clearfix"></div>-->
<!--</div>-->
<!--</div>-->
<!--</form>-->
</div>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<button type="submit" class="btn btn-primary">Save</button>
  
                                       <button class="btn btn-primary" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Product Varient</button>
                                    

<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add Product Varient</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/add_product_varient" method="post" enctype="multipart/form-data">
               <div class="row">
   <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>"> 
 <?php foreach($products as $cat)  ?> 
  <input type="hidden" name="productid" class="form-control" value="<?php echo $cat['id']+1;?>">             
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Product</label>  
<select class="custom-select" name="productid" id="catid" required>
<option value="">Select Product</option>

<?php foreach($products as $cat) { ?>
<option value="<?php echo $cat['id'];?>"><?php echo $cat['product'];?></option>
<?php } ?>
</select>
</div> -->
<div class="form-row">
<div class="form-group col-md-3">
<label class="form-label">Size</label>
<input type="text" name="capacity" id="size" class="form-control" placeholder="Unit" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Varient Quantity</label>
<input type="text" name="qnty" id="size" class="form-control" placeholder="Varient Quantity" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">MRP</label>
<input type="text" name="series" id="series" class="form-control" placeholder="MRP" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Selling Price</label>
<input type="text" name="quality" id="quality" class="form-control" placeholder="Selling Price" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Tax</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Tax" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Minimum Order</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Minimum Order" maxlength="100">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Available Stock</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Available Stock" maxlength="100">
<div class="clearfix"></div>
</div>

<!-- <div class="form-group col-sm-6">
<label class="floating-label">Capacity</label>
<input type="text" name="capacity" id="subcategory" class="form-control" placeholder="Capacity" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Price</label>
<input type="text" name="price1" id="subcategory" class="form-control" placeholder="Price" maxlength="100" required>
</div> -->

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button> 

</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      
<div class="clearfix"></div>
</div>
</div>
</form>

      
                                  
                                
</div>
</div>



<script>
$(document).ready(function() {
    $("body").on("click",".add-more",function(){ 
        var html = $(".after-add-more").first().clone();
      
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
      
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
      
      
        $(".after-add-more").last().after(html);
      
     
       
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more").remove();
    });
});
</script>


<?php include("footer.php");?>