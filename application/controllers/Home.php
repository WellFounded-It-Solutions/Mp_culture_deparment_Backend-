<?php error_reporting(0);
 defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
        function __construct(){
        parent::__construct();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));	
		$this->load->model('home_model');
		$this->load->library('session');	

    }


	// ======================================new route start==========================

	public function program()
	{
		$this->load->view('program');
	}
	public function artists()
	{
		$this->load->view('artists');
	}
	public function audience()
	{
		$this->load->view('audience');
	}
	public function academies()
	{
		$this->load->view('academies');
	}
	public function venue()
	{
		$this->load->view('venue');
	}
	public function smsmodule()
	{
		$this->load->view('smsmodule');
	}



	public function academie_dashboard()
	{
		$this->load->view('academie_dashboard');
	}
	public function literature()
	{
		$this->load->view('literature');
	}
	// ======================================new route end==========================


	public function index()
	{
		$this->load->view('login');
	}
		public function artistlogin()
	{
		$this->load->view('artist_login');
	}
	public function login_detail()
	{       if($this->input->post('submit')){
	    	$artist_mobile = $this->input->post('mobile');
	    	$_SESSION['mobile']=$artist_mobile;
				$this->db->where('artist_mobile', $artist_mobile);
				$result = $this->db->get('artist_list');
			if($result->num_rows() > 0)
				{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">This Mobile no is already exist!</div>');
					redirect('home/login_detail');
				return false;
				
				}else{
				$this->session->set_flashdata('otp', '<div class="alert alert-success text-center">OTP is sent on your Mobile No.!</div>'); 
				redirect('home/otp_login');
				}
	}
				
		$this->load->view('demo_login');
	}
public function register_step()
	{
		$this->load->view('register_step2');
	}
	public function otp_login()
	{
	      if($this->input->post('submit')){
			$table='users';
			$data = array(
				'mobile' => $this->input->post('nob'),
			//	'password' => sha1($this->input->post('password')),
			//	'password' => $this->input->post('password'),
			//	'status' => '1',
			);
			//$result = $this->Auth->login('users', ['username' => $username]);
			$result = $this->home_model->validate($table,$data);
			
	   //echo  $nob=$_SESSION['mobile'];
	   	if(isset($result))
			{
				$session_data = [
					'admin_id' => $result->id,
			    	'roles' => $result->roles,
					'admin_name' => $result->name,
					'admin_email' => $result->email,
					'admin_img' => $result->profileimage,
					'admin_logo' => $result->logo,
					'role' => $result->role,
				];
				$this->session->set_userdata('admin_session', $session_data);
			//	$this->session->set_flashdata('msg', 'Login Successfully'); 
			//	redirect(base_url().'home/dashboard');
			}
			
	  
	        	$nob = $this->input->post('nob'); 
	        	$otp1 = $this->input->post('otp1');
	        		$otp2 = $this->input->post('otp2');
	        			$otp3 = $this->input->post('otp3');
	        				$otp4 = $this->input->post('otp4');
	        			
			//	$this->db->where('artist_mobile', $artist_mobile);
				//$result = $this->db->get('artist_list');
                    $otpa="1";
                    $otpb="2";
                    $otpc="3";
                    $otpd="4";
			if($otp1==$otpa And $otp2==$otpb And $otp3==$otpc And $otp4==$otpd)
				{
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Welcome!</div>'); 
			redirect("https://jusmarktech.in/mpculturedept/artistregistration.php?no&no=$nob");
				return false;
				
				}else{
				    $this->session->set_flashdata('otp', '<div class="alert alert-danger text-center">Invalid OTP!</div>');
				
				redirect('home/otp_login');
				}
	}
		$this->load->view('otp_login');
	}
	public function add_credit()
	{
		$table='credit';
		$date = $this->input->post('date');
		$payfor = $this->input->post('pay');
		$bywhm = $this->input->post('vendorid');
		$price = $this->input->post('price1');
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         	$billingOptions = $this->input->post('billingOptions');
        
		// $date = date('Y-m-d');		
		$data = array('by_whom'=>$bywhm,'amount'=>$price,'date'=>$date,'billingOptions'=>$billingOptions);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Expense Info Saved Successfully');                   
		 redirect(base_url().'home/credit');
	}
	public function edit_credit()
	{
		$table='credit';
		$id = $this->input->post('id');
		$payfor = $this->input->post('pay1');
		$bywhm = $this->input->post('vendorid1');
		$price = $this->input->post('price');
       		$billingOptions = $this->input->post('billingOption');
       		$date = date('d-M-Y');
	
			
		$data = array('by_whom'=>$bywhm,'amount'=>$price,'date'=>$date,'billingOptions'=>$billingOptions);
			
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Expence Info Updated Successfully');                   
		 redirect(base_url().'home/credit');
	}
		/*-------------------------category--------------------------------------*/
    public function category_find()
		{
			$data = $this->input->post('c');
			$step="SELECT * from  subcategory where  catid='".$data."'" ;
			$sql=$this->db->query($step);
			$data=$sql->result_array();
			foreach ($data as $scat)
			{
			echo '<option value='.$scat["id"].'>'.$scat["subcategory"].'</option>';
			}  
		}
	public function sub_category_find()
		{
		$data = $this->input->post('sc');
		$step="SELECT * from  subcategory_type where  sbcat='".$data."'" ;
		$sql=$this->db->query($step);
		$data=$sql->result_array();
		foreach ($data as $scat)
		{
		echo '<option value='.$scat["id"].'>'.$scat["sb_type"].'</option>';
		}  
		}	
		/*-------------------------category--------------------------------------*/
	public function credit()
	{
		$table="credit";
		$data['expense']=$this->home_model->fetchall($table);
		$table="tb_expence_head";
		$data['expence']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="credit";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		$this->load->view('credit',$data);
	}
	public function mainstock()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$table1="stock";
		// $id=$this->uri->segment(2);
		$data['godown']=$this->home_model->fetchalla($table);
		$data['prodct']=$this->home_model->fetchdata2($table1,$id);
		$table="category";
		$data['category']=$this->home_model->fetchalla($table);
		$table="products";
		$data['products']=$this->home_model->fetchalla($table);
		$table="stock";
		$data['stock']=$this->home_model->getmainstock();
		$table="area";
		$data['area']=$this->home_model->fetchalla($table);
		$table="godown";
		$data['godowns']=$this->home_model->fetchalla($table);
		$this->load->view('mainstock',$data);
	}

	public function add_purchasereturn()
	{

		//print_r($this->input->post()); exit;
		$table='purchaseorder';

		$purchasedate = $this->input->post('purchasedate');
		$vendorid = $this->input->post('vendorid'); 
		$gdn_id = $this->input->post('gdn_id'); 
		$billno = $this->input->post('billno'); 
		$maindiscount = $this->input->post('maindiscount');
        $product=$this->input->post('product');
		$sno = $this->input->post('sno');
		$sno1 = $this->input->post('sno1');
		//print_r($product); exit;
		//echo $product; exit;
        $basic=$this->input->post('basic');
        $gst=$this->input->post('gst');
		$unit=$this->input->post('unit');
		$quantity=$this->input->post('quantity');
        $rate=$this->input->post('rate');
		$freeqty=$this->input->post('freeqty');
		$discountper=$this->input->post('discountper');
		$discountamt=$this->input->post('discountamt');
		$total=$this->input->post('total');
		$totalquantity=$this->input->post('totalquantity');
		$totalamount=$this->input->post('totalamount');
		
		$div=$this->input->post('div');
		$comp=$this->input->post('comp');
		$remark=$this->input->post('remark');
		$shipping=$this->input->post('shipping');
		$order_for=$this->input->post('order_for');
		$nettotal=$shipping+$totalamount;
		$date = date('d-M-Y'); 

		
		
		//$data =array();
		//for($i=1; $i<$count; $i++) {
		
		//print_r($datanew); exit; 'p_div'=>$div,

		//$this->db->insert_batch('purchaseorder', $data);
        //$count = count($product);
		//print_r($count);
		//die;
		//for($i=0; $i<$count; $i++) {
		//$count = count($product); //Working
		/*foreach($this->input->post('product') as $product){
		$data = array('product'=>$product);
		$register=$this->home_model->insertdata($table,$data);
		} */
		$table1="purchaseorderbill";
		$data1 = array('vendorid'=>$vendorid,'purchasedate'=>$purchasedate,'billno'=>$billno,'maindiscount'=>$maindiscount,'totalqty'=>$totalquantity,'nettotal'=>$nettotal,'date'=>$date,'remark'=>$remark,'p_div'=>$div,'p_comp'=>$comp,'subtotal'=>$totalamount,'shipping_charge'=>$shipping,'order_for'=>$order_for);
		$register1=$this->home_model->insertdata($table1,$data1);
		$insertid = $this->db->insert_id();
		
		$i=1;
		foreach($this->input->post('sno1') as $sno1){
		$data[$i] = array(
		    'purid' => $insertid,
			'vendorid' => $vendorid,
			'billno' => $billno,
			'gdn_id' => $gdn_id,
           'sno' => $sno[$i], 
           'product' => $product[$i],
		   'basic' => $basic[$i],
		   'gst' => $gst[$i],
		   'unit' => $unit[$i],
		   'quantity' => $quantity[$i],
           'rate' => $rate[$i],
		   'freeqty' => $freeqty[$i],
		   'discountper' => $discountper[$i],
		   'discountamt' => $discountamt[$i],
		   'total' => $total[$i],
		   
		   'date'=>$date
           );
		$dataa[$i] = array(
		    
           'pid' => $sno[$i], 
          //  'gid' => $gdn_id,
		 
           );
		$dataadd[$i] = array(
		    'pur_id' => $insertid,
			// 'vendorid' => $vendorid,
			// 'billno' => $billno,
			'gid' => $gdn_id,
           'pid' => $sno[$i], 
           's_product' => $product[$i],
           
		   'totalqty' => $quantity[$i],
      
		   
		   'date'=>$date
           );
		// $dataupdate[$i] = array(          
		//    'totalqty' => $quantity[$i],		   		 
  //          );
		   
		   $register=$this->home_model->insertdata($table,$data[$i]);
		   $data2=$this->home_model->checkstock('stock',$dataa[$i]);
		   if(empty($data2)){
		   	//echo "jk";die;
		   	$register=$this->home_model->insertdata('stock',$dataadd[$i]);
		   	
		   }else{
		
		   	 $prev=$data2['totalqty'];
		   	echo $currnt=$quantity[$i]-$prev;
		   	   	$dataupdate[$i] = array(          
		   'totalqty' => $currnt,		   		 
           );
		   	//echo "available";die;
		   	$register=$this->home_model->updatedata2('stock',$dataupdate[$i],$dataa[$i]);
		   }
		   $i++;
		}
		
		$this->session->set_flashdata('msg', 'Purchase Order Saved Successfully');                   
		redirect(base_url().'home/purchasereturn');
	}


	public function saleorreturn()
	{
		$table="tb_sale";
		$data['countpetrol']=$this->home_model->countdatasale($table,'Petrol');
		$data['countdiesl']=$this->home_model->countdatasale($table,'Diesel');

		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="tb_sale";
		$data['saleorders']=$this->home_model->fetchall($table);
		$this->load->view('salereturn',$data);
	}
	public function purchasereturn()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="purchaseorderbill";
		

		$data['countpurchaseorders']=$this->home_model->countdatareturn($table);
		$data['countpurchaseorderstoday']=$this->home_model->countdatatodayreturn($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		// $table="purchaseorderbill";
		// $data['purchaseorderbill']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="purchaseorderbill";
		$return ='return';
		$data['purchaseorderbill']=$this->home_model->fetchdata00($table,$return);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="category";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="purchaseorderbill";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "p_div";
		$data['purchaseorderbill']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="purchaseorderbill";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="purchaseorderbill";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		
		$this->load->view('purchasereturn',$data);
	}



	/*10/1/2022*/
	public function quotationorder()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		// $table="purchaseorderbill";
		// $data['purchaseorderbill']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="quatationbill";
		$data['purchaseorderbill']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="quatationbill";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="quatationbill";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "p_div";
		$data['purchaseorderbill']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="quatationbill";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="quatationbill";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		
		$this->load->view('quotationorder',$data);
	}


	/*6/12/2021*/
	public function add_sale()
	{
		$table='tb_sale';
		$date = $this->input->post('date');
		$salfor = $this->input->post('salfor');		
		$price = $this->input->post('price');
		$testing = $this->input->post('testing');
		$total = $this->input->post('total');

		$nozel1 = $this->input->post('nozel1');
		$nozel2 = $this->input->post('nozel2');
		$nozel3 = $this->input->post('nozel3');
		$nozel4 = $this->input->post('nozel4');

		$y_nozel1 = $this->input->post('y_nozel1');
		$y_nozel2 = $this->input->post('y_nozel2');
		$y_nozel3 = $this->input->post('y_nozel3');
		$y_nozel4 = $this->input->post('y_nozel4');

		$saleread_nozel1 = $this->input->post('saleread_nozel1');
		$saleread_nozel2 = $this->input->post('saleread_nozel2');
		$saleread_nozel3 = $this->input->post('saleread_nozel3');
		$saleread_nozel4 = $this->input->post('saleread_nozel4');

		$salamnt_nozel1 = $this->input->post('salamnt_nozel1');
		$salamnt_nozel2 = $this->input->post('salamnt_nozel2');
		$salamnt_nozel3 = $this->input->post('salamnt_nozel3');
		$salamnt_nozel4 = $this->input->post('salamnt_nozel4');

		$totalsale=$nozel1+$nozel2+ $nozel3+$nozel4;
         	// $date = $this->input->post('date');
        
		// $date = date('Y-m-d');		
		$data = array('date'=>$date,'sale_for'=>$salfor,'price'=>$price,'testing'=>$testing,'nozel1'=>$nozel1,'nozel2'=>$nozel2,'nozel3'=>$nozel3,'nozel4'=>$nozel4,'y_nozel1'=>$y_nozel1,'y_nozel2'=>$y_nozel2,'y_nozel3'=>$y_nozel3,'y_nozel4'=>$y_nozel4,'sale_read_nozel1'=>$saleread_nozel1,'sale_read_nozel2'=>$saleread_nozel2,'sale_read_nozel3'=>$saleread_nozel3,'sale_read_nozel4'=>$saleread_nozel4,'sale_amnt_nozel1'=>$salamnt_nozel1,'sale_amnt_nozel2'=>$salamnt_nozel2,'sale_amnt_nozel3'=>$salamnt_nozel3,'sale_amnt_nozel4'=>$salamnt_nozel4,'total_amnt'=>$total,'total_sale'=>$totalsale);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Sale Order add Saved Successfully');                   
		 redirect(base_url().'home/saleorders');
	}
	public function editsale()
	{
		$table='tb_sale';
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$salfor = $this->input->post('salfor');		
		$price = $this->input->post('price');
		$testing = $this->input->post('testing');
		$total = $this->input->post('total');

		$nozel1 = $this->input->post('nozel1');
		$nozel2 = $this->input->post('nozel2');
		$nozel3 = $this->input->post('nozel3');
		$nozel4 = $this->input->post('nozel4');

		$y_nozel1 = $this->input->post('y_nozel1');
		$y_nozel2 = $this->input->post('y_nozel2');
		$y_nozel3 = $this->input->post('y_nozel3');
		$y_nozel4 = $this->input->post('y_nozel4');

		$saleread_nozel1 = $this->input->post('saleread_nozel1');
		$saleread_nozel2 = $this->input->post('saleread_nozel2');
		$saleread_nozel3 = $this->input->post('saleread_nozel3');
		$saleread_nozel4 = $this->input->post('saleread_nozel4');

		$salamnt_nozel1 = $this->input->post('salamnt_nozel1');
		$salamnt_nozel2 = $this->input->post('salamnt_nozel2');
		$salamnt_nozel3 = $this->input->post('salamnt_nozel3');
		$salamnt_nozel4 = $this->input->post('salamnt_nozel4');

		$totalsale=$nozel1+$nozel2+ $nozel3+$nozel4;
         	// $date = $this->input->post('date');
        
		// $date = date('Y-m-d');		
		$data = array('date'=>$date,'sale_for'=>$salfor,'price'=>$price,'testing'=>$testing,'nozel1'=>$nozel1,'nozel2'=>$nozel2,'nozel3'=>$nozel3,'nozel4'=>$nozel4,'y_nozel1'=>$y_nozel1,'y_nozel2'=>$y_nozel2,'y_nozel3'=>$y_nozel3,'y_nozel4'=>$y_nozel4,'sale_read_nozel1'=>$saleread_nozel1,'sale_read_nozel2'=>$saleread_nozel2,'sale_read_nozel3'=>$saleread_nozel3,'sale_read_nozel4'=>$saleread_nozel4,'sale_amnt_nozel1'=>$salamnt_nozel1,'sale_amnt_nozel2'=>$salamnt_nozel2,'sale_amnt_nozel3'=>$salamnt_nozel3,'sale_amnt_nozel4'=>$salamnt_nozel4,'total_amnt'=>$total,'total_sale'=>$totalsale);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Sale Order update Successfully');                   
		 redirect(base_url().'home/saleorders');
	}
	public function deletadvsalary() 
	{
		
		$id=$this->uri->segment(3);
		$table="tb_adv_salary";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Info Deleted Successfully'); 

	 redirect(base_url().'home/expense', 'refresh');
	}
	public function add_advsalary()
	{
		$table='tb_adv_salary';
		$date = $this->input->post('date');
		$empid = $this->input->post('empid');
		
		$price = $this->input->post('price');
		$remark = $this->input->post('remark');
         	// $date = $this->input->post('date');
        
		// $date = date('Y-m-d');		
		$data = array('employee_id'=>$empid,'date'=>$date,'advance_salr'=>$price,'adv_remark'=>$remark);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Income Heads Info Saved Successfully');                   
		 redirect(base_url().'home/adv_salary');
	}
	// public function add_incomehead()
	// {
	// 	$table='tb_pay_for';
	// 	$date = $this->input->post('date');
	// 	$incomehead = $this->input->post('incomehead');
		
	// 	$div = $this->input->post('div');
	// 	$comp = $this->input->post('comp');
 //         	$date = $this->input->post('date');
        
	// 	// $date = date('Y-m-d');		
	// 	$data = array('name'=>$incomehead,'date'=>$date);
			
	// 	$register=$this->home_model->insertdata($table,$data);
	// 	$this->session->set_flashdata('msg', 'Income Heads Info Saved Successfully');                   
	// 	 redirect(base_url().'home/payment_for');
	// }
	public function edit_advsalary()
	{
		$table='tb_adv_salary';
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$empid = $this->input->post('empid2');
		
		$price = $this->input->post('price2');
		$remark = $this->input->post('remark2');
         	// $date = $this->input->post('date');
        
		// $date = date('Y-m-d');		
		$data = array('employee_id'=>$empid,'date'=>$date,'advance_salr'=>$price,'adv_remark'=>$remark);
			
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Expence Info Updated Successfully');                   
		 redirect(base_url().'home/adv_salary');
	}
	public function add_incomehead()
	{
		$table='tb_pay_for';
		$date = $this->input->post('date');
		$incomehead = $this->input->post('incomehead');
		
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         	$date = $this->input->post('date');
        
		// $date = date('Y-m-d');		
		$data = array('name'=>$incomehead,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Income Heads Info Saved Successfully');                   
		 redirect(base_url().'home/payment_for');
	}
	public function add_expencehead()
	{
		$table='tb_expence_head';
		$date = $this->input->post('date');
		$incomehead = $this->input->post('name');
		$date = $this->input->post('date');
		
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         	
        
		// $date = date('Y-m-d');		
		$data = array('name'=>$incomehead,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Expence Heads Info Saved Successfully');                   
		 redirect(base_url().'home/payment_for');
	}
	public function account_master()
	{
		$this->load->view('account_master');
	}
	public function add_vendors()
	{
		$this->load->view('add_vendordetails');
	}
	public function deleteexpence() 
	{
		
		$id=$this->uri->segment(3);
		$table="tb_expence";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Expense Info Deleted Successfully'); 

	 redirect(base_url().'home/expense', 'refresh');
	}
	public function deleteincome() 
	{
		
		$id=$this->uri->segment(3);
		$table="tb_income";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Income Info Deleted Successfully'); 

	 redirect(base_url().'home/income', 'refresh');
	}
	public function add_income()
	{
		$table='tb_pay_for';
		$date = $this->input->post('date');
		$payfor = $this->input->post('payfor');
		$bywhm = $this->input->post('bywhm');
		$price = $this->input->post('price');
		$billingOptions = $this->input->post('billingOptions');
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         
        
		// $date = date('Y-m-d');		
		$data = array('in_pay_for'=>$payfor,'by_whome'=>$bywhm,'price'=>$price,'date'=>$date,'billingOptions'=>$billingOptions);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Income Info Saved Successfully');                   
		 redirect(base_url().'home/income');
	}
	public function add_expence()
	{
		$table='tb_expence';
		$date = $this->input->post('date');
		$payfor = $this->input->post('pay');
		$bywhm = $this->input->post('vendorid');
		$price = $this->input->post('price1');
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         	$billingOptions = $this->input->post('billingOptions');
        
		// $date = date('Y-m-d');		
		$data = array('exexpenc_head'=>$payfor,'by_whom'=>$bywhm,'price'=>$price,'date'=>$date,'billingOptions'=>$billingOptions);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Expense Info Saved Successfully');                   
		 redirect(base_url().'home/expense');
	}
	public function edit_expence()
	{
		$table='tb_expence';
		$id = $this->input->post('id');
		$payfor = $this->input->post('pay1');
		$bywhm = $this->input->post('vendorid1');
		$price = $this->input->post('price');
       		$billingOptions = $this->input->post('billingOption');
       		$date = date('d-M-Y');
	
			
		$data = array('exexpenc_head'=>$payfor,'by_whom'=>$bywhm,'price'=>$price,'date'=>$date,'billingOptions'=>$billingOptions);
			
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Expence Info Updated Successfully');                   
		 redirect(base_url().'home/expense');
	}


	public function edit_income()
	{
		$table='tb_income';
		$id = $this->input->post('id');
		echo $payfor = $this->input->post('payfor1');
		echo $bywhm = $this->input->post('bywhm1');
		$price = $this->input->post('price1');
       		$billingOptions = $this->input->post('billingOption');
       		$date = date('d-M-Y');
	
			
		$data = array('in_pay_for'=>$payfor,'by_whome'=>$bywhm,'price'=>$price,'billingOptions'=>$billingOptions);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Category Info Updated Successfully');                   
		 redirect(base_url().'home/income');
	}
	public function edit_incomehead()
	{
		$table='tb_pay_for';
		$id = $this->input->post('id');
		 $payfor = $this->input->post('name1');
		// $bywhm = $this->input->post('bywhm1');
		
       		//$date = date('d-M-Y');
	
			
		$data = array('name'=>$payfor);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Income Head Info Updated Successfully');                   
		 redirect(base_url().'home/payment_for');
	}
	public function edit_expenceehead()
	{
		$table='tb_expence_head';
		$id = $this->input->post('id');
		 $payfor = $this->input->post('name1');
		 
		
       		//$date = date('d-M-Y');
	
			
		$data = array('name'=>$payfor);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Expence Head Info Updated Successfully');                   
		 redirect(base_url().'home/payment_for');
	}
	public function adv_salary()
	{
		$table="tb_adv_salary";
		$data['adv']=$this->home_model->fetchall($table);
		$table="employees";
		$data['pay']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="tb_adv_salary";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		$this->load->view('advance_salary',$data);
	}public function income()
	{
		$table="tb_income";
		$data['income']=$this->home_model->fetchall($table);
		$table="tb_pay_for";
		$data['pay']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="tb_income";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		$this->load->view('income',$data);
	}
	public function expense()
	{
		$table="tb_expence";
		$data['expense']=$this->home_model->fetchall($table);
		$table="tb_expence_head";
		$data['expence']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="tb_expence";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		$this->load->view('expence',$data);
	}
	public function payment_for()
	{
		
		$table="tb_pay_for";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);
		$table= "tb_pay_for";
		$data['payfr']=$this->home_model->fetchalla($table);
		$this->load->view('payment_for',$data);
	}
	public function expence_head()
	{
		$table="tb_expence_head";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);
	
		$table= "tb_expence_head";
		$data['exphead']=$this->home_model->fetchalla($table);
		$this->load->view('expence_head',$data);
	}

	/*06/12/2021*/
	/*29/11/2021*/
	public function getqnty(){ 
		// POST data 
		$postData = $this->input->post();
		
		// load model 
		//$this->load->model('Main_model');
		
		// get data 
		$data = $this->home_model->getqnty($postData);
		echo json_encode($data); 
	  }
	public function stock()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$table1="stock";
		$id=$this->uri->segment(2);
		$data['godown']=$this->home_model->fetchdata($table,$id);
		$data['prodct']=$this->home_model->fetchdata2($table1,$id);
		$table="category";
		$data['category']=$this->home_model->fetchalla($table);
		$table="products";
		$data['products']=$this->home_model->fetchalla($table);
		$table="stock";
		$data['stock']=$this->home_model->fetchalla($table);
		$table="area";
		$data['area']=$this->home_model->fetchalla($table);
		$table="godown";
		$data['godowns']=$this->home_model->fetchalla($table);
		$this->load->view('stock',$data);
	}


	public function stock_shifting()
	{
		$table='stock';
		$gid = $this->input->post('gid');
		$gid2 = $this->input->post('gid2');
		$cid = $this->input->post('cid');
		$pid = $this->input->post('pid');
		//$s_product = $this->input->post('s_product');
		$qty = $this->input->post('out');
		$totalqty = $this->input->post('avlb');
		$remain = $totalqty - $qty;
		$date = date('d-M-Y');
		$dataa = array(
		    
           'pid' => $pid, 
            //'gid' => $gdn_id,
		 
           );
		 $data3=$this->home_model->checkstock('stock',$dataa);
		 $s_product=$data3['s_product'];	
		$data = array('gid'=>$gid2,'pid'=>$pid,'totalqty'=>$qty,'date'=>$date,'s_product'=>$s_product);
		$dataupdate2 = array(          
		   'totalqty' => $remain,		   		 
		   		   		 
           );
		 $data2=$this->home_model->checkstock2('stock',$pid,$gid2);
		
		   if(empty($data2)){
		   	//echo "jk";die;
		   	$register=$this->home_model->insertdata('stock',$data);
		   	$register=$this->home_model->updatedata12('stock',$dataupdate2,$pid,$gid);
		   	
		   }else{
		   	//echo "jk";die;
		
		   	 $prev=$data2['totalqty'];
		   	 $s_product=$data2['s_product'];
		   	echo $currnt=$qty+$prev;
		   	   	$dataupdate = array(          
		   'totalqty' => $currnt,		   		 
		   's_product' => $s_producst,		   		 
           );
		   	//echo "available";die;
		   	$register=$this->home_model->updatedata12('stock',$dataupdate,$pid,$gid2);
		   	$register=$this->home_model->updatedata12('stock',$dataupdate2,$pid,$gid);	   }
			
		
		$this->session->set_flashdata('msg', 'Stock Added Successfully');                   
		 redirect(base_url().'stock/'.$gid2);
	}

	public function edit_stock()
	{
		$table='stock';
		$id = $this->input->post('id');
		$gid = $this->input->post('gid');
		$cid = $this->input->post('cid');
		$pid = $this->input->post('pid');
		$totalqty = $this->input->post('totalqty');
		$date = date('d-M-Y');
		
			
		$data = array('gid'=>$gid,'cid'=>$cid,'pid'=>$pid,'totalqty'=>$totalqty,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Stock Updated Successfully');                   
		 redirect(base_url().'stock/'.$gid);
	}

	public function deletestock() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$gid=$this->uri->segment(2);
		$data['godown']=$this->home_model->fetchdata($table,$gid);
		$id=$this->uri->segment(3);
		$table="stock";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Stock Info Deleted Successfully'); 

	 redirect(base_url().'stock/'.$gid);
	}

	public function stockstatus()
	{
		$table="godown";
		$gid=$this->uri->segment(2);
		$data['godown']=$this->home_model->fetchdata($table,$gid);
		$id=$this->uri->segment(3);
		$table="stock";
		$data['status']=$this->home_model->changestatus($table,$id);
		if(isset($data['status'])) {
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'stock/'.$gid);
		}
	}
	public function godown()
	{
        $table="users";
		$id="1"; 
		
		$data['condaccess']=$this->home_model->condition_access('');
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$data['countgodown']=$this->home_model->countdata($table);
		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
		$data['countgodownactive']=$this->home_model->countdataactive($table);
		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);

		$table="godown";
		$data['godown']=$this->home_model->fetchall($table);
		$data['godowns']=$this->home_model->fetchalla($table);
		$this->load->view('godown',$data);
	}

