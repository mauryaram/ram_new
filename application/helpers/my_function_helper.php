<?php //defined('BASEPATH') or exit("No Direct Access Allowed!");

if(!function_exists('ci')){ 
	function ci(){
		$ci = & get_instance();
		return $ci; 
		}
}
function frontend($page,$data)
{
        ci()->load->view('frontend/include/doctype', $data);
        ci()->load->view('frontend/include/keyword', $data);
        ci()->load->view('frontend/include/allcss', $data);
        ci()->load->view('frontend/include/header', $data);
        ci()->load->view($page, $data);
        ci()->load->view('frontend/include/footer', $data);
        ci()->load->view('frontend/include/alljs', $data);
}
function adminlogincheck(){ 
	ci()->load->model('secure_admin');
	$logincheck  = ci()->secure_admin->secureadmin(); 
	if(!$logincheck['checklogin']){ ci()->session->sess_destroy();  redirect('admin/Login'); }  
}

if(!function_exists('fetchall')){
  function fetchall($table, $where , $keys = null, $orderby = null ){
  	if( !is_null($keys) && !empty($keys)){ $row = ci()->db->select($keys);}
  	if( !is_null($orderby)){ $row = ci()->db->order_by( $orderby ); }
	$row = ci()->db->get_where($table,$where);
	$row = $row->result_array();
	   return $row;
   }
}

function capitalize( $str ){
	$str = strtolower( $str );
	$str = ucwords( $str );
	return $str;
	}	


/*** end drop down  function script ****/ 

if(!function_exists('getftcharray')){
  function getftcharray($table, $where, $name, $limit = null){
	  if( !is_null( $limit ) ){ ci()->db->limit( $limit );  }
	$row = ci()->db->get_where($table,$where);
	$row = $row->row_array();
	   if(!empty($row)){
	     return $row[$name];
	   }
  }
}


if(!function_exists('fetchrow')){
  function fetchrow($table, $where,$keys = null ){
  	if( !is_null($keys) && !empty($keys)){ $row = ci()->db->select($keys);}
	$row = ci()->db->get_where($table,$where);
	$row = $row->row_array();
	   return $row;
   }
}


if(!function_exists('profile_upload')){
	  
  function profile_upload($base64, $name = null ) 
  {
	if (!is_dir('uploads')) { mkdir('./uploads', 0777, true);}
    $img = imagecreatefromstring(base64_decode($base64));
    if ($img != false) 
	{
        $imageName = ( !is_null($name) ? $name : time() ) . '.jpg';
        $path = './uploads/'.$imageName;
        if (imagejpeg($img, $path)){
            return $imageName;
        }else{
            return false;
       }
    }else{ return false; }
  }
  
  
}


function countids($table,$where = null, $whereor = null,$whereorkey = null ){
		
		if(!is_null($where)){
			
		$query = ci()->db->where($where);
		
			if( !is_null($whereor)){ 
			$query = ci()->db->group_start();
			foreach($whereor as $row){ $query = ci()->db->or_where($whereorkey,$row ); }
			$query = ci()->db->group_end();
			}
			
		$query = ci()->db->get($table);
		}else{ $query = ci()->db->get($table);}
		$count = $query->num_rows();
		return ( $count > 0 ? $count : 0 );
		}

if(!function_exists('uploads')){		
function uploads($folder){
	return base_url().$folder.'/';
	}	
}

if(!function_exists('insertdata')){	
function insertdata($table,$dataarray){
	ci()->db->insert($table,$dataarray);
	return ci()->db->insert_id();
	}		
}




if(!function_exists('empty_table')){
	function empty_table( $table ){
    ci()->db->query("TRUNCATE " . $table);
    ci()->db->query("ALTER TABLE ".$table." AUTO_INCREMENT = 1");
    return true;
}
}

function admintable($page, $data = null){
         ci()->load->view( 'admin/include/header', $data );
	 ci()->load->view( 'admin/include/table/css', $data );
	 ci()->load->view( 'admin/include/menu-bar', $data );
	 ci()->load->view( 'admin/'.$page , $data );
//         ci()->load->view( 'admin/include/table/js', $data );
//	 ci()->load->view( 'admin/include/footer', $data );
}
function adminform($page, $data = null){
         ci()->load->view( 'admin/include/header', $data );
	 ci()->load->view( 'admin/include/form/css', $data );
	 ci()->load->view( 'admin/include/menu-bar', $data );
	 ci()->load->view( 'admin/'.$page , $data );
//         ci()->load->view( 'admin/include/form/js', $data );
//	 ci()->load->view( 'admin/include/footer', $data );
}
function dashboard($page, $data = null){
         ci()->load->view( 'admin/include/header', $data );
	 ci()->load->view( 'admin/include/css', $data );
	 ci()->load->view( 'admin/include/menu-bar', $data );
	 ci()->load->view(  'admin/'.$page , $data );
//         ci()->load->view( 'admin/include/js', $data );
//	 ci()->load->view( 'admin/include/footer', $data );
}

