<?php include("header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/typeahead-js/typeahead.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<div class="layout-content">
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Add Purchase Return</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i
                            class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>purchaseorders">Purchase Orders</a></li>
                <li class="breadcrumb-item <?php if($this->uri->segment(1)=='addpurchaseorder') { echo 'active';}?>"><a
                        href="<?php echo base_url();?>home/addpurchaseorder">Add Purchase Order</a></li>
            </ol>
        </div>
        <div class="card mb-4">
            <h6 class="card-header">Add Purchase Return</h6>
            
            <div class="card-body">
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
                </script>
                
                <form action="<?php echo base_url();?>home/add_purchasereturn" method="post" enctype="multipart/form-data" id="dynamic_field">
                <input type="hidden" id="counter" value="1">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="form-label">Purchase Date</label>
                            <input type="text" name="purchasedate" id="purchasedate" class="form-control" placeholder="Purchase Date" value="<?php echo date("d M y");?>">
                            <input type="text" name="order_for" id="" class="form-control" placeholder="Purchase Date" value="return">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label">Bill No</label>
                            <!-- <input type="text" name="billno" id="billno" class="form-control" placeholder="Bill No"> -->
                            <input type="text" name="billno" id="billno" class="form-control" placeholder="Bill No" value="<?php 
    function gen_random_string($length=6)
    {
        $chars ="1234567890";
        $final_rand ='NK';
        for($i=0;$i<$length; $i++)
        {
            $final_rand .= $chars[ rand(0,strlen($chars)-1)];
        }
        return $final_rand;
    }
    echo gen_random_string()."\n"; //generates a string 
    ?>">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label">Vendor</label>
                            <select class="selectpicker" data-live-search="true" name="vendorid" id="vendorid" required>
                                 <option value="">Select Vendor</option>
                                <?php foreach($vendors as $vc) { ?>
                                <option value="<?php echo $vc['id'];?>"><?php echo $vc['name'];?></option>
                                <?php } ?>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                        
                         <div class="form-group col-md-3">
                           <!--  <label class="form-label">OR </br><a href="<?php echo base_url();?>home/addvendor"><button class="btn-primary">Add Vendor</button></a></label> -->
                            <label class="form-label">OR </label></br> <a href="<?php echo base_url();?>home/add_vendors"><label class="btn-primary">Add vendor</label></a>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="form-label">Discount</label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maindiscount" value="1" required>
                                <span class="form-check-label">Percentage</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maindiscount" value="2">
                                <span class="form-check-label">Amount</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maindiscount" value="3">
                                <span class="form-check-label">Material</span>
                            </label>
                            <div class="clearfix"></div>
                        </div>
                         <!--  <div class="form-group col-md-3">
                            <label class="form-label">Godown</label>
                            <select class="selectpicker" data-live-search="true" name="gdn_id" id="gdn_id" required>
                                 <option value="">Select Godown</option>
                                <?php foreach($godown as $gdn) { ?>
                                <option value="<?php echo $gdn['id'];?>"><?php echo $gdn['godown'];?></option>
                                <?php } ?>
                            </select>
                            <div class="clearfix"></div>
                        </div> -->
                    </div>

                    <div class="form-group col-md-6 text-right">

                    <div class="search-container"><input type="text" id="search" placeholder="Search Product"
                            name="search" autocomplete="off"
                            class="search form-control form-label-lg form-control-lg" />
                        <div id="display" class="display text-left"></div>
                    </div>
                </div>
                
                         <div class="form-group col-md-3">
                           <!--  <label class="form-label">OR </br><a href="<?php echo base_url();?>home/addvendor"><button class="btn-primary">Add Vendor</button></a></label> -->
                            <label class="form-label">OR </label></br> <a href="<?php echo base_url();?>home/addproduct"><label class="btn-primary">Add Product</label></a>
                            <div class="clearfix"></div>
                        </div>

                
                <div class="form-row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Product</th>
                                <th>Basic Price</th>
                                <th>Product Varient</th>
                               <th>GST(%)</th>
                                <th>Unit</th>
                               
                                  <th>Quantity</th>
                                <th>Rate</th>
                                <th>Free Quantity</th>
                                <th>Discount(%)</th>
                                <th>Discount(Rs.)</th>
                                <th>Total Amount</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id=>
                        
                         
                        </tbody>
                       <tbody>
                        
                        </tbody>
                    </table>
                </div>

                

            </div>
            
            <div class="form-row table-responsive" style="display:hidden">
            <table class="table table-striped table-hover">
          <!--   <tbody>
            <tr>
            <th colspan="6" class="text-right">Total Quantity</th>
            <th><input class="form-control totalquantity" type="text" id="totalquantity" name="totalquantity" readonly /></th>
            <th colspan="6" class="text-right">Sub Total Amount </th>
            <th><input class="form-control totalamount" type="text" id="totalamount" name="totalamount" readonly /></th>
            <th colspan="4" class="text-right">Tax Amount </th>
            <th><input class="form-control" type="text" id="totaltax" name="totaltax" /></th>
            </tr>
            <tr>
            <th colspan="10" class="text-right">Net Payable:</th>
            <th colspan="2"><input class="form-control" type="text" id="nettotal" name="nettotal" onkeyup="word.value=convertNumberToWords(this.value)" readonly/></th>
            </tr>
            <tr>
            <th colspan="12">Amount (in words): <input class="form-control" type="text" id="word" name="amtword" readonly/></th>
            </tr>
            </tbody> -->
              <tbody>
                <th colspan="6" class="text-right">Total Quantity</th>
            <th><input class="form-control totalquantity" type="text" id="totalquantity" name="totalquantity" readonly /></th>
            <th colspan="6" class="text-right">Sub Total Amount </th>
            <th><input class="form-control totalamount" type="text" id="totalamount" name="totalamount" readonly /></th>
            <tr>
            <th colspan="6" class="text-right"></th>
            <th><input class="form-control" type="hidden" id="" name=""  placeholder="Order Tax"/></th>
            <th colspan="6" class="text-right">Shipping Transportation </th>
            <th><input class="form-control" type="text" id="shipping" name="shipping"  placeholder="Shipping/Transportation" /></th>
             <tr>
            <th colspan="6" class="text-right"></th>
            <th><input class="form-control" type="hidden" id="" name=""  placeholder="Order Tax"/></th>
            <th colspan="6" class="text-right">Net Total:</th>
            <th><input class="form-control" type="text" id="nettotal" name=""  placeholder="Total Amount" /></th>
            <!--<th colspan="4" class="text-right">Tax Amount </th>
            <th><input class="form-control" type="text" id="totaltax" name="totaltax" /></th>-->
            </tr>
              <tr>
            <th colspan="6" class="text-right"></th>
            <th><input class="form-control totalquantity" type="text" id="" name="" readonly /></th>
            <th colspan="6" class="text-right"> </th>
            <th></th>
            <!--<th colspan="4" class="text-right">Tax Amount </th>
            <th><input class="form-control" type="text" id="totaltax" name="totaltax" /></th>-->
            </tr>
           <!--  <tr>
            <th colspan="10" class="text-right">Net Payable:</th>
            <th colspan="2"><input class="form-control" type="text" id="nettotal" name="nettotal" onkeyup="word.value=convertNumberToWords(this.value)" readonly/></th>
            </tr> -->
            <tr>
            <th colspan="12">Remark/Note: <input class="form-control" type="text" id="word" name="remark"/></th>
            <input type="hidden" name="div" class="form-control" value="<?php echo $_SESSION['division'];?>">
 <input type="hidden" name="comp" class="form-control" value="<?php echo $_SESSION['company'];?>">
            </tr>
            </tbody>
            </table>
            </div>
                                
            <script>

function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}