public function godowntoday()
	{
		$table="users";
		$id="1"; 
		
		$data['condaccess']=$this->home_model->condition_access('');
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$data['countgodown']=$this->home_model->countdata($table);
		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
		$data['countgodownactive']=$this->home_model->countdataactive($table);
		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table); 

		$table="godown";
		$data['godowntoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('godowntoday',$data);
	}

	public function godownactive()
	{
		$table="users";
		$id="1"; 
		
		$data['condaccess']=$this->home_model->condition_access('');
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$data['countgodown']=$this->home_model->countdata($table);
		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
		$data['countgodownactive']=$this->home_model->countdataactive($table);
		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);

		$table="godown";
		$data['godownactive']=$this->home_model->fetchallactive($table);
		$this->load->view('godownactive',$data);
	}


	public function godowninactive()
	{
		
		$table="users";
		$id="1"; 
		
		$data['condaccess']=$this->home_model->condition_access('');
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="godown";
		$data['countgodown']=$this->home_model->countdata($table);
		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
		$data['countgodownactive']=$this->home_model->countdataactive($table);
		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="godown";
		$data['godowninactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('godowninactive',$data);
	}

	public function addgodown()
	{ 
		$this->load->view('addgodown');
	}

	public function editgodown()
	{
		$table="godown";
		$id=$this->uri->segment(2);
		$data['godown']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editgodown',$data);
	}

	public function deletegodown() 
	{
		
		$id=$this->uri->segment(2);
		$table="godown";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Godown Info Deleted Successfully'); 

	 redirect(base_url().'godown', 'refresh');
	}

	public function godownstatus($id = NULL)
	{
		$table='godown';
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'godown', 'refresh');
		
	}

	public function add_godown()
	{
		$table='godown';
		$godown = $this->input->post('godown');
        $manager = $this->input->post('manager');
        $mobile = $this->input->post('mobile');
        $state = $this->input->post('state');
        $city = $this->input->post('city');
        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$location = $this->input->post('location');
        $no = rand();
			$uploadfile=$_FILES["godownimage"]["tmp_name"];
            $folder="./assets/img/godown/";
            move_uploaded_file($_FILES["godownimage"]["tmp_name"], "$folder".$no.$_FILES["godownimage"]["name"]);
			$godownimage = $no.$_FILES["godownimage"]["name"];
		$date = date('d-M-Y');		
		$data = array('godown'=>$godown,'godownimage'=>$godownimage,'manager'=>$manager,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'godownlink'=>$location,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Godown Info Saved Successfully');                   
		 redirect(base_url().'godown');
	}

	public function edit_godown()
	{
		$table='godown';
		$id = $this->input->post('id');
		$godown = $this->input->post('godown');
        $manager = $this->input->post('manager');
        $mobile = $this->input->post('mobile');
        $state = $this->input->post('state');
        $city = $this->input->post('city');
        $area = $this->input->post('area');
        $pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$location = $this->input->post('location');
        $no = rand();
			if($_FILES["godownimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $godownimage=$result->godownimage; 	
			  }else{
	        $uploadfile=$_FILES["godownimage"]["tmp_name"];
            $folder="./assets/img/godown/";
            move_uploaded_file($_FILES["godownimage"]["tmp_name"], "$folder".$no.$_FILES["godownimage"]["name"]);
            $godownimage=$no.$_FILES["godownimage"]["name"]; 
			}
		$date = date('d-M-Y');		
		$data = array('godown'=>$godown,'godownimage'=>$godownimage,'manager'=>$manager,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'godownlink'=>$location,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Godown Info Updated Successfully');                   
		 redirect(base_url().'godown');
	}
	/*29/11/2021*/
	public function product_varient_list()
	{
		$id =$this->input->get('id');
			$data['products'] = $this->home_model->getProductsvarient($id);
		$this->load->view('product_varient_list',$data);
	}
	public function vendor_info()
	{
		$this->load->view('vendor_info');
	}

	/*23/11/2021*/
	public function product_varientstatus($id = NULL)
	{
		$table="product_variant";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'home/product_varient', 'refresh');
		
	}
	public function edit_product_varient()
	{
		$table='product_variant';
		$id = $this->input->post('id');
		$capacity = $this->input->post('capacity1');
		$productid = $this->input->post('catid');
        $price1 = $this->input->post('price');
        $sprice = $this->input->post('sprice');
        $min = $this->input->post('min');
        $stock = $this->input->post('stock');
        $qnty = $this->input->post('qnty');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
		$date = date('Y-m-d');		
		$data = array('capacity'=>$capacity,'pid'=>$productid,'price'=>$price1,'created_at'=>$date,'pv_division'=>$div,'pv_company'=>$comp,'pv_qnty'=>$qnty,'pv_avbl_stock'=>$stock,'pv_min_order'=>$min,'pv_sell_price'=>$sprice);
			
		
			$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Product Varient Info Saved Successfully');                   
		redirect(base_url().'home/product_varient');
	}
	public function add_product_varient()
	{
		$table='product_variant';
		$capacity = $this->input->post('capacity');
		$productid = $this->input->post('productid');
		$qnty = $this->input->post('qnty');
        $price1 = $this->input->post('price1');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
		$date = date('Y-m-d');		
		$data = array('capacity'=>$capacity,'pid'=>$productid,'price'=>$price1,'created_at'=>$date,'pv_division'=>$div,'pv_company'=>$comp);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Product Varient Info Saved Successfully');                   
		redirect(base_url().'home/product_varient');
	}
	public function product_varient()
	{       
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    	$table="products";
		$data['products']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="product_variant";
		$data['category']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="product_variant";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "pv_division";
			$col2= "pv_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="product_variant";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "pv_division";
		$data['category']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="product_variant";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "pv_division";
			$col2= "pv_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="product_variant";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "pv_division";
			$col2= "pv_company";
		$data['category']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('product_varient',$data);
	}
	/*29/10/2021*/
	// public function godown()
	// {
 //        $table="users";
	// 	$id="1"; 
		
	// 	$data['condaccess']=$this->home_model->condition_access('');
	// 	$data['admin']=$this->home_model->fetchdata($table,$id);
	// 	$table="godown";
	// 	$data['countgodown']=$this->home_model->countdata($table);
	// 	$data['countgodowntoday']=$this->home_model->countdatatoday($table);
	// 	$data['countgodownactive']=$this->home_model->countdataactive($table);
	// 	$data['countgodowninactive']=$this->home_model->countdatainactive($table);
 //        $table="state";
	// 	$data['state']=$this->home_model->fetchall($table);
 //        $table="city";
	// 	$data['city']=$this->home_model->fetchall($table);
	// 	$table="area";
	// 	$data['area']=$this->home_model->fetchall($table);
	// 	$table="pincode";
	// 	$data['pincode']=$this->home_model->fetchall($table);

	// 	$table="godown";
	// 	$data['godown']=$this->home_model->fetchall($table);
	// 	$data['godowns']=$this->home_model->fetchalla($table);
	// 	$this->load->view('godown',$data);
	// }

// public function godowntoday()
// 	{
// 		$table="users";
// 		$id="1"; 
		
// 		$data['condaccess']=$this->home_model->condition_access('');
// 		$data['admin']=$this->home_model->fetchdata($table,$id);
// 		$table="godown";
// 		$data['countgodown']=$this->home_model->countdata($table);
// 		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
// 		$data['countgodownactive']=$this->home_model->countdataactive($table);
// 		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
//         $table="state";
// 		$data['state']=$this->home_model->fetchall($table);
//         $table="city";
// 		$data['city']=$this->home_model->fetchall($table);
// 		$table="area";
// 		$data['area']=$this->home_model->fetchall($table);
// 		$table="pincode";
// 		$data['pincode']=$this->home_model->fetchall($table); 

// 		$table="godown";
// 		$data['godowntoday']=$this->home_model->fetchalltoday($table);
// 		$this->load->view('godowntoday',$data);
// 	}

// 	public function godownactive()
// 	{
// 		$table="users";
// 		$id="1"; 
		
// 		$data['condaccess']=$this->home_model->condition_access('');
// 		$data['admin']=$this->home_model->fetchdata($table,$id);
// 		$table="godown";
// 		$data['countgodown']=$this->home_model->countdata($table);
// 		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
// 		$data['countgodownactive']=$this->home_model->countdataactive($table);
// 		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
//         $table="state";
// 		$data['state']=$this->home_model->fetchall($table);
//         $table="city";
// 		$data['city']=$this->home_model->fetchall($table);
// 		$table="area";
// 		$data['area']=$this->home_model->fetchall($table);
// 		$table="pincode";
// 		$data['pincode']=$this->home_model->fetchall($table);

// 		$table="godown";
// 		$data['godownactive']=$this->home_model->fetchallactive($table);
// 		$this->load->view('godownactive',$data);
// 	}


// 	public function godowninactive()
// 	{
		
// 		$table="users";
// 		$id="1"; 
		
// 		$data['condaccess']=$this->home_model->condition_access('');
// 		$data['admin']=$this->home_model->fetchdata($table,$id);
// 		$table="godown";
// 		$data['countgodown']=$this->home_model->countdata($table);
// 		$data['countgodowntoday']=$this->home_model->countdatatoday($table);
// 		$data['countgodownactive']=$this->home_model->countdataactive($table);
// 		$data['countgodowninactive']=$this->home_model->countdatainactive($table);
//         $table="state";
// 		$data['state']=$this->home_model->fetchall($table);
//         $table="city";
// 		$data['city']=$this->home_model->fetchall($table);
// 		$table="area";
// 		$data['area']=$this->home_model->fetchall($table);
// 		$table="pincode";
// 		$data['pincode']=$this->home_model->fetchall($table);
// 		$table="godown";
// 		$data['godowninactive']=$this->home_model->fetchallinactive($table);
// 		$this->load->view('godowninactive',$data);
// 	}

// 	public function addgodown()
// 	{ 
// 		$this->load->view('addgodown');
// 	}

// 	public function editgodown()
// 	{
// 		$table="godown";
// 		$id=$this->uri->segment(2);
// 		$data['godown']=$this->home_model->fetchdata($table,$id);
// 		//print_r($data); exit;
// 		$this->load->view('editgodown',$data);
// 	}

// 	public function deletegodown() 
// 	{
		
// 		$id=$this->uri->segment(2);
// 		$table="godown";
// 		$data['delete']=$this->home_model->deletedata($table,$id);
// 		$this->session->set_flashdata('msg', 'Godown Info Deleted Successfully'); 

// 	 redirect(base_url().'godown', 'refresh');
// 	}

// 	public function godownstatus($id = NULL)
// 	{
// 		$table='godown';
// 		$data['status']=$this->home_model->changestatus($table,$id);
// 		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
// 		redirect(base_url().'godown', 'refresh');
		
// 	}

// 	public function add_godown()
// 	{
// 		$table='godown';
// 		$godown = $this->input->post('godown');
//         $manager = $this->input->post('manager');
//         $mobile = $this->input->post('mobile');
//         $state = $this->input->post('state');
//         $city = $this->input->post('city');
//         $area = $this->input->post('area');
//         $pincode = $this->input->post('pincode');
// 		$address = $this->input->post('address');
// 		$location = $this->input->post('location');
//         $no = rand();
// 			$uploadfile=$_FILES["godownimage"]["tmp_name"];
//             $folder="./assets/img/godown/";
//             move_uploaded_file($_FILES["godownimage"]["tmp_name"], "$folder".$no.$_FILES["godownimage"]["name"]);
// 			$godownimage = $no.$_FILES["godownimage"]["name"];
// 		$date = date('d-M-Y');		
// 		$data = array('godown'=>$godown,'godownimage'=>$godownimage,'manager'=>$manager,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'godownlink'=>$location,'date'=>$date);
			
// 		$register=$this->home_model->insertdata($table,$data);
// 		$this->session->set_flashdata('msg', 'Godown Info Saved Successfully');                   
// 		 redirect(base_url().'godown');
// 	}

// 	public function edit_godown()
// 	{
// 		$table='godown';
// 		$id = $this->input->post('id');
// 		$godown = $this->input->post('godown');
//         $manager = $this->input->post('manager');
//         $mobile = $this->input->post('mobile');
//         $state = $this->input->post('state');
//         $city = $this->input->post('city');
//         $area = $this->input->post('area');
//         $pincode = $this->input->post('pincode');
// 		$address = $this->input->post('address');
// 		$location = $this->input->post('location');
//         $no = rand();
// 			if($_FILES["godownimage"]["name"]==""){
// 	        $this->db->select("*");
//             $this->db->where('id',$id);
//             $query = $this->db->get($table);
//             $result = $query->row();
// 	        $godownimage=$result->godownimage; 	
// 			  }else{
// 	        $uploadfile=$_FILES["godownimage"]["tmp_name"];
//             $folder="./assets/img/godown/";
//             move_uploaded_file($_FILES["godownimage"]["tmp_name"], "$folder".$no.$_FILES["godownimage"]["name"]);
//             $godownimage=$no.$_FILES["godownimage"]["name"]; 
// 			}
// 		$date = date('d-M-Y');		
// 		$data = array('godown'=>$godown,'godownimage'=>$godownimage,'manager'=>$manager,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'godownlink'=>$location,'date'=>$date);
			
// 		$register=$this->home_model->updatedata($table,$data,$id);
// 		$this->session->set_flashdata('msg', 'Godown Info Updated Successfully');                   
// 		 redirect(base_url().'home/godown');
// 	}

	public function customerrole()
	{
		$table="users";
		$id="1";
			$data['condaccess']=$this->home_model->condition_access('');
		$table="customers";
		$data['customers']=$this->home_model->fetchall($table);
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="custrole";
		$data['custrole']=$this->home_model->fetchall($table);
		$table="godown";
		$data['godown']=$this->home_model->fetchall($table);

		$this->load->view('custrole',$data);
	}
	public function employeerole()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="emprole";
		$data['emprole']=$this->home_model->fetchall($table);
			$table="manubar";
		$data['menubar']=$this->home_model->fetchallmanu($table);
		$this->load->view('emprole',$data);
	}
	public function add_assignemployeerole()
	{
		$table='assignemprole';
		$empid = $this->input->post('search');
        $emproleid = $this->input->post('emproleid');
        $department= $this->input->post('department');
         $addona= $this->input->post('addon');
         if($addona=='0')
        {
            $addon=$addona;
        }else{
            $addon="N";
        }
          $edits1= $this->input->post('edits');
          if($edits1=='1')
        {
            $edits=$edits1;
        }else{
            $edits="N";
        }
           $viewa= $this->input->post('view');
           if($viewa=='2')
        {
            $view=$viewa;
        }else{
            $view="N";
        }
            $deletea= $this->input->post('delete');
             if($deletea=='3')
        {
            $delete=$deletea;
        }else{
            $delete="N";
        }
		$date = date('d-M-Y');
			
		$data = array('empid'=>$empid,'emproleid'=>$emproleid,'departid'=>$department,'control'=>$addon,'control_ed'=>$edits,'control_vi'=>$view,'control_del'=>$delete,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Employee Role Assigned Successfully');                   
		 redirect(base_url().'assignemployeerole');
	}
	public function edit_assignemployeerole()
	{
		$table='emprole';
		$id = $this->input->post('id');
		$table='assignemprole';
	 	$empid = $this->input->post('employ'); 
        $emproleid = $this->input->post('emproleid');
        $department= $this->input->post('department');
         $addon1= $this->input->post('addon');
         if($addon1=='0')
        {
            $addon=$addon1;
        }else{
            $addon="N";
        }
        
         
         
          $edits1= $this->input->post('edits');
           if($edits1=='1')
        {
            $edits=$edits1;
        }else{
            $edits="N";
        }
           $viewa= $this->input->post('view');
            if($viewa=='2')
        {
            $view=$viewa;
        }else{
            $view="N";
        }
            $deletea= $this->input->post('delete');
            if($deletea=='3')
        {
            $delete=$deletea;
        }else{
            $delete="N";
        }
		$date = date('d-M-Y');
			
	$data = array('empid'=>$empid,'emproleid'=>$emproleid,'departid'=>$department,'control'=>$addon,'control_ed'=>$edits,'control_vi'=>$view,'control_del'=>$delete,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Assigned Employee Role Updated Successfully');                   
		 redirect(base_url().'assignemployeerole');
	}
	public function employeerolestatus($id = NULL)
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="emprole";
		$id=$_GET['id'];//$this->uri->segment(2);
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'employeerole', 'refresh');
		
	}
	public function edit_employeerole()
	{
		$table='emprole';
		$id = $this->input->post('id');
		$emprole = $this->input->post('emprole');
          $access = implode(',',$this->input->post('godown'));
		$date = date('d-M-Y');
			
		$data = array('emprole'=>$emprole,'access'=>$access,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Employee Role Updated Successfully');                   
		 redirect(base_url().'home/employeerole');
	}

	public function assignemployeerole()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['employees']=$this->home_model->fetchall($table);
		$table="emprole";
		$data['emprole']=$this->home_model->fetchall($table);
		$table="assignemprole";
		$data['assignemprole']=$this->home_model->fetchall($table);
			$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$this->load->view('assignemprole',$data);
	}
	public function setting()
{
	$table="setting";
	$data['vehicletype']=$this->home_model->fetchall($table);
	$table="setting";
	$id=$this->uri->segment(1);
	$data['vehicle']=$this->home_model->fetchdata($table,$id);
	$this->load->view('setting',$data);
}
public function editsetting()
{
	$table="setting";
	$id=$this->uri->segment(2);
	$data['vehicletype']=$this->home_model->fetchdata($table,$id);
	//print_r($data); exit;
	$this->load->view('editsetting',$data);
}
	/*27/10/2021*/
	public function deletedivision() 
	{
		
		$id=$this->uri->segment(2);
		$table="tb_division";
		$col ="divi_id";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Division Info Deleted Successfully'); 

	 redirect(base_url().'home/division', 'refresh');
	}
	/*25/10/2021*/
	public function dashboard_year()
	{
		 $url =$this->input->get('id');
		 $_SESSION['year'] =$url;

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		$table="users";
		$data['countusers']=$this->home_model->countdata($table);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['deliverypartners']=$this->home_model->countdata($table);

		$table="tb_division";
		$data['division']=$this->home_model->fetchall_data($table);

		$div_name= $_SESSION['division'];
		$table="tb_company";
		$data['comp']=$this->home_model->fetchall_where($table,$div_name);

		
		$cmp_name= $_SESSION['company'];
		$table="tb_financial_year";
		$data['year']=$this->home_model->fetchall_where2($table,$div_name,$cmp_name);

		$this->load->view('dashboard_year',$data);
	}
	public function add_financial()
	{
	$table='tb_financial_year';
			
		$category = $this->input->post('name');
         
        	$div_name= $_SESSION['division'];
        	$company= $_SESSION['company'];
		$date = date('Y-m-d');		
		$data = array('fy_year'=>$category,'f_company'=>$company,'f_division'=>$div_name,'f_date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Financial year Info Saved Successfully');                   
		 redirect(base_url().'home/financial');	
	}
	public function financial()
	{
        
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		$div_name= $_SESSION['division'];
		$cmp_name= $_SESSION['company'];
		$table="tb_financial_year";
		$data['category']=$this->home_model->fetchall_where2($table,$div_name,$cmp_name);
		$this->load->view('financial',$data);
	}

	/*22/10/2021*/
	public function add_company()
	{
	$table='tb_company';
			
		$category = $this->input->post('name');
         
        	$div_name= $_SESSION['division'];
		$date = date('Y-m-d');		
		$data = array('com_name'=>$category,'com_control'=>$div_name,'com_date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Company Info Saved Successfully');                   
		 redirect(base_url().'home/company');	
	}
	public function company()
	{
        
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		$div_name= $_SESSION['division'];
		$table="tb_company";
		$data['category']=$this->home_model->fetchall_where($table,$div_name);
		$this->load->view('company',$data);
	}
	public function dashboard_divi()
	{
		 $this->session->unset_userdata('company');
		 $this->session->unset_userdata('year');
		 //$url =$this->uri->segment(3);
		 $url =$this->input->get('id');
		 $_SESSION['division'] =$url;

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		$table="users";
		$data['countusers']=$this->home_model->countdata($table);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['deliverypartners']=$this->home_model->countdata($table);

		$table="tb_division";
		$data['division']=$this->home_model->fetchall_data($table);

		$div_name= $_SESSION['division'];
		$table="tb_company";
		$data['comp']=$this->home_model->fetchall_where($table,$div_name);

		$this->load->view('dashboard_div',$data);
	}
	public function dashboard_comp()
	{
		 $url =$this->input->get('id');
		 $_SESSION['company'] =$url;

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		$table="users";
		$data['countusers']=$this->home_model->countdata($table);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['deliverypartners']=$this->home_model->countdata($table);

		$table="tb_division";
		$data['division']=$this->home_model->fetchall_data($table);

		$div_name= $_SESSION['division'];
		$table="tb_company";
		$data['comp']=$this->home_model->fetchall_where($table,$div_name);

		
		$cmp_name= $_SESSION['company'];
		$table="tb_financial_year";
		$data['year']=$this->home_model->fetchall_where2($table,$div_name,$cmp_name);

		$this->load->view('dashboard_comp',$data);
	}
	/*22/10/2021*/
	/*21/10/2021*/
	public function edit_division()
	{
		$table='tb_division';
			$no = rand();
			  if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
                {
			$uploadfile=$_FILES["image"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$no.$_FILES["image"]["name"]);
			$profileimage = $no.$_FILES["image"]["name"];
		}else{
			$profileimage = $_POST['old_image'];
		}
		$category = $this->input->post('div');
		$id = $this->input->post('id');
         
        
		$date = date('Y-m-d');		
		$data = array('divi_name'=>$category,'div_icon'=>$profileimage);
		$col ="divi_id";	
		$register=$this->home_model->updatedata1($table,$data,$id,$col);
		$this->session->set_flashdata('msg', 'Division Update Successfully');                   
		 redirect(base_url().'home/division');
	}
	public function add_division()
	{
		$table='tb_division';
			$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];
		$category = $this->input->post('name');
         
        
		$date = date('Y-m-d');		
		$data = array('divi_name'=>$category,'div_icon'=>$profileimage,'divi_date	'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Division Info Saved Successfully');                   
		 redirect(base_url().'home/division');
	}
	public function division()
	{
        
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		
		$table="tb_division";
		$data['category']=$this->home_model->fetchalld($table);
		$this->load->view('division',$data);
	}
	/*21/10/2021*/
        	
	public function login() {
		//$email=$_POST['email'];
		//$password=$_POST['password'];
		
			$table='users';
			$data = array(
				'email' => $this->input->post('email'),
			//	'password' => sha1($this->input->post('password')),
				'password' => $this->input->post('password'),
				'status' => '1',
			);
			//$result = $this->Auth->login('users', ['username' => $username]);
			$result = $this->home_model->validate($table,$data);
			$result = $result->row();
			//print_r($result);
			//echo $result->id; exit;
			
			$table='employees';
			$data = array(
				'email' => $this->input->post('email'),
				//'password' => sha1($this->input->post('password')),
				'password' => $this->input->post('password'),
				'status' => '1',
			);
			//$result = $this->Auth->login('users', ['username' => $username]);
			$result1 = $this->home_model->validate($table,$data);
			$result1 = $result1->row();
			//print_r($result1);
			
			$table='deliverypartners';
			$data = array(
				'email' => $this->input->post('email'),
				//'password' => sha1($this->input->post('password')),
				'password' => $this->input->post('password'),
				'status' => '1',
			);
			//$result = $this->Auth->login('users', ['username' => $username]);
			$result2 = $this->home_model->validate($table,$data);
			$result2 = $result2->row();	
			//print_r($result2);
	
		
			if(isset($result))
			{
				$session_data = [
					'admin_id' => $result->id,
			    	'roles' => $result->roles,
					'admin_name' => $result->name,
					'admin_email' => $result->email,
					'admin_img' => $result->profileimage,
					'admin_logo' => $result->logo,
					'role' => $result->role,
				];
				$this->session->set_userdata('admin_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
				redirect(base_url().'home/dashboard');
			}
			elseif(isset($result1))
			{
				$session_data = [
					'emp_id' => $result1->id,
					'emp_name' => $result1->name,
					'emp_code' => $result1->empcode,
					'emp_email' => $result1->email,
					'emp_img' => $result1->profileimage,
					'role' => $result1->role,
				];
				$this->session->set_userdata('emp_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
				redirect(base_url().'empdashboard');
			}
			elseif(isset($result2))
			{
				$session_data = [
					'dp_id' => $result2->id,
					'dp_name' => $result2->name,
					'dp_email' => $result2->email,
					'dp_img' => $result2->profileimage,
					'role' => $result2->role,
				];
				$this->session->set_userdata('dp_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
				redirect(base_url().'dpdashboard');
			}
			else
			{
				$this->session->set_flashdata('msg', 'Email/Password or combination of both does not match. Please try again!!');
				redirect(base_url('admin'));
			}
	
		} 
	
	
		public function loginartist() {
		//$email=$_POST['email'];
		//$password=$_POST['password'];
		
			$table='users';
			$data = array(
				'mobile' => $this->input->post('mobile'),
			//	'password' => sha1($this->input->post('password')),
				'password' => $this->input->post('password'),
				'status' => '1',
			);
		
			$result = $this->home_model->validate($table,$data);
			$result = $result->row();
			
		
		
			if(isset($result))
			{
				$session_data = [
					'admin_id' => $result->id,
			    	'roles' => $result->roles,
					'admin_name' => $result->name,
					'admin_email' => $result->email,
					'admin_img' => $result->profileimage,
					'admin_logo' => $result->logo,
					'role' => $result->role,
				];
				$this->session->set_userdata('admin_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
		     $session = $this->session->userdata('admin_session');
		     	$ids=$session['admin_id'];
		     	$query = "SELECT * FROM artist_list where userId=$ids";
                                       $sql2=$this->db->query($query);
                                       $vrt2=$sql2->result_array();
                    $IDD=$vrt2[0]['id']; 
				redirect(base_url()."home/artist_view/$IDD");
			
			}
			elseif(isset($result1))
			{
				$session_data = [
					'emp_id' => $result1->id,
					'emp_name' => $result1->name,
					'emp_code' => $result1->empcode,
					'emp_email' => $result1->email,
					'emp_img' => $result1->profileimage,
					'role' => $result1->role,
				];
				$this->session->set_userdata('emp_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
				redirect(base_url().'empdashboard');
			}
			elseif(isset($result2))
			{
				$session_data = [
					'dp_id' => $result2->id,
					'dp_name' => $result2->name,
					'dp_email' => $result2->email,
					'dp_img' => $result2->profileimage,
					'role' => $result2->role,
				];
				$this->session->set_userdata('dp_session', $session_data);
				$this->session->set_flashdata('msg', 'Login Successfully'); 
				redirect(base_url().'dpdashboard');
			}
			else
			{
				$this->session->set_flashdata('msg', 'Email/Password or combination of both does not match. Please try again!!');
				redirect(base_url('admin'));
			}
	
		} 
		
		 public function logout() {
			/*$this->session->sess_destroy('admin_session');
			redirect(base_url().'home'); */
			$this->session->unset_userdata('admin_session');
					session_destroy();
					unset($_SESSION);
					redirect(base_url('home/artistlogin'));
		}
			 public function logoutadmin() {
			/*$this->session->sess_destroy('admin_session');
			redirect(base_url().'home'); */
			$this->session->unset_userdata('admin_session');
					session_destroy();
					unset($_SESSION);
					redirect(base_url('admin'));
		}
		public function adminlogin() {
			/*$this->session->sess_destroy('admin_session');
			redirect(base_url().'home'); */
			 $this->session->unset_userdata('division');
			  $this->session->unset_userdata('company');
			 $this->session->unset_userdata('year');
					
					
					redirect(base_url('home/dashboard'));
		}
	
		public function emplogout() {
			/*$this->session->sess_destroy('admin_session');
			redirect(base_url().'home'); */
			$this->session->unset_userdata('emp_session');
					session_destroy();
					unset($_SESSION);
					redirect(base_url('admin'));
		}
	
		public function dplogout() {
			/*$this->session->sess_destroy('admin_session');
			redirect(base_url().'home'); */
			$this->session->unset_userdata('dp_session');
					session_destroy();
					unset($_SESSION);
					redirect(base_url('admin'));
		}
	
	public function admin() {
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
        $this->load->view('admin',$data);
    }


	public function adminprofile()
	{
		$table='users';
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$uname = $this->input->post('username');
		$mobile = $this->input->post('mobile');
		$companyname = $this->input->post('companyname');	
		$companyownername = $this->input->post('companyownername');
		$companyaddress = $this->input->post('companyaddress');	
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}
		
			$no1 = rand();
			if($_FILES["logo"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $logo=$result->logo; 	
			  }else{
	        $uploadfile=$_FILES["logo"]["tmp_name"];
            $folder="./assets/img/logo/";
            move_uploaded_file($_FILES["logo"]["tmp_name"], "$folder".$no1.$_FILES["logo"]["name"]);
            $logo=$no1.$_FILES["logo"]["name"]; 
			}
			
		$data = array('name'=>$name,'email'=>$email,'username'=>$uname,'logo'=>$logo,'mobile'=>$mobile,'companyname'=>$companyname,'companyownername'=>$companyownername,'companyaddress'=>$companyaddress,'profileimage'=>$profileimage,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Admin General Info Updated Successfully');                   
		 redirect(base_url().'admin');
	}


	public function changepassword()
	{
		$table="users";
		 $id="1";
		$data['row_show']=$this->dashboard_model->fetchdata($table,$id);
	$oldpassword=$data['row_show']->password; 
	
 //$old=sha1($_POST['password']);
  $new=$_POST['newpassword'];
	
	
	//if($old==$oldpassword)
	if(isset($oldpassword))
	{
	$update=$this->dashboard_model->changepassword1($_POST);
	if($update){
		$this->session->set_flashdata('msg', '<br/>Password Changed Successfully!'); 

	 redirect(base_url().'admin', 'refresh');
		
	}
	else{
		$this->session->set_flashdata('msg', '<br/><br/>New Password and Confirm Password does not Match'); 

	 redirect(base_url().'admin', 'refresh');
		
		
	}
	}
	else
	{
	$this->session->set_flashdata('msg', '<br/><br/>Old Password is Incorrect!!'); 

	 redirect(base_url().'admin/changepassword', 'refresh');
	}
		
		
	}



	public function adminsocial()
	{
		$table='users';
		$id = $this->input->post('id');
		$google = $this->input->post('google');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$linkedin = $this->input->post('linkedin');
		$instagram = $this->input->post('instagram');
		$date = date('d-M-Y');
	
		$data = array('google'=>$google,'facebook'=>$facebook,'twitter'=>$twitter,'linkedin'=>$linkedin,'instagram'=>$instagram,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Admin General Info Updated Successfully');                   
		 redirect(base_url().'admin');
	}


	public function dashboard()
	{
		 //$_SESSION['division'] =$name;
		
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		$table="users";
		$data['countusers']=$this->home_model->countdata($table);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['deliverypartners']=$this->home_model->countdata($table);

		$table="tb_division";
		$data['division']=$this->home_model->fetchall_data($table);

		
		$this->load->view('dashboard',$data);
	}


	public function dpdashboard()
	{  
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="brands";
		$data['countbrands']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);

		
		$this->load->view('deliverydash',$data);
	}

	public function empdashboard()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		//echo $data['countcustomers']; 
		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		$data['countmerchantstoday']=$this->home_model->countdatatoday($table);
		$data['countmerchantsactive']=$this->home_model->countdataactive($table);
		$data['countmerchantsinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);

		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);

		$table="brands";
		$data['countbrands']=$this->home_model->countdata($table);

		$table="merchants";
		$data['countmerchants']=$this->home_model->countdata($table);
		
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);

		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);

		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);

		
		$this->load->view('employeedash',$data);
	}

	public function master()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table); */

		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		
		/*$table="payments";
		$data['countpayments']=$this->home_model->countdata($table); */
		$this->load->view('master',$data);
	}

	public function demographics()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);  
		//print_r($data['admin']); exit;
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		$this->load->view('demographics',$data);
	}


