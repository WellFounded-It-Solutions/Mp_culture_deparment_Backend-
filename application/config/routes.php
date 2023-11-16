<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home';

$route['stock']='home/stock';
$route['godown']='home/godown';

$route['stock/(:num)']='home/stock/(:num)';
$route['add_stock']='home/add_stock';
$route['edit_stock']='home/edit_stock';
$route['stockstatus/(:num)/(:num)']='home/stockstatus/(:num)/(:num)';
$route['deletestock/(:num)/(:num)']='home/deletestock/(:num)/(:num)';

$route['admin']='home/admin';
$route['logout']='home/logout';
$route['emplogout']='home/emplogout';
$route['dplogout']='home/dplogout';
$route['login']='home/login';
$route['dashboard']='home/dashboard';
$route['division_dashboard']='home/dashboard_divi';
//$route['division_dashboard']='home/dashboard_divi';
//$route['(:any)/(:any)'] = 'home/dashboard_divi/$1';
//$route['(:any)'] = 'home/dashboard_divi/';
//$route['(:any)'] = 'home/dashboard_divi/(:num)';
$route['empdashboard']='home/empdashboard';
$route['dpdashboard']='home/dpdashboard';
$route['master']='home/master';
$route['demographics']='home/demographics';
$route['users']='home/users';
$route['adduser']='home/adduser';
$route['add_user']='home/add_user';
//$route['edituser']='home/edituser';
$route['edituser/(:num)']='home/edituser/(:num)';
$route['edit_user']='home/edit_user';
$route['deleteuser/(:num)']='home/deleteuser/(:num)';

$route['country']='home/country';
$route['countrytoday']='home/countrytoday';
$route['countryactive']='home/countryactive';
$route['countryinactive']='home/countryinactive';
$route['addcountry']='home/addcountry';
$route['add_country']='home/add_country';
$route['editcountry/(:num)']='home/editcountry/(:num)';
$route['edit_country']='home/edit_country';
$route['deletecountry/(:num)']='home/deletecountry/(:num)';

$route['state']='home/state';
$route['statetoday']='home/statetoday';
$route['stateactive']='home/stateactive';
$route['stateinactive']='home/stateinactive';
$route['addstate']='home/addstate';
$route['add_state']='home/add_state';
$route['editstate/(:num)']='home/editstate/(:num)';
$route['edit_state']='home/edit_state';
$route['deletestate/(:num)']='home/deletestate/(:num)';

$route['city']='home/city';
$route['citytoday']='home/citytoday';
$route['cityactive']='home/cityactive';
$route['cityinactive']='home/cityinactive';
$route['addcity']='home/addcity';
$route['add_city']='home/add_city';
$route['editcity/(:num)']='home/editcity/(:num)';
$route['edit_city']='home/edit_city';
$route['deletecity/(:num)']='home/deletecity/(:num)';

$route['area']='home/area';
$route['areatoday']='home/areatoday';
$route['areaactive']='home/areaactive';
$route['areainactive']='home/areainactive';
$route['addarea']='home/addarea';
$route['add_area']='home/add_area';
$route['editarea/(:num)']='home/editarea/(:num)';
$route['edit_area']='home/edit_area';
$route['deletearea/(:num)']='home/deletearea/(:num)';

$route['pincode']='home/pincode';
$route['pincodetoday']='home/pincodetoday';
$route['pincodeactive']='home/pincodeactive';
$route['pincodeinactive']='home/pincodeinactive';
$route['addpincode']='home/addpincode';
$route['add_pincode']='home/add_pincode';
$route['editpincode/(:num)']='home/editpincode/(:num)';
$route['edit_pincode']='home/edit_pincode';
$route['deletepincode/(:num)']='home/deletepincode/(:num)';

$route['manufacturers']='home/manufacturers';
$route['manufacturerstoday']='home/manufacturerstoday';
$route['manufacturersactive']='home/manufacturersactive';
$route['manufacturersinactive']='home/manufacturersinactive';
$route['addmanufacturer']='home/addmanufacturer';
$route['add_manufacturer']='home/add_manufacturer';
$route['editmanufacturer/(:num)']='home/editmanufacturer/(:num)';
$route['edit_manufacturer']='home/edit_manufacturer';
$route['deletemanufacturer/(:num)']='home/deletemanufacturer/(:num)';

