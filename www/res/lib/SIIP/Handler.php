<?php
abstract class Handler {
  abstract protected static function GET($options);
  abstract protected static function POST($options);
  abstract protected static function PUT($options);
  abstract protected static function DELETE($options);

  public static function processRequestMethod($requestMethod, $options, $encoding = "JSON") {
    $response = null;
    switch($requestMethod) {
      case "GET":
        $response = static::GET($options);
        break;
      case "POST":
        $response = static::POST($options);
        break;
      case "PUT":
        $response = static::PUT($options);
        break;
      case "DELETE":
        $response = static::DELETE($options);
        break;
    }
    return $response;
  }
}
?>
