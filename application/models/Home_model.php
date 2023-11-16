<?php
		class Home_model extends CI_Model
		{
			
			
			public function validate($data,$table){
		return $query = $this->db->get_where($data,$table);
		}
		public function getmainstock()
		{
				$this->db->select('*');
		$this->db->from('stock');
		$this->db->join('godown','godown.id = stock.gid','left');
		//$this->db->where('products.id',$id);
          		return   $query= $this->db->get()->result_array();
          		  echo $this->db->last_query();die;
		}
	
	public function countdatareturn($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('order_for','return');
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}
public function fetchall_user($table)
		{
			$this->db->select("*");
			$this->db->where('roles', 'User');
            $query = $this->db->get($table);
          	return $query->result_array();
		}
		
		public function fetchall_admin($table)
		{
			$this->db->select("*");
			$this->db->where('roles', 'Admin');
            $query = $this->db->get($table);
          	return $query->result_array();
		}
	public function countdatatodayreturn($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('order_for','return');
		$this->db->where('date', date('d-M-Y'));
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}


	public function fetchdata00($table,$return)
    {
        $this->db->select("*");
        $this->db->where('order_for',$return);
        $query = $this->db->get($table);
        return $query->result_array();
    }
	public function countactive($table,$data)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->where('sale_for',$data);
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}
		public function countinactive($table,$data)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('status', '0');
		$this->db->where('sale_for',$data);
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}

