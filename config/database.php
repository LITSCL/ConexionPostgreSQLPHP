<?php
class Database {
    private static $servidor = "localhost";
	private static $usuario = "postgres";
	private static $clave = "root";
	private static $baseDeDatos = "dbconexionpostgresqlphp";
	private static $puerto = 5432;
	
	public static function conectar() {
	    try {
	        $db = new PDO("pgsql:host=" . Database::$servidor . ";port=" . Database::$puerto . ";dbname=" . Database::$baseDeDatos, Database::$usuario, Database::$clave);
	        return $db;
	    } catch (Exception $ex) {
	        die("Error: " . $ex->getMessage());
	    }
	}
}
?>