<?php

namespace EncuestaMedica\amigableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	var $medicos = array(
	  array("codigo"=>1,"nombre"=>"Alejandro Costa"),
	  array("codigo"=>2,"nombre"=>"Aurelio Moreno"),
	  array("codigo"=>3,"nombre"=>"Alberto Gonzalez")
	);
    public function indexAction($name)
    {
        return $this->render('EncuestaMedicaamigableBundle:Default:index.html.twig', array('name' => $name));
    }
	    public function medicosAction()
    {
        return $this->render('EncuestaMedicaamigableBundle:Default:medicos.html.twig', array("medicos"=>$this->medicos));
    }
		public function medicoAction($codigo)
    {
        return $this->render('EncuestaMedicaamigableBundle:Default:medico.html.twig', array("medico"=>$this->medicos[$codigo-1]));
    }
}