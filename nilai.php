<?php
require_once "method.php";
$nilai = new Nilai();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
	case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				$nilai->get_nilai($id);
			}
			else
			{
				$nilai->get_all_nilai();
			}
			break;
	case 'POST':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				$nilai->update_nilai($id);
			}
			else
			{
				$nilai->insert_nilai();
			}		
			break; 
	case 'DELETE':
		    $id=intval($_GET["id"]);
            $nilai->delete_nilai($id);
            break;
	default:
		// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
		break;
}




?>