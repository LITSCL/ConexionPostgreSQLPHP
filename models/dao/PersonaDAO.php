<?php 
if (file_exists("config/database.php")) {
	require_once "config/database.php"; 
}		
else {
	require_once "../config/database.php"; 
}
?>

<?php 
class PersonaDAO {
    public $db;
    
    public function __construct() {
        $this->db = Database::conectar(); //Cuando se crea una instancia de la capa DAO, el programa se conecta a la base de datos.
    }
    
    public function save(Persona $p) {
        $nombre = $p->getNombre();
        $edad = $p->getEdad();

        $sql = "INSERT INTO persona (nombre, edad) VALUES('$nombre', $edad)"; //No se debe entregar el ID.
        
        $query = $this->db->prepare($sql);
                    
        try {
            $query->execute();
        } catch (Exception $ex) {
            $query = false;
        }
        return $query;
    }
}
?>