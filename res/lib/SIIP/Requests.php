<?php
$_PUT = null;
$_DELETE = null;
(function() {
  parse_str(file_get_contents("php://input"), $data);
  if ($_SERVER['REQUEST_METHOD'] === "PUT") {
    $GLOBALS["_PUT"] = $data;
  } else {
    $GLOBALS["_DELETE"] = $data;
  }
})();
?>
