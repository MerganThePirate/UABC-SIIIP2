<?php
/** Create $_PUT & $_DELETE Arrays */
require_once(__DIR__."/Requests.php");

/** Evaluate URI */
/** /usuarios/n */
preg_match('#(usuarios)/([0-9]*)#', $_SERVER["REQUEST_URI"], $match);

/** Inspect URI first, then inspect Request Method and perform instructions */
switch($match[1]) {
  case "usuarios":
    switch($_SERVER['REQUEST_METHOD']) {
      case "GET":
        /** User Handler */
        require(__DIR__."/MAS/Usuario.php");
        /** One User */
        if (is_numeric($match[2])) {
          Usuario::getUser($match[2]);
        /** Else All Users */
        } else {
          Usuario::getAllUsers();
        }
        break;
      case "POST":
      case "PUT":
      case "DELETE":
    }
    break;
}
?>
