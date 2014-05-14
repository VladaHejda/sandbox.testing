<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="book")
 */
class Book extends \Nette\Object
{

	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/** @Column(type="string") **/
	protected $name;

	/** @Column(type="string") **/
	protected $author;

	/** @Column(type="string") **/
	protected $publisher;

	/** @Column(type="integer") **/
	protected $year;

	/**
	 * @OneToMany(targetEntity="Offer", mappedBy="book")
	 * @var Offer[]
	 */
	protected $offers;


	public function __construct()
	{
		$this->offers = new ArrayCollection();
	}


	public function getId()
	{
		return $this->id;
	}


	public function getAuthor()
	{
		return $this->author;
	}


	public function getName()
	{
		return $this->name;
	}


	public function getPublisher()
	{
		return $this->publisher;
	}


	public function getYear()
	{
		return $this->year;
	}


	public function getOffers()
	{
		$this->offers = new ArrayCollection();
	}


	public function assignToOffer(Offer $offer)
	{
		$this->offers[] = $offer;
	}
}
