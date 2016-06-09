<?php
namespace AppBundle\Command;


use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Symfony\Component\Filesystem\Filesystem;

class CargaInicialCommand extends ContainerAwareCommand{

	protected function configure(){
		$this
			->setName('carga:inicial')
			->setDescription('Proceso para la carga inicial de datos del sistema');
		
	}
	
	protected function execute(	InputInterface $input,	OutputInterface $output	)
	{
		$output->writeln('Inicia proceso ..');
		$output->writeln('Inicia proceso de carga de rangos ..');
		$this->cargarRangos($output);
		$output->writeln('Inicia proceso de carga de categorias ..');
		$this->cargarCategorias($output);
		$output->writeln('Inicia proceso de carga de obras ..');
		$this->cargarObras($output);
		$output->writeln('Inicia proceso de carga de conceptos ..');
		$this->cargarConceptos($output);
		$output->writeln('Inicia proceso de carga de conceptos obra ..');
		$this->cargarConceptosObra($output);

		$output->writeln('Fin');
	}

	protected function cargarObras( OutputInterface $output )
	{
		$kernel = $this->getContainer()->get('kernel');
		$path = $kernel->locateResource('@AppBundle/Resources/doc/obra');
		
		try{
			$res = $this->getContainer()->get('importacion_service')->cargaInicialDeObrasCSV($path);
			
			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}

	protected function cargarCategorias( OutputInterface $output )
	{
		$kernel = $this->getContainer()->get('kernel');
		$path = $kernel->locateResource('@AppBundle/Resources/doc/categoria');
		
		try{
			$res = $this->getContainer()->get('importacion_service')->cargaInicialDeCategoriasCSV($path);
			
			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}

	protected function cargarConceptosObra( OutputInterface $output )
	{
		$kernel = $this->getContainer()->get('kernel');
		$path = $kernel->locateResource('@AppBundle/Resources/doc/item_boleta');
		
		try{
			$res = $this->getContainer()->get('importacion_service')->cargaInicialDeRelacionConceptosObrasCSV($path);
			
			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}


	protected function cargarConceptos( OutputInterface $output )
	{
		$kernel = $this->getContainer()->get('kernel');
		$path = $kernel->locateResource('@AppBundle/Resources/doc/concepto');
		
		try{
			$res = $this->getContainer()->get('importacion_service')->cargaInicialDeConceptosCSV($path);
			
			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}

	protected function cargarRangos( OutputInterface $output )
	{
		$kernel = $this->getContainer()->get('kernel');
		$path = $kernel->locateResource('@AppBundle/Resources/doc/rango');

		try{
			$res = $this->getContainer()->get('importacion_service')->cargaInicialDeRangosCSV($path);

			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}

}
