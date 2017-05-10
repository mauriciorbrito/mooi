<?php
/**
 * Created by Mauricio Brito.
 * User: mauricio.brito
 * Date: 10/5/2017
 * Time: 15:40
 *
 * ARCHIVO QUE PRESENTA EL MENU SUPERIOR DEL SISTEMA
 * SERÁ DINAMICO SEGUN HAYA INCIADO SESION O NO
 *
 */
if (! defined('BASEPATH')) exit('No direct script access allowed');

class menu
{
    private $arr_menu;

    public function __construct($arr)
    {
        $this->arr_menu = $arr;
    }

    public function construirMenu ()
    {
        $ret_menu = "<div><table width='100%'><tr>";
        foreach ($this->arr_menu as $opcion)
        {
            $ret_menu .= "<td width='25%'>".$opcion."</td>";
        }
        $ret_menu .= "</tr></table></div>";
        return $ret_menu;
    }
}
?>