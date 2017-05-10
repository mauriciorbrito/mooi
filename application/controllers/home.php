<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('estructura_tema/cabecera.php');
        $this->load->view('estructura_tema/body.php');
        $this->load->library('menu.php',array('Inicio', 'Citas', 'Calendario', 'Configuración'));
        $data['menu_armado'] = $this->menu->construirMenu();
        $this->load->view('index.php',$data);
        $this->load->view('estructura_tema/pie.php');
    }
}
?>