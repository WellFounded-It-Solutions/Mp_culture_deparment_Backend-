<?php include("header.php");?>
<?php //include("content.php");?>
<div class="layout-content">
   <div class="container-fluid flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-0">Audience</h4>
      <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>home/dashboard"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>home/dashboard">Audience</a></li>
         </ol>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-md-6 chek-box d-flex justify-content-between">
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                     <label class="form-check-label" for="inlineCheckbox1">Website</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                     <label class="form-check-label" for="inlineCheckbox2">Android </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                     <label class="form-check-label" for="inlineCheckbox3">IOS</label>
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
      </div>
      <div class="row">
         <!-- customar project  start -->
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <div class="row align-items-center m-l-0">
                     <div class="col-sm-6">
                     </div>
                     <!-- <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Audience</button>
                     </div> -->
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
                              <th>Actions</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>User Type</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Mobile</th>
                              <th>Email ID</th>
                              <th>City </th>
                              <th>Email Preferences</th>
                              <th>SMS Preferences </th>
                              <th>APP Notification </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>01</td>
                              <td>
                                 <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                 <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                              </td>
                              <td><a href="#!" class="btn btn-danger btn-sm">&nbsp;Non action </a></td>
                              <td>11/01/2023</td>
                              <td>Webasite</td>
                              <td>Ritik Beldar</td>
                              <td>MALE</td>
                              <td>968525478</td>
                              <td>ritik@jusmarktech.com</td>
                              <td>Bhopal</td>
                              <td>ritik@jusmarktech.com</td>
                              <td>968525478</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, voluptates!</td>
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
                        <h5 class="modal-title">Add Audience</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">User Type</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Web</option>
                                       <option value="male">Anroid</option>
                                       <option value="female">IOS</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Name">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Sex">Gender</label>
                                    <select class="form-control" id="Sex">
                                       <option value="">Select</option>
                                       <option value="male">MALE</option>
                                       <option value="female">FEMALE</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Email">Mobile</label>
                                    <input type="number" class="form-control" id="Email" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">Email ID</label>
                                    <input type="email" class="form-control" id="Birth" placeholder="123">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">City</label>
                                    <input type="text" class="form-control" id="Birth" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group fill">
                                    <label class="floating-label" for="Birth">SMS Preferences</label>
                                    <input type="email" class="form-control" id="Birth" placeholder="Enter">
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label class="floating-label" for="Address">Short Description</label>
                                    <textarea class="form-control" id="Address" rows="1" placeholder="Enter"></textarea>
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