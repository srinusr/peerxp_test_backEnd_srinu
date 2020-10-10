<?php
require 'connection.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  $request = json_decode($postdata);

  $url = "https://desk.zoho.in/api/v1/tickets";
 
 $ch = curl_init ($url);
 curl_setopt ($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POST,1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Authorization: ca2e56a68d01e393c0e4c5aa5638729c',
  'orgId: 60001280952',
  'Accept:application/json',
  'Content-Type: application/json'
));
 curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 $response = curl_exec ($ch); 
 curl_close($ch);
 
 if($response){
  echo json_encode($response,true);
}
else{
    http_response_code(505);
}
  
}