/*	public function users()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['customers']=$this->home_model->fetchall($table);
		$this->load->view('users',$data);
	}*/
public function users()
	{
		//$table="users";
	//	$id="1"; 
	//	$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="users";
		$data['customers']=$this->home_model->fetchall_user($table);
		$this->load->view('users',$data);
	}
public function adduser()
	{
		$this->load->view('adduser');
	}

	public function edituser()
	{
		$table="users";
		$id=$this->uri->segment(2);
		$data['customer']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('edituser',$data);
	}

	public function deleteuser() 
	{
		
		$id=$this->uri->segment(2);
		$table="users";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Customer Info Deleted Successfully'); 

	 redirect(base_url().'users', 'refresh');
	}

	public function userstatus($id = NULL)
	{
		$table="users"; 
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'users', 'refresh');
		
	}

	public function add_user()
	{
		$table='users';
		$types = $this->input->post('types');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
			$this->db->where('mobile', $mobile);
				$result = $this->db->get('users');
			if($result->num_rows() > 0)
				{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">This Mobile no is already exist!</div>');
				//	redirect('home/login_detail');
				return false;
				
				}
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$password = $this->input->post('password');
			$age = $this->input->post('age');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];
			
		$data = array('roles'=>$types,'name'=>$name,'email'=>$email,'username'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'address'=>$address,'password'=>$password,'date'=>$date,'age'=>$age);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Info Saved Successfully');                   
		 redirect(base_url().'users');
	}

	public function edit_user()
	{
		$table='users';
		$id = $this->input->post('id');
		//	$types = $this->input->post('types');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$password = $this->input->post('password');
			$age = $this->input->post('age');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}
			
		$data = array('name'=>$name,'email'=>$email,'username'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'address'=>$address,'password'=>$password,'date'=>$date,'age'=>$age);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', ' Info Updated Successfully');                   
		 redirect(base_url().'users');
	}
/*---------------admin add------------------------------------------*/
public function admins()
	{
		//$table="users";
	//	$id="1"; 
	//	$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="users";
		$data['customers']=$this->home_model->fetchall_admin($table);
		$this->load->view('adminuser',$data);
	}
public function addadmin()
	{
		$this->load->view('addadmin');
	}

	public function editadmin()
	{
		$table="users";
		$id=$this->uri->segment(3);
		$data['customer']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editadmin',$data);
	}

	public function deleteadmin() 
	{
		
		$id=$this->uri->segment(3);
		$table="users";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Customer Info Deleted Successfully'); 

	 redirect(base_url().'home/admins', 'refresh');
	}

	public function adminstatus($id = NULL)
	{
		$table="users"; 
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'home/admins', 'refresh');
		
	}

	public function add_admin()
	{
		$table='users';
		$types = $this->input->post('types');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
			$this->db->where('mobile', $mobile);
				$result = $this->db->get('users');
			if($result->num_rows() > 0)
				{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">This Mobile no is already exist!</div>');
					redirect('home/addadmin');
				return false;
				
				}
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$password = $this->input->post('password');
			$age = $this->input->post('age');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];
			
		$data = array('roles'=>$types,'name'=>$name,'email'=>$email,'username'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'address'=>$address,'password'=>$password,'date'=>$date,'age'=>$age);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Info Saved Successfully');                   
		 redirect(base_url().'home/admins');
	}

	public function edit_admin()
	{
		$table='users';
		$id = $this->input->post('id');
		//	$types = $this->input->post('types');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$password = $this->input->post('password');
			$age = $this->input->post('age');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}
			
		$data = array('name'=>$name,'email'=>$email,'username'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'address'=>$address,'password'=>$password,'date'=>$date,'age'=>$age);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', ' Info Updated Successfully');                   
		 redirect(base_url().'home/admins');
	}

/*end admin*/
	public function country()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		$table="country";
		$data['country']=$this->home_model->fetchall($table);
		$this->load->view('country',$data);
	}

	public function countrytoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		$table="country";
		$data['countrytoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('countrytoday',$data);
	}

	public function countryactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		$table="country";
		$data['countryactive']=$this->home_model->fetchallactive($table);
		$this->load->view('countryactive',$data);
	}

	public function countryinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		$table="country";
		$data['countryinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('countryinactive',$data);
	}

	public function addcountry()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$this->load->view('addcountry');
	}

	public function editcountry()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$id=$this->uri->segment(2);
		$data['country']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editcountry',$data);
	}

	public function deletecountry() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="country";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Country Info Deleted Successfully'); 

	 redirect(base_url().'country', 'refresh');
	}

	public function countrystatus($id = NULL)
	{
		$table="country";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'country', 'refresh');
		
	}

	public function add_country()
	{
		$table='country';
		$country = $this->input->post('country');
		$date = date('d-M-Y');	
		$data = array('country'=>$country,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Country Info Saved Successfully');                   
		 redirect(base_url().'country');
	}

	public function edit_country()
	{
		$table='country';
		$id = $this->input->post('id');
		$country = $this->input->post('country');
		$date = date('d-M-Y');
			
		$data = array('country'=>$country,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Country Info Updated Successfully');                   
		 redirect(base_url().'country');
	}

	public function state()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        
			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="state";
		$data['state']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			echo "jjujj";die;
		$table="state";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['state']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="state";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "s_div";
		$data['state']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="state";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['state']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="state";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "s_div";
			$col2= "s_comp";
		$data['state']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('state',$data);
	}

	public function statetoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['statetoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('statetoday',$data);
	}

	public function stateactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['stateactive']=$this->home_model->fetchallactive($table);
		$this->load->view('stateactive',$data);
	}

	public function stateinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['stateinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('stateinactive',$data);
	}

	public function addstate()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
		$this->load->view('addstate',$data);
	}

	public function editstate()
	{
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
		$table="state";
		$id=$this->uri->segment(2);
		$data['state']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editstate',$data);
	}

	public function deletestate() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="state";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'State Info Deleted Successfully'); 

	 redirect(base_url().'state', 'refresh');
	}

	public function statestatus()
	{
		$table="users";
		$id=$this->uri->segment(3);
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="state";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'state', 'refresh');
		
	}

	public function add_state()
	{
		$table='state';
		$state = $this->input->post('state');
        $countryid = $this->input->post('countryid');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
		$date = date('d-M-Y');	
		$data = array('state'=>$state,'country_id'=>$countryid,'date'=>$date,'s_div'=>$div,'s_comp'=>$comp);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'State Info Saved Successfully');                   
		 redirect(base_url().'state');
	}

	public function edit_state()
	{
		$table='state';
		$id = $this->input->post('id');
		$state = $this->input->post('state');
        $countryid = $this->input->post('countryid');
		$date = date('d-M-Y');
			
		$data = array('state'=>$state,'country_id'=>$countryid,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'State Info Updated Successfully');                   
		 redirect(base_url().'state');
	}

	public function city()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
	
		
			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
			$table="city";
		$data['city']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			echo "jjujj";die;
		$table="city";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['city']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="city";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "s_div";
		$data['city']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="city";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['city']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="city";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "s_div";
			$col2= "s_comp";
		$data['city']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('city',$data);
	}

	public function citytoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table="city";
		$data['citytoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('citytoday',$data);
	}

	public function cityactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table="city";
		$data['cityactive']=$this->home_model->fetchallactive($table);
		$this->load->view('cityactive',$data);
	}

	public function cityinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table="city";
		$data['cityinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('cityinactive',$data);
	}

	public function addcity()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$this->load->view('addcity',$data);
	}

	public function editcity()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table="city";
		$id=$this->uri->segment(2);
		$data['city']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editcity',$data);
	}

	public function deletecity() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="city";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'City Info Deleted Successfully'); 

	 redirect(base_url().'city', 'refresh');
	}

	public function citystatus($id = NULL)
	{
		$table="city";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'city', 'refresh');
		
	}

	public function add_city()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table='city';
		$city = $this->input->post('city');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
		$date = date('d-M-Y');	
		$data = array('city'=>$city,'country_id'=>$countryid,'state_id'=>$stateid,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'City Info Saved Successfully');                   
		 redirect(base_url().'city');
	}

	public function edit_city()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table='city';
		$id = $this->input->post('id');
		$city = $this->input->post('city');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
		$date = date('d-M-Y');	
		$data = array('city'=>$city,'country_id'=>$countryid,'state_id'=>$stateid,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'City Info Updated Successfully');                   
		 redirect(base_url().'city');
	}
	
	public function area()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		
		
		
			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			echo "jjujj";die;
		$table="area";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['area']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="area";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "s_div";
		$data['area']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="area";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['area']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="area";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "s_div";
			$col2= "s_comp";
		$data['area']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('area',$data);
	}

	public function areatoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['areatoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('areatoday',$data);
	}

	public function areaactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['areaactive']=$this->home_model->fetchallactive($table);
		$this->load->view('areaactive',$data);
	}

	public function areainactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['areainactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('areainactive',$data);
	}

	public function addarea()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$this->load->view('addarea',$data);
	}

	public function editarea()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$id=$this->uri->segment(2);
		$data['area']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editarea',$data);
	}

	public function deletearea() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(3);
		$table="area";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Area Info Deleted Successfully'); 

	 redirect(base_url().'area', 'refresh');
	}

	public function areastatus()
	{
	//	$table="users";
	$table="area";
		$id=$this->uri->segment(3);
		$data['admin']=$this->home_model->fetchdata($table,$id);
		
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'area', 'refresh');
		
	}

	public function add_area()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table='area';
		$area = $this->input->post('area');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
        $cityid = $this->input->post('cityid');
		$date = date('d-M-Y');	
		$data = array('area'=>$area,'country_id'=>$countryid,'state_id'=>$stateid,'city_id'=>$cityid,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Area Info Saved Successfully');                   
		 redirect(base_url().'area');
	}

	public function edit_area()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
		$table='area';
		$id = $this->input->post('id');
		$area = $this->input->post('area');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
        $cityid = $this->input->post('cityid');
		$date = date('d-M-Y');	
		$data = array('area'=>$area,'country_id'=>$countryid,'state_id'=>$stateid,'city_id'=>$cityid,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Area Info Updated Successfully');                   
		 redirect(base_url().'area');
	}


	public function pincode()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('pincode',$data);
	}
	
	public function pincodetoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincodetoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('pincodetoday',$data);
	}

	public function pincodeactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincodeactive']=$this->home_model->fetchallactive($table);
		$this->load->view('pincodeactive',$data);
	}

	public function pincodeinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['countcountry']=$this->home_model->countdata($table);
		$data['countcountrytoday']=$this->home_model->countdatatoday($table);
		$data['countcountryactive']=$this->home_model->countdataactive($table);
		$data['countcountryinactive']=$this->home_model->countdatainactive($table);
        $table="state";
		$data['countstate']=$this->home_model->countdata($table);
		$data['countstatetoday']=$this->home_model->countdatatoday($table);
		$data['countstateactive']=$this->home_model->countdataactive($table);
		$data['countstateinactive']=$this->home_model->countdatainactive($table);
        $table="city";
		$data['countcity']=$this->home_model->countdata($table);
		$data['countcitytoday']=$this->home_model->countdatatoday($table);
		$data['countcityactive']=$this->home_model->countdataactive($table);
		$data['countcityinactive']=$this->home_model->countdatainactive($table);
        $table="area";
		$data['countarea']=$this->home_model->countdata($table);
		$data['countareatoday']=$this->home_model->countdatatoday($table);
		$data['countareaactive']=$this->home_model->countdataactive($table);
		$data['countareainactive']=$this->home_model->countdatainactive($table);
		$table="pincode";
		$data['countpincode']=$this->home_model->countdata($table);
		$data['countpincodetoday']=$this->home_model->countdatatoday($table);
		$data['countpincodeactive']=$this->home_model->countdataactive($table);
		$data['countpincodeinactive']=$this->home_model->countdatainactive($table);

		
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincodeinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('pincodeinactive',$data);
	}

	public function addpincode()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$this->load->view('addpincode',$data);
	}

	public function editpincode()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="pincode";
		$id=$this->uri->segment(2);
		$data['pincode']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editpincode',$data);
	}

	public function deletepincode() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="pincode";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Area Info Deleted Successfully'); 

	 redirect(base_url().'pincode', 'refresh');
	}

	public function pincodestatus($id = NULL)
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="pincode";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'pincode', 'refresh');
		
	}

	public function add_pincode()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table='pincode';
		$pincode = $this->input->post('pincode');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
        $cityid = $this->input->post('cityid');
        $areaid = $this->input->post('areaid');
		$date = date('d-M-Y');	
		$data = array('pincode'=>$pincode,'country_id'=>$countryid,'state_id'=>$stateid,'city_id'=>$cityid,'area_id'=>$areaid,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Pin Code Saved Successfully');                   
		 redirect(base_url().'pincode');
	}

	public function edit_pincode()
	{
        $table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table='pincode';
		$id = $this->input->post('id');
		$pincode = $this->input->post('pincode');
		$countryid = $this->input->post('countryid');
		$stateid = $this->input->post('stateid');
        $cityid = $this->input->post('cityid');
		$areaid = $this->input->post('areaid');
		$date = date('d-M-Y');	
		$data = array('pincode'=>$pincode,'country_id'=>$countryid,'state_id'=>$stateid,'city_id'=>$cityid,'area_id'=>$areaid,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Pin Code Updated Successfully');                   
		 redirect(base_url().'pincode');
	}

	public function getCities(){ 
		// POST data 
		$postData = $this->input->post();
		
		// load model 
		//$this->load->model('Main_model');
		
		// get data 
		$data = $this->home_model->getCity($postData);
		echo json_encode($data); 
	  }
	
	  public function getAreas(){ 
		// POST data 
		$postData = $this->input->post();
	
		// load model 
		//$this->load->model('Main_model');
		
		// get data 
		$data = $this->home_model->getArea($postData);
		echo json_encode($data); 
	  }

	  public function getPincodes(){ 
		// POST data 
		$postData = $this->input->post();
	
		// load model 
		//$this->load->model('Main_model');
		
		// get data 
		$data = $this->home_model->getPin($postData);
		echo json_encode($data); 
	  }

	public function manufacturers()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$id=$this->uri->segment(1);
		$data['manufacturer']=$this->home_model->fetchdata($table,$id);

		
		
			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			echo "jjujj";die;
		$table="manufacturers";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['manufacturers']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="manufacturers";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "s_div";
		$data['manufacturers']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="manufacturers";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['manufacturers']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="manufacturers";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "s_div";
			$col2= "s_comp";
		$data['manufacturers']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		
		$this->load->view('manufacturers',$data);
	}


	public function manufacturerstoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
        
        $table="manufacturers";
		$id=$this->uri->segment(1);
		$data['manufacturer']=$this->home_model->fetchdata($table,$id);
        
		$table="manufacturers";
		$data['manufacturerstoday']=$this->home_model->fetchalltoday($table);
		
		$this->load->view('manufacturerstoday',$data);
	}
    
    
public function manufacturersactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
        
        $table="manufacturers";
		$id=$this->uri->segment(1);
		$data['manufacturer']=$this->home_model->fetchdata($table,$id);
        
		$table="manufacturers";
		$data['manufacturersactive']=$this->home_model->fetchallactive($table);
		
		$this->load->view('manufacturersactive',$data);
	}
    
    
