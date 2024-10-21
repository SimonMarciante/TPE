<?php
require_once('app/models/model.php');
class UserModel extends Model{
    public function construct(){
       parent::construct();
    }

    public function getUserByEmail($user){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE user = ?");
        $query->execute([$user]);

        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;
    }
}

