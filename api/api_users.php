
<?php
require '../functions/functions.php';
$groups = new get();

$create_response = array(
    'status' => true,
    'message' => '',
    'data' => $groups->get_all_users()
);

header('Content-Type: application/json; charset=utf-8');
$response = json_encode($create_response);
echo $response;
?>