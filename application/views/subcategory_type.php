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
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Sub-Categories Type</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='subcategory') { echo 'active';}?>"><a href="<?php echo base_url();?>subcategory">Sub-Categories Type</a></li>
</ol>
</div>
<div class="row">

<?php include("mastercontent.php");?>


<?php //include("subcategorytype.php");?>


      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Sub-Categories</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Subcategory Type</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                   <table id="report-table" class="table table-striped table-hover" data-show-export="true" data-click-to-select="true"
  data-toolbar="#toolbar"
  data-show-toggle="true"
  data-show-columns="true"
  data-url="">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                          <th>Date</th>
                                       <th>Subcategory</th>
                                       <th>Subcategory Type</th>
                                      <th>Subcategory (Hindi)</th> 
                                       <th>Description</th>
                                     
                                       <th>Status</th>
                                       <th>Action</th>
                                        </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($category as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['date'];?></td>
<td><?php 
foreach($sbcategory as $cat){
    if($cat['id']==$cust['sbcat'])
    {
        echo $cat['subcategory'];
    }
}
?>
</td>
<td><?php echo $cust['sb_type'];?></td>

<td><?php echo $cust['sb_type_hindi'];?></td>


<td><?php echo $cust['sb_detail'];?></td>

<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/subcategorytypstatus/<?php echo $cust['id']; ?>"  onclick="return confirm('are you sure you want to change?');"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/subcategorytypstatus/<?php echo $cust['id'];?>"  onclick="return confirm('are you sure you want to change?');"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>home/deletesubcategorytyp/<?php echo $cust['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete?');"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Subcategory Type</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_subcategorytyp" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Sub-Category</label>
<select class="custom-select" name="sbcatid" id="catid" required>
<option value="<?php echo $cust['catid'];?>" selected><?php 
foreach($sbcategory as $cat) {
    if($cat['id']==$cust['sbcat']){
        echo $cat['subcategory'];
    }
}
?></option>
<?php foreach($sbcategory as $cat1) { ?>
<option value="<?php echo $cat1['id'];?>"><?php echo $cat1['subcategory'];?></option>
<?php } ?>
</select>
</div>

<div class="form-group col-sm-6">
<label class="floating-label">Subcategory Name</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="subcategory Type" maxlength="100" value="<?php echo $cust['sb_type']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Subcategory Name (Hindi)</label>
<input type="text" name="subcategory_hindi" id="subcategory_hindi" class="form-control" placeholder="subcategory Type" maxlength="100" value="<?php echo $cust['sb_type_hindi']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"><?php echo $cust['sb_detail']; ?></textarea>
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Update</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button>
</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>


<?php $i++; } ?>
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
                  <h5 class="modal-title">Add Subcategory Type</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/add_subcategory_type" method="post" enctype="multipart/form-data">
               <div class="row">
   <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>">             
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Category</label>  
<select class="custom-select" name="catid" id="catid" required>
<?php foreach($sbcategory as $cat) { ?>
<option value="<?php echo $cat['id'];?>"><?php echo $cat['subcategory'];?></option>
<?php } ?>
</select>
</div> -->
<div class="form-group col-sm-6">
<label class="floating-label">Sub-Category</label>
<select class="custom-select" name="catid" id="catid" required>

<?php foreach($sbcategory as $cat1) { ?>
<option value="<?php echo $cat1['id'];?>"><?php echo $cat1['subcategory'];?></option>
<?php } ?>
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Subcategory Type</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Subcategory Type" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Subcategory Type(Hindi)</label>
<input type="text" name="subcategory_hindi" id="subcategory_hindi" class="form-control" placeholder="Subcategory Type" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"></textarea>
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button> <!--OR
<a href="<?php echo base_url();?>products"><button class="btn btn-primary" type="button">Add Product</button></a>-->
</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      


      

     
<?php include("footer.php");?>