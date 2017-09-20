<?php

namespace App\Domain\Model;

class User
{
	/**
	 * @var User\Id
	 */
	protected $id;
	
	/**
	 * @var User\Name
	 */
	protected $name;
	
	/**
	 * @var bool
	 */
	protected $acceptsPets;
	
	public function __construct(User\Id $id, User\Name $name, $acceptsPets)
	{
		$this->setId($id);
		$this->setName($name);
		$this->setAcceptsPets($acceptsPets);
	}
	
	public function getId() : int
	{
		return $this->id->get();
	}
	
	public function getName() : string
	{
		return $this->name->get();
	}
	
	public function getAcceptsPets() : bool
	{
		return $this->acceptsPets;
	}
	
	public function setId(User\Id $id)
	{
		$this->id = $id;
	}
	
	public function setName(User\Name $name)
	{
		$this->name = $name;
	}
	
	public function setAcceptsPets($acceptsPets)
	{
		if (!is_bool($acceptsPets)) {
			throw new \InvalidArgumentException('3rd parameter must be of type boolean. ' . gettype($acceptsPets) . ' given.');
		}
		
		$this->acceptsPets = $acceptsPets;
	}
}
