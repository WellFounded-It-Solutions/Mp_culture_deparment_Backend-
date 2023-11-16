<?php include("header2.php");?> 
<div class="container-fluid flex-grow-1 container-p-y">
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>dpdashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>dpdashboard">Delivery Boy Dashboard</a></li>
      </ol>
   </div>
   <div class="row py-4">
      <div class="col-xl-4 col-4">
         <p class="mb-0"><b>Employee</b>&nbsp;:</p>
          <small class="mb-0"><?php echo $session['dp_name'];?></small>
      </div>
      
      <div class="col-xl-4 col-4">
         <p class="mb-0"><b>Date</b>&nbsp;:</p>
          <small class="mb-0"><?php echo date("d/m/Y");?></small>
      </div>
      <div class="col-xl-4 col-4">
         <p class="mb-0"><b>Beat</b>&nbsp;:</p>
          <small class="mb-0">1234</small>
      </div>
     </div> 

     
   

   <div class="col-sm-12 col-md-6 mb-4 d-sm"><div id="report-table_filter" class="dataTables_filter"><label class="d-block">Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="report-table"></label></div></div>
  <!--<div class="col-sm-12 col-md-6 mb-4 d-md"><div id="report-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="report-table"></label></div></div> -->
  <div class="row">
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <a href="today_delivery.php"><i class="feather icon-bell bg-primary ui-rounded-icon"></i></a>
               <h4 class="mt-2"><span class="text-primary">2 </span>Today</h4>
               <p class="mb-3">Today Delivery</p>
               <a href="#"><button class="btn btn-primary btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <a href="pending_delivery.php">
               <i class="lnr lnr-gift bg-success ui-rounded-icon"></i></a>
               <h4 class="mt-2"><span class="text-success">3 </span>Pending</h4>
               <p class="mb-3">Pending Delivery</p>
               <a href="#"><button class="btn btn-success btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <i class="lnr lnr-diamond bg-warning ui-rounded-icon"></i>
               <h4 class="mt-2"><span class="text-warning">5 </span>Total</h4>
               <p class="mb-3">Total Delivery</p>
               <a href="conversion.php"><button class="btn btn-warning btn-sm btn-round text-white"> Click Here</button></a>
            </div>
         </div>
      </div>
  <!--     <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <i class="lnr lnr-license bg-danger ui-rounded-icon"></i>
               <h4 class="mt-2"><span class="text-danger"></span>Profile</h4>
               <p class="mb-3">View Profile</p>
               <a href="../pricing.php"><button class="btn btn-danger btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div> -->
   </div>
   <div class="row">
   <div class="col-xl-12">
      <div class="card mb-4">
         <div class="card-header with-elements pb-0">
           
            <div class="card-header-elements mr-auto p-0">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#lattest-delivery">Lattest Delivery</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pending-delivery">Pending Delivery</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="nav-tabs-top tabs-scroll">
            <div class="tab-content">
               <div class="tab-pane fade show active" id="lattest-delivery">
                  <div id="tab-table-1">
                     <table class="table table-hover card-table">
                        <thead>
                           <tr>
                              <th>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong>Order No.</strong></span>
                                 </label>
                              </th>
                              <th>Seller Name</th>
                              <th>Total Amount</th>
                               <th>Locations</th>
                                <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong># 343533</strong><br><span></span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                    <div class="media-body">
                                       <h6 class="mb-0">John Deo</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                    ₹ 55.55
                              </td>
                                <td>
                                   <h6 class="mb-0 text-success">2170 Jehovah Magnum</h6>
                              </td>
                               
                                   <td><span class="badge badge-success">Active</span></td>
                             
                           </tr>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong># 2242423</strong><br><span></span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                    <div class="media-body">
                                       <h6 class="mb-0">Jems Win</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                ₹ 55.55
                              </td>
                                 <td>
                                   <h6 class="mb-0 text-danger">2170 Jehovah Magnum</h6>
                              </td>
                                 
                                   <td><span class="badge badge-danger">Pending</span></td>
                             
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
               </div>
               <div class="tab-pane fade" id="pending-delivery">
                  <div id="tab-table-2">
                     <table class="table table-hover card-table">
                        <thead>
                           <tr>
                              <th>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong>Order No.</strong></span>
                                 </label>
                              </th>
                              <th>Seller Name</th>
                              <th>Total Amount</th>
                               <th>Locations</th>
                                <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong># 343533</strong><br><span></span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                   
                                    <div class="media-body">
                                       <h6 class="mb-0">John Deo</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                    ₹ 55.55
                              </td>
                                <td>
                                   <h6 class="mb-0 text-danger">2170 Jehovah Magnum</h6>
                              </td>
                              
                                   <td><span class="badge badge-danger">Pending</span></td>
                             
                           </tr>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong># 2242423</strong><br><span></span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                   
                                    <div class="media-body">
                                       <h6 class="mb-0">Jems Win</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                ₹ 55.55
                              </td>
                                 <td>
                                   <h6 class="mb-0 text-danger">2170 Jehovah Magnum</h6>
                              </td>
                                 
                                   <td><span class="badge badge-danger">Pending</span></td>
                             
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include("footer.php");?>