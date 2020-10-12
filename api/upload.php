$postdata = file_get_contents("php://input");

if($_FILES['file'])
{
    $file_name = $_FILES["file"]['name'];
    $request = curl_init('https://desk.zoho.in/api/v1/uploads');

// send a file
curl_setopt($request, CURLOPT_POST, true);
// $csv_file = new CURLFile($file_name,'image/*');
$attributes = array('name' => $file_name, 'parent' => array('id' => '0'));
curl_setopt(
    $request, 
    CURLOPT_POSTFIELDS,$_FILES["file"]);

// output the response
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
'Authorization: ca2e56a68d01e393c0e4c5aa5638729c',
'orgId: 60001280952',
'Content-Type: multipart/form-data'));
echo curl_exec($request);

// close the session
curl_close($request);
http_response_code(505);