public function manufacturersinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
        
        $table="manufacturers";
		$id=$this->uri->segment(1);
		$data['manufacturer']=$this->home_model->fetchdata($table,$id);
        
		$table="manufacturers";
		$data['manufacturersinactive']=$this->home_model->fetchallinactive($table);
		
		$this->load->view('manufacturersinactive',$data);
	}

	public function deletemanufacturer() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="manufacturers";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Manufacturer Info Deleted Successfully'); 

	 redirect(base_url().'manufacturers', 'refresh');
	}

	public function manufacturerstatus()
	{
		$table="users";
		$id=$this->uri->segment(3);
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="manufacturers";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'manufacturers', 'refresh');
		
	}

	public function add_manufacturer()
	{
		$table='manufacturers';
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
        $no = rand();
		$uploadfile=$_FILES["profileimage"]["tmp_name"];
		$folder="./assets/img/manufacturer/";
        move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
		$profileimage = $no.$_FILES["profileimage"]["name"];
        
			
		$data = array('name'=>$name,'email'=>$email,'profileimage'=>$profileimage,'s_div'=>$div,'s_comp'=>$comp);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Manufacturer Info Saved Successfully');                   
		 redirect(base_url().'manufacturers');
	}

	public function edit_manufacturer()
	{
		$table='manufacturers';
		$id = $this->input->post('id');
		$table='manufacturers';
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/manufacturer/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}
        
			
		$data = array('name'=>$name,'m_details'=>$email,'profileimage'=>$profileimage);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Manufacturer Info Updated Successfully');                   
		 redirect(base_url().'manufacturers');
	}

	


	public function vendors()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);
		$data['countvendorstoday']=$this->home_model->countdatatoday($table);
		$data['countvendorsactive']=$this->home_model->countdataactive($table);
		$data['countvendorsinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);

			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		
		
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="vendors";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "v_division";
			$col2= "v_comp";
		$data['vendors']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="vendors";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "v_division";
		$data['vendors']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="vendors";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "v_division";
			$col2= "v_comp";
		$data['vendors']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="vendors";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "v_division";
			$col2= "v_comp";
		$data['vendors']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('vendors',$data);
	}
    
    
    public function vendorstoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);
		$data['countvendorstoday']=$this->home_model->countdatatoday($table);
		$data['countvendorsactive']=$this->home_model->countdataactive($table);
		$data['countvendorsinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendorstoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('vendorstoday',$data);
	}
    
    public function vendorsactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);
		$data['countvendorstoday']=$this->home_model->countdatatoday($table);
		$data['countvendorsactive']=$this->home_model->countdataactive($table);
		$data['countvendorsinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendorsactive']=$this->home_model->fetchallactive($table);
		$this->load->view('vendorsactive',$data);
	}
    
    public function vendorsinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['countvendors']=$this->home_model->countdata($table);
		$data['countvendorstoday']=$this->home_model->countdatatoday($table);
		$data['countvendorsactive']=$this->home_model->countdataactive($table);
		$data['countvendorsinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="vendors";
		$data['vendorsinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('vendorsinactive',$data);
	}

	public function addvendor()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('addvendor',$data);
	}

	public function editvendor()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="vendors";
		$id=$this->uri->segment(2);
		$data['vendor']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editvendor',$data);
	}

	public function deletevendor() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="vendors";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Vendor Info Deleted Successfully'); 

	 	redirect(base_url().'vendors', 'refresh');
	}

	public function vendorstatus($id = NULL)
	{
		$table="vendors";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'vendors', 'refresh');
		
	}

	public function add_vendor()
	{
		$table="vendors";
		 echo $division = $this->input->post('division');
		echo $company = $this->input->post('company');
		 $name = $this->input->post('name');
		 $email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		 $idproof = $this->input->post('idproof');
		
		 $state = $this->input->post('state');
		 $city = $this->input->post('city');
		 $area = $this->input->post('area');
		  $pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$designation = $this->input->post('designation');
		//$companysector = $this->input->post('companysector');
		 $companyname = $this->input->post('companyname');
		 $companyownername = $this->input->post('companyownername');
		$openingbal = $this->input->post('openingbal');
		$crdr = $this->input->post('crdr');
		 $companyaddress = $this->input->post('companyaddress');
		$gstno = $this->input->post('gstno');
		$companystatus = $this->input->post('companystatus');
		$bankname = $this->input->post('bankname');
		$accountholder = $this->input->post('accountholder');
		$accountno = $this->input->post('accountno');
		$ifsccode = $this->input->post('ifsccode');
		$branchnameaddress = $this->input->post('branchnameaddress');
		$date = date('d-M-Y');
		$no = rand();
		if($_FILES["profileimage"]["name"]==""){
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/vendor/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];
}
			
			//$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'companystate'=>$companystate,'companycity'=>$companycity,'companyarea'=>$companyarea,'companypincode'=>$companypincode,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'openingbal'=>$openingbal,'crdr'=>$crdr,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date,'v_division'=>$division,'v_comp'=>$company,'pdesignation'=>$designation);
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Vendor Info Saved Successfully');

		if($this->input->post('income')=='income'){
			redirect(base_url().'home/income');
		}elseif($this->input->post('income')=='expense'){
			redirect(base_url().'home/expence');
		}else{                  
		 redirect(base_url().'vendors');
		}
	}

	public function edit_vendor()
	{
		$table="vendors";
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$idproof = $this->input->post('idproof');
		//$idproofno = $this->input->post('idproofno');
		//$pancard = $this->input->post('pancard');
		$pancardno = $this->input->post('pancardno');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$designation = $this->input->post('designation');
		//$companysector = $this->input->post('companysector');
		$companyname = $this->input->post('companyname');
		$companyownername = $this->input->post('companyownername');
		$openingbal = $this->input->post('openingbal');
		$crdr = $this->input->post('crdr');
		//$companystate = $this->input->post('companystate');
		//$companycity = $this->input->post('companycity');
		//$companyarea = $this->input->post('companyarea');
		//$companypincode = $this->input->post('companypincode');
		$companyaddress = $this->input->post('companyaddress');
		$gstno = $this->input->post('gstno');
		$companystatus = $this->input->post('companystatus');
		$bankname = $this->input->post('bankname');
		$accountholder = $this->input->post('accountholder');
		$accountno = $this->input->post('accountno');
		$ifsccode = $this->input->post('ifsccode');
		$branchnameaddress = $this->input->post('branchnameaddress');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/vendor/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}

			$no1 = rand();
			if($_FILES["idproofno"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $idproofno=$result->idproofno; 	
			  }else{
	        $uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no.$_FILES["idproofno"]["name"]);
            $idproofno=$no.$_FILES["idproofno"]["name"]; 
			}

			$no2 = rand();
			if($_FILES["pancard"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $pancard=$result->pancard; 	
			  }else{
	        $uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
            $pancard=$no.$_FILES["pancard"]["name"]; 
			}
			
			//$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'companystate'=>$companystate,'companycity'=>$companycity,'companyarea'=>$companyarea,'companypincode'=>$companypincode,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'pancardno'=>$pancardno,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'openingbal'=>$openingbal,'crdr'=>$crdr,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date,'pdesignation'=>$designation);
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Vendor Info Updated Successfully');                   
		 redirect(base_url().'vendors');
	}


	public function customers()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="customers";
		$data['customers']=$this->home_model->fetchall($table);
		$this->load->view('customers',$data);
	}
    
    
    public function customerstoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="customers";
		$data['customerstoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('customerstoday',$data);
	}
    
    public function customersactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="customers";
		$data['customersactive']=$this->home_model->fetchallactive($table);
		$this->load->view('customersactive',$data);
	}
    
    public function customersinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['countcustomers']=$this->home_model->countdata($table);
		$data['countcustomerstoday']=$this->home_model->countdatatoday($table);
		$data['countcustomersactive']=$this->home_model->countdataactive($table);
		$data['countcustomersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="customers";
		$data['customersinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('customersinactive',$data);
	}

	public function addcustomer()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('addcustomer',$data);
	}

	public function editcustomer()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="customers";
		$id=$this->uri->segment(2);
		$data['customer']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editcustomer',$data);
	}

	public function deletecustomer() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="customers";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Vendor Info Deleted Successfully'); 

	 	redirect(base_url().'customers', 'refresh');
	}

	public function customerstatus($id = NULL)
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="customers";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'customers', 'refresh');
		
	}

	public function add_customer()
	{
		$table="customers";
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$idproof = $this->input->post('idproof');
		//$idproofno = $this->input->post('idproofno');
		//$pancard = $this->input->post('pancard');
		$pancardno = $this->input->post('pancardno');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$openingbal = $this->input->post('openingbal');
		$crdr = $this->input->post('crdr');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/customer/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];

			$no1 = rand();
			$uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no1.$_FILES["idproofno"]["name"]);
			$idproofno = $no1.$_FILES["idproofno"]["name"];

			$no2 = rand();
			$uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no2.$_FILES["pancard"]["name"]);
			$pancard = $no2.$_FILES["pancard"]["name"];
			
			//$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'companystate'=>$companystate,'companycity'=>$companycity,'companyarea'=>$companyarea,'companypincode'=>$companypincode,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'pancardno'=>$pancardno,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'openingbal'=>$openingbal,'crdr'=>$crdr,'profileimage'=>$profileimage,'date'=>$date);
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Vendor Info Saved Successfully');                   
		 redirect(base_url().'customers');
	}

	public function edit_customer()
	{
		$table="customers";
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$idproof = $this->input->post('idproof');
		//$idproofno = $this->input->post('idproofno');
		//$pancard = $this->input->post('pancard');
		$pancardno = $this->input->post('pancardno');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$pincode = $this->input->post('pincode');
		$address = $this->input->post('address');
		$openingbal = $this->input->post('openingbal');
		$crdr = $this->input->post('crdr');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/customer/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}

			$no1 = rand();
			if($_FILES["idproofno"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $idproofno=$result->idproofno; 	
			  }else{
	        $uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no.$_FILES["idproofno"]["name"]);
            $idproofno=$no.$_FILES["idproofno"]["name"]; 
			}

			$no2 = rand();
			if($_FILES["pancard"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $pancard=$result->pancard; 	
			  }else{
	        $uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
            $pancard=$no.$_FILES["pancard"]["name"]; 
			}
			
			//$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'profileimage'=>$profileimage,'companyname'=>$companyname,'companyownername'=>$companyownername,'companystate'=>$companystate,'companycity'=>$companycity,'companyarea'=>$companyarea,'companypincode'=>$companypincode,'companyaddress'=>$companyaddress,'gstno'=>$gstno,'companystatus'=>$companystatus,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'pancardno'=>$pancardno,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'address'=>$address,'openingbal'=>$openingbal,'crdr'=>$crdr,'profileimage'=>$profileimage,'date'=>$date);
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Vendor Info Updated Successfully');                   
		 redirect(base_url().'customers');
	}


	public function employees()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);
		$data['countemployeestoday']=$this->home_model->countdatatoday($table);
		$data['countemployeesactive']=$this->home_model->countdataactive($table);
		$data['countemployeesinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="employees";
		$data['employees']=$this->home_model->fetchall($table);
		$this->load->view('employees',$data);
	}
    
    
    public function employeestoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);
		$data['countemployeestoday']=$this->home_model->countdatatoday($table);
		$data['countemployeesactive']=$this->home_model->countdataactive($table);
		$data['countemployeesinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="employees";
		$data['employeestoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('employeestoday',$data);
	}
    
    public function employeesactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);
		$data['countemployeestoday']=$this->home_model->countdatatoday($table);
		$data['countemployeesactive']=$this->home_model->countdataactive($table);
		$data['countemployeesinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
	
		$table="employees";
		$data['employeesactive']=$this->home_model->fetchallactive($table);
		$this->load->view('employeesactive',$data);
	}
    
    public function employeesinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['countemployees']=$this->home_model->countdata($table);
		$data['countemployeestoday']=$this->home_model->countdatatoday($table);
		$data['countemployeesactive']=$this->home_model->countdataactive($table);
		$data['countemployeesinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="employees";
		$data['employeesinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('employeesinactive',$data);
	}

	public function addemployee()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="designation";
		$data['designation']=$this->home_model->fetchall($table);
		$this->load->view('addemployee',$data);
	}

	public function editemployee()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="designation";
		$data['designation']=$this->home_model->fetchall($table);
		$table="employees";
		$id=$this->uri->segment(2);
		$data['employee']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editemployee',$data);
	}

	public function deleteemployee() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="employees";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Employee Info Deleted Successfully'); 

	 	redirect(base_url().'employees', 'refresh');
	}

	public function employeestatus($id = NULL)
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="employees";
		$data['status']=$this->home_model->changestatus($table,$id);
		//print_r($data['status']); exit;
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'employees', 'refresh');
		
	}

	public function add_employee()
	{
		$table='employees';
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		$mobile = $this->input->post('mobile');
		$idproof = $this->input->post('idproof');
		$pancardno = $this->input->post('pancardno');
		$pincode = $this->input->post('pincode');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$pincode = $this->input->post('pincode');
		$currentaddress = $this->input->post('currentaddress');
		$pcountry = $this->input->post('pcountry');
		$pstate = $this->input->post('pstate');
		$pcity = $this->input->post('pcity');
		$parea = $this->input->post('parea');
		$ppincode = $this->input->post('ppincode');
		$homeaddress = $this->input->post('homeaddress');
		$refname1 = $this->input->post('refname1');
		$refname2 = $this->input->post('refname2');
		$refmobile1 = $this->input->post('refmobile1');
		$refmobile2 = $this->input->post('refmobile2');
		$relation1 = $this->input->post('relation1');
		$relation2 = $this->input->post('relation2');
		$prevdesg = $this->input->post('prevdesg');
		$prevcompany = $this->input->post('prevcompany');		
		$prevcompanyowner = $this->input->post('prevcompanyowner');		
		$prevcompanyaddress = $this->input->post('prevcompanyaddress');		
		$refempname1 = $this->input->post('refempname1');
		$refempname2 = $this->input->post('refempname2');
		$refempmobile1 = $this->input->post('refempmobile1');
		$refempmobile2 = $this->input->post('refempmobile2');
		$refempdesg1 = $this->input->post('refempdesg1');
		$refempdesg2 = $this->input->post('refempdesg2');
		$dept = $this->input->post('dept');
		$desg = $this->input->post('desg');
		$doj = $this->input->post('doj');
		$empcode = $this->input->post('empcode');
		$ofemail = $this->input->post('ofemail');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];
		
			$no1 = rand();
			$uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no.$_FILES["idproofno"]["name"]);
			$idproofno = $no.$_FILES["idproofno"]["name"];

			$no2 = rand();
			$uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
			$pancard = $no.$_FILES["pancard"]["name"];


			
			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'password'=>$password,'cpassword'=>$cpassword,'dob'=>$dob,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'country'=>$country,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'currentaddress'=>$currentaddress,'pcountry'=>$pcountry,'pstate'=>$pstate,'pcity'=>$pcity,'parea'=>$parea,'ppincode'=>$ppincode,'homeaddress'=>$homeaddress,'refname1'=>$refname1,'refname2'=>$refname2,'refmobile1'=>$refmobile1,'refmobile2'=>$refmobile2,'relation1'=>$relation1,'relation2'=>$relation2,'prevdesg'=>$prevdesg,'prevcompany'=>$prevcompany,'prevcompanyowner'=>$prevcompanyowner,'prevcompanyaddress'=>$prevcompanyaddress,'refempname1'=>$refempname1,'refempname2'=>$refempname2,'refempmobile1'=>$refempmobile1,'refempmobile2'=>$refempmobile2,'refempdesg1'=>$refempdesg1,'refempdesg2'=>$refempdesg2,'dept'=>$dept,'doj'=>$doj,'empcode'=>$empcode,'ofemail'=>$ofemail,'profileimage'=>$profileimage,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Employee Info Saved Successfully');                   
		 redirect(base_url().'employees');
	}

	public function edit_employee()
	{
		$table='employees';
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		$mobile = $this->input->post('mobile');
		$idproof = $this->input->post('idproof');
		$pancardno = $this->input->post('pancardno'); 
		$pincode = $this->input->post('pincode');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$pincode = $this->input->post('pincode');
		$currentaddress = $this->input->post('currentaddress');
		$pcountry = $this->input->post('pcountry');
		$pstate = $this->input->post('pstate');
		$pcity = $this->input->post('pcity');
		$parea = $this->input->post('parea');
		$ppincode = $this->input->post('ppincode');
		$homeaddress = $this->input->post('homeaddress');
		$refname1 = $this->input->post('refname1');
		$refname2 = $this->input->post('refname2');
		$refmobile1 = $this->input->post('refmobile1');
		$refmobile2 = $this->input->post('refmobile2');
		$relation1 = $this->input->post('relation1');
		$relation2 = $this->input->post('relation2');
		$prevdesg = $this->input->post('prevdesg');
		$prevcompany = $this->input->post('prevcompany');		
		$prevcompanyowner = $this->input->post('prevcompanyowner');		
		$prevcompanyaddress = $this->input->post('prevcompanyaddress');		
		$refempname1 = $this->input->post('refempname1');
		$refempname2 = $this->input->post('refempname2');
		$refempmobile1 = $this->input->post('refempmobile1');
		$refempmobile2 = $this->input->post('refempmobile2');
		$refempdesg1 = $this->input->post('refempdesg1');
		$refempdesg2 = $this->input->post('refempdesg2');
		$dept = $this->input->post('dept');
		$desg = $this->input->post('desg');
		$doj = $this->input->post('doj');
		$empcode = $this->input->post('empcode');
		$ofemail = $this->input->post('ofemail');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/img/user/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}

			$no1 = rand();
			if($_FILES["idproofno"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $idproofno=$result->idproofno; 	
			  }else{
	        $uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no.$_FILES["idproofno"]["name"]);
            $idproofno=$no.$_FILES["idproofno"]["name"]; 
			}

			$no2 = rand();
			if($_FILES["pancard"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $pancard=$result->pancard; 	
			  }else{
	        $uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
            $pancard=$no.$_FILES["pancard"]["name"]; 
			}

			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'password'=>$password,'cpassword'=>$cpassword,'mobile'=>$mobile,'idproof'=>$idproof,'idproofno'=>$idproofno,'pancard'=>$pancard,'country'=>$country,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'currentaddress'=>$currentaddress,'pcountry'=>$pcountry,'pstate'=>$pstate,'pcity'=>$pcity,'parea'=>$parea,'ppincode'=>$ppincode,'homeaddress'=>$homeaddress,'refname1'=>$refname1,'refname2'=>$refname2,'refmobile1'=>$refmobile1,'refmobile2'=>$refmobile2,'relation1'=>$relation1,'relation2'=>$relation2,'prevdesg'=>$prevdesg,'prevcompany'=>$prevcompany,'prevcompanyowner'=>$prevcompanyowner,'prevcompanyaddress'=>$prevcompanyaddress,'refempname1'=>$refempname1,'refempname2'=>$refempname2,'refempmobile1'=>$refempmobile1,'refempmobile2'=>$refempmobile2,'refempdesg1'=>$refempdesg1,'refempdesg2'=>$refempdesg2,'dept'=>$dept,'doj'=>$doj,'empcode'=>$empcode,'ofemail'=>$ofemail,'profileimage'=>$profileimage,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Employee Info Updated Successfully');                   
		 redirect(base_url().'employees');
	}

	public function purchaseorders()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		// $table="purchaseorderbill";
		// $data['purchaseorderbill']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="purchaseorderbill";
		$data['purchaseorderbill']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="category";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="purchaseorderbill";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "p_div";
		$data['purchaseorderbill']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="purchaseorderbill";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="purchaseorderbill";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "p_div";
			$col2= "p_comp";
		$data['purchaseorderbill']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		
		$this->load->view('purchaseorders',$data);
	}



	public function addpurchaseorder()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="godown";
		$data['godown']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		//$data['states'] = $this->home_model->getState();

		$this->load->view('addpurchaseorder-test',$data);
	}
	public function addpurchasereturn()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="godown";
		$data['godown']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		//$data['states'] = $this->home_model->getState();

		$this->load->view('addpurchasereturn',$data);
	}
public function addquatation()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="godown";
		$data['godown']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		//$data['states'] = $this->home_model->getState();

		$this->load->view('addquatation',$data);
	}


	public function editpurchaseorder()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="purchaseorder";
		$data['purchaseorder']=$this->home_model->fetchalld($table);
		$table="purchaseorderbill";
		$id=$this->uri->segment(2);
		$data['purchaseorderbill']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editpurchaseorder',$data);
	}

	public function deletepurchaseorder() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="purchaseorderbill";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Employee Info Deleted Successfully'); 

	 	redirect(base_url().'purchaseorders', 'refresh');
	}

	public function purchaseorderstatus($id = NULL)
	{
		$table="purchaseorderbill";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'purchaseorders', 'refresh');
		
	}

	public function add_purchaseorder()
	{

		//print_r($this->input->post()); exit;
		$table='purchaseorder';

		$purchasedate = $this->input->post('purchasedate');
		$vendorid = $this->input->post('vendorid'); 
		$gdn_id = $this->input->post('gdn_id'); 
		$billno = $this->input->post('billno'); 
		$maindiscount = $this->input->post('maindiscount');
        $product=$this->input->post('product');
		$sno = $this->input->post('sno');
		$sno1 = $this->input->post('sno1');
		//print_r($product); exit;
		//echo $product; exit;
        $basic=$this->input->post('basic');
        $gst=$this->input->post('gst');
		$unit=$this->input->post('unit');
		$quantity=$this->input->post('quantity');
        $rate=$this->input->post('rate');
		$freeqty=$this->input->post('freeqty');
		$discountper=$this->input->post('discountper');
		$discountamt=$this->input->post('discountamt');
		$total=$this->input->post('total');
		$totalquantity=$this->input->post('totalquantity');
		$totalamount=$this->input->post('totalamount');
		
		$div=$this->input->post('div');
		$comp=$this->input->post('comp');
		$remark=$this->input->post('remark');
		$shipping=$this->input->post('shipping');
		$nettotal=$shipping+$totalamount;
		$date = date('d-M-Y'); 
		
		
		//$data =array();
		//for($i=1; $i<$count; $i++) {
		
		//print_r($datanew); exit; 'p_div'=>$div,

		//$this->db->insert_batch('purchaseorder', $data);
        //$count = count($product);
		//print_r($count);
		//die;
		//for($i=0; $i<$count; $i++) {
		//$count = count($product); //Working
		/*foreach($this->input->post('product') as $product){
		$data = array('product'=>$product);
		$register=$this->home_model->insertdata($table,$data);
		} */
		$table1="purchaseorderbill";
		$data1 = array('vendorid'=>$vendorid,'purchasedate'=>$purchasedate,'billno'=>$billno,'maindiscount'=>$maindiscount,'totalqty'=>$totalquantity,'nettotal'=>$nettotal,'date'=>$date,'remark'=>$remark,'p_div'=>$div,'p_comp'=>$comp,'subtotal'=>$totalamount,'shipping_charge'=>$shipping);
		$register1=$this->home_model->insertdata($table1,$data1);
		$insertid = $this->db->insert_id();
		
		$i=1;
		foreach($this->input->post('sno1') as $sno1){
		$data[$i] = array(
		    'purid' => $insertid,
			'vendorid' => $vendorid,
			'billno' => $billno,
			'gdn_id' => $gdn_id,
           'sno' => $sno[$i], 
           'product' => $product[$i],
		   'basic' => $basic[$i],
		   'gst' => $gst[$i],
		   'unit' => $unit[$i],
		   'quantity' => $quantity[$i],
           'rate' => $rate[$i],
		   'freeqty' => $freeqty[$i],
		   'discountper' => $discountper[$i],
		   'discountamt' => $discountamt[$i],
		   'total' => $total[$i],
		   
		   'date'=>$date
           );
		$dataa[$i] = array(
		    
           'pid' => $sno[$i], 
            'gid' => $gdn_id,
		 
           );
		$dataadd[$i] = array(
		    'pur_id' => $insertid,
			// 'vendorid' => $vendorid,
			// 'billno' => $billno,
			'gid' => $gdn_id,
           'pid' => $sno[$i], 
           's_product' => $product[$i],
           
		   'totalqty' => $quantity[$i],
      
		   
		   'date'=>$date
           );
		// $dataupdate[$i] = array(          
		//    'totalqty' => $quantity[$i],		   		 
  //          );
		   
		   $register=$this->home_model->insertdata($table,$data[$i]);
		   $data2=$this->home_model->checkstock('stock',$dataa[$i]);
		   if(empty($data2)){
		   	//echo "jk";die;
		   	$register=$this->home_model->insertdata('stock',$dataadd[$i]);
		   	
		   }else{
		
		   	 $prev=$data2['totalqty'];
		   	echo $currnt=$quantity[$i]+$prev;
		   	   	$dataupdate[$i] = array(          
		   'totalqty' => $currnt,		   		 
           );
		   	//echo "available";die;
		   	$register=$this->home_model->updatedata2('stock',$dataupdate[$i],$dataa[$i]);
		   }
		   $i++;
		}
		
		$this->session->set_flashdata('msg', 'Purchase Order Saved Successfully');                   
		redirect(base_url().'home/purchaseorders');
	}

	