</script>

            <div class="form-group col-md-12 text-right">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
            </div>
            
        </div>
        
        

    </div>
</div>

<script>
function fill(Value) {

    //$('#search').val(Value);
    $('.display').hide();
    $('#pdisplay').hide();
}
$(document).ready(function() {
    //$("#search").keydown(function() {
    $(document).on('keydown', '.search', function() {
        //$(".search").each(function() {
        var name = $(this).val();
        if (name == "") {
            $(".display").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>home/productsearch",
                data: {
                    search: name
                },
                success: function(html) {
                    //alert(name);
                    $(".display").html(html).show();
                    //$('#search').val($(this).text());
                    //$('#search').text(li.val());
                    //$('#search').val();
                }
            });
        }

        //}); 
    });
    //$(document).on("click","li", function(){
    // $('.display').keydown(function(e){
    //$("input[name='search[]']").val($(this).text());
    //    $(".search").val($(this).text());

    //$('#mrp').val($(this).text());
    //$('#citylist').fadeOut("fast");
    var li = $('li');
    var liSelected;
    //$(window).keydown(function(e) {
    // $(window).keypress(function(e){
    $(document).on("click", "li", function() {
        if (liSelected) {
            liSelected.removeClass('selected');
            next = liSelected.next();

        } else {
            liSelected = li.addClass('selected');
        }


        var productid = $("#pid").val();
        //  var checkid = $("#check").val();
        var input = document.getElementsByName('check[]');
        //$('#pdisplay').show();
        // AJAX request
        $.ajax({
            url: '<?=base_url()?>home/getallproducts/',
            method: 'post',
            data: {
                productid: productid
            },
            //data: productid.serialize(),
            dataType: 'json',
            success: function(response) {

                var len = response.length;

                // $('#suname,#sname,#semail').text('');
                if (len > 0) {

                    $.each(response, function(index, data) {
                        if (productid == data['id']) {
                            // alert(data['product']);
                            var gst = data['tax'];
                            var punit = data['primaryunit'];
                            var sunit = data['secondaryunit'];
                            var tunit = data['tertiaryunit'];

                            if(gst==1)
                            {
                                var gstname = "5%";
                                //alert(gstname);
                            }
                            else if(gst==2)
                            {
                                var gstname = "12%";
                                //alert(gstname);
                            }
                            else if(gst==3)
                            {
                                var gstname = "18%";
                                //alert(gstname);
                            }
                            else if(gst==4)
                            {
                                var gstname = "28%";
                                //alert(gstname);
                            }
                            else if(gst==5)
                            {
                                var gstname = "0%";
                                //alert(gstname);
                            }

                            if(punit==1)
                            {
                                var punitname = "Piece";
                                //alert(punitname);
                            }
                            else if(punit==2)
                            {
                                var punitname = "Box";
                                //alert(punitname);
                            }
                            else if(punit==3)
                            {
                                var punitname = "Case";
                                //alert(punitname);
                            }
                            else if(punit==4)
                            {
                                var punitname = "Bag";
                                //alert(punitname);
                            }
                            else if(punit==5)
                            {
                                var punitname = "Outer";
                                //alert(punitname);
                            }

                            if(sunit==1)
                            {
                                var sunitname = "Piece";
                                //alert(sunitname);
                            }
                            else if(sunit==2)
                            {
                                var sunitname = "Box";
                                //alert(sunitname);
                            }
                            else if(sunit==3)
                            {
                                var sunitname = "Case";
                                //alert(sunitname);
                            }
                            else if(sunit==4)
                            {
                                var sunitname = "Bag";
                                //alert(sunitname);
                            }
                            else if(sunit==5)
                            {
                                var sunitname = "Outer";
                                //alert(sunitname);
                            }

                            if(tunit==1)
                            {
                                var tunitname = "Piece";
                                //alert(tunitname);
                            }
                            else if(tunit==2)
                            {
                                var tunitname = "Box";
                                //alert(tunitname);
                            }
                            else if(tunit==3)
                            {
                                var tunitname = "Case";
                                //alert(tunitname);
                            }
                            else if(tunit==4)
                            {
                                var tunitname = "Bag";
                                //alert(tunitname);
                            }
                            else if(tunit==5)
                            {
                                var tunitname = "Outer";
                                //alert(tunitname);
                            }

                            //alert(punit);
                            //alert(sunit);
                            //alert(tunit);
                            $(".display").hide();
                            var counter = parseInt($('#counter').val());
                            var count = 1;
                            var html = '';

                            $(".newitem").each(function(i) {
                                count++;
                            });
                            html = html + '<div class="form-row table-responsive"><table class="table table-striped table-hover"><tr class="dynamic_item_' + counter +
                                ' newitem" name="newitem">';
                            //html = html + '<br>';
                            //html = html + '<div class="form-group">';
                            //html = html + '<label class="sr-only" for="">label</label>';
                            //html = html + '<td><input type="text" class="form-control" id="dynamic_textbox[]" value="'+data['id']+'" placeholder="Add text here"></td><td><input type="text" class="form-control" id="dynamic_textbox[]" value="'+data['product']+'" placeholder="Add text here"></td>';

                            html = html + '<input class="form-control dynamic_textbox12" type="hidden" id="sno1" name="sno1['+ counter +']"/>'+
                            '<td><input class="form-control dynamic_textbox1 sno" type="text" id="sno" name="sno['+ counter +']" value="' +data['hsncode'] + '" placeholder="S.No." readonly/>'+
                            '</td><td><input class="form-control dynamic_textbox2 product"  type="text" id="product" placeholder="Product Name" name="product['+ counter +']" value="' +data['product'] + '" placeholder="Product Name" readonly /></td>'+
                            '<td><input class="form-control dynamic_textbox3 basic" type="text" id="basic_'+ counter +'" name="basic['+ counter +']" value="' +data['mrp'] +'" placeholder="Basic Price" readonly /></td>'+
                             '<td><select class="custom-select dynamic_textbox6 unit" name="unit['+ counter +']" id="unit_'+ counter +'" for="'+ counter +'"><option>--Select Varient--</option>'+
                            '<option value="'+data['sellpricepu']+'">'+punitname+'('+data['sellpricepu']+')</option>'+
                            '<option value="'+data['sellpricesu']+'">'+sunitname+'('+data['sellpricesu']+')</option>'+
                            '<option value="'+data['sellpricetu']+'">'+tunitname+'('+data['sellpricetu']+')</option>'+
                            '</select></td>'+
                            '<td><input class="form-control dynamic_textbox4" type="text" id="gst_'+ counter +'" name="gst['+ counter +']" value="' +gstname+'" placeholder="GST %" readonly /></td>'+
                            '<td><select class="custom-select dynamic_textbox6 unit" name="unit['+ counter +']" id="unit_'+ counter +'" for="'+ counter +'"><option>--Select Unit--</option>'+
                            '<option value="'+data['sellpricepu']+'">'+punitname+'('+data['sellpricepu']+')</option>'+
                            '<option value="'+data['sellpricesu']+'">'+sunitname+'('+data['sellpricesu']+')</option>'+
                            '<option value="'+data['sellpricetu']+'">'+tunitname+'('+data['sellpricetu']+')</option>'+
                            '</select></td>'+
                            '<td><input class="form-control dynamic_textbox5 quantity" type="text" id="quantity_'+ counter+'" name="quantity['+ counter +']" placeholder="Quantity" for="'+ counter +'" /></td>'+
                            
                            '<td><input class="form-control dynamic_textbox7 txt rate" type="text" id="rate_'+ counter +'" name="rate['+ counter +']" value="" placeholder="Total Price" for="'+ counter +'" readonly/></td>'+
                            '<td><input class="form-control dynamic_textbox8" type="text" id="freeqty_'+ counter +'" name="freeqty['+ counter +']" placeholder="Free Material" for="'+ counter +'"/></td>'+
                            '<td><input class="form-control dynamic_textbox9" type="text" id="discountper_'+ counter +'" name="discountper['+ counter +']" placeholder="Discount %" for="'+ counter +'" /></td>'+
                            '<td><input class="form-control dynamic_textbox10" type="text" id="discountamt_'+ counter +'" name="discountamt['+ counter +']" placeholder="Discount Amt" for="'+ counter +'"/></td>'+
                            '<td><input class="form-control dynamic_textbox11 total" type="text" id="total_'+ counter +'" name="total['+ counter +']" placeholder="Product Total" for="'+ counter +'" readonly/></td>';
                            html = html + '<td><button type="button" class="btn btn-primary dynamic_button" id="' +counter+ '">Remove</button><td>';
                            html = html + '</tr></table></div>';
                            
                            //alert(html);

                            //$('#dynamic_field').show();
                            $('#dynamic_field').append(html);
                            
                            $("#dynamic_field").on('input', 'input.quantity,input.unit,input.discountper', function() {
                            getTotalCost1($(this).attr("for"));
                            });

                            //$('#dynamic_field').append(html);
                            $('#counter').val( counter + 1 );
                           
                           

                        }
                    });

                }
            }
        });

       

     /* $("#dynamic_field").on('input', '.txt', function () {
           
       var calculated_total_sum = 0;

       $("#dynamic_field .txt").each(function () {
           var get_textbox_value = $(this).val();
           //alert(get_textbox_value);
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
              $("#totalamount").val(calculated_total_sum);
              $("#nettotal").val(calculated_total_sum);
       });  */
     /*  $("#dynamic_field").on('input', '.quantity', function () {
           
           var calculated_total_sum = 0;
    
           $("#dynamic_field .quantity").each(function () {
               var get_textbox_value = $(this).val();
               //alert(get_textbox_value);
               if ($.isNumeric(get_textbox_value)) {
                  calculated_total_sum += parseFloat(get_textbox_value);
                  }                  
                });
                  $("#totalquantity").val(calculated_total_sum);
                  //$("#nettotal").val(calculated_total_sum);
           }); */

       /*$("#dynamic_field").on('input', 'input.quantity,input.unit', function() {
  getTotalCost($(this).attr("for"));
}); */



    }); 




});


