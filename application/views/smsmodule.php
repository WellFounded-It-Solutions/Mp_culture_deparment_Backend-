<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
   <h4 class="font-weight-bold py-3 mb-0">Venue</h4>
   <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/dashboard"><i class="feather icon-home"></i></a></li>
         <li class="breadcrumb-item active"><a href="<?php echo base_url();?>home/dashboard">Venue</a></li>
      </ol>
   </div>
   <div class="row">
      <div class="col-lg-12 mt-3">
         <h4 class="font-weight-bold py-3 mb-0">Sent</h4>
         <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
               <div class="card mb-4 bg-danger text-white">
                  <div class="card-body">
                     <div class="d-flex flex-column align-items-center justify-content-between">
                        <h2>Upcoimg NEED</h2>
                        <div class="d-flex flex-column align-items-center">
                           <h2 class="mt-2"> 256 </h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <h4 class="font-weight-bold py-3 mb-0">Submitted</h4>
         <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
               <div class="card mb-4 bg-danger text-white">
                  <div class="card-body">
                     <div class="d-flex flex-column align-items-center justify-content-between">
                        <h2>Upcoimg NEED</h2>
                        <div class="d-flex flex-column align-items-center">
                           <h2 class="mt-2"> 256 </h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <h4 class="font-weight-bold py-3 mb-0">Delivered</h4>
         <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
               <div class="card mb-4 bg-danger text-white">
                  <div class="card-body">
                     <div class="d-flex flex-column align-items-center justify-content-between">
                        <h2>Upcoimg NEED</h2>
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
   <div class="row">
      <!-- customar project  start -->
      <div class="col-xl-12">
         <div class="row">
            <div class="col-md-6">
               <div class="card mb-4">
                  <h6 class="card-header">Chart 1</h6>
                  <div class="card-body">
                     <div id="am-pie-1" style="height: 400px"></div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h6 class="card-header">Chart 2</h6>
                                    <div class="card-body">
                                        <div id="am-pie-6" style="height: 400px"></div>
                                    </div>
                                </div>
                            </div>
         </div>
      </div>
      <!-- customar project  end -->
   </div>
</div>
<?php include("footer.php");?>