public function add_quatation()
	{

		//print_r($this->input->post()); exit;
		$table='quotationorder';

		$purchasedate = $this->input->post('purchasedate');
		$vendorid = $this->input->post('vendorid'); 
		$gdn_id = $this->input->post('gdn_id'); 
		$billno = $this->input->post('billno'); 
		$maindiscount = $this->input->post('maindiscount');
        $product=$this->input->post('product');
		$sno = $this->input->post('sno');
		$sno1 = $this->input->post('sno1');
		//print_r($product); exit;
		//echo $product; exit;
        $basic=$this->input->post('basic');
        $gst=$this->input->post('gst');
		$unit=$this->input->post('unit');
		$quantity=$this->input->post('quantity');
        $rate=$this->input->post('rate');
		$freeqty=$this->input->post('freeqty');
		$discountper=$this->input->post('discountper');
		$discountamt=$this->input->post('discountamt');
		$total=$this->input->post('total');
		$totalquantity=$this->input->post('totalquantity');
		$totalamount=$this->input->post('totalamount');
		
		$div=$this->input->post('div');
		$comp=$this->input->post('comp');
		$remark=$this->input->post('remark');
		$shipping=$this->input->post('shipping');
		$nettotal=$shipping+$totalamount;
		$date = date('d-M-Y'); 
		
		
		//$data =array();
		//for($i=1; $i<$count; $i++) {
		
		//print_r($datanew); exit; 'p_div'=>$div,

		//$this->db->insert_batch('purchaseorder', $data);
        //$count = count($product);
		//print_r($count);
		//die;
		//for($i=0; $i<$count; $i++) {
		//$count = count($product); //Working
		/*foreach($this->input->post('product') as $product){
		$data = array('product'=>$product);
		$register=$this->home_model->insertdata($table,$data);
		} */
		$table1="quatationbill";
		$data1 = array('vendorid'=>$vendorid,'purchasedate'=>$purchasedate,'billno'=>$billno,'maindiscount'=>$maindiscount,'totalqty'=>$totalquantity,'nettotal'=>$nettotal,'date'=>$date,'remark'=>$remark,'p_div'=>$div,'p_comp'=>$comp,'subtotal'=>$totalamount,'shipping_charge'=>$shipping);
		$register1=$this->home_model->insertdata($table1,$data1);
		$insertid = $this->db->insert_id();
		
		$i=1;
		foreach($this->input->post('sno1') as $sno1){
		$data[$i] = array(
		    'purid' => $insertid,
			'vendorid' => $vendorid,
			'billno' => $billno,
			'gdn_id' => $gdn_id,
           'sno' => $sno[$i], 
           'product' => $product[$i],
		   'basic' => $basic[$i],
		   'gst' => $gst[$i],
		   'unit' => $unit[$i],
		   'quantity' => $quantity[$i],
           'rate' => $rate[$i],
		   'freeqty' => $freeqty[$i],
		   'discountper' => $discountper[$i],
		   'discountamt' => $discountamt[$i],
		   'total' => $total[$i],
		   
		   'date'=>$date
           );
		$dataa[$i] = array(
		    
           'pid' => $sno[$i], 
            'gid' => $gdn_id,
		 
           );
		$dataadd[$i] = array(
		    'pur_id' => $insertid,
			// 'vendorid' => $vendorid,
			// 'billno' => $billno,
			'gid' => $gdn_id,
           'pid' => $sno[$i], 
           's_product' => $product[$i],
           
		   'totalqty' => $quantity[$i],
      
		   
		   'date'=>$date
           );
		// $dataupdate[$i] = array(          
		//    'totalqty' => $quantity[$i],		   		 
  //          );
		   
		   $register=$this->home_model->insertdata($table,$data[$i]);
		   
		   $i++;
		}
		
		$this->session->set_flashdata('msg', 'Quotation Order Saved Successfully');                   
		redirect(base_url().'home/quotationorder');
	}
	public function edit_purchaseorder()
	{
		//print_r($this->input->post()); exit;

	$id = $this->input->post('id');
	$purchasedate = $this->input->post('purchasedate');
		$vendorid = $this->input->post('vendorid'); 
		$billno = $this->input->post('billno'); 
		$maindiscount = $this->input->post('maindiscount');
        $product=$this->input->post('product');
		$sno = $this->input->post('sno');
		$sno1 = $this->input->post('sno1');
		//print_r($product); exit;
		//echo $product; exit;
        $basic=$this->input->post('basic');
        $gst=$this->input->post('gst');
		$unit=$this->input->post('unit');
		$quantity=$this->input->post('quantity');
        $rate=$this->input->post('rate');
		$freeqty=$this->input->post('freeqty');
		$discountper=$this->input->post('discountper');
		$discountamt=$this->input->post('discountamt');
		$total=$this->input->post('total');
		$totalquantity=$this->input->post('totalquantity');
		$nettotal=$shipping+$totalamount;
		$remark=$this->input->post('remark');
		$shipping=$this->input->post('shipping');
		$totalamount=$this->input->post('totalamount');
		$date = date('d-M-Y');
$table='purchaseorder';
//$data =array();
//for($i=1; $i<$count; $i++) {
	$i=1;
	foreach($this->input->post('sno1') as $sno1){
	$data[$i] = array(
	'vendorid' => $vendorid,
	   'sno' => $sno[$i], 
	   'product' => $product[$i],
	   'basic' => $basic[$i],
	   'gst' => $gst[$i],
	   'unit' => $unit[$i],
	   'quantity' => $quantity[$i],
	   'rate' => $rate[$i],
	   'freeqty' => $freeqty[$i],
	   'discountper' => $discountper[$i],
	   'discountamt' => $discountamt[$i],
	   'total' => $total[$i],
	   'date'=>$date
	   );
	   //$json[$i] = json_encode($data[$i]); //Akhtar hide code
	   //print_r($json); 
	   //$data1= array('product'=>$json[$i]); //Akhtar hide code
	   //print_r($data1); 
	   //$datanew=$data1[$i];
	   //$register=$this->home_model->insertdata($table,$data1)	; //Akhtar hide
	   $register=$this->home_model->updatedata($table,$data[$i],$vendorid);
	   //$register=$this->home_model->updatedata($table,$data,$id);
	   $i++;
	}
//print_r($datanew); exit;

//$this->db->insert_batch('purchaseorder', $data);
//$count = count($product);
//print_r($count);
//die;
//for($i=0; $i<$count; $i++) {
//$count = count($product); //Working
/*foreach($this->input->post('product') as $product){
$data = array('product'=>$product);
$register=$this->home_model->insertdata($table,$data);
} */
$table1="purchaseorderbill";
$data1 = array('vendorid'=>$vendorid,'purchasedate'=>$purchasedate,'billno'=>$billno,'maindiscount'=>$maindiscount,'totalqty'=>$totalquantity,'nettotal'=>$nettotal,'subtotal'=>$totalamount,'shipping_charge'=>$shipping,'date'=>$date);
$register1=$this->home_model->updatedata($table1,$data1,$id);
$this->session->set_flashdata('msg', 'Purchase Order Updated Successfully');                   
redirect(base_url().'purchaseorders');
	}

	public function viewinvoice()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="purchaseorder";
		$data['purchaseorder']=$this->home_model->fetchalld($table);
		$table="purchaseorderbill";
		$id=$this->uri->segment(2);
		$data['purchaseorderbill']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('viewinvoice',$data);
	}

	public function printinvoice()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="purchaseorder";
		$data['purchaseorder']=$this->home_model->fetchalld($table);
		$table="purchaseorderbill";
		$id=$this->uri->segment(2);
		$data['purchaseorderbill']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('printinvoice',$data);
	}
	
	
	public function viewinvoice1()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="purchaseorder";
		$data['purchaseorder']=$this->home_model->fetchalld($table);
		$table="purchaseorderbill";
		$id=$this->uri->segment(2);
		$data['purchaseorderbill']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('viewinvoice1',$data);
	}

	public function printinvoice1()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="purchaseorder";
		$data['purchaseorder']=$this->home_model->fetchalld($table);
		$table="purchaseorderbill";
		$id=$this->uri->segment(2);
		$data['purchaseorderbill']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('printinvoice1',$data);
	}

	public function fetch_product()
	{
		$id=$this->uri->segment(3);
		//$id=$this->input->post('product_id');
		//$id=1;
		//$column='country_id';
	 	$table="products";
		$state=$this->home_model->fetchdatabyone($table,$id);
		if(isset($state) && !empty($state)){
			echo json_encode(array('status'=>1,'message'=>$state)); exit;	
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data not found.'));
		}
	}

	
	public function saleorders()
	{
		$table="tb_sale";
		$data['countpetrol']=$this->home_model->countdatasale($table,'Petrol');
		$data['countdiesl']=$this->home_model->countdatasale($table,'Diesel');

		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="tb_sale";
		$data['saleorders']=$this->home_model->fetchall($table);
		$this->load->view('saleorders',$data);
	}

	public function petrolsale()
	{
		$table="tb_sale";
		$data['countpetrol']=$this->home_model->countdatasale($table,'Petrol');
		$data['counttoday']=$this->home_model->countdatatodaysale($table,'Petrol');

		$table="tb_sale";
		$data['countcategoryactive']=$this->home_model->countactive($table,'Petrol');
		$data['countcategoryinactive']=$this->home_model->countinactive($table,'Petrol');

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="tb_sale";
		$data['saleorders']=$this->home_model->getsale('petrol');
		$this->load->view('petrol_sale',$data);
	}
	public function dieselsale()
	{
		$table="tb_sale";
		$data['countcategory']=$this->home_model->countdatasale($table,'Diesel');
		$data['countcategorytoday']=$this->home_model->countdatatodaysale($table,'Diesel');

		$table="tb_sale";
		$data['countcategoryactive']=$this->home_model->countactive($table,'Diesel');
		$data['countcategoryinactive']=$this->home_model->countinactive($table,'Diesel');

		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="tb_sale";
		$data['saleorders']=$this->home_model->getsale('Diesel');
		$this->load->view('diesel_sale',$data);
	}
	public function addsaleorder()
	{
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$this->load->view('addsaleorder',$data);
	}
	public function addsalereturn()
	{
		$table="vendors";
		$data['vendors']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->fetchall($table);
		$this->load->view('addsalereturn',$data);
	}

	public function editsaleorder()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$table="tb_sale";
		$id=$this->uri->segment(3);
		$data['saleorder']=$this->home_model->fetchdata3($table,$id);
		//print_r($data); exit;
		$this->load->view('editsaleorder',$data);
	}

	public function deletesaleorder() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="saleorders";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Employee Info Deleted Successfully'); 

	 	redirect(base_url().'saleorders', 'refresh');
	}

	public function saleorderstatus($id = NULL)
	{
		$table="saleorders";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'saleorders', 'refresh');
		
	}

	public function add_saleorder()
	{
		$table='saleorders';
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$companyname = $this->input->post('companyname');
		$companyowner = $this->input->post('companyowner');
		$companyaddress = $this->input->post('companyaddress');
		$date = date('d-M-Y');

			
			$data = array('name'=>$name,'email'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'pincode'=>$pincode,'state'=>$state,'city'=>$city,'address'=>$address,'companyname'=>$companyname,'companyowner'=>$companyowner,'companyaddress'=>$companyaddress,'profileimage'=>$profileimage,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Employee Info Saved Successfully');                   
		 redirect(base_url().'saleorders');
	}

	public function edit_saleorder()
	{
		$table='saleorders';
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$sex = $this->input->post('sex');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$companyname = $this->input->post('companyname');
		$companyowner = $this->input->post('companyowner');
		$companyaddress = $this->input->post('companyaddress');
		$date = date('d-M-Y');
		
			
			$data = array('name'=>$name,'email'=>$email,'sex'=>$sex,'dob'=>$dob,'mobile'=>$mobile,'pincode'=>$pincode,'state'=>$state,'city'=>$city,'address'=>$address,'companyname'=>$companyname,'companyowner'=>$companyowner,'companyaddress'=>$companyaddress,'profileimage'=>$profileimage,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Employee Info Updated Successfully');                   
		 redirect(base_url().'saleorders');
	}

	public function deliverypartners()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);
		$data['countdeliverypartnerstoday']=$this->home_model->countdatatoday($table);
		$data['countdeliverypartnersactive']=$this->home_model->countdataactive($table);
		$data['countdeliverypartnersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="deliverypartners";
		$data['deliverypartners']=$this->home_model->fetchall($table);
		$this->load->view('deliverypartners',$data);
	}
    
    
    public function deliverypartnerstoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);
		$data['countdeliverypartnerstoday']=$this->home_model->countdatatoday($table);
		$data['countdeliverypartnersactive']=$this->home_model->countdataactive($table);
		$data['countdeliverypartnersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="deliverypartners";
		$data['deliverypartnerstoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('deliverypartnerstoday',$data);
	}
    
    public function deliverypartnersactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);
		$data['countdeliverypartnerstoday']=$this->home_model->countdatatoday($table);
		$data['countdeliverypartnersactive']=$this->home_model->countdataactive($table);
		$data['countdeliverypartnersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="deliverypartners";
		$data['deliverypartnersactive']=$this->home_model->fetchallactive($table);
		$this->load->view('deliverypartnersactive',$data);
	}
    
    public function deliverypartnersinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="deliverypartners";
		$data['countdeliverypartners']=$this->home_model->countdata($table);
		$data['countdeliverypartnerstoday']=$this->home_model->countdatatoday($table);
		$data['countdeliverypartnersactive']=$this->home_model->countdataactive($table);
		$data['countdeliverypartnersinactive']=$this->home_model->countdatainactive($table);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
		$table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		
		$table="deliverypartners";
		$data['deliverypartnersinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('deliverypartnersinactive',$data);
	}

	public function adddeliverypartner()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('adddeliverypartner',$data);
	}

	public function editdeliverypartner()
	{
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$table="deliverypartners";
		$id=$this->uri->segment(2);
		$data['deliverypartner']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editdeliverypartner',$data);
	}

	public function deletedeliverypartner() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="deliverypartners";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Delivery Partner Info Deleted Successfully'); 

	 	redirect(base_url().'deliverypartners', 'refresh');
	}

	public function deliverypartnerstatus($id = NULL)
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="deliverypartners";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'deliverypartners', 'refresh');
		
	}

	public function add_deliverypartner()
	{
		$table='deliverypartners';
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$password = $this->input->post('password');
		$cpassword =  $this->input->post('cpassword');
		$mothertongue = $this->input->post('mothertongue');
		$fathername = $this->input->post('fathername');
		$foccupation = $this->input->post('foccupation');
		$fdesignatiion = $this->input->post('fdesignation');
		$maritalstatus = $this->input->post('maritalstatus');
		$nodependents = $this->input->post('nodependents');
		$mobile = $this->input->post('mobile');
		//$profileimage = $this->input->post('profileimage');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$currentaddress = $this->input->post('currentaddress');
		$pincode = $this->input->post('pincode');
		$pcountry = $this->input->post('pcountry');
		$pstate = $this->input->post('pstate');
		$pcity = $this->input->post('pcity');
		$parea = $this->input->post('parea');
		$ppincode = $this->input->post('ppincode');
		$homeaddress = $this->input->post('homeaddress');
		$education = $this->input->post('education');
		$university = $this->input->post('university');
		$location = $this->input->post('location');
		$refname1 = $this->input->post('refname1');
		$refname2 = $this->input->post('refname2');
		$relation1 = $this->input->post('relation1');
		$relation2 = $this->input->post('relation2');
		$refmobile1 = $this->input->post('refmobile1');
		$refmobile2 = $this->input->post('refmobile2');
		$localrefname1 = $this->input->post('localrefname1');
		$localrefname2 = $this->input->post('localrefname2');
		$localrefmobile1 = $this->input->post('localrefmobile1');
		$localrefmobile2 = $this->input->post('localrefmobile2');
		$prevdesg = $this->input->post('prevdesg');
		$prevcompany = $this->input->post('prevcompany');
		$prevcompanyowner = $this->input->post('prevcompanyowner');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$prevcompanyaddress = $this->input->post('prevcompanyaddress');
		$refempname1 = $this->input->post('refempname1');
		$refempname2 = $this->input->post('refempname2');
		$refempmobile1 = $this->input->post('refempmobile1');
		$refempmobile2 = $this->input->post('refempmobile2');
		$refempdesg1 = $this->input->post('refempdesg1');
		$refempdesg2 = $this->input->post('refempdesg2');
		$adhaarcardno = $this->input->post('adhaarcardno');
		//$adhaarcard = $this->input->post('adhaarcard');
		$voteridno = $this->input->post('voteridno');
		//$voterid = $this->input->post('voterid');
		$pancardno = $this->input->post('pancardno');
		//$pancard = $this->input->post('pancard');
		$bikercno = $this->input->post('bikercno');
		$bikeno = $this->input->post('bikeno');
		//$bikerc = $this->input->post('bikerc');
		$bikeowner = $this->input->post('bikeowner');
		$bikeinsurancedate = $this->input->post('bikeinsurancedate');
		$bikeinsuranceexpdate = $this->input->post('bikeinsuranceexpdate');
		$policeverifyno = $this->input->post('policeverifyno');
		$bankname = $this->input->post('bankname');
		$accountholder = $this->input->post('accountholder');
		$accountno = $this->input->post('accountno');
		$ifsccode = $this->input->post('ifsccode');
		$branchnameaddress = $this->input->post('branchnameaddress');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/back/img/deliveryboy/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
			$profileimage = $no.$_FILES["profileimage"]["name"];

			$no1 = rand();
			$uploadfile1=$_FILES["adhaarcard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["adhaarcard"]["tmp_name"], "$folder".$no.$_FILES["adhaarcard"]["name"]);
			$adhaarcard = $no1.$_FILES["adhaarcard"]["name"];

			$no2= rand();
			$uploadfile2=$_FILES["voterid"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["voterid"]["tmp_name"], "$folder".$no.$_FILES["voterid"]["name"]);
			$voterid = $no2.$_FILES["voterid"]["name"];

			$no3 = rand();
			$uploadfile3=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
			$pancard = $no3.$_FILES["pancard"]["name"];
			
			$no4 = rand();
			$uploadfile4=$_FILES["bikerc"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["bikerc"]["tmp_name"], "$folder".$no.$_FILES["bikerc"]["name"]);
			$bikerc = $no4.$_FILES["bikerc"]["name"];

			$no5 = rand();
			$uploadfile5=$_FILES["policeverify"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["policeverify"]["tmp_name"], "$folder".$no.$_FILES["bikerc"]["name"]);
			$bikerc = $no4.$_FILES["policeverify"]["name"];

			$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'password'=>$password,'cpassword'=>$cpassword,'mothertongue'=>$mothertongue,'fathername'=>$fathername,'foccupation'=>$foccupation,'fdesignation'=>$fdesignatiion,'maritalstatus'=>$maritalstatus,'nodependents'=>$nodependents,'mobile'=>$mobile,'profileimage'=>$profileimage,'country'=>$country,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'currentaddress'=>$currentaddress,'pcountry'=>$pcountry,'pstate'=>$pstate,'pcity'=>$pcity,'parea'=>$parea,'ppincode'=>$ppincode,'homeaddress'=>$homeaddress,'education'=>$education,'university'=>$university,'location'=>$location,'refname1'=>$refname1,'refname2'=>$refname2,'relation1'=>$relation1,'relation2'=>$relation2,'refmobile1'=>$refmobile1,'refmobile2'=>$refmobile2,'localrefname1'=>$localrefname1,'localrefname2'=>$localrefname2,'localrefmobile1'=>$localrefmobile1,'localrefmobile2'=>$localrefmobile2,'prevdesg'=>$prevdesg,'prevcompany'=>$prevcompany,'prevcompanyowner'=>$prevcompanyowner,'startdate'=>$startdate,'enddate'=>$enddate,'prevcompanyaddress'=>$prevcompanyaddress,'refempname1'=>$refempname1,'refempname2'=>$refempname2,'refempmobile1'=>$refempmobile1,'refempmobile2'=>$refempmobile2,'refempdesg1'=>$refempdesg1,'refempdesg2'=>$refempdesg2,'adhaarcardno'=>$adhaarcardno,'adhaarcard'=>$adhaarcard,'voteridno'=>$voteridno,'voterid'=>$voterid,'pancardno'=>$pancardno,'pancard'=>$pancard,'bikeno'=>$bikeno,'bikercno'=>$bikercno,'bikerc'=>$bikerc,'bikeowner'=>$bikeowner,'bikeinsurancedate'=>$bikeinsurancedate,'bikeinsuranceexpdate'=>$bikeinsuranceexpdate,'policeverifyno'=>$policeverifyno,'policeverify'=>$policeverify,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Delivery Partner Info Saved Successfully');                   
		 redirect(base_url().'deliverypartners');
	}

	public function edit_deliverypartner()
	{
		$table='deliverypartners';
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$password = $this->input->post('password');
		$cpassword =  $this->input->post('cpassword');
		$mothertongue = $this->input->post('mothertongue');
		$fathername = $this->input->post('fathername');
		$foccupation = $this->input->post('foccupation');
		$fdesignatiion = $this->input->post('fdesignation');
		$maritalstatus = $this->input->post('maritalstatus');
		$nodependents = $this->input->post('nodependents');
		$mobile = $this->input->post('mobile');
		//$profileimage = $this->input->post('profileimage');
		$country = $this->input->post('country');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$area = $this->input->post('area');
		$currentaddress = $this->input->post('currentaddress');
		$pincode = $this->input->post('pincode');
		$pcountry = $this->input->post('pcountry');
		$pstate = $this->input->post('pstate');
		$pcity = $this->input->post('pcity');
		$parea = $this->input->post('parea');
		$ppincode = $this->input->post('ppincode');
		$homeaddress = $this->input->post('homeaddress');
		$education = $this->input->post('education');
		$university = $this->input->post('university');
		$location = $this->input->post('location');
		$refname1 = $this->input->post('refname1');
		$refname2 = $this->input->post('refname2');
		$relation1 = $this->input->post('relation1');
		$relation2 = $this->input->post('relation2');
		$refmobile1 = $this->input->post('refmobile1');
		$refmobile2 = $this->input->post('refmobile2');
		$localrefname1 = $this->input->post('localrefname1');
		$localrefname2 = $this->input->post('localrefname2');
		$localrefmobile1 = $this->input->post('localrefmobile1');
		$localrefmobile2 = $this->input->post('localrefmobile2');
		$prevdesg = $this->input->post('prevdesg');
		$prevcompany = $this->input->post('prevcompany');
		$prevcompanyowner = $this->input->post('prevcompanyowner');
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$prevcompanyaddress = $this->input->post('prevcompanyaddress');
		$refempname1 = $this->input->post('refempname1');
		$refempname2 = $this->input->post('refempname2');
		$refempmobile1 = $this->input->post('refempmobile1');
		$refempmobile2 = $this->input->post('refempmobile2');
		$refempdesg1 = $this->input->post('refempdesg1');
		$refempdesg2 = $this->input->post('refempdesg2');
		$adhaarcardno = $this->input->post('adhaarcardno');
		//$adhaarcard = $this->input->post('adhaarcard');
		$voteridno = $this->input->post('voteridno');
		//$voterid = $this->input->post('voterid');
		$pancardno = $this->input->post('pancardno');
		//$pancard = $this->input->post('pancard');
		$bikercno = $this->input->post('bikercno');
		$bikeno = $this->input->post('bikeno');
		//$bikerc = $this->input->post('bikerc');
		$bikeowner = $this->input->post('bikeowner');
		$bikeinsurancedate = $this->input->post('bikeinsurancedate');
		$bikeinsuranceexpdate = $this->input->post('bikeinsuranceexpdate');
		$policeverifyno = $this->input->post('policeverifyno');
		$bankname = $this->input->post('bankname');
		$accountholder = $this->input->post('accountholder');
		$accountno = $this->input->post('accountno');
		$ifsccode = $this->input->post('ifsccode');
		$branchnameaddress = $this->input->post('branchnameaddress');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["profileimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $profileimage=$result->profileimage; 	
			  }else{
	        $uploadfile=$_FILES["profileimage"]["tmp_name"];
            $folder="./assets/back/img/deliveryboy/";
            move_uploaded_file($_FILES["profileimage"]["tmp_name"], "$folder".$no.$_FILES["profileimage"]["name"]);
            $profileimage=$no.$_FILES["profileimage"]["name"]; 
			}

			$no1 = rand();
			if($_FILES["adhaarcard"]["name"]==""){
				$this->db->select("*");
				$this->db->where('id',$id);
				$query = $this->db->get($table);
				$result = $query->row();
				$adhaarcard=$result->adhaarcard; 	
				  }else{
				$uploadfile1=$_FILES["adhaarcard"]["tmp_name"];
				$folder="./assets/docs/";
				move_uploaded_file($_FILES["adhaarcard"]["tmp_name"], "$folder".$no.$_FILES["adhaarcard"]["name"]);
				$adhaarcard=$no1.$_FILES["adhaarcard"]["name"]; 
				}

			$no2= rand();
			if($_FILES["voterid"]["name"]==""){
				$this->db->select("*");
				$this->db->where('id',$id);
				$query = $this->db->get($table);
				$result = $query->row();
				$voterid=$result->voterid; 	
				  }else{
				$uploadfile2=$_FILES["voterid"]["tmp_name"];
				$folder="./assets/docs/";
				move_uploaded_file($_FILES["voterid"]["tmp_name"], "$folder".$no.$_FILES["voterid"]["name"]);
				$voterid=$no2.$_FILES["voterid"]["name"]; 
				}

			$no3 = rand();
			if($_FILES["pancard"]["name"]==""){
				$this->db->select("*");
				$this->db->where('id',$id);
				$query = $this->db->get($table);
				$result = $query->row();
				$pancard=$result->pancard; 	
				  }else{
				$uploadfile3=$_FILES["pancard"]["tmp_name"];
				$folder="./assets/docs/";
				move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
				$pancard=$no3.$_FILES["pancard"]["name"]; 
				}
			
			$no4 = rand();
			if($_FILES["bikerc"]["name"]==""){
				$this->db->select("*");
				$this->db->where('id',$id);
				$query = $this->db->get($table);
				$result = $query->row();
				$bikerc=$result->bikerc; 	
				  }else{
				$uploadfile4=$_FILES["bikerc"]["tmp_name"];
				$folder="./assets/docs/";
				move_uploaded_file($_FILES["bikerc"]["tmp_name"], "$folder".$no.$_FILES["bikerc"]["name"]);
				$bikerc=$no4.$_FILES["bikerc"]["name"]; 
				}

				$no5 = rand();
				if($_FILES["policeverify"]["name"]==""){
					$this->db->select("*");
					$this->db->where('id',$id);
					$query = $this->db->get($table);
					$result = $query->row();
					$policeverify=$result->policeverify; 	
					  }else{
					$uploadfile5=$_FILES["policeverify"]["tmp_name"];
					$folder="./assets/docs/";
					move_uploaded_file($_FILES["policeverify"]["tmp_name"], "$folder".$no.$_FILES["policeverify"]["name"]);
					$policeverify=$no4.$_FILES["policeverify"]["name"]; 
					}
			
				$data = array('name'=>$name,'email'=>$email,'gender'=>$gender,'dob'=>$dob,'password'=>$password,'cpassword'=>$cpassword,'mothertongue'=>$mothertongue,'fathername'=>$fathername,'foccupation'=>$foccupation,'fdesignation'=>$fdesignatiion,'maritalstatus'=>$maritalstatus,'nodependents'=>$nodependents,'mobile'=>$mobile,'profileimage'=>$profileimage,'country'=>$country,'state'=>$state,'city'=>$city,'area'=>$area,'pincode'=>$pincode,'currentaddress'=>$currentaddress,'pcountry'=>$pcountry,'pstate'=>$pstate,'pcity'=>$pcity,'parea'=>$parea,'ppincode'=>$ppincode,'homeaddress'=>$homeaddress,'education'=>$education,'university'=>$university,'location'=>$location,'refname1'=>$refname1,'refname2'=>$refname2,'relation1'=>$relation1,'relation2'=>$relation2,'refmobile1'=>$refmobile1,'refmobile2'=>$refmobile2,'localrefname1'=>$localrefname1,'localrefname2'=>$localrefname2,'localrefmobile1'=>$localrefmobile1,'localrefmobile2'=>$localrefmobile2,'prevdesg'=>$prevdesg,'prevcompany'=>$prevcompany,'prevcompanyowner'=>$prevcompanyowner,'startdate'=>$startdate,'enddate'=>$enddate,'prevcompanyaddress'=>$prevcompanyaddress,'refempname1'=>$refempname1,'refempname2'=>$refempname2,'refempmobile1'=>$refempmobile1,'refempmobile2'=>$refempmobile2,'refempdesg1'=>$refempdesg1,'refempdesg2'=>$refempdesg2,'adhaarcardno'=>$adhaarcardno,'adhaarcard'=>$adhaarcard,'voteridno'=>$voteridno,'voterid'=>$voterid,'pancardno'=>$pancardno,'pancard'=>$pancard,'bikeno'=>$bikeno,'bikercno'=>$bikercno,'bikerc'=>$bikerc,'bikeowner'=>$bikeowner,'bikeinsurancedate'=>$bikeinsurancedate,'bikeinsuranceexpdate'=>$bikeinsuranceexpdate,'policeverifyno'=>$policeverifyno,'policeverify'=>$policeverify,'bankname'=>$bankname,'accountholder'=>$accountholder,'accountno'=>$accountno,'ifsccode'=>$ifsccode,'branchnameaddress'=>$branchnameaddress,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Delivery Partner Info Updated Successfully');                   
		 redirect(base_url().'deliverypartners');
	}
	
	public function unit()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$this->load->view('unit',$data);
	}

	public function deleteunit() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="unit";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Unit Info Deleted Successfully'); 

	 redirect(base_url().'unit', 'refresh');
	}

	public function unitstatus($id = NULL)
	{
		$table="unit";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'unit', 'refresh');
		
	}

	public function add_unit()
	{
		$table='unit';
		$unit = $this->input->post('unit');
        $prefix = $this->input->post('prefix');
		$date = date('d-M-Y');		
		$data = array('unit'=>$unit,'prefix'=>$prefix,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Unit Info Saved Successfully');                   
		 redirect(base_url().'unit');
	}

	public function edit_unit()
	{
		$table='unit';
		$id = $this->input->post('id');
		$unit = $this->input->post('unit');
        $prefix = $this->input->post('prefix');
		$date = date('d-M-Y');
	
		$data = array('unit'=>$unit,'prefix'=>$prefix,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Unit Info Updated Successfully');                   
		 redirect(base_url().'unit');
	}

	public function tax()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$this->load->view('tax',$data);
	}

	public function deletetax() 
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="tax";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Tax Info Deleted Successfully'); 

	 redirect(base_url().'tax', 'refresh');
	}

	public function taxstatus($id = NULL)
	{
		$table="tax";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'tax', 'refresh');
		
	}

	public function add_tax()
	{
		$table='tax';
		$tax = $this->input->post('tax');
		$date = date('d-M-Y');		
		$data = array('tax'=>$tax,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Tax Info Saved Successfully');                   
		 redirect(base_url().'tax');
	}

	public function edit_tax()
	{
		$table='tax';
		$id = $this->input->post('id');
		$tax = $this->input->post('tax');
		$date = date('d-M-Y');
	
		$data = array('tax'=>$tax,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Tax Info Updated Successfully');                   
		 redirect(base_url().'tax');
	}

	public function department()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['countdepartments']=$this->home_model->countdata($table);
		$data['countdepartmentstoday']=$this->home_model->countdatatoday($table);
		$data['countdepartmentsactive']=$this->home_model->countdataactive($table);
		$data['countdepartmentsinactive']=$this->home_model->countdatainactive($table);
		$table="department";
		$data['department']=$this->home_model->fetchall($table);
		$this->load->view('department',$data);
	}

		public function adddepartment()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$this->load->view('adddepartment');
	}

	public function editdepartment()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$id=$this->uri->segment(2);
		$data['department']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editdepartment',$data);
	}

	public function deletedepartment() 
	{
		//$table="users";
		//$id="1"; 
		//$data['admin']=$this->home_model->fetchdata($table,$id);
		$id=$this->uri->segment(2);
		$table="department";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Department Info Deleted Successfully'); 

	 redirect(base_url().'department', 'refresh');
	}

	public function departmentstatus($id = NULL)
	{
	//	$table="users";
		//$id="1"; 
	//	$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="department";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'department', 'refresh');
		
	}

	public function add_department()
	{
		$table='department';
        $dept_code = $this->input->post('dept_code');
        $dept_name = $this->input->post('dept_name');
        $dept_website = $this->input->post('dept_website');
        $dept_about = $this->input->post('dept_about');
        $deptment_name = $this->input->post('deptment_name');
        $dept_address= $this->input->post('dept_address');
        $dept_contact = $this->input->post('dept_contact');
        $dept_name1 = $this->input->post('dept_name1');
        
        $dept_designation = $this->input->post('dept_designation');
         $dept_mobile = $this->input->post('dept_mobile');
          $dept_email = $this->input->post('dept_email');
          
		$date = date('d-M-Y');		
		$data = array('username'=>$dept_email,'dept_code'=>$dept_code,'dept_name'=>$dept_name,'dept_website'=>$dept_website,'dept_about'=>$dept_about,'deptment_name'=>$deptment_name,'dept_address'=>$dept_address,'dept_contact'=>$dept_contact,'dept_name1'=>$dept_name1,'dept_designation'=>$dept_designation,'dept_mobile'=>$dept_mobile,'dept_email'=>$dept_email,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Department Info Saved Successfully');                   
		 redirect(base_url().'department');
	}

	public function edit_department()
	{
		$table='department';
		$id = $this->input->post('id');
	//	$table='department';
        $dept_code = $this->input->post('dept_code');
        $dept_name = $this->input->post('dept_name');
        $dept_website = $this->input->post('dept_website');
        $dept_about = $this->input->post('dept_about');
        $deptment_name = $this->input->post('deptment_name');
        $dept_address= $this->input->post('dept_address');
        $dept_contact = $this->input->post('dept_contact');
        $dept_name1 = $this->input->post('dept_name1');
        
        $dept_designation = $this->input->post('dept_designation');
         $dept_mobile = $this->input->post('dept_mobile');
          $dept_email = $this->input->post('dept_email');
          
		$date = date('d-M-Y');		
		$data = array('username'=>$dept_email,'dept_code'=>$dept_code,'dept_name'=>$dept_name,'dept_website'=>$dept_website,'dept_about'=>$dept_about,'deptment_name'=>$deptment_name,'dept_address'=>$dept_address,'dept_contact'=>$dept_contact,'dept_name1'=>$dept_name1,'dept_designation'=>$dept_designation,'dept_mobile'=>$dept_mobile,'dept_email'=>$dept_email,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Department Info Updated Successfully');                   
		 redirect(base_url().'department');
	}


	public function designation()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="designation";
		$data['countdesignations']=$this->home_model->countdata($table);
		$data['countdesignationstoday']=$this->home_model->countdatatoday($table);
		$data['countdesignationsactive']=$this->home_model->countdataactive($table);
		$data['countdesignationsinactive']=$this->home_model->countdatainactive($table);
		$table="designation";
		$data['designation']=$this->home_model->fetchall($table);
		$this->load->view('designation',$data);
	}

	public function adddesignation()
	{
		$this->load->view('adddesignation');
	}

	public function editdesignation()
	{
		$table="designation";
		$id=$this->uri->segment(2);
		$data['designation']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editdesignation',$data);
	}

	public function deletedesignation() 
	{
		
		$id=$this->uri->segment(2);
		$table="designation";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Designation Info Deleted Successfully'); 

	 redirect(base_url().'designation', 'refresh');
	}

	public function designationstatus($id = NULL)
	{
		$table="designation";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'designation', 'refresh');
		
	}

	public function add_designation()
	{
		$table='designation';
		$designation = $this->input->post('designation');
         
        $description = $this->input->post('description');
		$date = date('d-M-Y');		
		$data = array('designation'=>$designation,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Designation Info Saved Successfully');                   
		 redirect(base_url().'designation');
	}

	public function edit_designation()
	{
		$table='designation';
		$id = $this->input->post('id');
		$designation = $this->input->post('designation');
        $description = $this->input->post('description');
		$date = date('d-M-Y');
	
			
		$data = array('designation'=>$designation,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Designation Info Updated Successfully');                   
		 redirect(base_url().'designation');
	}


	public function products()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
	
		
		
			if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
			$table="products";
		$data['products']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			echo "jjujj";die;
		$table="products";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['products']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "1";die;
		$table="products";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "s_div";
		$data['products']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "2";die;
		$table="products";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "s_div";
			$col2= "s_comp";
		$data['products']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="products";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "s_div";
			$col2= "s_comp";
		$data['products']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('products',$data);
	}

	public function productstoday()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
		$table="products";
		$data['productstoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('productstoday',$data);
	}

	public function productsactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
		$table="products";
		$data['productsactive']=$this->home_model->fetchallactive($table);
		$this->load->view('productsactive',$data);
	}
	
	public function productsinactive()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
		$table="products";
		$data['productsinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('productsinactive',$data);
	}
	public function addproduct()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategory']=$this->home_model->fetchall($table);
		$table="products";
		$data['products']=$this->home_model->getlastprdct($table);
		$this->load->view('addproduct',$data);
	}

	public function editproduct()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="unit";
		$data['unit']=$this->home_model->fetchall($table);
		$table="tax";
		$data['tax']=$this->home_model->fetchall($table);
		$table="manufacturers";
		$data['manufacturers']=$this->home_model->fetchall($table);
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategory']=$this->home_model->fetchall($table);
		$table="products";
		$id=$this->uri->segment(2);
		$data['product']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$id =$this->uri->segment('2');
			$data['products'] = $this->home_model->getProductsvarient($id);
		$this->load->view('editproduct',$data);
	}

	public function deleteproduct() 
	{
		
		$id=$this->uri->segment(2);
		$table="products";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Product Info Deleted Successfully'); 

	 redirect(base_url().'products', 'refresh');
	}

	public function productstatus($id = NULL)
	{
		$table="products";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'products', 'refresh');
		
	}

	public function add_product()
	{
		$table='products';
		$product = $this->input->post('product');
		$catid = $this->input->post('catid');
		$subcatid = $this->input->post('subcatid');
		$description = $this->input->post('description');
		$manid = $this->input->post('manid');
		$producttype = $this->input->post('producttype');
		$reorderpoint = $this->input->post('reorderpoint');
		$hsncode = $this->input->post('hsncode');
		$barcode = $this->input->post('barcode');
		$stockalertqty = $this->input->post('stockalertqty');
		$outstock = $this->input->post('outstock');
		$negstock = $this->input->post('negstock');
		$mrp = $this->input->post('mrp');
		$tax = $this->input->post('tax');
		$pricetype = $this->input->post('pricetype');
		$weight = $this->input->post('weight');
		$primaryunit = $this->input->post('primaryunit');
		$sellpricepu = $this->input->post('sellpricepu');
		$openingstockpu = $this->input->post('openingstockpu');
		$secondaryunit = $this->input->post('secondaryunit');
		$sellpricesu = $this->input->post('sellpricesu');
		$equalqtypu = $this->input->post('equalqtypu');
		$openingstocksu = $this->input->post('openingstocksu');
		$tertiaryunit = $this->input->post('tertiaryunit');
		$sellpricetu = $this->input->post('sellpricetu');
		$equalqtypu2 = $this->input->post('equalqtypu2');
		$openingstocktu = $this->input->post('openingstocktu');
		$rewardpoint = $this->input->post('rewardpoint');
		$rewardpointtype = $this->input->post('rewardpointtype');
		$incentive = $this->input->post('incentive');
		$incentivetype = $this->input->post('incentivetype');
		$size = $this->input->post('size');
		$series = $this->input->post('series');
        $quality = $this->input->post('quality');
		$color = $this->input->post('color');
		$make = $this->input->post('make');
        $model = $this->input->post('model');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["productimage"]["tmp_name"];
            $folder="./assets/back/img/product/";
            move_uploaded_file($_FILES["productimage"]["tmp_name"], "$folder".$no.$_FILES["productimage"]["name"]);
			$productimage = $no.$_FILES["productimage"]["name"];
			
		$data = array('product'=>$product,'productimage'=>$productimage,'catid'=>$catid,'subcatid'=>$subcatid,'description'=>$description,'manid'=>$manid,'producttype'=>$producttype,'reorderpoint'=>$reorderpoint,'hsncode'=>$hsncode,'barcode'=>$barcode,'stockalertqty'=>$stockalertqty,'outstock'=>$outstock,'negstock'=>$negstock,'mrp'=>$mrp,'tax'=>$tax,'pricetype'=>$pricetype,'weight'=>$weight,'primaryunit'=>$primaryunit,'sellpricepu'=>$sellpricepu,'openingstockpu'=>$openingstockpu,'secondaryunit'=>$secondaryunit,'sellpricesu'=>$sellpricesu,'equalqtypu'=>$equalqtypu,'openingstocksu'=>$openingstocksu,'tertiaryunit'=>$tertiaryunit,'sellpricetu'=>$sellpricetu,'equalqtypu2'=>$equalqtypu2,'openingstocktu'=>$openingstocktu,'rewardpoint'=>$rewardpoint,'rewardpointtype'=>$rewardpointtype,'incentive'=>$incentive,'incentivetype'=>$incentivetype,'size'=>$size,'series'=>$series,'quality'=>$quality,'color'=>$color,'make'=>$make,'model'=>$model,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Product Info Saved Successfully');                   
		 redirect(base_url().'products');
	}

	public function edit_product()
	{
		$table='products';
		$id = $this->input->post('id');
		$product = $this->input->post('product');
		$catid = $this->input->post('catid');
		$subcatid = $this->input->post('subcatid');
		$description = $this->input->post('description');
		$manid = $this->input->post('manid');
		$producttype = $this->input->post('producttype');
		$reorderpoint = $this->input->post('reorderpoint');
		$hsncode = $this->input->post('hsncode');
		$barcode = $this->input->post('barcode');
		$stockalertqty = $this->input->post('stockalertqty');
		$outstock = $this->input->post('outstock');
		$negstock = $this->input->post('negstock');
		$mrp = $this->input->post('mrp');
		$tax = $this->input->post('tax');
		$pricetype = $this->input->post('pricetype');
		$weight = $this->input->post('weight');
		$primaryunit = $this->input->post('primaryunit');
		$sellpricepu = $this->input->post('sellpricepu');
		$openingstockpu = $this->input->post('openingstockpu');
		$secondaryunit = $this->input->post('secondaryunit');
		$sellpricesu = $this->input->post('sellpricesu');
		$equalqtypu = $this->input->post('equalqtypu');
		$openingstocksu = $this->input->post('openingstocksu');
		$tertiaryunit = $this->input->post('tertiaryunit');
		$sellpricetu = $this->input->post('sellpricetu');
		$equalqtypu2 = $this->input->post('equalqtypu2');
		$openingstocktu = $this->input->post('openingstocktu');
		$rewardpoint = $this->input->post('rewardpoint');
		$rewardpointtype = $this->input->post('rewardpointtype');
		$incentive = $this->input->post('incentive');
		$incentivetype = $this->input->post('incentivetype');
		$size = $this->input->post('size');
		$series = $this->input->post('series');
        $quality = $this->input->post('quality');
		$color = $this->input->post('color');
		$make = $this->input->post('make');
        $model = $this->input->post('model');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["productimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $productimage=$result->productimage; 	
			  }else{
	        $uploadfile=$_FILES["productimage"]["tmp_name"];
            $folder="./assets/img/product/";
            move_uploaded_file($_FILES["productimage"]["tmp_name"], "$folder".$no.$_FILES["productimage"]["name"]);
            $productimage=$no.$_FILES["productimage"]["name"]; 
			}
			
			$data = array('product'=>$product,'productimage'=>$productimage,'catid'=>$catid,'subcatid'=>$subcatid,'description'=>$description,'manid'=>$manid,'producttype'=>$producttype,'reorderpoint'=>$reorderpoint,'hsncode'=>$hsncode,'barcode'=>$barcode,'stockalertqty'=>$stockalertqty,'outstock'=>$outstock,'negstock'=>$negstock,'mrp'=>$mrp,'tax'=>$tax,'pricetype'=>$pricetype,'weight'=>$weight,'primaryunit'=>$primaryunit,'sellpricepu'=>$sellpricepu,'openingstockpu'=>$openingstockpu,'secondaryunit'=>$secondaryunit,'sellpricesu'=>$sellpricesu,'equalqtypu'=>$equalqtypu,'openingstocksu'=>$openingstocksu,'tertiaryunit'=>$tertiaryunit,'sellpricetu'=>$sellpricetu,'equalqtypu2'=>$equalqtypu2,'openingstocktu'=>$openingstocktu,'rewardpoint'=>$rewardpoint,'rewardpointtype'=>$rewardpointtype,'incentive'=>$incentive,'incentivetype'=>$incentivetype,'size'=>$size,'series'=>$series,'quality'=>$quality,'color'=>$color,'make'=>$make,'model'=>$model,'date'=>$date);
			//$data = array('product'=>$product,'catid'=>$catid,'subcatid'=>$subcatid,'description'=>$description,'manid'=>$manid,'producttype'=>$producttype,'reorderpoint'=>$reorderpoint,'hsncode'=>$hsncode,'barcode'=>$barcode,'stockalertqty'=>$stockalertqty,'outstock'=>$outstock,'negstock'=>$negstock,'mrp'=>$mrp,'tax'=>$tax,'pricetype'=>$pricetype,'weight'=>$weight,'primaryunit'=>$primaryunit,'sellpricepu'=>$sellpricepu,'openingstockpu'=>$openingstockpu,'secondaryunit'=>$secondaryunit,'sellpricesu'=>$sellpricesu,'equalqtypu'=>$equalqtypu,'openingstocksu'=>$openingstocksu,'tertiaryunit'=>$tertiaryunit,'sellpricetu'=>$sellpricetu,'equalqtypu2'=>$equalqtypu2,'openingstocktu'=>$openingstocktu,'rewardpoint'=>$rewardpoint,'rewardpointtype'=>$rewardpointtype,'incentive'=>$incentive,'incentivetype'=>$incentivetype,'size'=>$size,'series'=>$series,'quality'=>$quality,'color'=>$color,'make'=>$make,'model'=>$model,'date'=>$date);

		//	print_r($data); exit;
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Product Info Updated Successfully');                   
		 redirect(base_url().'products');
	}
	

	public function category()
	{
        
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="category";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="category";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "c_div";
		$data['category']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="category";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="category";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('category',$data);
	}

public function categorytoday()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table); */
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['categorytoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('categorytoday',$data);
	}

	public function categoryactive()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table); */
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);

		$table="category";
		$data['categoryactive']=$this->home_model->fetchallactive($table);
		$this->load->view('categoryactive',$data);
	}


	public function categoryinactive()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table); */
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
		$table="category";
		$data['categoryinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('categoryinactive',$data);
	}

	public function addcategory()
	{
		$this->load->view('addcategory');
	}

	public function editcategory()
	{
		$table="category";
		$id=$this->uri->segment(2);
		$data['category']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editcategory',$data);
	}

	public function deletecategory() 
	{
		
		$id=$this->uri->segment(2);
		$table="category";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Category Info Deleted Successfully'); 

	 redirect(base_url().'category', 'refresh');
	}

	public function categorystatus($id = NULL)
	{
		$table="category";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'category', 'refresh');
		
	}

