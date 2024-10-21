<?php
class aerolineasView {
    private $db;

    public $user = null;
    
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function showAerolineas($aerolineas) {
        // la vista define una nueva variable con la cantida de tareas
        $count = count($aerolineas);

        require './templates/listasaero.phtml';
    }

    public function showListAerolineas($aerolineas, $personas) {
        $count = count($aerolineas);
        
        require './templates/lista.phtml';
    }

    public function showdetailAerolinea($aerolinea, $personas): void {
        
        require './templates/detail_aerolinea.phtml';
    }

    public function showError($error) {
        require './templates/error.phtml';
    }
    
    public function showListaAerolineas($aerolineas) {
        require './templates/lista_aerolinea.phtml';
    }

    public function showEditAerolinea($aerolinea) {
        // Aca se carga una plantilla que incluye el formulario para editar una aerolinea
        require './templates/edit_aerolinea.phtml';
    }

    
}
?>