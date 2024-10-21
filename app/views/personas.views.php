<?php
class personasViews {
    private $db;

    public $user = null;
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function showPersonas($personas) {
        // la vista define una nueva variable con la cantida de tareas
        $count = count($personas);

        require './templates/listasperson.phtml';
    }

    public function showListPersonas($personas) {
        // la vista define una nueva variable con la cantida de tareas
        $count = count($personas);

        // NOTA: el template va a poder acceder a todas las variables y constantes que tienen alcance en esta funcion
        require './templates/model.phtml';
    }

    public function showPersonasid($personas) {
        
        require './templates/detail_aerolinea.phtml';
    }

    public function showdetailPersona($persona, $aerolinea){
        require './templates/detail_persona.phtml';
    }

    public function showError($error) {
        require './templates/error.phtml';
    }

    public function showListaPersonas($personas, $aerolineas) {
        require './templates/lista_personas.phtml'; // Cargar la lista de personas
    }

    public function showEditPersona($persona, $aerolineas) {
        // Aca se carga una plantilla que incluye el formulario para editar una aerolinea
        require './templates/edit_personas.phtml';
    }
}
?>