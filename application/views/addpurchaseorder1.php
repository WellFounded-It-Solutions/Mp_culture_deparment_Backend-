<?php include("header.php");?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/typeahead-js/typeahead.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Purchase Order</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url();?>purchaseorder">Purchase Orders</a></li>
<li class="breadcrumb-item <?php if($this->uri->segment(1)=='addpurchaseorder') { echo 'active';}?>"><a href="<?php echo base_url();?>addpurchaseorder">Add Purchase Order</a></li>
</ol>
</div>

<div class="card mb-4">
<h6 class="card-header">Add Purchase Order</h6>
<div class="card-body">
<form action="<?php echo base_url();?>add_purchaseorder" method="post" enctype="multipart/form-data">


<div class="form-row">




<div class="form-group col-md-3">
<label class="form-label">Purchase Date</label>
<input type="date" name="pdate" id="pdate" class="form-control" placeholder="Purchase Date">
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Bill No</label>
<input type="text" name="billno" id="billno" class="form-control" placeholder="Bill No">
<div class="clearfix"></div>
</div>

<form action="<?php echo base_url();?>add_purchaseorder" method="post" enctype="multipart/form-data">
<div class="form-group col-md-3">
<label class="form-label">Vendor</label>
<select class="custom-select" name="vendorid" id="vendorid">
<?php foreach($vendors as $vc) { ?>
<option value="<?php echo $vc['id'];?>"><?php echo $vc['name'];?></option>
<?php } ?>
</select>
<div class="clearfix"></div>
</div>

<div class="form-group col-md-3">
<label class="form-label">Discount</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="1">
<span class="form-check-label">Percentage</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="2">
<span class="form-check-label">Amount</span>
</label>
<label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="3">
<span class="form-check-label">Material</span>
</label>
<div class="clearfix"></div>
</div>

</div>

</div>
</div>

<div class="card mb-4">
<div class="card-body">
<div class="form-row table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr>
<th>S.No.</th>
<th>Product</th>
<th>Unit</th>
<th>Quantity</th>
<th>Price</th>
<th>Discount</th>
<th>Tax</th>
<th>Total</th>
<th></th>
</tr>
 



<div class="autocomplete" style="width:300px;">
<input id="searchField" type="text" name="animal" placeholder="Animals" class="form-control" />
</div>



<script>
   function autocomplete(searchEle, arr) {
      var currentFocus;
      searchEle.addEventListener("input", function(e) {
         var divCreate,
         b,
         i,
         fieldVal = this.value;
         closeAllLists();
         if (!fieldVal) {
            return false;
         }
         currentFocus = -1;
         divCreate = document.createElement("DIV");
         divCreate.setAttribute("id", this.id + "autocomplete-list");
         divCreate.setAttribute("class", "autocomplete-items");
         this.parentNode.appendChild(divCreate);
         for (i = 0; i <arr.length; i++) {
            if ( arr[i].substr(0, fieldVal.length).toUpperCase() == fieldVal.toUpperCase() ) {
               b = document.createElement("DIV");
               b.innerHTML = "<strong>" + arr[i].substr(0, fieldVal.length) + "</strong>";
               b.innerHTML += arr[i].substr(fieldVal.length);
               b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
               b.addEventListener("click", function(e) {
                  searchEle.value = this.getElementsByTagName("input")[0].value;
                  closeAllLists();
               });
               divCreate.appendChild(b);
            }
         }
      });
      searchEle.addEventListener("keydown", function(e) {
         var autocompleteList = document.getElementById(
            this.id + "autocomplete-list"
         );
         if (autocompleteList)
            autocompleteList = autocompleteList.getElementsByTagName("div");
         if (e.keyCode == 40) {
            currentFocus++;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 38) {
            //up
            currentFocus--;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
               if (autocompleteList) autocompleteList[currentFocus].click();
            }
         }
      });
      function addActive(autocompleteList) {
         if (!autocompleteList) return false;
            removeActive(autocompleteList);
         if (currentFocus >= autocompleteList.length) currentFocus = 0;
         if (currentFocus < 0) currentFocus = autocompleteList.length - 1;
         autocompleteList[currentFocus].classList.add("autocomplete-active");
      }
      function removeActive(autocompleteList) {
         for (var i = 0; i < autocompleteList.length; i++) {
            autocompleteList[i].classList.remove("autocomplete-active");
         }
      }
      function closeAllLists(elmnt) {
         var autocompleteList = document.getElementsByClassName(
            "autocomplete-items"
         );
         for (var i = 0; i < autocompleteList.length; i++) {
            if (elmnt != autocompleteList[i] && elmnt != searchEle) {
               autocompleteList[i].parentNode.removeChild(autocompleteList[i]);
            }
         }
      }
      document.addEventListener("keydown", function(e) {
         closeAllLists(e.target);
      });
   }
   var animals = ["giraffe","tiger", "lion", "dog","cow","bull","cat","cheetah"];
  // var animals = 
   autocomplete(document.getElementById("searchField"), animals);
