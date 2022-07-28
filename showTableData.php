<?php
require_once "method.php";

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Max-Age: 86400');    // cache for 1 day
  }

 // Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
exit(0);
}

// $scores = new scoresData();
// $request_method=$_SERVER["REQUEST_METHOD"];
// switch ($request_method) {
// 	case 'GET':
// 	  $scores->getScores();
// 	break;
// 	default:
// 		// Invalid Request Method
// 			header("HTTP/1.0 405 Method Not Allowed");
// 			break;
// 		break;
// }


$scores = new scoresData();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
	case 'GET':
			  $scores->getScores();
			break;
	case 'POST':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				$scores->update_scores($id);
			}
			else
			{
				$scores->insert_scores();
			}		
			break; 
	case 'DELETE':
		    $id=intval($_GET["id"]);
            $scores->deleteScores($id);
            break;
	default:
		// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
		break;
}
?>