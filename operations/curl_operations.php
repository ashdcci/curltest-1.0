<?php
$page = $_POST['page'];

switch($page){
	case 'fetch_all':{
		
$curl_handle=curl_init();

$data = array('email'=>'admin@gmail.com','password'=>'123456','_to00ken'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f');

curl_setopt($curl_handle,CURLOPT_URL,'http://desiltoe.com/laravel_api/api/v1/url'); 
$header = array('Content-type: text/xml;charset=\"utf-8\"');
//curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl_handle,CURLOPT_POST, count($data));
curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);


  $buffer = curl_exec($curl_handle);
  //$resp = curl_exec($curl_handle);

  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url.<p>";
  }
  else{
  //	print_r($data);
     // print $buffer;
  }
//api/todo?email=admin@gmail.com&password=123456&token=BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f
  break;
	}
	 case 'insert':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/store';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
			'desc'=>mysql_escape_string($_POST['desc']),'url'=>mysql_escape_string($_POST['url']));
		// $main_param = '?email=admin@gmail.com&password=123456&_token=BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f';
		// $extra_param = '&desc='.mysql_escape_string($_POST['desc']).'&url='.mysql_escape_string($_POST['url']).'';
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  //curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
		  

curl_setopt($curl_handle,CURLOPT_POST, count($data));
curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		      print $buffer;
		  }
	 	break;
	 }
	 case 'fetch_single':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/show';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
			'id'=>mysql_escape_string($_POST['data']));
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, count($data));
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		     // print $buffer;
		  }
	 	break;
	 }
	 case 'delete':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/destroy';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
			'id'=>mysql_escape_string($_POST['data']));
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, count($data));
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		     // print $buffer;
		  }
	 	break;
	 }
	 case 'delete_all':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/destroy_all';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f');
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, count($data));
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		    //  print $buffer;
		  }
	 	break;
	 }
	  case 'update':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/update';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
			'desc'=>mysql_escape_string($_POST['desc']),'url'=>mysql_escape_string($_POST['url']),'id'=>$_POST['id']);
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, count($data));
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		    //  print $buffer;
		  }
	 	break;
	 }


	 case 'get_search_parameter':{
	 	$curl_handle=curl_init();
		$url = 'http://desiltoe.com/laravel_api/api/v1/get_search_parameter';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
			'prod_name'=>mysql_escape_string($_POST['prod_name']),'intCatId'=>$_POST['intCatId'],'price'=>$_POST['price'],
			'size'=>$_POST['size'],'style'=>$_POST['style'],'order'=>$_POST['order']);
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, count($data));
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		    //  print $buffer;
		  }
	 	break;
	 }
	 case 'get_file':{
	 	
	 	$curl_handle=curl_init();
	 	
	 	$header = array('Content-Type: multipart/form-data');
	 	$tmpfile = $_FILES['file']['tmp_name'];
		$filename = basename($_FILES['file']['name']);
		$url = 'http://desiltoe.com/laravel_api/api/v1/get_file';
		$data = array('email'=>'admin@gmail.com','password'=>'123456','_token'=>'BrQYZS8Na8CdjnyfiXUrq35KSnT9x4f',
		 'file' =>  curl_file_create($tmpfile, $_FILES['file']['type'], $filename));
		
		  curl_setopt($curl_handle,CURLOPT_URL,$url);
		  curl_setopt($curl_handle,CURLOPT_POST, 1);
		  curl_setopt($curl_handle,CURLOPT_POSTFIELDS, $data);
		  $buffer = curl_exec($curl_handle);

		  curl_close($curl_handle);
		  if (empty($buffer)){
		      print "Nothing returned from url.<p>";
		  }
		  else{
		   //  echo json_encode(array($buffer));
		  	print $buffer;
		  }
	 	break;
	 }
}