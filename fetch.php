<?php
//fetch from live
$inputs_text = $_POST['inputs'];
$url = "https://www.freedetector.ai/api/content_detector/";
$data = json_encode( array( "text"=> $inputs_text ) );
$token = "cf8a7f5ad1a8d90195556676a6a741a1"; //YOUR-TOKEN Generate Token?
$headers = array( "Accept: application/json", "Authorization: $token" );
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
echo curl_exec($curl);
//$resp = json_decode(curl_exec($curl));
/*if($resp->success == true)
{
	echo $resp->score;
}
else
{
	echo $resp->message; //error message
}*/
curl_close($curl);
?>