$route['vendors']='home/vendors';
$route['vendorstoday']='home/vendorstoday';
$route['vendorsactive']='home/vendorsactive';
$route['vendorsinactive']='home/vendorsinactive';
$route['addvendor']='home/addvendor';
$route['add_vendor']='home/add_vendor';
$route['editvendor/(:num)']='home/editvendor/(:num)';
$route['edit_vendor']='home/edit_vendor';
$route['deletevendor/(:num)']='home/deletevendor/(:num)';

$route['customers']='home/customers';
$route['customerstoday']='home/customerstoday';
$route['customersactive']='home/customersactive';
$route['customersinactive']='home/customersinactive';
$route['addcustomer']='home/addcustomer';
$route['add_customer']='home/add_customer';
$route['editcustomer/(:num)']='home/editcustomer/(:num)';
$route['edit_customer']='home/edit_customer';
$route['deletecustomer/(:num)']='home/deletecustomer/(:num)';

$route['employees']='home/employees';
$route['employeestoday']='home/employeestoday';
$route['employeesactive']='home/employeesactive';
$route['employeesinactive']='home/employeesinactive';
$route['addemployee']='home/addemployee';
$route['add_employee']='home/add_employee';
$route['editemployee/(:num)']='home/editemployee/(:num)';
$route['edit_employee']='home/edit_employee';
$route['deleteemployee/(:num)']='home/deleteemployee/(:num)';

$route['invoices']='home/invoices';
$route['invoicestoday']='home/invoicestoday';
$route['invoicesactive']='home/invoicesactive';
$route['invoicesinactive']='home/invoicesinactive';
$route['addinvoice']='home/addinvoice';
$route['printinvoice']='home/printinvoice';
$route['add_invoice']='home/add_invoice';
$route['editinvoice/(:num)']='home/editinvoice/(:num)';
$route['edit_invoice']='home/edit_invoice';
$route['deleteinvoice/(:num)']='home/deleteinvoice/(:num)';

$route['purchaseorders']='home/purchaseorders';
$route['purchaseorderstoday']='home/purchaseorderstoday';
$route['purchaseordersactive']='home/purchaseordersactive';
$route['purchaseordersinactive']='home/purchaseordersinactive';
$route['addpurchaseorder']='home/addpurchaseorder';
$route['add_purchaseorder']='home/add_purchaseorder';
$route['editpurchaseorder/(:num)']='home/editpurchaseorder/(:num)';
$route['edit_purchaseorder']='home/edit_purchaseorder';
$route['deletepurchaseorder/(:num)']='home/deletepurchaseorder/(:num)';

$route['viewinvoice/(:num)']='home/viewinvoice/(:num)';
$route['printinvoice/(:num)']='home/printinvoice/(:num)';

$route['viewinvoice1/(:num)']='home/viewinvoice1/(:num)';
$route['printinvoice1/(:num)']='home/printinvoice1/(:num)';

$route['saleorders']='home/saleorders';
$route['saleorderstoday']='home/saleorderstoday';
$route['saleordersactive']='home/saleordersactive';
$route['saleordersinactive']='home/saleordersinactive';
$route['addsaleorder']='home/addsaleorder';
$route['add_saleorder']='home/add_saleorder';
$route['editsaleorder/(:num)']='home/editsaleorder/(:num)';
$route['edit_saleorder']='home/edit_saleorder';
$route['deletesaleorder/(:num)']='home/deletesaleorder/(:num)';

$route['deliverypartners']='home/deliverypartners';
$route['adddeliverypartner']='home/adddeliverypartner';
$route['add_deliverypartner']='home/add_deliverypartner';
$route['editdeliverypartner/(:num)']='home/editdeliverypartner/(:num)';
$route['edit_deliverypartner']='home/edit_deliverypartner';
$route['deletedeliverypartner/(:num)']='home/deletedeliverypartner/(:num)';

$route['unit']='home/unit';
$route['addunit']='home/addunit';
$route['add_unit']='home/add_unit';
$route['editunit/(:num)']='home/editunit/(:num)';
$route['edit_unit']='home/edit_unit';
$route['deleteunit/(:num)']='home/deleteunit/(:num)';

$route['tax']='home/tax';
$route['addtax']='home/addtax';
$route['add_tax']='home/add_tax';
$route['edittax/(:num)']='home/edittax/(:num)';
$route['edit_tax']='home/edit_tax';
$route['deletetax/(:num)']='home/deletetax/(:num)';

