f<?php include("header.php");?>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Edit Product</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>products">Products</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='editproduct/'.$product->id) { echo 'active';}?>"><a href="<?php echo base_url();?>editproduct/<?php echo $product->id;?>">Edit Product</a></li>
</ol>
</div>

<div id="accordion2">
<div class="card mb-2">
<div class="card-header">
<a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">Product Details & Inventory<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-1" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<form action="<?php echo base_url();?>edit_product" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" class="form-control" value="<?php echo $product->id;?>">
<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Category</label>
<select class="custom-select" name="catid" id="catid">
<option value="<?php echo $product->catid;?>"><?php foreach($category as $ct1) {
if($product->catid==$ct1['id'])
{
    echo $ct1['category'];
} }?></option>
<?php foreach($category as $ct) { ?>
<option value="<?php echo $ct['id'];?>"><?php echo $ct['category'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Sub-Category</label>
<select class="custom-select" name="subcatid" id="subcatid">
<option value="<?php echo $product->subcatid;?>"><?php foreach($subcategory as $sct1) {
if($product->subcatid==$sct1['id'])
{
    echo $sct1['subcategory'];
} }?></option>
<?php foreach($subcategory as $sct) { ?>
<option value="<?php echo $sct['id'];?>"><?php echo $sct['subcategory'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>


</div>


<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">Product Name</label>
<input type="text" name="product" id="product" class="form-control" placeholder="Product Name" value="<?php echo $product->product;?>" maxlength="100" required>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product Image</label>
<div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/product/<?php echo $product->productimage;?>" alt="Product image"></div>
<input type="file" name="productimage" id="productimage" class="form-control" placeholder="sdf">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Description</label>
<textarea name="description" id="description" class="form-control"><?php echo $product->description;?></textarea>
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
<option value="<?php echo $product->manid;?>"><?php foreach($manufacturers as $man1) {
if($product->manid==$man1['id'])
{
    echo $man1['name'];
} }?></option>
<?php foreach($manufacturers as $man) { ?>
<option value="<?php echo $man['id'];?>"><?php echo $man['name'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product Type</label>
<select class="custom-select" name="producttype" id="producttype">
<option value="<?php echo $product->producttype;?>">
<?php 
if($product->producttype=='1')
{
    echo "Consumeable";
}
elseif($product->producttype=='2')
{
    echo "Stockable";
}
elseif($product->producttype=='3')
{
    echo "Service";
}
elseif($product->producttype=='4')
{
    echo "Managed";
}
?>
</option>
<option value="1">Consumeable</option>
<option value="2">Stockable</option>
<option value="3">Service</option>  
<option value="4">Managed</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Reorder Point</label>
<input type="text" name="reorderpoint" id="reorderpoint" class="form-control" placeholder="Reorder Point" maxlength="10" value="<?php echo $product->reorderpoint;?>" >
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-4">
<label class="form-label">HSN Code</label>
<input type="text" name="hsncode" id="hsncode" class="form-control" placeholder="HSN Code" value="<?php echo $product->hsncode;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Product SKU / Barcode</label>
<input type="text" name="barcode" id="barcode" class="form-control" placeholder="Product SKU / Barcode" value="<?php echo $product->barcode;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Stock Alert Quantity</label>
<input type="text" name="stockalertqty" id="stockalertqty" class="form-control" placeholder="Stock Alert Quantity" value="<?php echo $product->stockalertqty;?>" maxlength="10">
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
<option value="<?php echo $product->status;?>"><?php 
    if($product->status=='1')
    {
        echo "Active";
    }
    elseif($product->status=='0')
    {
        echo "Inactive";
    }
?></option>
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Out Of Stock</label>
<select class="custom-select" name="outstock" id="outstock">
<option value="<?php echo $product->outstock;?>"><?php 
    if($product->outstock=='1')
    {
        echo "Active";
    }
    elseif($product->outstock=='0')
    {
        echo "Inactive";
    }
?></option>
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-4">
<label class="form-label">Allow Negative Stock</label>
<select class="custom-select" name="negstock" id="negstock">
<option value="<?php echo $product->outstock;?>"><?php 
    if($product->outstock=='1')
    {
        echo "Yes";
    }
    elseif($product->outstock=='0')
    {
        echo "No";
    }
?></option>
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
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-2">Product Unit & Pricing<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-2" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">MRP</label>
<input type="text" name="mrp" id="mrp" class="form-control" placeholder="Product MRP" value="<?php echo $product->mrp;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Tax</label>
<select class="custom-select" name="tax" id="tax">
<option>Select</option>
<option value="<?php echo $product->tax;?>" selected><?php 
foreach($tax as $tx) {
    if($tx['id']==$product->tax){
        echo $tx['tax'];
    }
}
?></option>
<?php foreach($tax as $tx1) { ?>
<option value="<?php echo $tx1['id'];?>"><?php echo $tx1['tax'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Price Type</label>
<select class="custom-select" name="pricetype" id="pricetype">
<option value="<?php echo $product->pricetype;?>" selected><?php 
if($product->pricetype=='1')
{
    echo "Including Tax";
}
elseif($product->pricetype=='2')
{
    echo "Excluding Tax";
}
?>
</option>
<option value="1">Including Tax</option>
<option value="2">Excluding Tax</option>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Weight (In Gram)</label>
<input type="text" name="weight" id="weight" class="form-control" placeholder="Weight of Product" value="<?php echo $product->weight;?>" maxlength="10">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Primary Unit</label>
<select class="custom-select" name="primaryunit" id="primaryunit">
<option value="<?php echo $product->primaryunit;?>"><?php
foreach($unit as $ut1)
{
    if($product->primaryunit==$ut1['id'])
    {
        echo $ut1['unit'];
    }
}
?></option>
<?php foreach($unit as $ut11) { ?>
<option value="<?php echo $ut11['id'];?>"><?php echo $ut11['unit'];?></option>
<?php } ?>

</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Primary Unit)</label>
<input type="text" name="sellpricepu" id="sellpricepu" class="form-control" placeholder="Sell Price (In Primary Unit)" value="<?php echo $product->sellpricepu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Primary Unit)</label>
<input type="text" name="openingstockpu" id="openingstockpu" class="form-control" placeholder="Opening Stock (In Primary Unit)" value="<?php echo $product->openingstockpu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Secondary Unit</label>
<select class="custom-select" name="secondaryunit" id="secondaryunit">
<option value="<?php echo $product->secondaryunit;?>"><?php
foreach($unit as $ut2)
{
    if($product->secondaryunit==$ut2['id'])
    {
        echo $ut2['unit'];
    }
}
?></option>
<?php foreach($unit as $ut22) { ?>
<option value="<?php echo $ut22['id'];?>"><?php echo $ut22['unit'];?></option>
<?php } ?>

</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Secondary Unit)</label>
<input type="text" name="sellpricesu" id="sellpricesu" class="form-control" placeholder="Sell Price (In Secondary Unit)" value="<?php echo $product->sellpricesu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Equivalent Quantity (In Primary Unit)</label>
<input type="text" name="equalqtypu" id="equalqtypu" class="form-control" placeholder="Equivalent Quantity (In Primary Unit)" value="<?php echo $product->equalqtypu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Secondary Unit)</label>
<input type="text" name="openingstocksu" id="openingstocksu" class="form-control" placeholder="Opening Stock (In Secondary Unit)" value="<?php echo $product->openingstocksu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Tertiary Unit</label>
<select class="custom-select" name="tertiaryunit" id="tertiaryunit">
<option value="<?php echo $product->tertiaryunit;?>"><?php
foreach($unit as $ut3)
{
    if($product->tertiaryunit==$ut3['id'])
    {
        echo $ut3['unit'];
    }
}
?></option>
<?php foreach($unit as $ut33) { ?>
<option value="<?php echo $ut33['id'];?>"><?php echo $ut33['unit'];?></option>
<?php } ?>
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

</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Sell Price (In Tertiary Unit)</label>
<input type="text" name="sellpricetu" id="sellpricetu" class="form-control" placeholder="Sell Price (In Tertiary Unit)" value="<?php echo $product->sellpricetu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Equivalent Quantity (In Primary Unit)</label>
<input type="text" name="equalqtypu2" id="equalqtypu2" class="form-control" placeholder="Equivalent Quantity (In Primary Unit)" value="<?php echo $product->equalqtypu2;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Opening Stock (In Tertiary Unit)</label>
<input type="text" name="openingstocktu" id="openingstocktu" class="form-control" placeholder="Opening Stock (In Tertiary Unit)" value="<?php echo $product->openingstocktu;?>" maxlength="10">
<div class="clearfix"></div>
</div>

</div>




</div>
</div>
</div>


<div class="card mb-2">
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-3">Rewards & Incentive Points<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-3" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-6">
<label class="form-label">Reward Point to Customer</label>
<input type="text" name="rewardpoint" id="rewardpoint" class="form-control" placeholder="Reward Point to Customer" value="<?php echo $product->rewardpoint;?>" maxlength="10">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-6">
<label class="form-label">Reward Point Type</label>
<select class="custom-select" name="rewardpointtype" id="rewardpointtype">
<option value="<?php echo $product->rewardpointtype;?>">
<?php 
if($product->rewardpointtype=='1'){
    echo "Percentage";
}
elseif($product->rewardpointtype=='2'){
    echo "Amount";
}
?></option>
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
<input type="text" name="incentive" id="incentive" class="form-control" placeholder="Incentive Point To Sale Person" value="<?php echo $product->incentive;?>" maxlength="10">
<div class="clearfix"></div>

</div>
<div class="form-group col-md-6">
<label class="form-label">Incentive Point Type</label>
<select class="custom-select" name="incentivetype" id="incentivetype">
<option value="<?php echo $product->incentivetype;?>">
<?php 
if($product->incentivetype=='1'){
    echo "Percentage";
}
elseif($product->incentivetype=='2'){
    echo "Amount";
}
?></option>
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
<div class="card-header">
<a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-4">Product Specification (If Available)<div class="collapse-icon"></div></a>
</div>
<div id="accordion2-4" class="collapse hidden" data-parent="#accordion2">
<div class="card-body">

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Size</label>
<input type="text" name="size" id="size" class="form-control" placeholder="Product Size" value="<?php echo $product->size;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Series</label>
<input type="text" name="series" id="series" class="form-control" placeholder="Product Series" value="<?php echo $product->series;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Quality</label>
<input type="text" name="quality" id="quality" class="form-control" placeholder="Product Quality" value="<?php echo $product->quality;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Color</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Product Color" value="<?php echo $product->color;?>" maxlength="100">
<div class="clearfix"></div>
</div>


</div>

<div class="form-row">
<div class="clearfix"><br/></div>
</div>

<div class="form-row">

<div class="form-group col-md-3">
<label class="form-label">Make</label>
<input type="text" name="make" id="make" class="form-control" placeholder="Product Make" value="<?php echo $product->make;?>" maxlength="100">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Model</label>
<input type="text" name="model" id="model" class="form-control" placeholder="Product Model" value="<?php echo $product->model;?>" maxlength="100">
<div class="clearfix"></div>
</div>

</div>


<div class="form-row">
<div class="form-group col-md-6">
<input type="submit" class="btn btn-primary" value="Update">
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>



</div>
</div>






<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Product Varient List</h4>

<div class="row">



<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="row align-items-center m-l-0">
<div class="col-sm-6">

</div>
<!-- <div class="col-sm-6 text-right">
<a href="<?php echo base_url();?>addproduct"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Product Varient</button></a>
</div> -->
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Date</th>
<th>Product Name</th>
<th>Product Image</th>
<th>Size</th>
<!-- <th>Tax</th> -->
<th>MRP</th>
<th>Sell Price</th>
<th>Quantity</th>
<th>Minimum Order</th>
<th>Available Stock</th>

<!-- <th>Sell Price per Unit</th>
<th>Sell Price Type</th>
<th>Out Of Stock</th>
<th>Allow Negative Stock</th> -->

<!-- <th>Status</th> -->
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($products as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['date'];?></td>
<td><?php echo $cust['product'];?></td>
<td><img src="<?php echo base_url();?>assets/img/product/<?php echo $cust['productimage'];?>" class="img-fluid img-radius wid-40" alt=""></td>
<td><?php echo $cust['pv_size'];?></td>
<!-- <td><?php foreach($tax as $tx) {
if($cust['tax']==$tx['id'])
{
echo $tx['tax'];

}}?></td> -->
<td><?php echo $cust['mrp'];?></td>
<td><?php echo $cust['pv_sell_price'];?></td>
<td><?php echo $cust['pv_qnty'];?></td>
<td><?php echo $cust['pv_min_order'];?></td>
<td><?php echo $cust['pv_avbl_stock'];?></td>






<!-- <td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/productstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/productstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>

</td> -->
<td>
<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report<?php echo $cust['id']; ?>">Edit</a>

                                  
<a href="<?php echo base_url();?>deleteproduct/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
</td>
</tr>
<?php $i++; } ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

</div>

<div class="modal fade" id="modal-report<?php echo $cust['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Product Varient</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/edit_product_varient" method="post" enctype="multipart/form-data">
               <div class="row">
                 <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
   <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>"> 
 <?php foreach($products as $cat)  ?> 
  <input type="hidden" name="catid" class="form-control" value="<?php echo $this->uri->segment('2');?>">             
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
<input type="text" name="capacity1" id="size" class="form-control" placeholder="size" maxlength="100" value="<?php echo $cust['capacity']; ?>">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Varient Quantity</label>
<input type="text" name="qnty" id="size" class="form-control" placeholder="Varient Quantity" maxlength="100" value="<?php echo $cust['pv_qnty']; ?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">MRP</label>
<input type="text" name="price" id="series" class="form-control" placeholder="MRP" maxlength="100" value="<?php echo $cust['price']; ?>">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Selling Price</label>
<input type="text" name="sprice" id="quality" class="form-control" placeholder="Selling Price" maxlength="100" value="<?php echo $cust['pv_sell_price']; ?>">
<div class="clearfix"></div>
</div>

<!-- <div class="form-group col-md-3">
<label class="form-label">Tax</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Tax" maxlength="100">
<div class="clearfix"></div>
</div> -->
<div class="form-group col-md-3">
<label class="form-label">Minimum Order</label>
<input type="text" name="min" id="color" class="form-control" placeholder="Minimum Order" maxlength="100" value="<?php echo $cust['pv_min_order']; ?>">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-3">
<label class="form-label">Available Stock</label>
<input type="text" name="stock" id="color" class="form-control" placeholder="Available Stock" maxlength="100" value="<?php echo $cust['pv_avbl_stock']; ?>">
<div class="clearfix"></div>
</div>



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
<?php include("footer.php");?>