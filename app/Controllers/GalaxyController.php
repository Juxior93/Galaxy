<?php namespace App\Controllers;

class GalaxyController extends BaseController
{
	public function index()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Index').
				  view('Plantilla/footer');

		return $vistas;
    }
    
	public function Bulbo()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Bulbo').
				  view('Plantilla/footer');

		return $vistas;
	}
	
	public function Disco()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Disco').
				  view('Plantilla/footer');

		return $vistas;
	}
	
	public function Formacion()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Formacion').
				  view('Plantilla/footer');

		return $vistas;
	}

	public function Halo()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Halo').
				  view('Plantilla/footer');

		return $vistas;
	}
	
	public function Mitologia()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Galaxy/Mitologia').
				  view('Plantilla/footer');

		return $vistas;
    }
	//--------------------------------------------------------------------

}