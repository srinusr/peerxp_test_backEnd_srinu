<?php	
    require 'connection.php';
    $postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata);
    $name = $request->userid;
    $pswd= $request->password;
    if($request->userid == '' || $request->password == '')
    {
        return http_response_code(400);
    }	 
	else{
		$send = login($name,$pswd,$con);
		if($send == 1){
            echo json_encode($name);
				
        }
        else{
            http_response_code(505);
        }
        
    }
    
}
	
	
	function login($name,$pswd,$conn) 
	{
        $tab = "users";
		$sql = "SELECT * FROM $tab";
        $res = mysqli_query($conn,$sql);
        
		while($r=mysqli_fetch_assoc($res))
		{
			if($r['email'] == $name && $r['password']==$pswd)
			{
					return 1;
			}
		}
    } 
?>