function calculateQuantity() {
  var totalqty = 0;
  $('.quantity').each(function() {
     totalqty += parseFloat($(this).val());
  });
  $('#totalquantity').val(totalqty);
  
}

function getTotalCost(ind) {
  var qty = $('#quantity_'+ind).val();
  var price = $('#unit_'+ind).val();
  var tot = (qty * price);
  //var tot = totNumber.toFixed(2);
  $('#rate_'+ind).val(tot);
  calculateSubTotal();
}

function getTotalCost1(ind) {
  var qty = $('#quantity_'+ind).val();
  var price = $('#unit_'+ind).val();
  var disper = $('#discountper_'+ind).val();
  var disamt = $('#discountamt_'+ind).val();
  var tot = (qty * price);

  if(disper){
    var protot = (qty * price)-disper;
    $('#total_'+ind).val(protot);
    
  }
  else if(disamt){
    var protot = (qty * price)-disamt;
    $('#total_'+ind).val(protot);
  }
  else{
    $('#total_'+ind).val(tot);
  }
  //var tot = totNumber.toFixed(2);
  $('#rate_'+ind).val(tot);
  
  calculateQuantity();
  calculateSubTotal1();
}

function calculateSubTotal1() {
  var subtotal = 0;
  var rate = $('.rate').val();
  var tot = $('.total').val();
  
  /*if(tot)
  { */
    $('.total').each(function() {
     subtotal += parseFloat($(this).val());
  });
  $('#totalamount').val(subtotal);
  $('#nettotal').val(subtotal);
  /*}
  else if(rate)
  {
    $('.rate').each(function() {
     subtotal += parseFloat($(this).val());
  });
  $('#totalamount').val(subtotal);
  $('#nettotal').val(subtotal);
  } */
   
  
}
 