public function artist_status($id = NULL)
	{
		$table="artist_list";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'home/datalist', 'refresh');
		
	}
	public function delete_artist() 
	{
		
		$id=$this->uri->segment(3);
		$table="artist_list";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Info Deleted Successfully'); 

	 redirect(base_url().'home/datalist', 'refresh');
	}
	
	public function add_category()
	{
		$table='category';
		$category = $this->input->post('category');
			$category_hindi = $this->input->post('category_hindi');
		$div = $this->input->post('div');
		$comp = $this->input->post('comp');
         
        $description = $this->input->post('description');
		$date = date('Y-m-d');		
		$data = array('category'=>$category,'category_hindi'=>$category_hindi,'description'=>$description,'created_at'=>$date,'c_div'=>$div,'c_company'=>$comp);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Category Info Saved Successfully');                   
		 redirect(base_url().'home/category');
	}

	public function edit_category()
	{
		$table='category';
		$id = $this->input->post('id');
		$category = $this->input->post('category');
			$category_hindi = $this->input->post('category_hindi');
        $description = $this->input->post('description');
		$date = date('d-M-Y');
	
			
		$data = array('category'=>$category,'category_hindi'=>$category_hindi,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Category Info Updated Successfully');                   
		 redirect(base_url().'category');
	}
	public function subcategorytype()
	{
        
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
			$table="subcategory";
	 	$data['sbcategory']=$this->home_model->fetchall($table);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$tablee="subcategory_type";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytyp']=$this->home_model->countdata($tablee);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($tablee);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($tablee);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($tablee);

		
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    		$table="subcategory";
	 	$data['sbcategory']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="subcategory_type";
		$data['category']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="subcategory_type";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="subcategory_type";
		$div_name =$_SESSION['division'];
			//$cmp_name =$_SESSION['company'];
		$col= "c_div";
		$data['category']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="subcategory_type";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="subcategory_type";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			 $col= "c_div";
			$col2= "c_company";
		$data['category']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
			
		$this->load->view('subcategory_type',$data);
	}


	public function subcategory()
	{
        /*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table);*/
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			 
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		
		$table="category";
	 	$data['category']=$this->home_model->fetchall($table);
		//$table="subcategory";
		//$data['subcategory']=$this->home_model->fetchall($table);
		if((empty($_SESSION['year'])) && (empty($_SESSION['division'])) && (empty($_SESSION['company']))){
			//echo "jj";die;
		$table="subcategory";
		$data['subcategory']=$this->home_model->fetchall($table);
	
		}elseif($_SESSION['year']=="ALL"){
			//echo "jjujj";die;
		$table="subcategory";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$col= "sub_div";
			$col2= "sub_comp";
		$data['subcategory']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}elseif(($_SESSION['division'])  && (empty($_SESSION['year'])) && (empty($_SESSION['company']))){
			//echo "jjujj";die;
		$table="subcategory";
		$div_name =$_SESSION['division'];
		
			//$cmp_name =$_SESSION['company'];
		$col= "sub_div";
			
		$data['subcategory']=$this->home_model->fetchall_where30($table,$div_name,$col);
	
		}elseif(($_SESSION['division']) && ($_SESSION['company']) && (empty($_SESSION['year']))){
			//echo "jjujj";die;
		$table="subcategory";
		$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			 $col= "sub_div";
			$col2= "sub_comp";
		$data['subcategory']=$this->home_model->fetchall_where22($table,$div_name,$cmp_name,$col,$col2);
	
		}else{
			//echo "jjkjkjkjkjj";
			$year =$_SESSION['year'];
			$div_name =$_SESSION['division'];
			$cmp_name =$_SESSION['company'];
			$table="subcategory";
			 $e=substr($year, 0, 4);
			 $g=substr($year, 5, 10);
			  $col= "sub_div";
			$col2= "sub_comp";
		$data['subcategory']=$this->home_model->fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2);
			}
		$this->load->view('subcategory',$data);
	}

