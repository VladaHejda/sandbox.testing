<?php

class Doctrine2Extension extends Nette\DI\CompilerExtension
{

	public function loadConfiguration()
	{
		$config = $this->getConfig();

		$builder = $this->containerBuilder;

		$builder->addDefinition('doctrineSetup')
			->setFactory('Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration',
				[[$config['modelDir']], $this->compiler->config['parameters']['debugMode']]);

		$builder->addDefinition('entityManager')
			->setFactory('Doctrine\ORM\EntityManager::create', [$config['connection'], '@doctrineSetup']);
	}
}