public function countdatatodaysale($table,$data)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('date', date('d-M-Y'));
		$this->db->where('sale_for',$data);
		
		return $this->db->count_all_results();
		   //echo $this->db->last_query();die;
		// $num_results = $this->db->count_all_results();
		}
	public function countdatasale($table,$data)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('sale_for',$data);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}
	public function getsale($data)
		{
				$this->db->select('*');
		$this->db->from('tb_sale');
	
		$this->db->where('sale_for',$data);
          		  return $query= $this->db->get()->result_array();
          		  //echo $this->db->last_query();die;
		}
	public function getqnty($postData){
    $response = array();
 
    // Select record
    $this->db->select('pid,totalqty,gid');
    $this->db->where('pid',$postData['city']);
    $this->db->where('gid',$postData['gid']);
    $q = $this->db->get('stock');
    $response = $q->result_array();
//echo $this->db->last_query();die;
    return $response;
  }
	public function checkstock($table,$check){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($check);
		return  $query= $this->db->get()->row_array();
		  echo $this->db->last_query();die;
		
	}
	public function checkstock2($table,$check,$check2){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('pid',$check);
		$this->db->where('gid',$check2);
		return  $query= $this->db->get()->row_array();
		  echo $this->db->last_query();die;
		
	}
	/*02/12/2021*/
	public function condition_access($table)
		{
		    	 /*$query="select * from assignemprole join emprole on assignemprole.emproleid = emprole.id where empid=$doc";
			 $sql=$this->db->query($query);
                   return $data=$sql->result_array();
                     //return $this->db->result_array*/
                     $session1 = $this->session->userdata('emp_session');
                     $doc= $session1['emp_id'];
                     	$this->db->select('*');
		$this->db->from('assignemprole');
		$this->db->join('emprole','emprole.id = assignemprole.emproleid');
		 
		$this->db->where('empid',$doc);
		//$this->db->order_by("created_at", "DESC");
	//	$this->db->group_by('orderno');
		 return $query= $this->db->get()->result_array();
		}
	public function fetchallmanu($table)
		{
			$this->db->select("*");
			$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
		public function getlastprdct($table)
		{
			$this->db->select("*");
			$this->db->order_by("created_at", "DESC");
			$this->db->limit(1);
            $query = $this->db->get($table);
          	return $query->result_array();
          	 //echo $this->db->last_query();die;
		}
		public function getProductsvarient($id)
		{
				$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_variant','product_variant.pid = products.id');
		$this->db->where('products.id',$id);
          		  return $query= $this->db->get()->result_array();
          		  //echo $this->db->last_query();die;
		}
	
public function fetchall_where($table,$div_name)
		{
			$this->db->select("*");
			$this->db->where("com_control",$div_name);
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
		public function fetchall_where20($table,$div_name)
		{
			$this->db->select("*");
			$this->db->where("c_div",$div_name);
			
			
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
          	// echo $this->db->last_query();die;
		}
		public function fetchall_where30($table,$div_name,$col)
		{
			$this->db->select("*");
			$this->db->where($col,$div_name);
	
			
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
          	// echo $this->db->last_query();die;
		}
		public function fetchall_where22($table,$div_name,$cmp_name,$col,$col2)
		{
			$this->db->select("*");
			$this->db->where($col,$div_name);
			$this->db->where($col2,$cmp_name);
			
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
          	// echo $this->db->last_query();die;
		}
		public function fetchall_where3($table,$div_name,$cmp_name,$e,$g,$col,$col2)
		{
			$this->db->select("*");
			$this->db->where($col,$div_name);
			$this->db->where($col2,$cmp_name);
			
			$this->db->where('created_at >=', $e.'-04-01');
			$this->db->where('created_at <=', $g.'-03-31');
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
          	// echo $this->db->last_query();die;
		}
		public function fetchall_where2($table,$div_name,$cmp_name)
		{
			$this->db->select("*");
			$this->db->where("f_division",$div_name);
			$this->db->where("f_company",$cmp_name);
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
          	 echo $this->db->last_query();die;
		}
	/*21/10/2021*/
	public function fetchall_data($table)
		{
			$this->db->select("*");
			$this->db->where("divi_status",1);
			//$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
	/*21/10/2021*/
	public function changepassword($options = array())
    {
        $users_id = $this->session->userdata('admin_id');
        if ($_POST['newpassword'] != $_POST['confirm_password']) {
            echo "<script>alert('Password And Confirm Password Not Match');</script>";
        } else {
            if (isset($options['newpassword']))
                $this->db->set('password', $options['newpassword']);
            $this->db->where('id', $users_id);
            return $this->db->update('users');
        }
    }

	public function changepassword1($options = array())
			{
		$id=$_POST['admin_id'];  
		if($_POST['newpassword']==$_POST['confirmpassword']){

		    if(isset($options['newpassword']))  
                $this->db->set('password',sha1($options['newpassword']));
			   $this->db->where('id',$id);
               return $this->db->update('admin');
			}      
			}

	
	public function password_match($table,$user_id,$password)
	{
		$this->db->select('*');
		$this->db->where('id',$user_id);
		$this->db->where('password',$password);
		$result = $this->db->get($table);
		return $result->num_rows();
	}
	


	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from user_login where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE user_login set pass='$new_pass'  where id='$session_id'");
	}


	public function countdata($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}

	public function countdatatoday($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('date', date('d-M-Y'));
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}
	
		public function countdataactive($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}
		public function countdatainactive($table)
		{
		 //return $this->db->count_all($table);
		//$this->db->select("count(*)");
		//$query = $this->db->get($table);
		$this->db->select('*');
		$this->db->where('status', '0');
		$this->db->from($table);
		return $this->db->count_all_results();
		// $num_results = $this->db->count_all_results();
		}

	public function fetchall($table)
		{
			$this->db->select("*");
			$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
		public function fetchalldata($table)
		{
			$this->db->select("*");
			$this->db->order_by("create_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
		
			public function fetchalldata_Data($table)
		{  
		     $session = $this->session->userdata('admin_session');
		     //print_r($session);
			$this->db->select("*");
		 $this->db->where('userId', $session['admin_id']);
			$this->db->order_by("create_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
    public function advancedSearch($category, $subcategory, $type, $city, $experience, $age)
        {
            $this->db->select('*');
            $this->db->from('artist_list'); // Replace 'your_table_name' with your actual table name
            
            if ($category) {
            $this->db->where('artist_category', $category);
            }
            if ($subcategory) {
            $this->db->where('artist_subcategory', $subcategory);
            }
            if ($type) {
            $this->db->where('artist_subtype', $type);
            }
            if ($city) {
            $this->db->where('artist_distric', $city);
            }
            if ($experience) {
            $this->db->where('artist_expriance', $experience);
            }
            if ($age) {
            $this->db->where('artist_age', $age);
            }
            
            $query = $this->db->get();
            return $query->result_array();
        }

	public function fetchalld($table)
		{
			$this->db->select("*");
            $query = $this->db->get($table);
          	return $query->result_array();
		}

		public function fetchalltoday($table)
		{
			$this->db->select("*");
			$this->db->where('date', date('d-M-Y'));
			$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}
			public function fetchalla($table)
		{
			$this->db->select("*");
			$this->db->where('status','1');
            $query = $this->db->get($table);
          	return $query->result_array();
		}

		public function fetchallactive($table)
		{
			$this->db->select("*");
			$this->db->where('status', '1');
			$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}

		public function fetchallinactive($table)
		{
			$this->db->select("*");
			$this->db->where('status', '0');
			$this->db->order_by("created_at", "DESC");
            $query = $this->db->get($table);
          	return $query->result_array();
		}

	public function insertdata($table,$data)
	{
	
		$a = $this->db->insert($table,$data);
				
	}

	public function insertmultipledata($table, $keys, $values)
	{
		
		if(is_array($values))
{
$values = implode(',',$values);
}
return 'INSERT INTO '.$table.' ('.implode(', ', $keys).') VALUES '.implode(', ', $values);
		
				
	}

	public function updatedata($table,$data,$id)
	{
	
		$this->db->where('id',$id);
       return  $this->db->update($table,$data);
         echo $this->db->last_query();die;
				
	}
	public function updatedata2($table,$data,$where)
	{
	
		$this->db->where($where);
        return $this->db->update($table,$data);
				
	}
	public function updatedata3($table,$data,$where,$where2)
	{
	
		$this->db->where($where);
		$this->db->where($where2);
        return $this->db->update($table,$data);
				
	}
	public function updatedata1($table,$data,$id,$col)
	{
	
		$this->db->where($col,$id);
        return $this->db->update($table,$data);
				
	}
	public function updatedata12($table,$data,$pid,$gid)
	{
	
		$this->db->where('pid',$pid);
		$this->db->where('gid',$gid);
        return $this->db->update($table,$data);
				
	}
	public function deletedata1($table,$id,$col)
	{
		$this->db->where($col, $id);
		$this->db->delete($table);
	}
		
	public function fetchdata($table,$id)
    {
        $this->db->select("*");
        $this->db->where('id',$id);
        $query = $this->db->get($table);
        return $query->row();
    }
    	public function fetchdata2($table, $id)
    {
        $this->db->select("*");
        $this->db->where('gid',$id);
        $query = $this->db->get($table);
        return $query->result_array();
    }
    	 	public function fetchdata3($table, $id)
    {
        $this->db->select("*");
        $this->db->where('id',$id);
        $query = $this->db->get($table);
        return $query->result_array();
    }	
	
	public function deletedata($table,$id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	public function changestatus($table = NULL , $id = NULL) {
	
		$this->db->select("status");
		$this->db->where('id',$id);
		$query = $this->db->get($table);
		$result = $query->row_array();
		if($result['status']=='1'){
			$status='0';
		}else{
			$status='1'; 
		}
		$this->db->set('status',$status); 
		$this->db->where('id',$id);
		return $this->db->update($table);
			
}

public function changeemailstatus($table = NULL , $id = NULL) {
	
	$this->db->select("emailstatus");
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	$result = $query->row_array();
	if($result['emailstatus']=='1'){
		$status='0';
	}else{
		$status='1'; 
	}
	$this->db->set('emailstatus',$status); 
	$this->db->where('id',$id);
	return $this->db->update($table);
		
}
		
	
public function fetchdatabyone($table,$id)
		{
		 $this->db->where('id', $id);
		 //$this->db->order_by($column, 'ASC');
		 $query = $this->db->get($table);
		 $output = '';
		 foreach($query->result() as $row)
		 {
		  $output .= $row->product;
		 }
		 return $output;
		} 
		
				
		/* public function getproducts($postData){

			$response = array();
	   
			if(isset($postData['psearch']) ){
			  // Select record
			  $this->db->select('*');
			  $this->db->where("product like '%".$postData['psearch']."%' ");
	   
			  $records = $this->db->get('products')->result();
	   
			  foreach($records as $row ){
				 $response[] = array("value"=>$row->id,"label"=>$row->product);
			  }
	   
			}
	   
			return $response;
		 }
	   
		
		
		 
		 function fetch_autodata($query)
 {
  $this->db->like('product', $query);
  $query = $this->db->get('products');
  if($query->num_rows() > 0)
  {
   foreach($query->result_array() as $row)
   {
    $output[] = array(
     'product'  => $row["product"]
    );
   }
   echo json_encode($output);
  }
 }

 private $_countryID;
 private $_countryName;

 // set country id
 public function setCountryID($countryID) {
	return $this->_countryID = $countryID;
}
// set country Name
public function setCountryName($countryName) {
	return $this->_countryName = $countryName;
}

 public function getAllCountries() {
	$this->db->select(array('c.id as country_id', 'c.country as country_name'));
	$this->db->from('country as c');
	$this->db->like('c.country', $this->_countryName, 'both');
	$query = $this->db->get();
	return $query->result_array();
}

*/

function getproducts(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('products');
    $response = $q->result_array();

    return $response;
  }


// Get State
public function getState(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('state');
    $response = $q->result_array();

    return $response;
  }

  // Get City
public function getCity($postData){
    $response = array();
 
    // Select record
    $this->db->select('id,city');
    $this->db->where('state_id', $postData['state']);
    $q = $this->db->get('city');
    $response = $q->result_array();

    return $response;
  }

  // Get Area
public function getArea($postData){
    $response = array();
 
    // Select record
    $this->db->select('id,area');
    $this->db->where('city_id', $postData['city']);
    $q = $this->db->get('area');
    $response = $q->result_array();

    return $response;
  }


// Get Pin Code
public function getPin($postData){
    $response = array();
 
    // Select record
    $this->db->select('id,pincode');
    $this->db->where('area_id', $postData['area']);
    $q = $this->db->get('pincode');
    $response = $q->result_array();

    return $response;
  }

  
  public function search_product($product){
	$this->db->like('product', $product , 'both');
	$this->db->order_by('product', 'ASC');
	$this->db->limit(10);
	return $this->db->get('products')->result();
}



private $_productID;
    private $_productName;

    // set country id
    public function setproductID($productID) {
        return $this->_productID = $productID;
    }
    // set country Name
    public function setproductName($productName) {
        return $this->_productName = $productName;
    }
    // get All Countries
    public function getAllProducts() {
        $this->db->select(array('p.id as product_id', 'p.product as product_name'));
        $this->db->from('products as p');
        $this->db->like('p.product', $this->_productName, 'both');
        $query = $this->db->get();
        return $query->result_array();
    }


	public function getproductsfinal($postData)
	{
		$response = array();

		if(isset($postData['search']) ){
			$name = $_POST['search'];
		  // Select record
		  $this->db->select('*');
		  $this->db->where("product like '%".$name."%' ");
   
		  $records = $this->db->get('products')->result();
		  
		  foreach($records as $row ){
			 $response[] = array("value"=>$row->id,"label"=>$row->product);
		  } 
   
		}
   
		return $response;
	}





		}		

?>