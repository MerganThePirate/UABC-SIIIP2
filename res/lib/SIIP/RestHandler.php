<?php
/** Create $_PUT & $_DELETE Arrays */
require_once(__DIR__."/Requests.php");
header('Content-type: application/json; charset=utf-8');

function sendResponse($code, $data) {
  http_response_code($code);
  echo $data;
}

$response = ["code" => "404", "data" => "{}"];
/** Evaluate URI */
/** /usuarios/n */
if (preg_match('#/(usuarios)/([0-9]*)$#', $_SERVER["REQUEST_URI"], $match)) {
  require(__DIR__."/MAS/Usuario.php");
  $response = Usuario::processRequestMethod($_SERVER['REQUEST_METHOD'],
    [
      "URI" => $match[0],
      "user_id" => $match[2]
    ]
  );
}
sendResponse($response["code"], $response["data"]);
?>