$route['department']='home/department';
$route['adddepartment']='home/adddepartment';
$route['add_department']='home/add_department';
$route['editdepartment/(:num)']='home/editdepartment/(:num)';
$route['edit_department']='home/edit_department';
$route['deletedepartment/(:num)']='home/deletedepartment/(:num)';

$route['designation']='home/designation';
$route['adddesignation']='home/adddesignation';
$route['add_designation']='home/add_designation';
$route['editdesignation/(:num)']='home/editdesignation/(:num)';
$route['edit_designation']='home/edit_designation';
$route['deletedesignation/(:num)']='home/deletedesignation/(:num)';

$route['division']='home/division';
$route['company']='home/company';
// $route['categorytoday']='home/categorytoday';
// $route['categoryactive']='home/categoryactive';
// $route['categoryinactive']='home/categoryinactive';
// $route['addcategory']='home/addcategory';
 $route['add_division']='home/add_division';
// $route['editcategory/(:num)']='home/editcategory/(:num)';
// $route['edit_category']='home/edit_category';
// $route['deletecategory/(:num)']='home/deletecategory/(:num)';

$route['category']='home/category';
$route['categorytoday']='home/categorytoday';
$route['categoryactive']='home/categoryactive';
$route['categoryinactive']='home/categoryinactive';
$route['addcategory']='home/addcategory';
$route['add_category']='home/add_category';
$route['editcategory/(:num)']='home/editcategory/(:num)';
$route['edit_category']='home/edit_category';
$route['deletecategory/(:num)']='home/deletecategory/(:num)';

$route['subcategory']='home/subcategory';
$route['subcategorytype']='home/subcategorytype';
$route['subcategorytoday']='home/subcategorytoday';
$route['subcategoryactive']='home/subcategoryactive';
$route['subcategoryinactive']='home/subcategoryinactive';
$route['addsubcategory']='home/addsubcategory';
$route['add_subcategory']='home/add_subcategory';
$route['editsubcategory/(:num)']='home/editcategory/(:num)';
$route['edit_subcategory']='home/edit_subcategory';
$route['edit_subcategorytyp']='home/edit_subcategorytyp';
$route['deletesubcategory/(:num)']='home/deletesubcategory/(:num)';

$route['manufacturers']='home/manufacturers';
$route['addmanufacturer']='home/addmanufacturer';
$route['add_manufacturer']='home/add_manufacturer';
$route['editmanufacturer/(:num)']='home/editmanufacturer/(:num)';
$route['edit_manufacturer']='home/edit_manufacturer';
$route['deletemanufacturer/(:num)']='home/deletemanufacturer/(:num)';

$route['products']='home/products';
$route['productstoday']='home/productstoday';
$route['productsactive']='home/productsactive';
$route['productsinactive']='home/productsinactive';
$route['addproduct']='home/addproduct';
$route['add_product']='home/add_product';
$route['editproduct/(:num)']='home/editproduct/(:num)';
$route['edit_product']='home/edit_product';
$route['deleteproduct/(:num)']='home/deleteproduct/(:num)';

$route['shops']='home/shops';
$route['addshop']='home/addshop';
$route['add_shop']='home/add_shop';
$route['editshop/(:num)']='home/editshop/(:num)';
$route['edit_shop']='home/edit_shop';
$route['deleteshop/(:num)']='home/deleteshop/(:num)';

$route['promos']='home/promos';
$route['addpromo']='home/addpromo';
$route['add_promo']='home/add_promo';
$route['editpromo/(:num)']='home/editpromo/(:num)';
$route['edit_promo']='home/edit_promo';
$route['deletepromo/(:num)']='home/deletepromo/(:num)';

$route['banners']='home/banners';
$route['addbanner']='home/addbanner';
$route['add_banner']='home/add_banner';
$route['editbanner/(:num)']='home/editbanner/(:num)';
$route['edit_banner']='home/edit_banner';
$route['deletebanner/(:num)']='home/deletebanner/(:num)';

$route['services']='home/services';
$route['addservice']='home/addservice';
$route['add_service']='home/add_service';
$route['editservice/(:num)']='home/editservice/(:num)';
$route['edit_service']='home/edit_service';
$route['deleteservice/(:num)']='home/deleteservice/(:num)';

$route['tickets']='home/tickets';
$route['subscribers']='home/subscribers';
$route['enquiries']='home/enquiries';


//$route['userstatus/:num']='home/userstatus/:num';
//$route['admin'] = 'admin/login';

$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;
