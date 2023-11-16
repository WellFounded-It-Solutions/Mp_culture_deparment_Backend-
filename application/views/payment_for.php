
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
<h4 class="font-weight-bold py-3 mb-0">Income Head</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='category') { echo 'active';}?>"><a href="<?php echo base_url();?>category">Income Head</a></li>
</ol>
</div>
   <div class="row">

<!--  -->
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Income Head Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="#" class="text-info"><?php if(isset($countcategorytoday)){echo $countcategorytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Income Head</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="#" class="text-success"><?php if(isset($countcategoryactive)){echo $countcategoryactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Income Head</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="#" class="text-danger"><?php if(isset($countcategoryinactive)){echo $countcategoryinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Income Head</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="#" class="text-dark"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></a></h3>
<span class="text-dark">Total Income Head</span>
</div>


</div>
</div>
</div> 
</div>



      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Income Head</h5>
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
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Income Head</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                       
                                      <!--  <th>Description</th> -->
                                       <th>Date</th>
                                       <th>Income Head</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($payfr as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['date'];?></td>
<td><?php echo $cust['name'];?></td>
<!-- <td><?php echo $cust['created_at'];?></td> -->
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/categorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/categorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>deletecategory/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Income Head</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/edit_incomehead" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">
<div class="form-group col-sm-6">
<label class="floating-label">Income Head</label>
<input type="text" name="name1" id="category" class="form-control" placeholder="Name" maxlength="100" required value="<?php echo $cust['name'];?>" >
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
                  <h5 class="modal-title">Add Income Head</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/add_incomehead" method="post" enctype="multipart/form-data">
               <div class="row">

<div class="form-group col-sm-6">
<label class="floating-label">Income Head</label>
<input type="text" name="incomehead" id="category" class="form-control" placeholder="Name" maxlength="100" required>
</div>
 <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>">
<!-- <div class="form-group col-sm-6">
<label class="floating-label">Description</label>
<textarea class="form-control" name="description" id="description" rows="10"></textarea>
</div> -->
<div class="form-group col-sm-6">
                            <label class="form-label">Date</label>
                            <input type="text" name="date" id="purchasedate" class="form-control" placeholder="Purchase Date" value="<?php echo date("d M y");?>" readonly>
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