<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Stock</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='stock/'.$godown->id) { echo 'active';}?>"><a href="<?php echo base_url();?>stock/<?php echo $godown->id;?>">Stock</a></li>
</ol>
</div>
<?php   $idd=$this->uri->segment(2);
                                          $query = "SELECT * FROM godown where id='$idd'";
                                          $sql=$this->db->query($query);
                                          $vrtd=$sql->result_array();
                                         // echo $vrt[0]['ride'];
                                          ?>
   <div class="row">
   <div class="col-sm-12">
         <div class="card">
            <div class="card-header bg-danger text-white">
               <h5><?php echo $vrtd[0]['godown']; ?></h5>
            </div>
          
            <div class="card-body">
               <div class="row">
                  <div class="col-md-2 col-xs-6 border-right">
                     <h5>Godown Area</h5>
					 <span class="text-secondary">
                <?php foreach($area as $ar)
                        {
                            if($vrtd[0]['area']==$ar['id'])
                            {
                            echo $ar['area'];
                            }
                        }
                     ?>
                <?php //echo $vrtd[0]['area']; ?></span>
                  </div>
                  <div class="col-md-2 col-xs-6 border-right">
                     <h5>Supervisor Name</h5>
					 <span class="text-info"><?php echo $vrtd[0]['manager']; ?></span>
                  </div>
                  <div class="col-md-2 col-xs-6 border-right">
                     <h5>Supervisor Number</h5>
					 <span class="text-primary"><?php echo $vrtd[0]['mobile']; ?></span>
                  </div>
				  <div class="col-md-2 col-xs-6 border-right">
                     <h5>Address</h5>
                     <span class="text-primary"><?php echo $vrtd[0]['address']; ?></span>
               <!-- <a href="https://goo.gl/maps/yLj5tFNCCj8ej1WH8" target="_blank" class="text-primary"><span>Click Here</span></a> --> 
                </div>
			      <div class="col-md-4 col-xs-6 border-right">
               
                <!--  <iframe src="<?php echo $vrtd[0]['godownlink']; ?>" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                 
                  </div>
			      
                  
				 </div>
            </div>
         </div>
      </div>
      
      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Stock</h5>
                              </div>
                              <div class="card-body"> 
                                 <div class="row align-items-center m-l-0">
                                    <div class="col-sm-6"><?php if($this->session->flashdata('msg')){ ?>
            <div class="text-green">
                <h5 class="text-left text-success">
                    <?php echo $this->session->flashdata('msg'); ?>
                    </h5>
            </div>
            <?php } ?></div>
                                    <div class="col-sm-6 text-right">
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Stock Shifting</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                        <th>Category</th>
                                       <th>Product Code</th>
                                       <th>Product Name</th>
                                       <th>Unit</th>
                                       <th>Quantity</th>
                                       <th>Reorder Point</th>
                                       <th>Date</th>
                                       <!-- <th>Status</th> -->
                                      <!--  <th>Action</th> -->
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($stock as $cust)
{
   if($cust['gid']==$godown->id)
   {
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['pid'];?></td>
<td><?php echo $cust['pid'];?></td>
<td><?php
foreach($products as $pr)
{
   if($cust['pid']==$pr['hsncode'])
   {
echo $pr['product'];
   }
}
?></td>
<td><?php echo $cust['totalqty'];?></td>
<td><?php echo $cust['totalqty'];?></td>
<td><?php echo $cust['totalqty'];?></td>
<td><?php echo $cust['date'];?></td>
<!-- <td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>stockstatus/<?php echo $godown->id; ?>/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>stockstatus/<?php echo $godown->id; ?>/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td> -->
                                        <!--     <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>"><i class="feather icon-edit"></i>&nbsp;Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletestock/<?php echo $godown->id; ?>/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td> -->
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Stock</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_stock" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
               <div class="row">
<input type="hidden" name="gid" id="gid" value="<?php echo $godown->id;?>" class="form-control">
<div class="form-group col-sm-6">
<label class="floating-label">Category</label>
<select class="custom-select" name="cid" id="cid1" required>
<option value="<?php echo $cust['cid'];?>"><?php
foreach($category as $cat)
{
   if($cust['cid']==$cat['id'])
   {
echo $cat['category'];
   }
}
?></option>
<?php foreach($category as $cat1) { ?>
<option value="<?php echo $cat1['id'];?>"><?php echo $cat1['category'];?></option>
<?php } ?>
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Product</label>
<select class="custom-select" name="pid" id="pid1" required>
<option value="<?php echo $cust['pid'];?>"><?php
foreach($products as $pr)
{
   if($cust['pid']==$pr['id'])
   {
echo $pr['product'];
   }
}
?></option>
<option>--Select--</option>
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Quantity</label>
<input type="number" name="totalqty" id="totalqty" class="form-control" placeholder="Quantity" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;" value="<?php echo $cust['totalqty'];?>" required>
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Update</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
<script type='text/javascript'>
// baseURL variable
var baseURL= "<?php echo base_url();?>";

$(document).ready(function(){

  // State change
  $('#cid1').change(function(){
    var category = $(this).val();
      //alert(category);
    // AJAX request
    $.ajax({
      url:'<?=base_url()?>home/getProducts',
      method: 'post',
      data: {category: category},
      dataType: 'json',
      success: function(response){
 
        // Remove options 
        $('#pid1').find('option').not(':first').remove();
        

        // Add options
        $.each(response,function(index,data){
           $('#pid1').append('<option value="'+data['id']+'">'+data['product']+'</option>');
        });
      }
   });
 });

 

});
</script>
               </div>
            </div>
         </div>
      </div>


<?php $i++; } } ?>
                                          </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
   </div>
