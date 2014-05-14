<?php

class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->offers = $this->entityManager->getRepository('Offer')->findAll();
	}
}
