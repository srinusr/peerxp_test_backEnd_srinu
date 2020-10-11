<?php
require 'connection.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://desk.zoho.in/api/v1/uploads");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: ca2e56a68d01e393c0e4c5aa5638729c',
    'orgId: 60001280952',
    'Content-type: multipart/form-data'
  ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close ($ch);
if($server_output){
  echo json_encode($server_output);
}
else{
  http_response_code(505);
}

}
?>