<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
<title>NEELAM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/linearicons.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/open-iconic.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/feather.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-material.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/shreerang-material.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uikit.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">
<style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>
</head>
<body>
<div class="page-loader">
<div class="bg-primary"></div>
</div>

<div class="invoice-print p-5">
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

<div class="table-responsive mb-4" style="overflow-x:hidden;">
            <table class="table m-0">
               <thead>
                  <tr>
                     <th class="py-3">
                        HSN CODE
                     </th>
                     <th class="py-3 text-left">
                       Product
                     </th>
                     <th class="py-3 text-left">
                       Basic
                     </th>
                     <th class="py-3">
                       GST %
                     </th>
                     <th class="py-3">
                        Quantity
                     </th>
                      <th class="py-3">
                        Rate
                     </th>
                     <th class="py-3">
                        Free Qty
                     </th>
                     <th class="py-3">
                        Discount %
                     </th>
                     <th class="py-3">
                        Discount Rs
                     </th>
                     <th class="text-left py-3">
                        Product Total Amount
                     </th>
                  </tr>
               </thead>
               <tbody>
               <?php 
            
            $i=1;
            foreach($purchaseorder as $porder)
            {
                if($purchaseorderbill->vendorid==$porder['vendorid']){
            ?>
                  <tr>
                     <td class="py-3">
                        <div><?php echo $porder['sno'];?></div>
                     </td>
                     <td class="py-3">
                        <div style="width:120px; white-space: initial; overflow: hidden; text-overflow: ellipsis;"><?php echo $porder['product'];?></div>
                     </td>
                     <td class="py-3">
                        <div><?php echo $porder['basic'];?></div>
                     </td>
                     <td class="py-3">
                        <div><?php echo $porder['gst'];?></div>
                     </td>
                     <!-- <td class="py-3">
                         <div><?php echo $porder['unit'];?></div>
                     </td> -->
                     <td class="py-3">
                        <div><?php echo $porder['quantity'];?></div>
                         <div></div>
                     </td>
                      
                     <td  class="py-3">
                        <div><?php echo $porder['rate'];?></div>
                     </td>
                     <td  class="py-3">
                        <div><?php echo $porder['freeqty'];?></div>
                     </td>

                     <td  class="py-3">
                        <div><?php echo $porder['discountper'];?></div>
                     </td>

                     <td  class="py-3">
                        <div><?php echo $porder['discountamt'];?></div>
                     </td>
                    
                     <td class="py-3 text-right">
                        <strong><i class="fas fa-rupee-sign"></i><?php echo $porder['total'];?></strong>
                     </td>
                  </tr>
<?php 
                }
            }
?>

<tr>
<td colspan="3" class=" text-right py-5 pr-0">
                        <div>Total Quantity: <strong class="ml-3"><?php echo $purchaseorderbill->totalqty;?></strong></div>
                        
                     </td> 
                     
                     <td colspan="7" class=" text-right py-5 pr-0">
                        <div>Subtotal: <strong class="ml-3"><i class="fas fa-rupee-sign"></i><?php echo $purchaseorderbill->nettotal;?></strong></div>
                        <!-- <div class="mt-2">Roundoff: <strong class="ml-3"><i class="fas fa-rupee-sign"></i>-0.4</strong></div> -->
                        <div class="mt-2">Net Amount: <strong class="ml-3"><i class="fas fa-rupee-sign"></i><?php echo $purchaseorderbill->nettotal;?></strong></div>
                     </td>
                  </tr>
                  <tr>
                  <th colspan="10">Amount (in words): <?php echo $purchaseorderbill->amtword;?></th>
                  </tr>
                 <tr>
                      
                     <td colspan="10" class="py-5">
                      
                       <div>Bank Details: SBI IFSC-SBIN0002375 A/C NO-38178679962</div>      
                        <div>Terms and conditions:<br>IF CHEQUE RETURNS RS 500 WILL BE CHARGED</div> 
                     </td>
                     <!--<td colspan="6" class=" text-right py-5 pr-0">
                       <div>SCH %: 225.76</div>
                        <div>SCH RS: 0</div>
                         <div>DISCOUNT: 84.41</div>
                     </td> -->
                  </tr>
                  
                 
                 
               
                 
               </tbody>
            </table>
         </div>

</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url();?>assets/js/pace.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/material-ripple.js"></script>
<script src="<?php echo base_url();?>assets/js/layout-helpers.js"></script>
<script src="<?php echo base_url();?>assets/libs/popper/popper.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/sidenav.js"></script>

<script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?php echo base_url();?>assets/js/demo.js"></script><script src="<?php echo base_url();?>assets/js/analytics.js"></script>
<script>
        // -------------------------------------------------------------------------
        // Print on window load

        $(function() {
            window.print();
        });
    </script>
</body>

</html>
