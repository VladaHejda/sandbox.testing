<?php

abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/** @var \Doctrine\ORM\EntityManager */
	protected $entityManager;


	public function injectEntityManager(\Doctrine\ORM\EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}

}
