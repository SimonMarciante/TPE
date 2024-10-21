<?php
require_once('app/models/model.php');
    class personasModels extends Model{
        public function __construct(){
           parent::__construct();
        }
        public function getPersonas(){
            //Ejecuto la consulta
            $query = $this->db->prepare('SELECT * FROM persona');
            $query->execute();

            //Obtengo los datos en un arreglo de objetos
            $personas = $query->fetchAll(PDO::FETCH_OBJ); 
    
            return $personas;
        }

        public function getPersonasId($id_aerolinea) {
            $query = $this->db->prepare('SELECT * FROM persona WHERE id_aerolinea = ?');
            $query->execute([$id_aerolinea]);

            $persona = $query->fetchAll(PDO::FETCH_OBJ); 
            return $persona;
        }

        public function getPersona($id_persona) {
            $query = $this->db->prepare('SELECT * FROM persona WHERE id_persona = ?');
            $query->execute([$id_persona]);

            $persona = $query->fetch(PDO::FETCH_OBJ); 
            
            return $persona;
        }
    
        public function getAllPersonas(){
            $query = $this->db->prepare('SELECT * FROM persona');
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);
        }


        public function insertPersona($nombre, $edad, $cantidad, $destino, $id_aerolinea) {
            $query = $this->db->prepare('INSERT INTO persona(Nombre, edad, Cantidad, Destino, id_aerolinea) VALUES (?, ?, ?, ?, ?)');
            $query->execute([$nombre, $edad, $cantidad, $destino, $id_aerolinea]);
            return $this->db->lastInsertId();
        }

        public function erasePerson($id_persona){
            $query = $this->db->prepare('DELETE FROM persona WHERE id_persona = ?');
            $query->execute([$id_persona]);
            
        }

        public function updatePersona($nombre, $edad, $cantidad, $destino, $id_aerolinea,$id_persona){
            $query = $this->db->prepare ('UPDATE persona SET Nombre = ?, edad = ?, Cantidad = ?, id_aerolinea = ?, Destino = ? WHERE id_persona = ?');
            $query->execute([$nombre, $edad, $cantidad, $id_aerolinea, $destino, $id_persona]);
        
        }

        public function getAerolineaById($id) {
            $query = $this->db->prepare('SELECT * FROM aerolinea WHERE id = ?');
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_OBJ); // Devuelve la aerolinea como objeto
        }
    }


?>