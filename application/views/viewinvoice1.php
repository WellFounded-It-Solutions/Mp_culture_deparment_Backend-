<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/typography.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/quill/editor.css">

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Invoice</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active">Invoice</li>
</ol>
</div>
<div class="card">
<div class="card-body p-5">
<div class="row">
            <div class="col-sm-2 pb-4">

               <div class="mb-1"><p><b>NEELAM</b></p></div>
              
            </div>
            <div class="col-sm-7 pb-4">
               <div class="my-1">
                   <div class="mb-1"><p><b><?php echo $admin->companyname;?></b></p></div>
                  <p class="m-0 p-0">1-2,Main choraha, Berkhera Patani, Bhel Bhopal, Madhya pradesh</p>
                   <p class="m-0 p-0">GSTIN:23ARVPC4033F2Z1, PAN:ARVPC4033F</p>
                    <p class="m-0 p-0">Contact: 9893063744</p>
                   <p class="m-0 p-0">Email id: krishnaenterprises2012in@gmail.com</p>
               </div>
            
            </div>
            <div class="col-sm-3 pb-4">
               <div class="my-1">
                  <p class="m-0 p-0"><b>GST INVOICE No.</b></p>
               </div>
            </div>
         </div>
<hr class="mb-4">
<div class="row">
            <div class="col-sm-6 pb-4">

               <div class="mb-1">
                    <p class="m-0 p-0">To</p>
                   <p class="m-0 p-0"><b><?php
                                    foreach($vendors as $vc1) 
                                    {
                                if($vc1['id']==$purchaseorderbill->vendorid)
                                {   
                                    echo $vc1['name'];
                                }
                                    }
                                ?></b></p>
                   <p class="m-0 p-0"><?php
                                    foreach($vendors as $vc1) 
                                    {
                                if($vc1['id']==$purchaseorderbill->vendorid)
                                {   
                                    echo $vc1['address'];
                                }
                                    }
                                ?></p>
                    <!-- <p class="m-0 p-0">SONAGIRI PARISAR</p> -->
                   </div>
              
            </div>
            <div class="col-sm-3 pb-4">
               <div class="my-1">
                   <p class="m-0 p-0">Invoice No:<b><?php echo $purchaseorderbill->billno;?></b></p>
                   <p class="m-0 p-0">Mode:<b> Cash</b></p>
                  <p class="m-0 p-0">Place of supply: Madhya Pradesh(23)</p>
                  
               </div>
            
            </div>
             <div class="col-sm-3 pb-4">
               <div class="my-1">
                   <p class="m-0 p-0">Invoice Date: <b><?php echo date('d M, Y');?></b></b></p>
                   <p class="m-0 p-0">Payment Status: <b>Paid</b></p>
                  <p class="m-0 p-0">admin,Lakhan Choksey,9893063744</p>
                  
               </div>
            
            </div>
         </div>
<table class="table table-responsive">
    <thead>
      <tr>
        <th>HSN CODE</th>
        <th>Product</th>
        <th>Basic</th>
        <th>GST %</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Free Qty</th>
        <th>Discount %</th>
        <th>Discount Rs</th>
        <th  class=" text-right">Product Total Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>3402</td>
        <td>PARLE G 5/-</td>
        <td>5.00</td>
         <td>12%</td>
        <td>50</td>
        <td colspan="2">5500.00</td>
        <!--<td></td>-->
        <td>0</td>
        <td>0.00</td>
        <td class="text-right"><strong><i class="fas fa-rupee-sign"></i>5500.00</strong></td>
      </tr>
           <tr>
        <td>3408</td>
        <td style="width: 120px;white-space: initial;overflow: hidden;text-overflow: ellipsis;">GHADI DETERGENT POWDER 1KG</td>
        <td>55.00</td>
         <td>18%</td>
        <td>100</td>
        <td>120500.00</td>
        <td>Bucket</td>
        <td>0</td>
        <td>0.00</td>
        <td class="text-right"><strong><i class="fas fa-rupee-sign"></i>120500.00</strong></td>
      </tr>
      <tr>
          <td colspan="4" class=" text-right py-5 pr-0">dqfqf</td>
          <td colspan="7" class=" text-right py-5 pr-0">
                        <div>Subtotal: <strong class="ml-3"><i class="fas fa-rupee-sign"></i>129205.00</strong></div>
                        <!-- <div class="mt-2">Roundoff: <strong class="ml-3"><i class="fas fa-rupee-sign"></i>-0.4</strong></div> -->
                        <div class="mt-2">Net Amount: <strong class="ml-3"><i class="fas fa-rupee-sign"></i>129205.00</strong></div>
                     </td>
      </tr>
      
    </tbody>
  </table>

</div>
<div class="card-footer text-right">
<a href="<?php echo base_url();?>printinvoice/<?php echo $purchaseorderbill->vendorid;?>" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; Print</a>
<button type="button" class="btn btn-primary ml-2"><i class="ion ion-ios-paper-plane"></i>&nbsp; Send</button>
</div>
</div>
</div>

<?php include("footer.php");?>