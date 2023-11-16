<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">
   <div class="container-fluid flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-0">Program</h4>
      <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/dashboard"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>home/dashboard">Program</a></li>
         </ol>
      </div>


         
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
                  <div class="card mb-4">
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
                  <div class="card mb-4">
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
                  <div class="card mb-4">
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
                  <div class="card mb-4">
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
      <div class="row">
         <!-- customar project  start -->
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <div class="row align-items-center m-l-0">
                     <div class="col-sm-6">
                     </div>
                     <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Program</button>
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
                           <tr>
                              <td>01</td>
                              <td>DS054</td>
                              <td><a href="#!" class="btn btn-info btn-sm">&nbsp;Active </a></td>
                              <td>
                                 <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                 <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                              </td>
                              <td>Music</td>
                              <td>M.P Culture</td>
                              <td>Indore</td>
                              <td>Minto Hall</td>
                              <td>18/11/23 11:20 AM</td>
                              <td>18/11/23 5:30 PM</td>
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
         <div class="col-xl-12">
            <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title">Add Program</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Name">Program Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Category</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Category1</option>
                                       <option value="female">Category2</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Category</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Discussion</option>
                                       <option value="female">Hybrid</option>
                                       <option value="female">Lecture</option>
                                       <option value="female">Play</option>
                                       <option value="female">Training</option>
                                       <option value="female">Other</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Email">Live Streaming Link</label>
                                    <input type="text" class="form-control" id="Email" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">Starting Date</label>
                                    <input type="date" class="form-control" id="Birth" placeholder="123">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">End Date</label>
                                    <input type="date" class="form-control" id="Birth" placeholder="123">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">Starting Time</label>
                                    <input type="time" class="form-control" id="Birth" placeholder="123">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">End Time</label>
                                    <input type="time" class="form-control" id="Birth" placeholder="123">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Entry Type</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Ticket</option>
                                       <option value="female">Pass</option>
                                       <option value="female">Free</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Chief Guest</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Venue</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Address">Address</label>
                                    <textarea class="form-control" id="Address" rows="1" placeholder="Enter"></textarea>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">State Name</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Madhya Pradesh</option>
                                       <option value="female">Uttar Pradesh</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">District Name</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Bhopal</option>
                                       <option value="female">Narmadaouram</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">City Name</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3">
                                 <h5 class="modal-title">Other Details </h5>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Artist Name</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Category</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Category1</option>
                                       <option value="female">Category2</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">Performance Date and Time</label>
                                    <input type="date" class="form-control" id="" placeholder="">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Address">Short Description</label>
                                    <textarea class="form-control" id="Address" rows="1" placeholder="Enter"></textarea>
                                 </div>
                              </div>
                              <div class="col-xl-12">
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                          <tr>
                                             <th>S No</th>
                                             <th>Artist Name</th>
                                             <th>Category</th>
                                             <th>Performance Date and Time</th>
                                             <th>Description</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>01</td>
                                             <td>Ritik Beldar</td>
                                             <td>Music</td>
                                             <td>15/11/23 10:30 AM</td>
                                             <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, cupiditate!</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-3 mt-3">
                                 <button type="button" class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#exampleModal"><i class="feather icon-plus"></i> Add Artist</button>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Profile Picture (Max. 1MB)</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Banner Image 1 (Max. 5MB)</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Banner Image 2 (Max. 1MB)</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Attachment For Email Notification</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Date of SMS Notification</label>
                                    <input type="date" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Date of SMS Notification</label>
                                    <input type="date" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label class="floating-label" for="Address">About Program</label>
                                    <textarea class="form-control" id="Address" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="col-sm-12 mt-5">
                                 <button class="btn btn-primary">Submit</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Other Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Phone">Artist Name</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Category</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">Category1</option>
                                       <option value="female">Category2</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">Performance Date and Time</label>
                                    <input type="date" class="form-control" id="" placeholder="">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Address">Short Description</label>
                                    <textarea class="form-control" id="Address" rows="1" placeholder="Enter"></textarea>
                                 </div>
                              </div>
                           </div>
                     </div>
                     </form>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- customar project  end -->
   </div>
</div>
<?php include("footer.php");?>