function seoUrl($string) {
	$string = strtolower($string);
	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	$string = preg_replace("/[\s-]+/", " ", $string);
	$string = preg_replace("/[\s_]/", "-", $string);
	return $string;
} 



function removeSeoUrl($string) {
 $string = preg_replace("/[\s-]+/", " ", $string);
 return $string;
} 


function notification()
{
	if(ci()->session->flashdata('error'))
	{?>
<div id="error" class="alert alert-danger alert-dismissible fade show text-center" role="alert"> <i class="mdi mdi-block-helper mr-2"></i> <?php echo ci()->session->flashdata('error')?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
<?php }
	elseif(ci()->session->flashdata('success'))
	{?>
<div id="success" class="alert alert-success alert-dismissible fade show text-center" role="alert"> <i class="mdi mdi-check-all mr-2"></i> <?php echo ci()->session->flashdata('success')?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
<?php }
	elseif(ci()->session->flashdata('warning'))
	{?>
<div id="warning" class="alert alert-warning alert-dismissible fade show text-center" role="alert"> <i class="mdi mdi-alert-outline mr-2"></i> <?php echo ci()->session->flashdata('warning')?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
<?php }
	elseif(ci()->session->flashdata('info'))
	{?>
<div id="info" class="alert alert-primary alert-dismissible fade show text-center" role="alert"> <i class="mdi mdi-bullseye-arrow mr-2"></i> <?php echo ci()->session->flashdata('info')?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
<?php }
}


if(!function_exists('errors'))
{
  function errors()
  { 
   $errors=ci()->session->flashdata('errors');
   if(!empty($errors)):
   ?>
<div class="alert alert-danger alert-dismissible" align="" style="width:100%;padding:5px;"> <a href="#" class="close" data-dismiss="alert" aria-label="close" style="right:0px;">&times;</a> <?php echo ci()->session->flashdata('errors');?> </div>
<?php endif; }
}


if(!function_exists('multipartUpld'))
{
   function multipartUpld($image,$path=false)
   {
	  $config['upload_path'] = 'uploads/doucment/'.$path;
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
	  $config['encrypt_name'] = true;
      ci()->load->library('upload', $config);
	  ci()->upload->initialize($config);
	  if(!ci()->upload->do_upload($image))
	  {
	    $error = array('error' => ci()->upload->display_errors());
	   // print_r($error);
		return false;
	   }
	   else
	   {
		$data =  ci()->upload->data();
		return $data;
	  }
   
   }
}

//   Not In Condition
   if(!function_exists('getAllwherenotin'))
{
   function getAllwherenotin( $table, $where = null,$keys = null ,$orderby = null, $inkey = null,$inlistarray = null ){ 

if(!is_null($keys)){
ci()->db->select($keys);
}

if(!is_null($orderby)){
ci()->db->order_by($orderby);
}


if(!is_null($inkey) && !is_null($inlistarray) ){
ci()->db->where_not_in($inkey, $inlistarray);
}

if(!is_null($where)){
ci()->db->where($where);
}

return ci()->db->get($table)->result_array();
}
}

function Pagination($base_url, $rows, $per_page)
{
    $config['base_url'] = $base_url;
    $config['total_rows'] = $rows;
    $config['per_page'] = $per_page;
    $config['reuse_query_string'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';            
    $config['prev_link'] = 'Previous';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next';
    $config['anchor_class'] = 'class="page-link" ';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    ci()->load->library("pagination");
    ci()->pagination->initialize($config);
    return ci()->pagination->create_links();
}

if(!function_exists('getWebp'))
{
   function getWebp($ext,$files,$path=false)
   {
	$explode=explode('.',$files);
	if($path)
	{
		$file='uploads/'.$path.'/'.$files;
	}
	else
	{
	$file='uploads/'.$files;
	}
        if($ext == 'png'){
          $image=  imagecreatefrompng($file);  
        }else{
         $image=  imagecreatefromjpeg($file); 
        }
	ob_start();
	imagejpeg($image,NULL,100);
	$cont=  ob_get_contents();
	ob_end_clean();
	imagedestroy($image);
	$content =  imagecreatefromstring($cont);
	if(!file_exists($explode[0].'.webp'))
	{
	 imagewebp($content,'uploads/'.$explode[0].'.webp');
	 return $explode[0].'.webp';
	 imagedestroy($content);
	}
   }
}