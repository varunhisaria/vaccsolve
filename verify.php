<?php 
	require('libs/helpers/simple_html_dom.php');

	$baseurl = "http://ngo.india.gov.in/ngo_search1_ngo.php";
	$uniqueid = str_replace("/", "%2F", "BR/2009/0000132");

	//$html = file_get_html($baseurl+);
	if(!function_exists('curl_init'))
		echo "CURL not installed";
	else{
		$ch = curl_init();
		$timeout=5;
		//echo $uniqueid;
		//edit_ngo=&ngo_black=&ngo_name=&uniqueid=BR%2F2009%2F0000132&t_state=0&t_dist_new3=0&sector_key=0&search=search
		//$uniqueid = $_POST['uniqueid'];
		// Bypass hack
		$data = array('t_state'=>0,'t_dist_new3'=>0,'sector_key'=>0,'search'=>'search','uniqueid' => $uniqueid);
		$data=http_build_query($data);
		$data = str_replace("%252F", "%2F", $data);
		curl_setopt($ch,CURLOPT_URL,$baseurl); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$html = str_get_html(curl_exec($ch));
		//echo $html;
		$main_table = $html->find('#frm_griev table',1);

		//$main_table = $html->find("#frm_griev");	
		//$data_table = $main_table->find("table",1);
		print_r($main_table);
		curl_close($ch);

	}
?>

BR%2F2009%2F0000132