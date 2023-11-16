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
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/typeahead-js/typeahead.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">

<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Income</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='subcategory') { echo 'active';}?>"><a href="<?php echo base_url();?>subcategory">Income</a></li>
</ol>
</div>
<div class="row">

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Income Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
<div class="col-md-3 col-xs-6">
<h3 class="text-info"><a href="<?php echo base_url();?>vendorstoday" class="text-info"><?php if(isset($countcategorytoday)){echo $countcategorytoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Income</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-success"><a href="<?php echo base_url();?>vendorsactive" class="text-success"><?php if(isset($countcategoryactive)){echo $countcategoryactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Income</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-danger"><a href="<?php echo base_url();?>vendorsinactive" class="text-danger"><?php if(isset($countcategoryinactive)){echo $countcategoryinactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Income</span>
</div>
<div class="col-md-3 col-xs-6">
<h3 class="text-dark"><a href="<?php echo base_url();?>vendors" class="text-dark"><?php if(isset($countcategory)){echo $countcategory;} else { echo "";}?></a></h3>
<span class="text-dark">Total Income</span>
</div>


</div>
</div>
</div> 
</div>


      <div class="col-md-12">
         <div class="card">
                              <div class="card-header">
                                 <h5>Income</h5>
                              </div>
                              <div class="card-body">
                                 <div class="row align-items-center m-l-0">
                                    <div class="col-sm-6"><?php if($this->session->flashdata('msg')){ ?>
            <div class="text-green">
               <!--  <h5 class="text-left text-success">
                    <?php echo $this->session->flashdata('msg'); ?>
                    </h5> -->
            </div>
            <?php } ?></div>
                                    <div class="col-sm-6 text-right">
                                       <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Income</button>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                       <thead>
                                        <tr>
                                        <th>S.No.</th>
                                       <th>Date</th>
                                       <th>Payment for</th>
                                       <th>By Whom</th>
                                       <th>Price</th>
                                       <th>Payment Method</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                        </tr>
                                       </thead>
                                       <tbody>
                                       <?php 
$i=1;
foreach($income as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $cust['date'];?></td>
<td><?php 
foreach($pay as $cat){
    if($cat['id']==$cust['in_pay_for'])
    {
        echo $cat['name'];
    }
}
?>
</td>

<td><?php 
foreach($vendors as $ct){
    if($ct['id']==$cust['by_whome'])
    {
        echo $ct['name'];
    }
}
?>
</td>

<td><?php echo $cust['price'];?></td>
<td><?php echo $cust['billingOptions'];?></td>
<td>
<?php
                          if($cust['status'] == '1') {
                           ?>
                                                    <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-success">Active</button></a>

                                                    <?php
                          } else if($cust['status'] == '0') {
                            ?>
                                                        <a href="<?php echo base_url();?>home/subcategorystatus/<?php echo $cust['id']; ?>"><button class="btn btn-danger">Deactive</button></a>
                                                        <?php
                          } 
                            ?>
</td>
                                            <td>
											<a href="!#"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-report-1<?php echo $cust['id']; ?>">Edit</a>

                                            

                                            <a href="<?php echo base_url();?>home/deleteincome/<?php echo $cust['id']; ?>" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                            </td>
                                            </tr>

                                            <div class="modal fade" id="modal-report-1<?php echo $cust['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Edit Income</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/edit_income" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" class="form-control" value="<?php echo $cust['id'];?>">
<div class="row">

 <div class="form-group col-sm-6">
                            <label class="form-label">Date</label>
                            <input type="text" name="date" id="purchasedate" class="form-control" placeholder="Purchase Date" value="<?php echo date("d M Y");?>" readonly>
                            <div class="clearfix"></div>
                        </div>           

<div class="form-group col-sm-6">

  <label class="form-label">Income Head</label> 
  <select class="form-control"  name="payfor1" required>
                                 <option value="">Select </option>
                                <?php foreach($pay as $c) { ?>
                               <option value="<?php echo $c['id'];?>" <?php if($cust['in_pay_for']==$c['id']){echo "selected";}?>><?php echo $c['name'];?></option> 
                                <?php } ?>
                            </select>
                            <div class="clearfix"></div>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">By Whom</label>  
  <select class="form-control" name="bywhm1" id="vendorid" required>
                                 <option value="">Select </option>
                                <?php foreach($vendors as $vc) { ?>
                                <option value="<?php echo $vc['id'];?>" <?php if($cust['by_whome']==$vc['id']){echo "selected";}?>><?php echo $vc['name'];?></option>
                                <?php } ?>
                            </select>
</div>
 <div class="form-group col-md-6">
                           <!--  <label class="form-label">OR </br><a href="<?php echo base_url();?>home/addvendor"><button class="btn-primary">Add Vendor</button></a></label> -->
                            <label class="form-label">OR </label></br> <a href="<?php echo base_url();?>home/addvendor"><label class="btn-primary">Add vendor</label></a>
                            <div class="clearfix"></div>
                        </div>
<div class="form-group col-sm-6">
<label class="floating-label">Price</label>
<input type="text" name="price1" value="<?php echo $cust['price'];?>" id="subcategory" class="form-control" placeholder="Price" maxlength="100" required>
</div>
<div class="col-sm-12">
                        <br>
                        <div class="form-group">
                           <div class="tab-pane" id="payment-information">
                              <div class="card">
                                 <div class="card mb-0 shadow-none">
                                    <div class="card-header">
                                       <h5 class="mb-2">Payment Selection Mode</h5>
                                       <p class="text-muted mb-0">Fill up given form for your payment details.</p>
                                    </div>
                                 </div>
                                 <div class="accordion" id="accordionExample">
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingOne">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingPaypal" value="paypal" name="billingOption" class="custom-control-input" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" required <?php if($cust['billingOptions']=='paypal'){echo "checked";}?>>
                                             <label class="custom-control-label font-weight-bold" for="BillingPaypal">Pay with Paypal (Payment Gateway)</label>
                                          </div>
                                       </div>
                                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/paypal.png" class="hei-25" alt="payment-images">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingTwo">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingCard" name="billingOption" value="card" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" <?php if($cust['billingOptions']=='card'){echo "checked";}?>>
                                             <label class="custom-control-label font-weight-bold" for="BillingCard">Credit / Debit Card</label>
                                          </div>
                                       </div>
                                       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/card.png" height="24" alt="payment-images">
                                                </div>
                                             </div>
                                             <!-- <div class="row mt-4">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="card-number">Card Number</label>
                                                      <input type="text" maxlength="16" id="card-number" name ="pay_card_no" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Name on card</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" id="card-name-on" name ="pay_card_holder_name" class="form-control bg-transparent" placeholder="Master Shreyu">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-expiry-date">Expiry date</label>
                                                      <input type="text" id="card-expiry-date" onkeypress="return /[0-9 / ]/i.test(event.key)" name ="pay_expiry_date" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-cvv">CVV code</label>
                                                      <input type="text" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)" id="card-cvv" name ="pay_cvv_code" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                   </div>
                                                </div> -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingThree">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingOptRadio3" value="cheque" name="billingOption" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" <?php if($cust['billingOptions']=='cheque'){echo "checked";}?>>
                                             <label class="custom-control-label font-weight-bold" for="BillingOptRadio3">Payment By Cheque</label>
                                          </div>
                                       </div>
                                       <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">Safe money transfer using Cheque.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/cc.png" height="24" alt="payment-images">
                                                </div>
                                             </div>
                                             <div class="row mt-4">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="bank-name">Bank Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_bank_name" class="form-control bg-transparent" data-toggle="input-mask" placeholder="State Bank Of India">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="cheque-number">Cheque Number</label>
                                                      <input type="text"  name ="pay_cheque_no" id="card-number" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="0000 0000 " placeholder="4242 4242 ">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Branch Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_branch_name" id="card-name-on" class="form-control bg-transparent" placeholder="MP Nagar">
                                                   </div>
                                                </div>
                                    <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_name" id="card-name-on" class="form-control bg-transparent" placeholder="Master Shreyu">
                                                   </div>
                                                </div>
                                    
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="date"> Date</label>
                                                      <input type="text" name ="pay_date" id="b-m-dtp-date" class="form-control" name="join" placeholder="Date & Time" data-dtp="dtp_tgRPe">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="amount">Amount</label>
                                                      <input type="text" name="pay_amount" onkeypress="return /[0-9]/i.test(event.key)" id="card-cvv" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="000000" placeholder=" ₹">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingfour">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingOptRadio4" value="cash" name="billingOption" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" <?php if($cust['billingOptions']=='cash'){echo "checked";}?>>
                                             <label class="custom-control-label font-weight-bold" for="BillingOptRadio4">Cash </label>
                                          </div>
                                       </div>
                                     
                              
                                    </div>
                                 <!--    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header">
                                          <div class="row justify-content-between">
                                             <div class="col">
                                                <div class="custom-control custom-radio">
                                                   <input type="radio" id="rddis" name="billingOptions" class="custom-control-input" disabled>
                                                   <label class="custom-control-label font-weight-bold" for="rddis">EMI ( Easy Installments )</label>
                                                </div>
                                             </div>
                                             <div class="col text-right">
                                                <a href="#!" class="text-muted">
                                                Not Applicable
                                                <i class="feather icon-help-circle" data-toggle="tooltip" title="You are not allow to use this option"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
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


<div class="modal fade" id="modal-report" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add Income</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
               <form action="<?php echo base_url();?>home/add_income" method="post" enctype="multipart/form-data">
               <div class="row">
   <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>">  
 <div class="form-group col-sm-6">
                            <label class="form-label">Date</label>
                            <input type="text" name="date" id="purchasedate" class="form-control" placeholder="Purchase Date" value="<?php echo date("d M Y");?>" readonly>
                            <div class="clearfix"></div>
                        </div>           

<div class="form-group col-sm-6">

  <label class="form-label">Income Head</label> 
  <select class="selectpicker" data-live-search="true" name="payfor" required>
                                 <option value="">Select </option>
                                <?php foreach($pay as $c) { ?>
                               <option value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option> 
                                <?php } ?>
                            </select>
                            <div class="clearfix"></div>
</div>
<div class="form-group col-sm-6">
<label class="floating-label">By Whom</label>  
  <select class="selectpicker" data-live-search="true" name="bywhm" id="vendorid" required>
                                 <option value="">Select </option>
                                <?php foreach($vendors as $vc) { ?>
                                <option value="<?php echo $vc['id'];?>"><?php echo $vc['name'];?></option>
                                <?php } ?>
                            </select>
</div>
 <div class="form-group col-md-6">
                           <!--  <label class="form-label">OR </br><a href="<?php echo base_url();?>home/addvendor"><button class="btn-primary">Add Vendor</button></a></label> -->
                            <label class="form-label">OR </label></br> <a href="<?php echo base_url();?>home/add_vendors/income"><label class="btn-primary">Add vendor</label></a>
                            <div class="clearfix"></div>
                        </div>
<div class="form-group col-sm-6">
<label class="floating-label">Price</label>
<input type="text" name="price" id="subcategory" class="form-control" placeholder="Price" maxlength="100" required>
</div>

 <div class="col-sm-12">
                        <br>
                        <div class="form-group">
                           <div class="tab-pane" id="payment-information">
                              <div class="card">
                                 <div class="card mb-0 shadow-none">
                                    <div class="card-header">
                                       <h5 class="mb-2">Payment Selection Mode</h5>
                                       <p class="text-muted mb-0">Fill up given form for your payment details.</p>
                                    </div>
                                 </div>
                                 <div class="accordion" id="accordionExample">
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingOne">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingPaypal1" value="paypal" name="billingOptions" class="custom-control-input" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" required>
                                             <label class="custom-control-label font-weight-bold" for="BillingPaypal1">Pay with Paypal (Payment Gateway)</label>
                                          </div>
                                       </div>
                                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/paypal.png" class="hei-25" alt="payment-images">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingTwo">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingCard1" name="billingOptions" value="card" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             <label class="custom-control-label font-weight-bold" for="BillingCard1">Credit / Debit Card</label>
                                          </div>
                                       </div>
                                       <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/card.png" height="24" alt="payment-images">
                                                </div>
                                             </div>
                                             <div class="row mt-4">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="card-number">Card Number</label>
                                                      <input type="text" maxlength="16" id="card-number" name ="pay_card_no" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Name on card</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" id="card-name-on" name ="pay_card_holder_name" class="form-control bg-transparent" placeholder="Master Shreyu">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-expiry-date">Expiry date</label>
                                                      <input type="text" id="card-expiry-date" onkeypress="return /[0-9 / ]/i.test(event.key)" name ="pay_expiry_date" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-cvv">CVV code</label>
                                                      <input type="text" maxlength="3" onkeypress="return /[0-9]/i.test(event.key)" id="card-cvv" name ="pay_cvv_code" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingThree">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingOptRadio33" value="cheque" name="billingOption" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                             <label class="custom-control-label font-weight-bold" for="BillingOptRadio33">Payment By Cheque</label>
                                          </div>
                                       </div>
                                       <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                          <div class="card-body bg-light">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p class="mb-0 pl-3 pt-1">Safe money transfer using Cheque.</p>
                                                </div>
                                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                   <img src="<?php echo base_url();?>assets/img/logo/cc.png" height="24" alt="payment-images">
                                                </div>
                                             </div>
                                             <div class="row mt-4">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="bank-name">Bank Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_bank_name" class="form-control bg-transparent" data-toggle="input-mask" placeholder="State Bank Of India">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label for="cheque-number">Cheque Number</label>
                                                      <input type="text"  name ="pay_cheque_no" id="card-number" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="0000 0000 " placeholder="4242 4242 ">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Branch Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_branch_name" id="card-name-on" class="form-control bg-transparent" placeholder="MP Nagar">
                                                   </div>
                                                </div>
                                    <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="card-name-on">Name</label>
                                                      <input type="text" onkeypress="return /[a-z ]/i.test(event.key)" name ="pay_name" id="card-name-on" class="form-control bg-transparent" placeholder="Master Shreyu">
                                                   </div>
                                                </div>
                                    
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="date"> Date</label>
                                                      <input type="text" name ="pay_date" id="b-m-dtp-date" class="form-control" name="join" placeholder="Date & Time" data-dtp="dtp_tgRPe">
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                      <label for="amount">Amount</label>
                                                      <input type="text" name="pay_amount" onkeypress="return /[0-9]/i.test(event.key)" id="card-cvv" class="form-control bg-transparent" data-toggle="input-mask" data-mask-format="000000" placeholder=" ₹">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header" id="headingfour">
                                          <div class="custom-control custom-radio">
                                             <input type="radio" id="BillingOptRadio44" value="cash" name="billingOptions" class="custom-control-input collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                             <label class="custom-control-label font-weight-bold" for="BillingOptRadio44">Cash </label>
                                          </div>
                                       </div>
                                     
                              
                                    </div>
                                 <!--    <div class="card mb-0 shadow-none border-top">
                                       <div class="card-header">
                                          <div class="row justify-content-between">
                                             <div class="col">
                                                <div class="custom-control custom-radio">
                                                   <input type="radio" id="rddis" name="billingOptions" class="custom-control-input" disabled>
                                                   <label class="custom-control-label font-weight-bold" for="rddis">EMI ( Easy Installments )</label>
                                                </div>
                                             </div>
                                             <div class="col text-right">
                                                <a href="#!" class="text-muted">
                                                Not Applicable
                                                <i class="feather icon-help-circle" data-toggle="tooltip" title="You are not allow to use this option"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
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
