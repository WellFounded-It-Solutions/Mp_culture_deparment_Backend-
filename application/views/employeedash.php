<?php include("header1.php");?> 
<div class="container-fluid flex-grow-1 container-p-y">
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url();?>empdashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="<?php echo base_url();?>empdashboard">Employee Dashboard</a></li>
      </ol>
   </div>
   <div class="row py-4">
      <div class="col-xl-3 col-3">
         <p class="mb-0"><b>Employee</b>&nbsp;:</p>
          <small class="mb-0"><?php echo $session['emp_name'];?></small>
      </div>
      <div class="col-xl-3 col-3">
         <p class="mb-0"><b>Employee Code</b>&nbsp;:</p>
          <small class="mb-0"><?php echo $session['emp_code'];?></small>
      </div>
      <div class="col-xl-3 col-3">
         <p class="mb-0"><b>Date</b>&nbsp;:</p>
          <small class="mb-0"><?php echo date("d/m/Y");?></small>
      </div>
      <div class="col-xl-3 col-3">
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
               <a href="shops.php"><i class="feather icon-bell bg-primary ui-rounded-icon"></i></a>
               <h4 class="mt-2"><span class="text-primary"></span> Shop</h4>
               <p class="mb-3">Online shopping</p>
               <a href="enquiries.php"><button class="btn btn-primary btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <i class="lnr lnr-gift bg-success ui-rounded-icon"></i>
               <h4 class="mt-2"><span class="text-success"></span> Orders</h4>
               <p class="mb-3">All Orders</p>
               <a href="view-offer.php"><button class="btn btn-success btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <i class="lnr lnr-diamond bg-warning ui-rounded-icon"></i>
               <h4 class="mt-2"><span class="text-warning"></span>Payment</h4>
               <p class="mb-3">transfer money</p>
               <a href="conversion.php"><button class="btn btn-warning btn-sm btn-round text-white"> Click Here</button></a>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-6 employees">
         <div class="card bg-pattern-3-dark mb-4">
            <div class="card-body text-center">
               <i class="lnr lnr-license bg-danger ui-rounded-icon"></i>
               <h4 class="mt-2"><span class="text-danger"></span>Profile</h4>
               <p class="mb-3">View Profile</p>
               <a href="../pricing.php"><button class="btn btn-danger btn-sm btn-round">Click Here</button></a>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-xl-12">
      <div class="card mb-4">
         <div class="card-header with-elements pb-0">
           
            <div class="card-header-elements mr-auto p-0">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#current-order">Lattest Order</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pending-payment">Pending Payment</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="nav-tabs-top tabs-scroll">
            <div class="tab-content">
               <div class="tab-pane fade show active" id="current-order">
                  <div id="tab-table-1">
                     <table class="table table-hover card-table">
                        <thead>
                           <tr>
                              <th>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong>Due</strong></span>
                                 </label>
                              </th>
                              <th>User</th>
                              <th>Description</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong>12</strong><br><span>hour</span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                    <img src="assets/img/avatars/3-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body align-self-center ml-3">
                                       <h6 class="mb-0">John Deo</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-inline-block align-middle">
                                    <h6 class="mb-1">[#1183]</h6>
                                    <p class="text-muted mb-0">Chrome fixed the bug several versions ago, thus rendering this...</p>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <label class="custom-control custom-checkbox mb-0">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-label"><strong>16</strong><br><span>hour</span></span>
                                 </label>
                              </td>
                              <td>
                                 <div class="media mb-0">
                                    <img src="assets/img/avatars/1-small.png" class="d-block ui-w-40 rounded-circle" alt="">
                                    <div class="media-body align-self-center ml-3">
                                       <h6 class="mb-0">Jems Win</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-inline-block align-middle">
                                    <h6 class="mb-1">[#1249] Vertically center carousel controls</h6>
                                    <p class="text-muted mb-0">Try any carousel control and reduce the screen width below...</p>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
               </div>
               <div class="tab-pane fade" id="pending-payment">
                  <div id="tab-table-2">
                     <table class="table table-hover card-table">
                        <thead>
                           <tr>
                              <th>Payment</th>
                              <th>Shop Address</th>
                              <th>Sum.</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="align-middle">
                                 <a href="javascript:" class="text-dark">HERO ATHLETES BAG</a>
                              </td>
                              <td class="align-middle">[#1183]</td>
                              <td class="align-middle">$160.00</td>
                           </tr>
                           <tr>
                              <td class="align-middle">
                                 <a href="javascript:" class="text-dark">POÄNG</a>
                              </td>
                              <td class="align-middle">[#1184]</td>
                              <td class="align-middle">$477.00</td>
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