public function subcategorytoday()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table);*/
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			 
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		
		$table="category";
	 	$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategorytoday']=$this->home_model->fetchalltoday($table);
		$this->load->view('subcategorytoday',$data);
	}

	public function subcategoryactive()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table);*/
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			 
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		
		$table="category";
	 	$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategoryactive']=$this->home_model->fetchallactive($table);
		$this->load->view('subcategoryactive',$data);
	}


	public function subcategoryinactive()
	{
		/*$table="sector";
		$data['countsector']=$this->home_model->countdata($table);
		//echo $data['countsector']; exit;
		$data['countsectortoday']=$this->home_model->countdatatoday($table);
		$data['countsectoractive']=$this->home_model->countdataactive($table);
		$data['countsectorinactive']=$this->home_model->countdatainactive($table);*/
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="category";
		$data['countcategory']=$this->home_model->countdata($table);
		$data['countcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countcategoryactive']=$this->home_model->countdataactive($table);
		$data['countcategoryinactive']=$this->home_model->countdatainactive($table);

		$table="subcategory";
		$data['countsubcategory']=$this->home_model->countdata($table);
		$data['countsubcategorytoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategoryactive']=$this->home_model->countdataactive($table);
		$data['countsubcategoryinactive']=$this->home_model->countdatainactive($table);

		/*$table="subcategorytype";
		$data['countsubcategorytype']=$this->home_model->countdata($table);
		$data['countsubcategorytypetoday']=$this->home_model->countdatatoday($table);
		$data['countsubcategorytypeactive']=$this->home_model->countdataactive($table);
		$data['countsubcategorytypeinactive']=$this->home_model->countdatainactive($table); */
			 
		
		$table="products";
		$data['countproducts']=$this->home_model->countdata($table);
		$data['countproductstoday']=$this->home_model->countdatatoday($table);
		$data['countproductsactive']=$this->home_model->countdataactive($table);
		$data['countproductsinactive']=$this->home_model->countdatainactive($table);

		$table="manufacturers";
		$data['countmanufacturers']=$this->home_model->countdata($table);
		$data['countmanufacturerstoday']=$this->home_model->countdatatoday($table);
		$data['countmanufacturersactive']=$this->home_model->countdataactive($table);
		$data['countmanufacturersinactive']=$this->home_model->countdatainactive($table);
    
		
		$table="category";
	 	$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategoryinactive']=$this->home_model->fetchallinactive($table);
		$this->load->view('subcategoryinactive',$data);
	}

	public function addsubcategory()
	{
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
		$this->load->view('addsubcategory');
	}

	public function editsubcategory()
	{
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$id=$this->uri->segment(2);
		$data['subcategory']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editsubcategory',$data);
	}

	public function deletesubcategory() 
	{
		
		$id=$this->uri->segment(2);
		$table="subcategory";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Sub-Category Info Deleted Successfully'); 

	 redirect(base_url().'subcategory', 'refresh');
	}

	public function subcategorystatus()
	{
		$table="subcategory";
			$id=$this->uri->segment(3);
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'subcategory', 'refresh');
		
	}
		public function deletesubcategorytyp() 
	{
		
		$id=$this->uri->segment(3);
		$table="subcategory_type";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Sub-Category Type Info Deleted Successfully'); 

	 redirect(base_url().'home/subcategorytype', 'refresh');
	}
		public function subcategorytypstatus()
	{
		$table="subcategory_type";
			$id=$this->uri->segment(3);
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'home/subcategorytype', 'refresh');
		
	}

	public function add_subcategory()
	{
		$table='subcategory';
		$subcategory = $this->input->post('subcategory');
			$subcategory_hindi = $this->input->post('subcategory_hindi');
		$catid = $this->input->post('catid');
        $description = $this->input->post('description');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
		$date = date('Y-m-d');		
		$data = array('subcategory'=>$subcategory,'subcategory_hindi'=>$subcategory_hindi,'catid'=>$catid,'description'=>$description,'date'=>$date,'sub_div'=>$div,'sub_comp'=>$comp);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Sub-Category Info Saved Successfully');                   
		redirect(base_url().'home/subcategory');
	}
	public function add_subcategory_type()
	{
		$table='subcategory_type';
		$catid = $this->input->post('catid');
		$div_name= $_SESSION['division'];
        	$company= $_SESSION['company'];
		$subcategory = $this->input->post('subcategory');
				$subcategory_hindi = $this->input->post('subcategory_hindi');
		// $catid = $this->input->post('catid');
        $description = $this->input->post('description');
        $div = $this->input->post('div');
		$comp = $this->input->post('comp');
		$date =  date('d-M-Y');	
		$data = array('sb_type'=>$subcategory,'sb_type_hindi'=>$subcategory_hindi,'sbcat'=>$catid,'sb_detail'=>$description,'date'=>$date,'sb_division'=>$div_name,'sb_company'=>$company);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Sub-Category Type Info Saved Successfully');                   
		redirect(base_url().'home/subcategorytype');
	}
	public function edit_subcategorytyp()
	{
		$table='subcategory_type';
		$id = $this->input->post('id');
		$subcategory = $this->input->post('subcategory');
			$subcategory_hindi = $this->input->post('subcategory_hindi');
		$catid = $this->input->post('sbcatid');
        $description = $this->input->post('description');
		$date = date('d-M-Y');
	
			
		$data = array('sb_type'=>$subcategory,'sb_type_hindi'=>$subcategory_hindi,'sbcat'=>$catid,'sb_detail'=>$description,'updated_at'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Sub-Category Type Info Updated Successfully');                   
		 redirect(base_url().'subcategorytype');
	}


	public function edit_subcategory()
	{
		$table='subcategory';
		$id = $this->input->post('id');
		$subcategory = $this->input->post('subcategory');
			$subcategory_hindi = $this->input->post('subcategory_hindi');
		$catid = $this->input->post('catid');
        $description = $this->input->post('description');
		$date = date('d-M-Y');
	
			
		$data = array('subcategory'=>$subcategory,'subcategory_hindi'=>$subcategory_hindi,'catid'=>$catid,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Sub-Category Info Updated Successfully');                   
		 redirect(base_url().'subcategory');
	}


	public function brands()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="brands";
		$data['brands']=$this->home_model->fetchall($table);
		$this->load->view('brands',$data);
	}

	public function addbrand()
	{
		$this->load->view('addbrand');
	}

	public function editbrand()
	{
		$table="brands";
		$id=$this->uri->segment(2);
		$data['brand']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editbrand',$data);
	}

	public function deletebrand() 
	{
		
		$id=$this->uri->segment(2);
		$table="brands";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Brand Info Deleted Successfully'); 

	 redirect(base_url().'brands', 'refresh');
	}

	public function brandstatus($id = NULL)
	{
		$table="brands";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'brands', 'refresh');
		
	}

	public function add_brand()
	{
		$table='brands';
		$brand = $this->input->post('brand');
         
        $description = $this->input->post('description');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["brandimage"]["tmp_name"];
            $folder="./assets/img/brand/";
            move_uploaded_file($_FILES["brandimage"]["tmp_name"], "$folder".$no.$_FILES["brandimage"]["name"]);
			$brandimage = $no.$_FILES["brandimage"]["name"];
			
		$data = array('brand'=>$brand,'brandimage'=>$brandimage,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Brand Info Saved Successfully');                   
		 redirect(base_url().'brands');
	}

	public function edit_brand()
	{
		$table='brands';
		$id = $this->input->post('id');
		$brand = $this->input->post('brand');
         
        $description = $this->input->post('description');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["brandimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $brandimage=$result->brandimage; 	
			  }else{
	        $uploadfile=$_FILES["brandimage"]["tmp_name"];
            $folder="./assets/img/brand/";
            move_uploaded_file($_FILES["brandimage"]["tmp_name"], "$folder".$no.$_FILES["brandimage"]["name"]);
            $brandimage=$no.$_FILES["brandimage"]["name"]; 
			}
			
		$data = array('brand'=>$brand,'brandimage'=>$brandimage,'description'=>$description,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Brand Info Updated Successfully');                   
		 redirect(base_url().'brands');
	}


	public function shops()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="shops";
		$data['shops']=$this->home_model->fetchall($table);
		$this->load->view('shops',$data);
	}

	public function addshop()
	{
		$this->load->view('addshop');
	}

	public function editshop()
	{
		$table="shops";
		$id=$this->uri->segment(2);
		$data['shop']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editshop',$data);
	}

	public function deleteshop() 
	{
		
		$id=$this->uri->segment(2);
		$table="shops";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Shop Info Deleted Successfully'); 

	 redirect(base_url().'shops', 'refresh');
	}

	public function shopstatus($id = NULL)
	{
		$table="shops";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'shops', 'refresh');
		
	}

	public function add_shop()
	{
		$table='shops';
		$shop = $this->input->post('shop');
        $manager = $this->input->post('manager');
        $contact = $this->input->post('contact');
        $pincode = $this->input->post('pincode');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $address = $this->input->post('address');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["shopimage"]["tmp_name"];
            $folder="./assets/img/shop/";
            move_uploaded_file($_FILES["shopimage"]["tmp_name"], "$folder".$no.$_FILES["shopimage"]["name"]);
			$shopimage = $no.$_FILES["shopimage"]["name"];
			
		$data = array('shop'=>$shop,'shopimage'=>$shopimage,'manager'=>$manager,'contact'=>$contact,'pincode'=>$pincode,'city'=>$city,'state'=>$state,'address'=>$address,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Shop Info Saved Successfully');                   
		 redirect(base_url().'shops');
	}

	public function edit_shop()
	{
		$table='shops';
		$id = $this->input->post('id');
		$shop = $this->input->post('shop');
        $manager = $this->input->post('manager');
        $contact = $this->input->post('contact');
        $pincode = $this->input->post('pincode');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $address = $this->input->post('address');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["shopimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $shopimage=$result->shopimage; 	
			  }else{
	        $uploadfile=$_FILES["shopimage"]["tmp_name"];
            $folder="./assets/img/shop/";
            move_uploaded_file($_FILES["shopimage"]["tmp_name"], "$folder".$no.$_FILES["shopimage"]["name"]);
            $shopimage=$no.$_FILES["shopimage"]["name"]; 
			}
			
		$data = array('shop'=>$shop,'shopimage'=>$shopimage,'manager'=>$manager,'contact'=>$contact,'pincode'=>$pincode,'city'=>$city,'state'=>$state,'address'=>$address,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Shop Info Updated Successfully');                   
		 redirect(base_url().'shops');
	}

	public function promos()
	{
		$table="promos";
		$data['promos']=$this->home_model->fetchall($table);
		$this->load->view('promos',$data);
	}

	public function addpromo()
	{
		$this->load->view('addpromo');
	}

	public function editpromo()
	{
		$table="promos";
		$id=$this->uri->segment(2);
		$data['promo']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editpromo',$data);
	}

	public function deletepromo() 
	{
		
		$id=$this->uri->segment(2);
		$table="promo";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Promo Info Deleted Successfully'); 

	 redirect(base_url().'promos', 'refresh');
	}

	public function promostatus($id = NULL)
	{
		$table="promos";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'promos', 'refresh');
		
	}

	public function add_promo()
	{
		$table='promos';
		$promo = $this->input->post('promo');
        $discount = $this->input->post('discount');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["promoimage"]["tmp_name"];
            $folder="./assets/img/promo/";
            move_uploaded_file($_FILES["promoimage"]["tmp_name"], "$folder".$no.$_FILES["promoimage"]["name"]);
			$promoimage = $no.$_FILES["promoimage"]["name"];
			
		$data = array('promo'=>$promo,'promoimage'=>$promoimage,'discount'=>$discount,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Promo Info Saved Successfully');                   
		 redirect(base_url().'promos');
	}

	public function edit_promo()
	{
		$table='promos';
		$id = $this->input->post('id');
		$promo = $this->input->post('promo');
        $discount = $this->input->post('discount'); 
		$date = date('d-M-Y');
		$no = rand();
		if($_FILES["promoimage"]["name"]==""){
		$this->db->select("*");
		$this->db->where('id',$id);
		$query = $this->db->get($table);
		$result = $query->row();
		$promoimage=$result->promoimage; 	
		  }else{
		$uploadfile=$_FILES["promoimage"]["tmp_name"];
		$folder="./assets/img/promo/";
		move_uploaded_file($_FILES["promoimage"]["tmp_name"], "$folder".$no.$_FILES["promoimage"]["name"]);
		$promoimage=$no.$_FILES["promoimage"]["name"]; 
		}
			
		$data = array('promo'=>$promo,'promoimage'=>$promoimage,'discount'=>$discount,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Promo Info Updated Successfully');                   
		 redirect(base_url().'promos');
	}

	public function banners()
	{
		$table="banners";
		$data['banners']=$this->home_model->fetchall($table);
		$this->load->view('banners',$data);
	}

	public function addbanner()
	{
		$this->load->view('addbanner');
	}

	public function editbanner()
	{
		$table="banners";
		$id=$this->uri->segment(2);
		$data['banner']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editbanner',$data);
	}

	public function deletebanner() 
	{
		
		$id=$this->uri->segment(2);
		$table="banners";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Banner Info Deleted Successfully'); 

	 redirect(base_url().'banners', 'refresh');
	}

	public function bannerstatus($id = NULL)
	{
		$table="banners";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'banners', 'refresh');
		
	}

	public function add_banner()
	{
		$table='banners';
		$banner = $this->input->post('banner');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["bannerimage"]["tmp_name"];
            $folder="./assets/img/banner/";
            move_uploaded_file($_FILES["bannerimage"]["tmp_name"], "$folder".$no.$_FILES["bannerimage"]["name"]);
			$bannerimage = $no.$_FILES["bannerimage"]["name"];
			
		$data = array('banner'=>$banner,'bannerimage'=>$bannerimage,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Banner Info Saved Successfully');                   
		 redirect(base_url().'banners');
	}

	public function edit_banner()
	{
		$table='banners';
		$id = $this->input->post('id');
		$banner = $this->input->post('banner');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["bannerimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $bannerimage=$result->bannerimage; 	
			  }else{
	        $uploadfile=$_FILES["bannerimage"]["tmp_name"];
            $folder="./assets/img/banner/";
            move_uploaded_file($_FILES["bannerimage"]["tmp_name"], "$folder".$no.$_FILES["bannerimage"]["name"]);
            $bannerimage=$no.$_FILES["bannerimage"]["name"]; 
			}
			
		$data = array('banner'=>$banner,'bannerimage'=>$bannerimage,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Banner Info Updated Successfully');                   
		 redirect(base_url().'banners');
	}

	public function services()
	{
		$table="services";
		$data['services']=$this->home_model->fetchall($table);
		$this->load->view('services',$data);
	}

	public function addservice()
	{
		$this->load->view('addservice');
	}

	public function editservice()
	{
		$table="services";
		$id=$this->uri->segment(2);
		$data['service']=$this->home_model->fetchdata($table,$id);
		//print_r($data); exit;
		$this->load->view('editservice',$data);
	}

	public function deleteservice() 
	{
		
		$id=$this->uri->segment(2);
		$table="services";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', 'Service Info Deleted Successfully'); 

	 redirect(base_url().'services', 'refresh');
	}

	public function servicestatus($id = NULL)
	{
		$table="services";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'services', 'refresh');
		
	}

	public function add_service()
	{
		$table='services';
		$service = $this->input->post('service');
		$date = date('d-M-Y');
		$no = rand();
			$uploadfile=$_FILES["serviceimage"]["tmp_name"];
            $folder="./assets/img/service/";
            move_uploaded_file($_FILES["serviceimage"]["tmp_name"], "$folder".$no.$_FILES["serviceimage"]["name"]);
			$serviceimage = $no.$_FILES["serviceimage"]["name"];
			
		$data = array('service'=>$service,'serviceimage'=>$serviceimage,'date'=>$date);
			
		$register=$this->home_model->insertdata($table,$data);
		$this->session->set_flashdata('msg', 'Service Info Saved Successfully');                   
		 redirect(base_url().'services');
	}

	public function edit_service()
	{
		$table='services';
		$id = $this->input->post('id');
		$service = $this->input->post('service');
		$date = date('d-M-Y');
		$no = rand();
			if($_FILES["serviceimage"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $serviceimage=$result->serviceimage; 	
			  }else{
	        $uploadfile=$_FILES["serviceimage"]["tmp_name"];
            $folder="./assets/img/service/";
            move_uploaded_file($_FILES["serviceimage"]["tmp_name"], "$folder".$no.$_FILES["serviceimage"]["name"]);
            $serviceimage=$no.$_FILES["serviceimage"]["name"]; 
			}
			
		$data = array('service'=>$service,'serviceimage'=>$serviceimage,'date'=>$date);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Service Info Updated Successfully');                   
		 redirect(base_url().'services');
	}	

	public function tickets()
	{
		$table="tickets";
		$data['tickets']=$this->home_model->fetchall($table);
		$this->load->view('tickets',$data);
	}

	public function ticketstatus($id = NULL)
	{
		$table="tickets";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'tickets', 'refresh');
		
	}
	public function emailstatus($id = NULL)
	{
		$table="tickets";
		$data['status']=$this->home_model->changeemailstatus($table,$id);
		$this->session->set_flashdata('msg', 'Email Status Changed Successfully'); 
		redirect(base_url().'tickets', 'refresh');
		
	}

	public function subscribers()
	{
		$table="subscribers";
		$data['subscribers']=$this->home_model->fetchall($table);
		$this->load->view('subscribers',$data);
	}

	public function subscriberstatus($id = NULL)
	{
		$table="subscribers";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'subscribers', 'refresh');
		
	}
	public function subemailstatus($id = NULL)
	{
		$table="subscribers";
		$data['status']=$this->home_model->changeemailstatus($table,$id);
		$this->session->set_flashdata('msg', 'Email Status Changed Successfully'); 
		redirect(base_url().'subscribers', 'refresh');
		
	}

	public function enquiries()
	{
		$table="enquiries";
		$data['enquiries']=$this->home_model->fetchall($table);
		$this->load->view('enquiries',$data);
	}
	public function datalist()
	{   
	   
	   if(isset($_GET['submit'])){
	    $category = $this->input->get('category');
  $subcategory = $this->input->get('subcategory');
  $type = $this->input->get('type');
  $city = $this->input->get('city');
  $experience = $this->input->get('experience');
  $age = $this->input->get('age');

  //$this->load->model('your_model_name'); // Replace with your actual model name

  // Call the method in your model to perform the search
  $results = $this->home_model->advancedSearch($category, $subcategory, $type, $city, $experience, $age);

  // Pass the results to your view
  $data['artist_list'] = $results;
  //$this->load->view('data_list',$data);
}else{
	   $session = $this->session->userdata('admin_session');
		$table="artist_list";
		if($session['roles']=='Admin') {
		$data['artist_list']=$this->home_model->fetchalldata($table);
	    }elseif($session['roles']=='User') {
			$data['artist_list']=$this->home_model->fetchalldata_Data($table);
	    }
}
		$this->load->view('data_list',$data);
	}
	/*-----------------search------------------------*/
	
	
	public function artist_view()
	{     $id=$this->uri->segment(3);
     
		$table="artist_list";
	  
     	$data['artist']=$this->home_model->fetchdata($table,$id);
     	///print_r($data['artist']); 
		$this->load->view('artist_view',$data);
	}
		public function artist_edits()
	{
		$id=$this->uri->segment(3);
     
		$table="artist_list";
	  
     	$data['artist']=$this->home_model->fetchdata($table,$id);
     	
		$table="category";
		$data['category']=$this->home_model->fetchall($table);
		$table="subcategory";
		$data['subcategory']=$this->home_model->fetchall($table);
		
		$this->load->view('artist_edits',$data);
	}
	/*--------------------Personal-------------------------------------------*/
		public function personal_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
		$artist_name = $this->input->post('artist_name');
		$artist_mobile = $this->input->post('artist_mobile');
		$artist_email = $this->input->post('artist_email');
		$artist_photo = $this->input->post('artist_photo');
		$artist_gender = $this->input->post('artist_gender');
		$artist_father = $this->input->post('artist_father');
		$artist_dob = $this->input->post('artist_dob');
		$artist_age = $this->input->post('artist_age');
		$artist_expriance = $this->input->post('artist_expriance');
	$artist_education = $this->input->post('artist_education');
			$data = array('artist_name'=>$artist_name,'artist_mobile'=>$artist_mobile,'artist_email'=>$artist_email,'artist_photo'=>$artist_photo,'artist_gender'=>$artist_gender,'artist_father'=>$artist_father,'artist_dob'=>$artist_dob,'artist_age'=>$artist_age,'artist_address	'=>$artist_address	,'artist_country'=>$artist_country,'artist_state'=>$artist_state,'artist_distric'=>$artist_distric,'artist_city'=>$artist_city,'artist_pincode'=>$artist_pincode,'artist_expriance'=>$artist_expriance,'artist_perf_pich'=>$artist_perf_pich,'artist_education'=>$artist_education);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/artist_view/'.$id.'');
	}
	
		public function aboutedit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
		$abouts = $this->input->post('abouts');


       
			$data = array('abouts'=>$abouts);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
	 redirect(base_url().'home/artist_view/'.$id.'');
	}
		public function addressedit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');

		$artist_address = $this->input->post('artist_address'); 
		$artist_country = $this->input->post('artist_country');
		$artist_state = $this->input->post('artist_state');
		$artist_distric	= $this->input->post('artist_distric');
		$artist_city = $this->input->post('artist_city');
		$artist_pincode = $this->input->post('artist_pincode');

			$data = array('artist_address	'=>$artist_address	,'artist_country'=>$artist_country,'artist_state'=>$artist_state,'artist_distric'=>$artist_distric,'artist_city'=>$artist_city,'artist_pincode'=>$artist_pincode);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/artist_view/'.$id.'');
	}
		public function gradeedit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
	
		$artist_grade1 = $this->input->post('artist_grade1');
		$artist_grade2 = $this->input->post('artist_grade2');
		//$artist_grade3 = $this->input->post('artist_grade3');
		$akash_grade = $this->input->post('akash_grade');
	//	$akash_grade_file = $this->input->post('akash_grade_file');
		$iccr_grade = $this->input->post('iccr_grade');
		//$iccr_files = $this->input->post('iccr_files');
		$artist_other = $this->input->post('artist_other');
	//	$artist_other_certificate = $this->input->post('artist_other_certificate');
	
	//	$date = date('d-M-Y');
	
 
         if(isset($_FILES["artist_grade3"]["name"]) && !empty($_FILES["artist_grade3"]["name"]))
				{	 
				$filename = basename($_FILES['artist_grade3']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$artist_grade3=md5(time())."_".$filename;
				move_uploaded_file($_FILES['artist_grade3']['tmp_name'],"../public/uploads/".$artist_grade3);
				}				
				}        
			else 
				{ $artist_grade3 =$_POST['artist_grade3old'];
				}
    
         if(isset($_FILES["akash_grade_file"]["name"]) && !empty($_FILES["akash_grade_file"]["name"]))
				{	 
				$filename = basename($_FILES['akash_grade_file']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$akash_grade_file=md5(time())."_".$filename;
				move_uploaded_file($_FILES['akash_grade_file']['tmp_name'],"../public/uploads/".$akash_grade_file);
				}				
				}        
			else 
				{ $akash_grade_file =$_POST['akash_grade_fileold'];
				}
    
         if(isset($_FILES["iccr_files"]["name"]) && !empty($_FILES["iccr_files"]["name"]))
				{	 
				$filename = basename($_FILES['iccr_files']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$iccr_files=md5(time())."_".$filename;
				move_uploaded_file($_FILES['iccr_files']['tmp_name'],"../public/uploads/".$iccr_files);
				}				
				}        
			else 
				{ $iccr_files =$_POST['iccr_filesold'];
				}
     
         if(isset($_FILES["artist_other_certificate"]["name"]) && !empty($_FILES["artist_other_certificate"]["name"]))
				{	 
				$filename = basename($_FILES['artist_other_certificate']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$artist_other_certificate=md5(time())."_".$filename;
				move_uploaded_file($_FILES['artist_other_certificate']['tmp_name'],"../public/uploads/".$artist_other_certificate);
				}				
				}        
			else 
				{ $artist_other_certificate =$_POST['artist_other_certificateold'];
				}
/*for($key = 0; $key < count($_FILES['artist_perf_pich']['name']); $key++) 
					{
            $nod = rand();
            $uploadfile=$_FILES["artist_perf_pich"]["tmp_name"][$key];
            $folder="../public/uploads/";
            move_uploaded_file($_FILES["artist_perf_pich"]["tmp_name"][$key], "$folder".$nod.$_FILES["artist_perf_pich"]["name"][$key]);
            $picture = $nod.$_FILES["artist_perf_pich"]["name"][$key];
        
		  $sql="INSERT INTO `artist_picture`(`artist_id`,`img`) VALUES ('$id', '$picture')";
             // $registera=$this->home_model->insertdata($sql);
     $results_data=$this->db->query($sql);
}
*/
			$data = array('artist_grade2'=>$artist_grade2,'artist_grade3'=>$artist_grade3,'akash_grade'=>$akash_grade,'akash_grade_file'=>$akash_grade_file,'iccr_grade'=>$iccr_grade,'iccr_files'=>$iccr_files,'artist_other'=>$artist_other,'artist_other_certificate'=>$artist_other_certificate);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
	 redirect(base_url().'home/artist_view/'.$id.'');
	}
	
		public function quastionedit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
		$artist_program = $this->input->post('artist_program');		
		$artist_year = $this->input->post('artist_year');		
		$artist_award = $this->input->post('artist_award');		
		$artist_year1 = $this->input->post('artist_year1');
		$artist_company = $this->input->post('artist_company');
		$artist_aword1 = $this->input->post('artist_aword1');
		$artist_year2 = $this->input->post('artist_year2');
	

			$data = array('artist_program'=>$artist_program,'artist_year'=>$artist_year,'artist_award'=>$artist_award,'artist_year1'=>$artist_year1,'artist_company'=>$artist_company,'artist_aword1'=>$artist_aword1,'artist_year2'=>$artist_year2);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/artist_view/'.$id.'');
	}
	
		public function category_edit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
	
		$artist_category = $this->input->post('artist_category');
		$artist_subcategory = $this->input->post('artist_subcategory');
		$artist_subtype = $this->input->post('artist_subtype');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$linkedin = $this->input->post('linkedin');
		$twitter = $this->input->post('twitter');
		$youtube = $this->input->post('youtube');
		$website = $this->input->post('website');
		//$abouts = $this->input->post('abouts');

			$data = array('artist_category'=>$artist_category,'artist_subcategory'=>$artist_subcategory,'artist_subtype'=>$artist_subtype,'facebook'=>$facebook,'instagram'=>$instagram,'linkedin'=>$linkedin,'twitter'=>$twitter,'youtube'=>$youtube,'website'=>$website);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/artist_view/'.$id.'');
	}
		public function photoedit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
		
