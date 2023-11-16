<?php 
   if(($_SESSION['division']) && ($_SESSION['company']) &&  ($_SESSION['year'])){
    include("header_comp.php");
   }elseif(($_SESSION['division'])  && ($_SESSION['company'])){
   include("header_comp.php");
   }elseif($_SESSION['division']){
   include("header_div.php");
   }else{
   include("header.php");
   } ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
   <h4 class="font-weight-bold py-3 mb-0">Artist List</h4>
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
         <li class="breadcrumb-item <?php if($this->uri->segment(1)=='datalist') { echo 'active';}?>"><a href="<?php echo base_url();?>home/datalist">Artist List</a></li>
      </ol>
   </div>
   <div class="row">
      <?php if($session['roles']=='Admin') {?>
      <div class="col-sm-12">
         <div class="card">
            <div class="card mb-2">
               <div id="accordion2-2" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                     <form id="form-filter" action="<?php echo base_url();?>home/datalist" class="form-horizontal" method="GET">
                        <div class="form-row">
                           <!--<div class="form-group col-md-4">
                              <input type="text" name="daterange" id="daterange" class="form-control" value="" placeholder="select date range"/>	<div class="clearfix"></div>
                              </div>-->
                           <div class="form-group col-md-4">
                              <label>Location</label>
                              <select class="form-control" name="city" id="user_selection">
                                 <option value="">----Select----</option>
                                 <option>Bhopal</option>
                                 <option value="Indore">Indore</option>
                                 <option value="Gwalior">Gwalior</option>
                                 <option value="Sehore">Sehore</option>
                                 <option value="Itarsi">Itarsi</option>
                                 <option value="Alirajpur">Alirajpur</option>
                                 <option value="Anuppur">Anuppur</option>
                              </select>
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-4">
                              <label>Category</label>
                              <select class="form-control" name="category" id="artist_category">
                                 <option value="">----Select----</option>
                                 <?php
                                    $query = "SELECT  *FROM  category";
                                    $sql=$this->db->query($query);
                                    $dows=$sql->result_array();
                                    // echo $dows[0]['category'];
                                    foreach($dows as $row){
                                    ?>
                                 <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                                 <?php  } ?>
                              </select>
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-4">
                              <label>Sub Category</label>
                              <select class="form-control" name="subcategory" id="artist_subcategory">
                                 <option value="">-----Select-----</option>
                              </select>
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-4">
                              <label>Sub Category type</label>
                              <select class="form-control" name="type" id="artist_subtype">
                                 <option value="">-----Select-----</option>
                              </select>
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-4">
                              <label> Experience</label>
                              <input type="text" class="form-control" name="experience" id="sel_cat" placeholder="Enter Experience">
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-4">
                              <label>Age</label>
                              <input type="text" class="form-control" name="age" id="sel_cat" placeholder="Enter Age">
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-1">
                              <input type="submit" id="btn-filter" name="submit" class="btn btn-primary" value="filter">
                              <div class="clearfix"></div>
                           </div>
                           <div class="form-group col-md-1">
                              <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 mt-5">
            <div class="row">
               <div class="col-md-3">
                  <div class="card mb-4 text-white" style="background-color: #007BFF;">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Today</h2>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card mb-4 bg-success text-white">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Active </h2>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card mb-4 bg-danger text-white">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Inactive</h2>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card mb-4 bg-primary text-white">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Total</h2>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php } ?>
      <?php //include("mastercontent.php");?>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="row align-items-center m-l-0">
                  <div class="col-sm-6">
                     <?php if($this->session->flashdata('msg')){ ?>
                     <div class="text-green">
                        <h5 class="text-left text-success">
                           <?php echo $this->session->flashdata('msg'); ?>
                        </h5>
                     </div>
                     <?php } ?>
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
                           <th>Action</th>
                           <th>Status</th>
                           <th>Date</th>
                           <th>Artist Name</th>
                           <th>City</th>
                           <th>Category</th>
                           <th>Sub category</th>
                           <th>Sub category Type</th>
                           <th>Mobile No</th>
                           <th>Email ID</th>
                           <th>Gender</th>
                           <th>DOB</th>
                           <th>Age</th>
                           <th>Address</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $i=1;
                           foreach($artist_list as $cust)
                           {
                           ?>
                        <tr>
                           <td><?php echo $i;?></td>
                           <td>
                              <a href="<?php echo base_url();?>home/artist_view/<?php echo $cust['id']; ?>"  class="btn btn-info btn-sm">View/Edit</a>
                              <?php if($session['roles']=='Admin') {?>
                              <!--  <a href="<?php echo base_url();?>home/artist_edits/<?php echo $cust['id']; ?>"  class="btn btn-info btn-sm">Edit</a>-->
                              <a href="<?php echo base_url();?>home/delete_artist/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                              <?php } ?>
                           </td>
                           <td>
                              <?php
                                 if($cust['status']=='1') {
                                 ?>
                              <a href="<?php echo base_url();?>home/artist_status/<?php echo $cust['id']; ?>" onclick="return confirm('Are you sure you want to change?');"><button class="btn btn-success">Active</button></a>
                              <?php
                                 } else if($cust['status'] == '0') {
                                 ?>
                              <a href="<?php echo base_url();?>home/artist_status/<?php echo $cust['id'];?>" onclick="return confirm('Are you sure you want to change?');"><button class="btn btn-danger">Deactive</button></a>
                              <?php
                                 } 
                                 ?>
                           </td>
                           <td><?php echo $cust['create_at'];?></td>
                           <td><?php echo $cust['artist_name'];?></td>
                           <td><?php echo $cust['artist_city'];?></td>
                           <td><?php $ids=$cust['artist_category'];
                              $query = "SELECT  *FROM  category where id='$ids'";
                                              
                              		   $sql=$this->db->query($query);
                                                $dows=$sql->result_array();
                                            echo $dows[0]['category'];
                              	 ?></td>
                           <td><?php $idsa= $cust['artist_subcategory'];
                              $querya = "SELECT  *FROM  subcategory where id='$idsa'";
                                                
                              				   $sqla=$this->db->query($querya);
                                                  $dowsa=$sqla->result_array();
                                              echo $dowsa[0]['subcategory'];
                              
                              ?></td>
                           <td><?php $idt= $cust['artist_subtype'];
                              $queryab = "SELECT  *FROM  subcategory_type where id='$idt'";
                                                
                              				   $sqla=$this->db->query($queryab);
                                                  $dowsab=$sqla->result_array();
                                              echo $dowsab[0]['sb_type'];
                              
                              ?></td>
                           <td><?php echo $cust['artist_mobile'];?></td>
                           <td><?php echo $cust['artist_email'];?></td>
                           <td><?php echo $cust['artist_gender'];?></td>
                           <td><?php echo $cust['artist_dob'];?></td>
                           <td><?php echo $cust['artist_age'];?></td>
                           <td><?php echo $cust['artist_address'];?></td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
   $(document).ready(function() {
       $('#artist_category').on('change', function() {
           var c = this.value;
           $.ajax({
               url: "<?php echo base_url();?>/home/category_find",
               type: "POST",
               data: {
                   c: c
               },
               cache: false,
               success: function(result){
                   $("#artist_subcategory").html(result);
               }
           });
       });
   });
    $(document).ready(function() {
       $('#artist_subcategory').on('change', function() {
           var sc = this.value;
           $.ajax({
               url: "<?php echo base_url();?>/home/sub_category_find",
               type: "POST",
               data: {
                   sc: sc
               },
               cache: false,
               success: function(result){
                   $("#artist_subtype").html(result);
               }
           });
       });
   });
</script>
<?php include("footer.php");?>