function calculateSubTotal() {
  var subtotal = 0;
  $('.rate').each(function() {
     subtotal += parseFloat($(this).val());
  });
  $('#totalamount').val(subtotal);
  $('#nettotal').val(subtotal);
} 



</script>
<script>
      $(document).ready(function(){
         $('#shipping').on('change keyup click', function() {
    var price = $('#totalamount').val();
  var dis =  $('#shipping').val();
  var total = parseFloat(price) + parseFloat(dis);
  //alert(price);exit;
  //document.getElemenparseInttById('nettotal').innerHTML ="₹"+total;
   $('#nettotal').val(total);
  //$('#nettotal').val(price+dis);
 
  
  });
      });
   </script>

<!-- Remove textbox while click on the remove button -->
<script type="text/javascript">
$(document).on('click', '.dynamic_button', function() {
    $(this).closest('.newitem').remove();

    calculateQuantity();
    calculateSubTotal1();

    /* var id = $(this).attr('id');
     if(id!=1)
     {
         $('.dynamic_item_'+id).remove();
     } */
});


// $(document).ready(function() {
//   $('#submit').click(function() {
//     if (!$('#totalamount').val()) {
//       alert('Please search any product to create purchase order!!');
//       $("#search").focus();
//       return false;
//     }
//   })
// });
</script>




