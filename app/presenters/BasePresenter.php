<?php

abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/** @var \Doctrine\ORM\EntityManager */
	protected $entityManager;


	protected function injectEntityManager(\Doctrine\ORM\EntityManager $entityManager)
	{
	}

}
