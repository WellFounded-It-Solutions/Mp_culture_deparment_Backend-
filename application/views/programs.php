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
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
   <h4 class="font-weight-bold py-3 mb-0">Programs <?php //echo $_SESSION['division'];?></h4>
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/addprogram">Programs</a></li>
      </ol>
   </div>
   <div class="row">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-md-3">
                  <div class="home-select">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Academy</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select" id="home-select2">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select" id="home-select3">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Sub Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select" id="home-select1">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Artist</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="home-select">
                     <span>
                     <button id="daterange-4" class="btn  dropdown-toggle md-btn-flat"></button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mt-5">
            <div class="row">
               <div class="col-md-3">
                  <div class="card mb-4 bg-success text-white">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Ongoing</h2>
                           <h5>( संचालित हो रहे कार्यक्रम )</h5>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card mb-4 text-white" style="background-color: #007BFF;">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Today</h2>
                           <h5>( आज के कार्यक्रम )</h5>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card mb-4 bg-warning text-white">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center justify-content-between">
                           <h2>Upcoming</h2>
                           <h5>( आने वाले कार्यक्रम )</h5>
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
                           <h2>Previous</h2>
                           <h5>( विगत कार्यक्रम )</h5>
                           <div class="d-flex flex-column align-items-center">
                              <h2 class="mt-2"> 256 </h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                  <div class="col-sm-6 text-right">
                     <a href="<?php echo base_url();?>home/addprogram"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add Programs</button></a>
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
                           <th>SNO.</th>
                           <th>Status</th>
                           <th>Action</th>
                           <th>Program Name</th>
                           <th>Category</th>
                           <th>Program Type</th>
                           <th>Live Link</th>
                           <th>Starting Date</th>
                           <th>End Date</th>
                           <th>Starting Time</th>
                           <th>End Time</th>
                           <th>Entry Type</th>
                           <th>Chief Guest</th>
                           <th>Venue</th>
                           <th>Address</th>
                           <th>State</th>
                           <th>District</th>
                           <th>City</th>
                           <th>Pin Code</th>
                           <th>Date of Email</th>
                           <th>About</th>
                           <th>Img1</th>
                           <th>Img2</th>
                           <th>Img3</th>
                           <th>Img4</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php  //print_r($programs); 
                           $i=1;
                           foreach($programs as $cust)
                           {
                           ?>
                        <tr>
                           <td><?php echo $i;?></td>
                           <td>
                              <?php
                                 if($cust['status'] == '1') {
                                  ?>
                              <a href="<?php echo base_url();?>home/programstatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>
                              <?php
                                 } else if($cust['status'] == '0') {
                                   ?>
                              <a href="<?php echo base_url();?>home/programstatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                              <?php
                                 } 
                                   ?>
                           </td>
                           <td>
                              <a href="<?php echo base_url();?>home/programs_view/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-eye"></i> </a>
                              <a href="<?php echo base_url();?>home/editprogram/<?php echo $cust['id']; ?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i> </a>
                              <a href="<?php echo base_url();?>home/deleteprogram/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i></a>
                           </td>
                           <td><a href="#<?php echo base_url();?>"><?php echo $cust['program_name'];?></a>
                           </td>
                           <td><?php echo $cust['program_category'];?></td>
                           <td><?php echo $cust['program_type'];?></td>
                           <td><?php echo $cust['program_link'];?></td>
                           <td><?php echo $cust['starting_date'];?></td>
                           <td><?php echo $cust['end_date'];?></td>
                           <td><?php echo $cust['starting_time'];?></td>
                           <td><?php echo $cust['end_time'];?></td>
                           <td><?php echo $cust['entry_type'];?></td>
                           <td><?php echo $cust['chief_guest'];?></td>
                           <td><?php echo $cust['venu'];?></td>
                           <td><?php echo $cust['address'];?></td>
                           <td><?php echo $cust['state'];?></td>
                           <td><?php echo $cust['district'];?></td>
                           <td><?php echo $cust['city'];?></td>
                           <td><?php echo $cust['pincode'];?></td>
                           <td><?php echo $cust['date_of_email'];?></td>
                           <td><?php echo $cust['about'];?></td>
                           <td><img src="https://jusmarktech.in/Culture/public/uploads/<?php echo $cust['profile_img1'];?>" width="50"></td>
                           <td><img src="https://jusmarktech.in/Culture/public/uploads/<?php echo $cust['profile_img2'];?>"width="50"></td>
                           <td><img src="https://jusmarktech.in/Culture/public/uploads/<?php echo $cust['profile_img3'];?>"width="50"></td>
                           <td><img src="https://jusmarktech.in/Culture/public/uploads/<?php echo $cust['profile_img4'];?>"width="50"></td>
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
<?php include("footer.php");?>