for($key = 0; $key < count($_FILES['artist_perf_pich']['name']); $key++) 
					{
            $nod = rand();
            $uploadfile=$_FILES["artist_perf_pich"]["tmp_name"][$key];
            $folder="../public/uploads/";
            move_uploaded_file($_FILES["artist_perf_pich"]["tmp_name"][$key], "$folder".$nod.$_FILES["artist_perf_pich"]["name"][$key]);
            $picture = $nod.$_FILES["artist_perf_pich"]["name"][$key];
        
		  $sql="INSERT INTO `artist_picture`(`artist_id`,`img`) VALUES ('$id', '$picture')";
             // $registera=$this->home_model->insertdata($sql);
     $results_data=$this->db->query($sql);
}

		//	$data = array('artist_perf_pich'=>$artist_perf_pich,);
			
	//	$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/artist_view/'.$id.'');
	}
	
		public function other_edit_artists()
	{
		$table='artist_register_step2';
		$ids = $this->input->post('ids');
			$id = $this->input->post('id');
		$step_qualification = $this->input->post('step_qualification');
		$step_school = $this->input->post('step_school');
		$step_location = $this->input->post('step_location');
		$step_desgination = $this->input->post('step_desgination');
		$step_company = $this->input->post('step_company');
		$step__totalyear = $this->input->post('step__totalyear');
		$step_location1 = $this->input->post('step_location1');
		$step_from = $this->input->post('step_from');
		$step_to = $this->input->post('step_to'); 
		$step_date = $this->input->post('step_date');
		$step__types = $this->input->post('step__types');
		$step_program	 = $this->input->post('step_program');
		$step_location2 = $this->input->post('step_location2');
		$step_venue = $this->input->post('step_venue');
	//	$step_pancord = $this->input->post('step_pancord');
    	$step_bankname = $this->input->post('step_bankname');
		$step_account = $this->input->post('step_account');
		$step_ifsc = $this->input->post('step_ifsc');
		$step_branch = $this->input->post('step_branch');
		$step_city = $this->input->post('step_city');
	//	$step_check = $this->input->post('step_check');
		
	 $nod = rand();

	 if(isset($_FILES["step_check"]["name"]) && !empty($_FILES["step_check"]["name"]))
				{	 
				$filename = basename($_FILES['step_check']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$step_check=md5(time())."_".$filename;
				move_uploaded_file($_FILES['step_check']['tmp_name'],"../public/uploads/".$step_check);
				}				
				}        
			else 
				{ $step_check =$_POST['step_checkold'];
				}

         if(isset($_FILES["step_pancord"]["name"]) && !empty($_FILES["step_pancord"]["name"]))
				{	 
				$filename = basename($_FILES['step_pancord']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$step_pancord=md5(time())."_".$filename;
				move_uploaded_file($_FILES['step_pancord']['tmp_name'],"../public/uploads/".$step_pancord);
				}				
				}        
			else 
				{ $step_pancord =$_POST['step_pancordold'];
				}
     
$data = array('step_qualification'=>$step_qualification,'step_school'=>$step_school,'step_location'=>$step_location,'step_desgination'=>$step_desgination,'step_company'=>$step_company,'step__totalyear'=>$step__totalyear,'step_location1'=>$step_location1,'step_from'=>$step_from,'step_to'=>$step_to,'step_date'=>$step_date,'step__types'=>$step__types,'step_program'=>$step_program,'step_location2'=>$step_location2,'step_venue'=>$step_venue,'step_pancord'=>$step_pancord,'step_bankname'=>$step_bankname,'step_account'=>$step_account,'step_ifsc'=>$step_ifsc,'step_branch'=>$step_branch,'step_city'=>$step_city,'step_check'=>$step_check);
                        
     
     $dataInsert = array('step_qualification'=>$step_qualification,'step_school'=>$step_school,'step_location'=>$step_location,'step_desgination'=>$step_desgination,'step_company'=>$step_company,'step__totalyear'=>$step__totalyear,'step_location1'=>$step_location1,'step_from'=>$step_from,'step_to'=>$step_to,'step_date'=>$step_date,'step__types'=>$step__types,'step_program'=>$step_program,'step_location2'=>$step_location2,'step_venue'=>$step_venue,'step_pancord'=>$step_pancord,'step_bankname'=>$step_bankname,'step_account'=>$step_account,'step_ifsc'=>$step_ifsc,'step_branch'=>$step_branch,'step_city'=>$step_city,'step_check'=>$step_check,'artist_id'=>$ids);                   
                        $query = "SELECT  *FROM  artist_register_step2";
                  
				   $sql=$this->db->query($query);
                    $artistArray=$sql->result_array();
                 
                  foreach ($artistArray as $dataA){}
                  // echo   $dataA['artist_id'];
                   // die;
                    if($dataA['artist_id']==$ids)
                    {
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');  
                    }else{
         $register=$this->home_model->insertdata($table,$dataInsert);
		$this->session->set_flashdata('msg', 'Info Save Successfully');      
                        
                    }
		 redirect(base_url().'home/artist_view/'.$ids.'');
	}
	
	/*----------------------------------------------------------------*/
	public function edit_artists()
	{
		$table='artist_list';
		$id = $this->input->post('id');
		$artist_name = $this->input->post('artist_name');
		$artist_mobile = $this->input->post('artist_mobile');
		$artist_email = $this->input->post('artist_email');
		$artist_photo = $this->input->post('artist_photo');
		$artist_gender = $this->input->post('artist_gender');
		$artist_father = $this->input->post('artist_father');
		$artist_dob = $this->input->post('artist_dob');
		$artist_age = $this->input->post('artist_age');
		$artist_address = $this->input->post('artist_address'); 
		$artist_country = $this->input->post('artist_country');
		$artist_state = $this->input->post('artist_state');
		$artist_distric	 = $this->input->post('artist_distric	');
		$artist_city = $this->input->post('artist_city');
		$artist_pincode = $this->input->post('artist_pincode');
		$artist_expriance = $this->input->post('artist_expriance');
	//	$artist_perf_pich = $this->input->post('artist_perf_pich');
		$artist_education = $this->input->post('artist_education');
		$artist_category = $this->input->post('artist_category');
		$artist_subcategory = $this->input->post('artist_subcategory');
		$artist_subtype = $this->input->post('artist_subtype');
		$artist_grade1 = $this->input->post('artist_grade1');
		$artist_grade2 = $this->input->post('artist_grade2');
		//$artist_grade3 = $this->input->post('artist_grade3');
		$akash_grade = $this->input->post('akash_grade');
	//	$akash_grade_file = $this->input->post('akash_grade_file');
		$iccr_grade = $this->input->post('iccr_grade');
		//$iccr_files = $this->input->post('iccr_files');
		$artist_other = $this->input->post('artist_other');
	//	$artist_other_certificate = $this->input->post('artist_other_certificate');
		$artist_program = $this->input->post('artist_program');		
		$artist_year = $this->input->post('artist_year');		
		$artist_award = $this->input->post('artist_award');		
		$artist_year1 = $this->input->post('artist_year1');
		$artist_company = $this->input->post('artist_company');
		$artist_aword1 = $this->input->post('artist_aword1');
		$artist_year2 = $this->input->post('artist_year2');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$linkedin = $this->input->post('linkedin');
		$twitter = $this->input->post('twitter');
		$youtube = $this->input->post('youtube');
		$website = $this->input->post('website');
		$abouts = $this->input->post('abouts');
	//	$date = date('d-M-Y');
	 $nod = rand();
	/* if(!empty($_FILES["artist_photo"])){
		     $uploadfile=$_FILES["artist_photo"]["tmp_name"];
        $folder="../public/uploads/";
        move_uploaded_file($_FILES["artist_photo"]["tmp_name"], "$folder".$nod.$_FILES["artist_photo"]["name"]);
        $artist_photo = $nod.$_FILES["artist_photo"]["name"];
	 }else{
	     $artist_photo=$_POST['artist_photoold'];
	 }*/
	 if(isset($_FILES["artist_photo"]["name"]) && !empty($_FILES["artist_photo"]["name"]))
				{	 
				$filename = basename($_FILES['artist_photo']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$artist_photo=md5(time())."_".$filename;
				move_uploaded_file($_FILES['artist_photo']['tmp_name'],"../public/uploads/".$artist_photo);
				}				
				}        
			else 
				{ $artist_photo =$_POST['artist_photoold'];
				}
     /*   $nodA = rand();
        $uploadfile=$_FILES["artist_grade3"]["tmp_name"];
        $folder="../public/uploads/";
        move_uploaded_file($_FILES["artist_grade3"]["tmp_name"], "$folder".$nodA.$_FILES["artist_grade3"]["name"]);
        $artist_grade3 = $nodA.$_FILES["artist_grade3"]["name"];*/
         if(isset($_FILES["artist_grade3"]["name"]) && !empty($_FILES["artist_grade3"]["name"]))
				{	 
				$filename = basename($_FILES['artist_grade3']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$artist_grade3=md5(time())."_".$filename;
				move_uploaded_file($_FILES['artist_grade3']['tmp_name'],"../public/uploads/".$artist_grade3);
				}				
				}        
			else 
				{ $artist_grade3 =$_POST['artist_grade3old'];
				}
      /*  $nodB = rand();
        $uploadfile=$_FILES["akash_grade_file"]["tmp_name"];
        $folder="../public/uploads/";
        move_uploaded_file($_FILES["akash_grade_file"]["tmp_name"], "$folder".$nodB.$_FILES["akash_grade_file"]["name"]);
        $akash_grade_file = $nodB.$_FILES["akash_grade_file"]["name"];
        */
         if(isset($_FILES["akash_grade_file"]["name"]) && !empty($_FILES["akash_grade_file"]["name"]))
				{	 
				$filename = basename($_FILES['akash_grade_file']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$akash_grade_file=md5(time())."_".$filename;
				move_uploaded_file($_FILES['akash_grade_file']['tmp_name'],"../public/uploads/".$akash_grade_file);
				}				
				}        
			else 
				{ $akash_grade_file =$_POST['akash_grade_fileold'];
				}
      /*  $nodC = rand();
        $uploadfile=$_FILES["iccr_files"]["tmp_name"];
        $folder="../public/uploads/";
        move_uploaded_file($_FILES["iccr_files"]["tmp_name"], "$folder".$nodC.$_FILES["artist_photo"]["name"]);
        $iccr_files = $nodC.$_FILES["iccr_files"]["name"];
        */
         if(isset($_FILES["iccr_files"]["name"]) && !empty($_FILES["iccr_files"]["name"]))
				{	 
				$filename = basename($_FILES['iccr_files']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$iccr_files=md5(time())."_".$filename;
				move_uploaded_file($_FILES['iccr_files']['tmp_name'],"../public/uploads/".$iccr_files);
				}				
				}        
			else 
				{ $iccr_files =$_POST['iccr_filesold'];
				}
      /*  $nodD = rand();
          $uploadfile=$_FILES["artist_other_certificate"]["tmp_name"];
        $folder="../public/uploads/";
        move_uploaded_file($_FILES["artist_other_certificate"]["tmp_name"], "$folder".$nodD.$_FILES["artist_photo"]["name"]);
        $artist_other_certificate = $nodD.$_FILES["artist_other_certificate"]["name"];
        */
         if(isset($_FILES["artist_other_certificate"]["name"]) && !empty($_FILES["artist_other_certificate"]["name"]))
				{	 
				$filename = basename($_FILES['artist_other_certificate']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$artist_other_certificate=md5(time())."_".$filename;
				move_uploaded_file($_FILES['artist_other_certificate']['tmp_name'],"../public/uploads/".$artist_other_certificate);
				}				
				}        
			else 
				{ $artist_other_certificate =$_POST['artist_other_certificateold'];
				}
for($key = 0; $key < count($_FILES['artist_perf_pich']['name']); $key++) 
					{
            $nod = rand();
            $uploadfile=$_FILES["artist_perf_pich"]["tmp_name"][$key];
            $folder="../public/uploads/";
            move_uploaded_file($_FILES["artist_perf_pich"]["tmp_name"][$key], "$folder".$nod.$_FILES["artist_perf_pich"]["name"][$key]);
            $picture = $nod.$_FILES["artist_perf_pich"]["name"][$key];
        
		  $sql="INSERT INTO `artist_picture`(`artist_id`,`img`) VALUES ('$id', '$picture')";
             // $registera=$this->home_model->insertdata($sql);
     $results_data=$this->db->query($sql);
}
		/*	$no1 = rand();
			if($_FILES["idproofno"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $idproofno=$result->idproofno; 	
			  }else{
	        $uploadfile1=$_FILES["idproofno"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["idproofno"]["tmp_name"], "$folder".$no.$_FILES["idproofno"]["name"]);
            $idproofno=$no.$_FILES["idproofno"]["name"]; 
			}

			$no2 = rand();
			if($_FILES["pancard"]["name"]==""){
	        $this->db->select("*");
            $this->db->where('id',$id);
            $query = $this->db->get($table);
            $result = $query->row();
	        $pancard=$result->pancard; 	
			  }else{
	        $uploadfile2=$_FILES["pancard"]["tmp_name"];
            $folder="./assets/docs/";
            move_uploaded_file($_FILES["pancard"]["tmp_name"], "$folder".$no.$_FILES["pancard"]["name"]);
            $pancard=$no.$_FILES["pancard"]["name"]; 
			}
*/
			$data = array('artist_name'=>$artist_name,'artist_mobile'=>$artist_mobile,'artist_email'=>$artist_email,'artist_photo'=>$artist_photo,'artist_gender'=>$artist_gender,'artist_father'=>$artist_father,'artist_dob'=>$artist_dob,'artist_age'=>$artist_age,'artist_address	'=>$artist_address	,'artist_country'=>$artist_country,'artist_state'=>$artist_state,'artist_distric'=>$artist_distric,'artist_city'=>$artist_city,'artist_pincode'=>$artist_pincode,'artist_expriance'=>$artist_expriance,'artist_perf_pich'=>$artist_perf_pich,'artist_education'=>$artist_education,'artist_category'=>$artist_category,'artist_subcategory'=>$artist_subcategory,'artist_subtype'=>$artist_subtype,'artist_grade2'=>$artist_grade2,'artist_grade3'=>$artist_grade3,'akash_grade'=>$akash_grade,'akash_grade_file'=>$akash_grade_file,'iccr_grade'=>$iccr_grade,'iccr_files'=>$iccr_files,'artist_other'=>$artist_other,'artist_other_certificate'=>$artist_other_certificate,'artist_program'=>$artist_program,'artist_year'=>$artist_year,'artist_award'=>$artist_award,'artist_year1'=>$artist_year1,'artist_company'=>$artist_company,'artist_aword1'=>$artist_aword1,'artist_year2'=>$artist_year2,'facebook'=>$facebook,'instagram'=>$instagram,'linkedin'=>$linkedin,'twitter'=>$twitter,'youtube'=>$youtube,'website	'=>$website	,'abouts'=>$abouts);
			
		$register=$this->home_model->updatedata($table,$data,$id);
		$this->session->set_flashdata('msg', 'Info Updated Successfully');                   
		 redirect(base_url().'home/datalist');
	}
	
	public function enquirystatus($id = NULL)
	{
		$table="enquiries";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect(base_url().'enquiries', 'refresh');
		
	}
	public function enemailstatus($id = NULL)
	{
		$table="enquiries";
		$data['status']=$this->home_model->changeemailstatus($table,$id);
		$this->session->set_flashdata('msg', 'Email Status Changed Successfully'); 
		redirect(base_url().'enquiries', 'refresh');
		
	}
	public function invoices()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="purchaseorder";
		$data['invoices']=$this->home_model->fetchall($table);
		$this->load->view('invoices',$data);
	}

	public function addinvoice()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$this->load->view('addinvoice',$data);
	}

	/*public function printinvoice()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$this->load->view('printinvoice',$data);
	} */	


	/*public function productlist(){
	

		$query = $this->input->get('query');
        $this->db->like('product', $query);


        $data = $this->db->get("products")->result();


        echo json_encode( $data);
		
		//echo $this->home_model->fetch_autodata($this->uri->segment(3));
	  }

	  public function search(){
 
        $term = $this->input->get('term');
 
        $this->db->like('product', $term);
 
        $data = $this->db->get("products")->result();
 
        echo json_encode( $data);
    }

	public function getproductsall($postData){

		$response = array();
	
		if(isset($postData['product']) ){
		  // Select record
		  $this->db->select('*');
		  //$this->db->where("product like '%".$postData['product']."%' ");
		  $this->db->where("product like '%".$postData['product']."%' ");
	
		  $records = $this->db->get('products')->result();
	
		  foreach($records as $row ){
			 $response[] = array("value"=>$row['id'],"label"=>$row['product']);
		  }
	
		}
	
		echo json_encode($response);
		exit;
	 }
	
	 public function getproductval($postData){
	
		$response = array();
	
		if(isset($postData['productid']) ){
		  // Select record
		  $this->db->select('*');
		  $this->db->where("id",$postData['productid']);
	
		  $records = $this->db->get('products')->result();
	
		  foreach($records as $row ){
			$productid = $row['id'];
			$product = $row['product'];
			$mrp = $row['mrp'];
			$tax = $row['tax'];
	
			 $response[] = array("id"=>$productid,"product"=>$product,"mrp"=>$mrp,"tax"=>$tax);
		  }
	
		}
		echo json_encode($response);
		 exit;
		//return $response;
	 }

	
	 public function getProductAutocomplete() {
        $json = array();
        $productName = $this->input->post('query');
        $this->home_model->setProductName($productName);
        $geProducts = $this->home_model->getAllProducts();
        foreach ($geProducts as $key => $element) {
            $json[] = array(
                'product_id' => $element['product_id'], 
                'product_name' => $element['product_name'],
            );
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }

	public function get_autocomplete($term){
       
		$term = $this->input->post('term',TRUE);
 
        $this->db->like('product', $term, 'both');
		//$data['var']= $this->Travel->search_field($term); 
        $data = $this->db->get("products")->result();
 
        echo json_encode( $data);
    }


	public function ajaxPro()
    {
        $query = $this->input->get('query');
        $this->db->like('product', $query);


        $data = $this->db->get("products")->result();


        echo json_encode( $data);
    }
	
	public function productlistfinal(){
		// POST data
		$postData = $this->input->post();
	
		// Get data
		$data = $this->home_model->getproductsfinal($postData);
	
		echo json_encode($data);
	  }
 */

	  public function productsearch()
	  {	
	  //if (isset($_POST['search'])) {
	  if($this->input->post('search')){
	 $name = $_POST['search'];
	 $query = "SELECT * FROM products WHERE product LIKE '%$name%' LIMIT 15";
	  $sql=$this->db->query($query);
		  $data=$sql->result_array();
	//$ExecQuery = MySQLi_query($cont, $Query);
	 echo '
  <ul style="list-style: none;padding-left: 10px; display: block;">
	 ';
	 //Fetching result from database.
	 foreach ($data as $result){
	// while ($Result = MySQLi_fetch_array($ExecQuery)) {
		echo "<li onclick='fill(".$result['product'].")'>".$result['product']."</li><input type='hidden' value=".$result['id']." name='pid' id='pid'>";
	 
  }}
  }

  public function getallproducts()
  {
	$postData = $this->input->post();
		
	// load model 
	//$this->load->model('Main_model');
	
	// get data 
	$data = $this->home_model->getproducts($postData);
	echo json_encode($data);
  }

  public function fetchproduct($postData)
    {
		$postData = $this->input->post('pid');
        $this->db->select("*");
        $this->db->where('id', $postData);
        $query = $this->db->get('products');
        return $query->row();
    }
  public function programs_view()
	{
		$id=$this->uri->segment(3);
     
		$table="programs";
	  
     	$data['artist']=$this->home_model->fetchdata($table,$id);
		$this->load->view('program_view',$data);
	}	
		public function programstatus($id = NULL)
	{
		$table="programs";
		$data['status']=$this->home_model->changestatus($table,$id);
		$this->session->set_flashdata('msg', 'Status Changed Successfully'); 
		redirect('home/programs', 'refresh');
		
	}
	public function programs()
	{
	    
	    if(isset($_GET['submit'])){
	    
  //$city = $this->input->get('city');
  //$experience = $this->input->get('experience');
  //$age = $this->input->get('age');

  // Call the method in your model to perform the search
 // $results = $this->home_model->advancedSearch_program($startdate, $enddate, $category);
$startdate = $this->input->get('startdate');
  $enddate = $this->input->get('enddate');
  $category = $this->input->get('category');
 $data['programs'] = $this->home_model->searchItems($startdate, $enddate, $category);
//print_r($data['programs']); die;
  // Pass the results to your view
  //$data['programs'] = $results;
  $this->load->view('programs',$data);
}else{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="programs";
		$data['programs']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('programs',$data);
	}
	}
	public function addprogram()
	{
		$table="users";
		$id="1"; 
		$data['admin']=$this->home_model->fetchdata($table,$id);
		$table="country";
		$data['country']=$this->home_model->fetchall($table);
        $table="state";
		$data['state']=$this->home_model->fetchall($table);
        $table="city";
		$data['city']=$this->home_model->fetchall($table);
        $table="area";
		$data['area']=$this->home_model->fetchall($table);
		$table="pincode";
		$data['pincode']=$this->home_model->fetchall($table);
		$this->load->view('program_add',$data);
	}
		public function editprogram()
	{
	$id=$this->uri->segment(3);
     
		$table="programs";
			$data['program']=$this->home_model->fetchdata($table,$id);
		$this->load->view('program_edit',$data);
	}
		public function deleteprog() 
	{
	
		$id=$this->uri->segment(3);
		
		$p_id=$id;
                        $query = "SELECT  *FROM  programlist where id='$p_id'";
                  
				   $sql=$this->db->query($query);
                    $artistArray=$sql->result_array(); 
                    $ids=$artistArray[0]['progId'];
		$table="programlist";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', ' Info Deleted Successfully'); 

	 	redirect("home/editprogram/$ids");
	}
	
			public function deleteprogram() 
	{
	
		$id=$this->uri->segment(3);
		
		
		$table="programs";
		$data['delete']=$this->home_model->deletedata($table,$id);
		$this->session->set_flashdata('msg', ' Info Deleted Successfully'); 

	 	redirect("home/programs");
	}
	public function programupdate()
	{
		$table='programs';
     	$id = $this->input->post('id');
		$program_name = $this->input->post('program_name');
		$program_category = $this->input->post('program_category');
		$program_type = $this->input->post('program_type');
		$program_link = $this->input->post('program_link');
		$starting_date = $this->input->post('starting_date');
		$end_date = $this->input->post('end_date');
		$starting_time = $this->input->post('starting_time');
		$end_time = $this->input->post('end_time');
		$entry_type = $this->input->post('entry_type');
	   $chief_guest= $this->input->post('chief_guest');
	   $venu= $this->input->post('venu');
	   $address= $this->input->post('address');
	   $state= $this->input->post('state');
	   $district= $this->input->post('district');
	   $city= $this->input->post('city');
	   $pincode= $this->input->post('pincode');
	   //$profile_img1= $this->input->post('profile_img1');
	   //$profile_img2= $this->input->post('profile_img2');
	   //$profile_img3= $this->input->post('profile_img3');
	 //  $profile_img4= $this->input->post('profile_img4');
	   $date_of_email= $this->input->post('date_of_email');
	   $about= $this->input->post('about');
	   if(isset($_FILES["profile_img1"]["name"]) && !empty($_FILES["profile_img1"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img1']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img1=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img1']['tmp_name'],"../public/uploads/".$profile_img1);
			    	}				
				} else{
				    $profile_img1=$_POST['profile_img1old'];
				}
				
				 if(isset($_FILES["profile_img2"]["name"]) && !empty($_FILES["profile_img2"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img2']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img2=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img2']['tmp_name'],"../public/uploads/".$profile_img2);
				}				
				} else{
				    $profile_img2=$_POST['profile_img2old'];
				} 
				
				 if(isset($_FILES["profile_img3"]["name"]) && !empty($_FILES["profile_img3"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img3']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img3=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img3']['tmp_name'],"../public/uploads/".$profile_img3);
				}				
				}  else{
				    $profile_img3=$_POST['profile_img3old'];
				}
				if(isset($_FILES["profile_img4"]["name"]) && !empty($_FILES["profile_img4"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img4']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img4=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img4']['tmp_name'],"../public/uploads/".$profile_img4);
				}				
				}else{
				    $profile_img4=$_POST['profile_img4old'];
				}
$data = array('program_name'=>$program_name,'program_category'=>$program_category,'program_type'=>$program_type,'program_link'=>$program_link,'starting_date'=>$starting_date,'end_date'=>$end_date,'starting_time'=>$starting_time,'end_time'=>$end_time,'entry_type'=>$entry_type	,'chief_guest'=>$chief_guest,'venu'=>$venu,'address'=>$address,'state'=>$state,'district'=>$district,'city'=>$city,'pincode'=>$pincode,'profile_img1'=>$profile_img1,'profile_img2'=>$profile_img2,'profile_img3'=>$profile_img3,'profile_img4'=>$profile_img4,'date_of_email'=>$date_of_email,'about'=>$about);
	//	$register=$this->home_model->insertdata($table,$data);
		$register=$this->home_model->updatedata($table,$data,$id);
		
		
		
		$this->session->set_flashdata('msg', 'Update Info Successfully');
		
       /* $query = "SELECT  *FROM  programs order by id desc limit 1";
        $sql=$this->db->query($query);
        $artist=$sql->result_array();
      foreach($artist as $row)
     $programid=$row['id'];
           // print_r($artist); 
             */
             $programid=$id;
            $artistname= $this->input->post('artistname');
            if(!empty($artistname)){
		for($key = 0; $key < count($artistname); $key++) 
					{
             $artistname= $this->input->post('artistname');
               $artistcategory= $this->input->post('artistcategory');
                 $datetime= $this->input->post('datetime');
                   $description= $this->input->post('description');
                   
        
		  $sql="INSERT INTO `programlist`(`progId`,`artist_name`,`artist_category`,`artist_datetime`,`artist_description`) VALUES ('$programid','$artistname[$key]', '$artistcategory[$key]','$datetime[$key]','$description[$key]')";
             // $registera=$this->home_model->insertdata($sql);
     $results_data=$this->db->query($sql);
}
}
		 redirect('home/programs');
	}
		
	
	
	
		public function programsave()
	{
		$table='programs';
	//	$id = $this->input->post('id');
		$program_name = $this->input->post('program_name');
		$program_category = $this->input->post('program_category');
		$program_type = $this->input->post('program_type');
		$program_link = $this->input->post('program_link');
		$starting_date = $this->input->post('starting_date');
		$end_date = $this->input->post('end_date');
		$starting_time = $this->input->post('starting_time');
		$end_time = $this->input->post('end_time');
		$entry_type = $this->input->post('entry_type');
	   $chief_guest= $this->input->post('chief_guest');
	   $venu= $this->input->post('venu');
	   $address= $this->input->post('address');
	   $state= $this->input->post('state');
	   $district= $this->input->post('district');
	   $city= $this->input->post('city');
	   $pincode= $this->input->post('pincode');
	   //$profile_img1= $this->input->post('profile_img1');
	   //$profile_img2= $this->input->post('profile_img2');
	   //$profile_img3= $this->input->post('profile_img3');
	 //  $profile_img4= $this->input->post('profile_img4');
	   $date_of_email= $this->input->post('date_of_email');
	   $about= $this->input->post('about');
	   if(isset($_FILES["profile_img1"]["name"]) && !empty($_FILES["profile_img1"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img1']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img1=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img1']['tmp_name'],"../public/uploads/".$profile_img1);
			    	}				
				} 
				
				 if(isset($_FILES["profile_img2"]["name"]) && !empty($_FILES["profile_img2"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img2']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img2=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img2']['tmp_name'],"../public/uploads/".$profile_img2);
				}				
				}  
				
				 if(isset($_FILES["profile_img3"]["name"]) && !empty($_FILES["profile_img3"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img3']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img3=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img3']['tmp_name'],"../public/uploads/".$profile_img3);
				}				
				}   
				if(isset($_FILES["profile_img4"]["name"]) && !empty($_FILES["profile_img4"]["name"]))
				{	 
				$filename = basename($_FILES['profile_img4']['name']);
				$ext1 = strtolower(substr($filename, strrpos($filename, '.')+1));
				if(in_array($ext1,array('jpg','png', 'gif')))
				{ 	  
				$profile_img4=md5(time())."_".$filename;
				move_uploaded_file($_FILES['profile_img4']['tmp_name'],"../public/uploads/".$profile_img4);
				}				
				}
$data = array('program_name'=>$program_name,'program_category'=>$program_category,'program_type'=>$program_type,'program_link'=>$program_link,'starting_date'=>$starting_date,'end_date'=>$end_date,'starting_time'=>$starting_time,'end_time'=>$end_time,'entry_type'=>$entry_type	,'chief_guest'=>$chief_guest,'venu'=>$venu,'address'=>$address,'state'=>$state,'district'=>$district,'city'=>$city,'pincode'=>$pincode,'profile_img1'=>$profile_img1,'profile_img2'=>$profile_img2,'profile_img3'=>$profile_img3,'profile_img4'=>$profile_img4,'date_of_email'=>$date_of_email,'about'=>$about);
		$register=$this->home_model->insertdata($table,$data);
		
		
		
		
		$this->session->set_flashdata('msg', 'Info Successfully');
		
        $query = "SELECT  *FROM  programs order by id desc limit 1";
        $sql=$this->db->query($query);
        $artist=$sql->result_array();
      foreach($artist as $row)
     $programid=$row['id'];
           // print_r($artist); 
            //die; 
            $artistname= $this->input->post('artistname');
		for($key = 0; $key < count($artistname); $key++) 
					{
             $artistname= $this->input->post('artistname');
               $artistcategory= $this->input->post('artistcategory');
                 $datetime= $this->input->post('datetime');
                   $description= $this->input->post('description');
                   
        
		  $sql="INSERT INTO `programlist`(`progId`,`artist_name`,`artist_category`,`artist_datetime`,`artist_description`) VALUES ('$programid','$artistname[$key]', '$artistcategory[$key]','$datetime[$key]','$description[$key]')";
             // $registera=$this->home_model->insertdata($sql);
     $results_data=$this->db->query($sql);
}
		 redirect('home/programs');
	}
	  

}

