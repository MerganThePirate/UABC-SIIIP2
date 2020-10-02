<?php

Class Usuario {
  /** Declare User Role Enum */
  public static $ROLES;
  /** Declare Campus Enum*/
  public static $CAMPUS;

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
      "COORDINADOR_UA" => 11
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