</div>


<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Stock Shifting</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/stock_shifting" method="post" enctype="multipart/form-data">
               <div class="row">
<input type="hidden" name="gid" id="gid" value="<?php echo $godown->id;?>" class="form-control">

<div class="form-group col-sm-6">
<label class="floating-label">Product</label>
<select class="custom-select" name="pid" id="product" required>
<option>--Select--</option>
<?php
foreach($prodct as $pr)
{?>
   <option value="<?php echo $pr['pid'];?>"><?php echo $pr['s_product'];?></option>

<?php }
?>
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Total Product Quantity in godown</label>
<!-- <input type="number" name="totalqty" id="total" class="form-control" placeholder="Quantity" pattern="/^-?\d+\.?\d*$/" value="<?php echo $cust['totalqty'];?>" required readonly> -->
<select class="custom-select" name="avlb" id='qnty'>
   
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Quantity</label>
<input type="number" name="out" id="qn" class="form-control" placeholder="Quantity" value="<?php echo $cust['totalqty'];?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Godown</label>
<select class="custom-select" name="gid2" id="" required>
<option value="">--Select Godown--</option>
<?php
foreach($godowns as $gdn)
{?>
   <option value="<?php echo $gdn['id'];?>"><?php echo $gdn['godown'];?></option>

<?php }
?>
</select>
</div>


<div class="col-sm-12">
<button class="btn btn-primary" type="submit" onclick="compare_input();">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>   
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      

<!-- Script -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript'>
   
 
  function compare_input(){

var firstInput = document.getElementById("qnty").value;
var secondInput = document.getElementById("qn").value;

if (firstInput < secondInput) {
    // do something here if inputs are same
    alert('Quantity always less than or equal product quantity!');
} 
}
 
</script>
<script type='text/javascript'>

   $(document).ready(function () {
      var baseURL= "<?php echo base_url();?>";

 $('#product').change(function(){
   var city = $(this).val();
 var gid =  $('#gid').val();
//alert(gid);exit;
   // AJAX request
   $.ajax({
     url:'<?=base_url()?>home/getqnty',
     method: 'post',
     data: {city: city,
       gid :gid

     },
      dataType: 'json',
     success: function(response){
     // $('#qnty').html(data);
       // Remove options
       $('#qnty').find('option').not(':first').remove();
     
       // Add options
       $.each(response,function(index,data){
         $('#qnty').html('<option value="'+data['totalqty']+'">'+data['totalqty']+'</option>');
       });
     }
  });
});
 });


</script>
<script type='text/javascript'>
// baseURL variable
var baseURL= "<?php echo base_url();?>";

$(document).ready(function(){

  // State change
  $('#cid').change(function(){
    var category = $(this).val();
      //alert(category);
    // AJAX request
    $.ajax({
      url:'<?=base_url()?>home/getProducts',
      method: 'post',
      data: {category: category},
      dataType: 'json',
      success: function(response){
 
        // Remove options 
        $('#pid').find('option').not(':first').remove();
        

        // Add options
        $.each(response,function(index,data){
           $('#pid').append('<option value="'+data['id']+'">'+data['product']+'</option>');
        });
      }
   });
 });

 

});
</script>

      

     
<?php include("footer.php");?>