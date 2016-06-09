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

class ActualizaIdsConceptosCommand extends ContainerAwareCommand{

	protected function configure(){
		$this
			->setName('actualizacion:conceptos')
			->setDescription('Proceso de actualización de los ids de los conceptos');


	}
	
	protected function execute(	InputInterface $input,	OutputInterface $output	)
	{
		$output->writeln('Advertencia: Es necesario antes cambiar el ambiente BUI en el parameters.yml');
		$output->writeln('Inicia proceso de actualización..');
		$this->actualizar($output);
		$output->writeln('Fin');
	}

	protected function actualizar( OutputInterface $output )
	{
		try{
			$res = $this->getContainer()->get('bui_service')->actualizarIdsConceptos();
			
			if($res == true)
				$output->writeln('Carga realizada con exito!!!');

		}catch (Exception $e){
			$output->writeln($e->getMessage());
		}
	}

}
