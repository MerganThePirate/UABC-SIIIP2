<?php
require_once(dirname(__DIR__)."/Database.php");
require_once(dirname(__DIR__)."/Handler.php");

Class Usuario extends Handler {
  /** Declare User Role Enum */
  public static $ROLES;
  /** Declare Campus Enum*/
  public static $CAMPUS;

  /** Get All Users */
  public static function getAllUsers() {
    /** TODO SQL */
    return null;
  }

  /** Get Users by Role */
  public static function getUsersByRole($role) {
    /** TODO SQL */
    return null;
  }

  /** Get User from ID */
  public static function getUser($user_id) {
    /** TODO SQL */
    return null;
  }

  /** Add new User */
  public static function postNewUser($name, $account, $password, $rol, $campus = null, $unidad = null) {
    /** TODO SQL */
    return null;
  }

  /** Modify existing User */
  public static function putUser($user_id, $options) {
    /** TODO SQL */
  public static function GET($options) {
    $user_id = $options["user_id"];
    if (is_numeric($user_id)) {
      /** /usuarios/ */
      return self::getUser($user_id);
    } else if ($user_id == "") {
      /** /usuarios/n */
      // Revisar que tenga permisos para revisar usuarios
      return self::getAllUsers();
    }
  }

  public static function POST($options) {
    $user_id = $options["user_id"];
    if (!is_numeric($user_id)) {
      return self::postNewUser(
        $_POST["name"],
        $_POST["email"],
        $_POST["role"],
        $_POST["campus"],
        $_POST["unit"]
      );
    }
    return null;
  }

  public static function PUT($a) {
    global $_PUT;

    return self::putUser(
      $_PUT["user_id"]??null,
      $_PUT["name"]??null,
      $_PUT["email"]??null,
      $_PUT["role"]??null,
      $_PUT["campus"]??null,
      $_PUT["unit"]??null
    );
  }

  public static function DELETE($a) {
    return ["code" => 501, "data" => "{}"];
  }

  public static function init() {
    /** User Role Manual Pseudo-ENUMS */
    self::$ROLES = (object) [
      "JEFE_DEPARTAMENTO" => 0,
      "RESPONSABLE_POSGRADOS" => 1,
      "PLANEACION" => 2,
      "COORDINADOR_GENERAL" => 3,
      "SRIA_GENERAL" => 4,
      "RESPONSABLE_CAMPUS" => 5,
      "OPI" => 6,
      "AUXILIAR_SNI" => 7,
      "AUXILIAR_PRODEP" => 8,
      "AUXILIAR_CA" => 9,
      "AUXILIAR_POSGRADOS" => 10,
      "COORDINADOR_UA" => 11,
      "AUXILIAR_OPI" => 12
    ];

    /** Campus Manual Pseudo-ENUMS */
    self::$CAMPUS = (object) [
      "MEXICALI" => 0,
      "TIJUANA" => 1,
      "ENSENADA" => 2
    ];
  }
}
Usuario::init();
?>
