<?php 
	
	if(isset($_POST['uniqueid']) && isset($_POST['verify_ngo'])){
		verify_ngo($_POST['uniqueid']);
	}
	
	function verify_ngo($uniqueid){
		require('libs/helpers/simple_html_dom.php');
		$baseurl = "http://ngo.india.gov.in/ngo_search1_ngo.php";
		$uniqueid = str_replace("/", "%2F", $_POST['uniqueid']);

		if(!function_exists('curl_init'))
			echo "CURL not installed";
		else{
			$ch = curl_init();
			$timeout=5;
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
			//echo gettype($html);
			//echo $html;
			$main_table = $html->find('#frm_griev');
			$data_table=str_get_html($main_table[0])->find('table',4)->plaintext;
			curl_close($ch);
			if(strpos(strtolower($data_table), 'B'))
				echo "Found";
			else
				echo "Not Found";
			}
	}
	
?>