<!-- Get all values while click on submit button -->
<!-- <script type="text/javascript">
         $(document).on('click','#submit',function(){
             var value1 = [];
             var value2 = [];
             var value3 = [];
             var value4 = [];
             var value5 = [];
             var value6 = [];
             var value7 = [];
             var value8 = [];
             var value9 = [];
             var value10 = [];
             $(".dynamic_textbox1").each(function(i){
                 if($(this).val() != '')
                 {
                     value1[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox2").each(function(i){
                 if($(this).val() != '')
                 {
                     value2[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox3").each(function(i){
                 if($(this).val() != '')
                 {
                     value3[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox4").each(function(i){
                 if($(this).val() != '')
                 {
                     value4[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox5").each(function(i){
                 if($(this).val() != '')
                 {
                     value5[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox6").each(function(i){
                 if($(this).val() != '')
                 {
                     value6[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox7").each(function(i){
                 if($(this).val() != '')
                 {
                     value7[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox8").each(function(i){
                 if($(this).val() != '')
                 {
                     value8[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox9").each(function(i){
                 if($(this).val() != '')
                 {
                     value9[i] = $(this).val();
                 }
             });
             $(".dynamic_textbox10").each(function(i){
                 if($(this).val() != '')
                 {
                     value10[i] = $(this).val();
                 }
             });
             alert(value1);
             alert(value2);
             alert(value3);
             alert(value4);
             alert(value5);
             alert(value6);
             alert(value7);
             alert(value8);
             alert(value9);
             alert(value10);
             //$('#dynamic_field').append(value1);
         });
</script> -->

<?php include("footer.php");?>