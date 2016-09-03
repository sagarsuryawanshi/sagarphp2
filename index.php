<?php

echo 'hello world';

	$page_access_token = 'EAACEdEose0cBAD3fL6BHvZAeKPQozartkz72hHAv985KMs06bFVXf9XIj0Xanvtr4iq8rSrGv42JnSwaEjAfT2mGK5NZBkPKq7mugUvlc6VPv3Ckp0Krl66dBkrH4WaAI9YxN6ZBI0Pr95IZACWeMUoMqWtgqZBVTX5p4SYPAJ9hgFOoOOTuv';
	$page_id = '316541605343830';
	//$data['picture'] = "https://quoteoftheday.co.in/img/logo.png";
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
