<?php

/**
 * @Entity @Table(name="offer")
 */
class Offer extends \Nette\Object
{

	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	/** @Column(type="string") */
	protected $name;

	/** @Column(type="string") */
	protected $email;

	/** @Column(type="float") */
	protected $price;

	/**
	 * @ManyToOne(targetEntity="Book", inversedBy="offers")
	 * @var Book
	 */
	protected $book;


	public function getId()
	{
		return $this->id;
	}


	public function getName()
	{
		return $this->name;
	}


	public function getEmail()
	{
		return $this->email;
	}


	public function getPrice()
	{
		return $this->price;
	}


	public function getBook()
	{
		return $this->book;
	}


	public function setName($name)
	{
		$this->name = $name;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}


	public function setPrice($price)
	{
		$this->price = $price;
	}


	public function assignToBook(Book $book)
	{
		$book->assignToOffer($this);
		$this->book = $book;
	}
}
