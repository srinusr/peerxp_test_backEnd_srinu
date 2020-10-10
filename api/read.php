<?php
/**
 * Returns the list of policies.
 */
require 'connection.php';
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,"https://desk.zoho.in/api/v1/tickets");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Authorization: ca2e56a68d01e393c0e4c5aa5638729c',
          'orgId: 60001280952'
      ));

      $server_output = curl_exec($ch);
      curl_close($ch);
      if($server_output){
        echo json_encode($server_output,true);
      }
    else{
      echo "alskdjf";
        http_response_code(505);
    }
?>