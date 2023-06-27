<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Inicio extends CI_Controller 
{ // El nombre del controlador debe comenzar con mayúscula.


	public function index()
	{

		

		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'publicidad' => true,
			'content' => '');


		
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);

		


		$datos_generales['content'] = $this->load->view('base', $datos_generales, false);




	
	
		$datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
		
	}

	public function mapa()
	{
		
		

		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'publicidad' => true,
			'content' => '');


		
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);



		$datos_generales['mapa'] = $this->load->view('paginas/mapa', $datos_generales, false);


	
	
		$datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function clima()
	{
		
		

		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'body' => null
		
		);


		
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);



		$datos_generales['clima'] = $this->load->view('paginas/clima', $datos_generales, false);


	
	
		$datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function dolarhoy()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);


		
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);



		$datos_generales['dolarhoy'] = $this->load->view('paginas/dolarhoy', $datos_generales, false);


	
	
		$datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
	}
	public function conexion()
	{
		
		 $this->load->view('paginas/conexion', false);
	}
	public function salir()
	{
		
		 $this->load->view('paginas/salir', false);
	}
	
	public function post()
	{
		$pagina = $this->uri->segment(3);
		$filename = './application/views/paginas/'.$pagina.'.php';

		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'numeracion' => $pagina,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		





		$datos_generales['cuerpo'] = $this->load->view('paginas/noticias/'.$pagina, $datos_generales, false);

	                
		
		//$this->load->view('paginas/post', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
	}


	public function login()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/login', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
	}
	public function registro()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/registro', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
	}

	public function registrado()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/registrado', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
	}
	public function loguear()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/loguear', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function formulario()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/formulario', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}

	public function enviarf()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		 $this->load->view('paginas/enviarf', false);

		 $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}

	
	public function ciencia()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/ciencias', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function salud()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/salud', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function tecno()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/tecno', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function curiosidades()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/curiosidades', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function naturaleza()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/naturaleza', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function mascotas()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/mascotas', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function videos()
	{
		$datos_generales = array(
			'titulo' => 'MuyInteresante.es. Innovación, Tecno, Ciencia, Cultura, Salud',
			'fecha' => date('d/m/Y'),
			'año' => date('Y'),
			'content' => '',
			'publicidad' => true,
			'body' => null
		
		);
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
		
		$this->load->view('paginas/videos', false);

	    $datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
		
	}
	public function seg()
    {
	
        $pags = $this->uri->segment(3);
        //$this->dat_gnrles['fecha'];
		$datos_generales['header'] = $this->load->view('paginas/header', $datos_generales, false);
        
		$this->datos_generales['body'] = $this->load->view('paginas/'.$pags,$this->datos_generales,true);

      

		
		$datos_generales['footer'] = $this->load->view('paginas/footer', false, false);
    }
}

