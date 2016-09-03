<?php

echo 'hello world';

	$page_access_token = 'bisFhuKkwEDdclB1HMknObjioTTBLZBfPdIzbCmxOulY6nwE04OZCjUOeXIYvQtEkB07gzxJWeedF5BQ7ZA8X3SUg6iWx0ZB9FZCNN3YCVVGqwmQgoZAHuOQeDeKPAZBpYNyfgw9kBPNEZD';
	$page_id = '316541605343830';
	$data['picture'] = "https://quoteoftheday.co.in/img/logo.png";
	$data['link'] = "http://www.example.com/";
	$data['message'] = "Your message";
	$data['caption'] = "Caption";
	$data['description'] = "Description";
	$data['access_token'] = $page_access_token;
	$post_url = 'https://graph.facebook.com/'.$page_id.'/feed';
	
	
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $post_url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$return = curl_exec($ch);
	curl_close($ch);
	
	print_r($return);

?>
