<?php include("header.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Sub-Categories</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='subcategory') { echo 'active';}?>"><a href="<?php echo base_url();?>subcategory">Sub-Categories</a></li>
</ol>
</div>
<div class="row">

<?php include("mastercontent.php");?>


<?php include("subcategorycontent.php");?>


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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Subcategory</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                       <th>Subcategory</th>
                                       <th>Category</th>
                                       <th>Description</th>
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                        </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($subcategorytoday as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['subcategory'];?></td>
<td><?php 
foreach($category as $cat){
    if($cat['id']==$cust['catid'])
    {
        echo $cat['category'];
    }
}
?>
</td>

<td><?php echo $cust['description'];?></td>
<td><?php echo $cust['date'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletesubcategory/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Subcategory</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>edit_subcategory" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Category</label>
<select class="custom-select" name="catid" id="catid" required>
<option value="<?php echo $cust['catid'];?>" selected><?php 
foreach($category as $cat) {
    if($cat['id']==$cust['catid']){
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
<label class="floating-label">Subcategory Name</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="subcategory Name like Biscuit, Oil" maxlength="100" value="<?php echo $cust['subcategory']; ?>" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"><?php echo $cust['description']; ?></textarea>
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
                  <h5 class="modal-title">Add Subcategory</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>add_subcategory" method="post" enctype="multipart/form-data">
               <div class="row">
               
<div class="form-group col-sm-6">
<label class="floating-label">Category</label>  
<select class="custom-select" name="catid" id="catid" required>
<?php foreach($category as $cat) { ?>
<option value="<?php echo $cat['id'];?>"><?php echo $cat['category'];?></option>
<?php } ?>
</select>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Subcategory Name</label>
<input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Subcategory Name like Biscuit, Oil" maxlength="100" required>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"></textarea>
</div>

<div class="col-sm-12">
<button class="btn btn-primary" type="submit">Save</button>
<button class="btn btn-danger" data-dismiss="modal">Exit</button> OR
<a href="<?php echo base_url();?>products"><button class="btn btn-primary" type="button">Add Product</button></a>
</div>
</div>
</form>
               </div>
            </div>
         </div>
      </div>
      


      

     
<?php include("footer.php");?>