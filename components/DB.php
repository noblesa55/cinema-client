<?php
class DB {
  private static $pdo;

  public static function connect() {
    if (!static::$pdo) {
      $paramsPath = CONFIG . 'db_config.php';
      include_once($paramsPath);
      $dsn = "mysql:host={$db_params['host']};dbname={$db_params['dbname']};charset={$db_params['charset']}";
      $opt = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
      static::$pdo = new PDO($dsn, $db_params['user'], $db_params['password'], $opt);
      static::$pdo->exec('set names ' . $db_params['charset']);
    }

    return static::$pdo;
  }
  
}