</script>


<form class="dynamic-autocomplete-frm" id="dynamic-dependent-frm">
    <input type="hidden" name="autocomplete" id="field-autocomplete">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" name="add_autocomplete" class="form-control" id="add-autocomplete" placeholder="Enter Product">
            </div>
        </div>
    </div>

</form>

<script type="text/javascript">
$(document).ready(function(){
// autocomplete functionality
if (jQuery('input#add-autocomplete').length > 0) {
    jQuery('input#add-autocomplete').autocomplete({
      displayText: function(item) {
           return item.product_name;
      },
      afterSelect: function(item) {
            this.$element[0].value = item.product_name;
            jQuery("input#field-autocomplete").val(item.product_id);
      },
      source: function (query, process) {
        jQuery.ajax({
                url: baseurl + "home/getProductAutocomplete",
                data: {query:query},
                dataType: "json",
                type: "POST",
                success: function (data) {
                    process(data);
                }
            })
      }   
    });
}
});
</script>

<!-- <script type="text/javascript">
    $('#typeahead-input').typeahead({
        source:  function (query, process) {
        return $.get('home/ajaxpro', { query: query }, function (data) {
                console.log(data);
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script> -->
<input type="text" name="product" id="product" class="form-control" placeholder="Product" maxlength="10" autocomplete="off">



<script type="text/javascript">
var BASE_URL = "<?php echo base_url(); ?>";
        $(document).ready(function(){
            $( "#product" ).autocomplete({
 
 source: function(request, response) {
     $.ajax({
     url: BASE_URL + "home/get_autocomplete/?",
     data: {
             term: $("#product").val()
      },
     dataType: "json",
     type: "POST",
     success: function(data){
        var resp = $.map(data,function(obj){
             return obj.product;
        }); 

        response(resp);
     }
 });
},
minLength: 1
});
        });
    </script>

<tr class="fieldGroup">
    <td colspan="9" align="right">
    <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add Product</a>
    <td>
</tr>

<tr class="fieldGroupCopy" style="display: none;">
<td>
    <input type="text" name="sno" id="sno" class="form-control" placeholder="SNo." maxlength="10">
    </td>
    <td>
   <!--  <td><input id="typeahead-input" class="form-control" type="text" autocomplete="off"></td> -->
<!--<input type="text" name="product" id="shopname" class="form-control" placeholder="ProductName" maxlength="100"> -->
<!-- <select class="form-control" name="products[]" id="products">
<?php foreach($products as $p) { ?>
<option value="<?php echo $p['id'];?>"><?php echo $p['product'];?></option>
<?php } ?>
</select> -->
<td><input type="text" name="id" id="productid_1" class="form-control" placeholder="" maxlength="10"></td>
<form method="post">
<td><</td>
</form>
<td><input type="text" name="mrp" id="mrp_1" class="form-control" placeholder="" maxlength="10"></td>
<td><input type="text" name="tax" id="tax_1" class="form-control" placeholder="Tax" maxlength="100"></td>
<td><input type="text" name="total" id="total" class="form-control" placeholder="Total" maxlength="100"></td>
<td>
    <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>-</a>
</td>
</tr>



<tr>
<th colspan="4">Total Amount </th>
<th colspan="4">Tax Amount </th>
</tr>
<tr>
<th colspan="8"class="text-right">Net Payable:     </th>
</tr>








</thead>
<tbody>
</tbody>
</table>


</div>

<div class="clearfix"><br/></div>
<button type="submit" class="btn btn-primary">Save</button>

</form>
</div>
</div>

</div>
</div>


<script>
    
    function calc() 
{
  var price = document.getElementById("price").value;
  var noTickets = document.getElementById("quantity").value;
  //var total = document.getElementById("total").value;
  var total = parseFloat(price) * noTickets
  if (!isNaN(total))    
    document.getElementById("total").value = total;
}
    
</script>

<script type="text/javascript">
   $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<tr class="fieldGroup">'+$(".fieldGroupCopy").html()+'</tr>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>


<?php include("footer.php");?>