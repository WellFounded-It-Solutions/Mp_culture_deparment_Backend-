
<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/datatables/datatables.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">User Types</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='usertypes') { echo 'active';}?>"><a href="<?php echo base_url();?>usertypes">User Types</a></li>
</ol>
</div>
<div class="row">


<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="row align-items-center m-l-0">
<div class="col-sm-6">
</div>
<div class="col-sm-6 text-right">
<a href="<?php echo base_url();?>adduser"><button class="btn btn-success btn-sm mb-3"><i class="feather icon-plus"></i> Add User Type</button></a>
</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th></th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<!-- <th>Groups</th> -->
<th>Date</th>
<th>Active</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Flatley-Wolff
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td>flet@gmail.com</td>
<td>9876554433</td>
<td>Group 1</td>
<td>2019-07-29</td>
<td>
<label class="switcher">
<input type="checkbox" class="switcher-input">
<span class="switcher-indicator">
<span class="switcher-yes"></span>
<span class="switcher-no"></span>
</span>
<span class="switcher-label"></span>
</label>
</td>
</tr>
<tr>
<td>2</td>
<td>Flatley-Wolff
<!-- <small class="d-block">
<a href="#!">View</a> |
<a href="#!">Contacts</a> |
<a href="#!" class="text-danger">Delete </a>
</small> -->
</td>
<td>flet@gmail.com</td>
<td>9876554433</td>
<td>Group 1</td>
<td>2019-07-29</td>
<td>
<label class="switcher">
<input type="checkbox" class="switcher-input">
<span class="switcher-indicator">
<span class="switcher-yes"></span>
<span class="switcher-no"></span>
</span>
<span class="switcher-label"></span>
</label>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

</div>

<?php include("footer.php");?>