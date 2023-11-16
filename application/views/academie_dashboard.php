<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">
   <div class="container-fluid flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
      <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/dashboard"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>home/dashboard">Dashboard</a></li>
         </ol>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-md-3">
                  <div class="home-select">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select" id="home-select2">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Sub Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select" id="home-select3">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Artist</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="home-select">
                     <span>
                     <button id="daterange-4" class="btn  dropdown-toggle md-btn-flat"></button>
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 mt-5">
               <div class="row">
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Programs</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-grid display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Artists</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-user display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Users</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-users display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Academies </h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center des-icon">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-book display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Literature</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-book display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Images</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-image display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Videos</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-video display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card mb-4">
                        <div class="card-body">
                           <div class="d-flex flex-column align-items-center justify-content-between">
                              <h2>Audios</h2>
                              <div class="d-flex w-100 justify-content-between justify-content-center des-icon">
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge text-white" style="background-color: #007BFF;">Today</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                                 <div class="feather icon-headphones display-4 text-warning"></div>
                                 <div class="d-flex flex-column align-items-center">
                                    <h5 class="text-muted mb-0"><span class="badge badge-primary">Total</span> </h5>
                                    <h2 class="mt-2"> 256 </h2>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- [ Pie chart ] Start -->
                  <div class="col-md-6">
                     <div class="card mb-4">
                        <h6 class="card-header">Pie Chart</h6>
                        <div class="card-body">
                           <div id="am-pie-1" style="height: 400px"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="card mb-4">
                        <h6 class="card-header">Pie [ animated ] Chart</h6>
                        <div class="card-body">
                           <div id="am-pie-6" style="height: 400px"></div>
                        </div>
                     </div>
                  </div>
               </div>

           

                <div class="col-md-12">
               <div id="accordion2">
                  <div class="card mb-2">
                     <div class="card-header">
                        <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">
                           Latest Programs
                           <div class="collapse-icon"></div>
                        </a>
                     </div>
                     <div id="accordion2-1" class="collapse show" data-parent="#accordion2">
                     <div class="card-body">
                           <div class="table-responsive">
                              <table id="" class="table card-table"
                                 data-url="">
                                 <thead>
                                    <tr>
                                       <th>S No</th>
                                       <th>Code</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                       <th>Program Name</th>
                                       <th>Organised By</th>
                                       <th>City</th>
                                       <th>Venue</th>
                                       <th>Start Date  & Time</th>
                                       <th>End Date  & Time </th>
                                       <th>Category</th>
                                       <th>Type</th>
                                       <th>Created Date </th>
                                       <th>Modified Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>AL024</td>
                                       <td><a href="#!" class="btn btn-danger btn-sm">&nbsp;Non action </a></td>
                                       <td>
                                          <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                          <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                       </td>
                                       <td>Dance</td>
                                       <td>M.P Culture</td>
                                       <td>Bhopal</td>
                                       <td>Ram Bhawan</td>
                                       <td>14/11/23 10:30 AM</td>
                                       <td>14/11/23 6:30 PM</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-2">
                     <div class="card-header">
                        <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-2">
                        Latest Artists
                           <div class="collapse-icon"></div>
                        </a>
                     </div>
                     <div id="accordion2-2" class="collapse" data-parent="#accordion2">
                     <div class="card-body">
                           <div class="table-responsive">
                              <table id="" class="table card-table"
                                 data-url="">
                                 <thead>
                                    <tr>
                                       <th>S No</th>
                                       <th>Code</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                       <th>Program Name</th>
                                       <th>Organised By</th>
                                       <th>City</th>
                                       <th>Venue</th>
                                       <th>Start Date  & Time</th>
                                       <th>End Date  & Time </th>
                                       <th>Category</th>
                                       <th>Type</th>
                                       <th>Created Date </th>
                                       <th>Modified Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>AL024</td>
                                       <td><a href="#!" class="btn btn-danger btn-sm">&nbsp;Non action </a></td>
                                       <td>
                                          <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                          <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                       </td>
                                       <td>Dance</td>
                                       <td>M.P Culture</td>
                                       <td>Bhopal</td>
                                       <td>Ram Bhawan</td>
                                       <td>14/11/23 10:30 AM</td>
                                       <td>14/11/23 6:30 PM</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-2">
                     <div class="card-header">
                        <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-3">
                        Latest Academies
                           <div class="collapse-icon"></div>
                        </a>
                     </div>
                     <div id="accordion2-3" class="collapse" data-parent="#accordion2">
                     <div class="card-body">
                           <div class="table-responsive">
                              <table id="" class="table card-table"
                                 data-url="">
                                 <thead>
                                    <tr>
                                       <th>S No</th>
                                       <th>Code</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                       <th>Program Name</th>
                                       <th>Organised By</th>
                                       <th>City</th>
                                       <th>Venue</th>
                                       <th>Start Date  & Time</th>
                                       <th>End Date  & Time </th>
                                       <th>Category</th>
                                       <th>Type</th>
                                       <th>Created Date </th>
                                       <th>Modified Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>AL024</td>
                                       <td><a href="#!" class="btn btn-danger btn-sm">&nbsp;Non action </a></td>
                                       <td>
                                          <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                          <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                       </td>
                                       <td>Dance</td>
                                       <td>M.P Culture</td>
                                       <td>Bhopal</td>
                                       <td>Ram Bhawan</td>
                                       <td>14/11/23 10:30 AM</td>
                                       <td>14/11/23 6:30 PM</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                       <td>Don't No</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer.php");?>