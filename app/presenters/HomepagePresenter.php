<?php

use Nette\Application\UI\Form;

class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->offers = $this->entityManager->getRepository('Offer')->findAll();
	}


	public function createComponentAddOffer()
	{
		$form = new Form;
		$form->addText('name', 'Vaše jméno:')
			->setRequired('Jméno je povinné.');
		$form->addText('email', 'E-mail:')
			->setRequired('Email je povinný.')
			->addRule(Form::EMAIL, 'Zadej validní email.');
		$form->addText('price', 'Vaše nabídka (Kč):')
			->setRequired('Cena je povinná.')
			->addRule(Form::RANGE, 'Zadej číslo.', [0, NULL]);

		$form->addSubmit('send', 'Nabídnout');

		$form->onSuccess[] = $this->addOffer;

		return $form;
	}


	public function addOffer(Form $form)
	{
		$values = $form->values;

		$offer = new Offer;
		$offer->setName($values->name);
		$offer->setEmail($values->email);
		$offer->setPrice($values->price);
		$this->entityManager->persist($offer);
		$this->entityManager->flush();

		$this->flashMessage("Nabídka přidána.");
		$this->redirect('this');
	}
}
