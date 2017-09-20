<?php

namespace App\Domain\Model\User;

class Id
{
	/**
	 * @var int
	 */
	protected $id;
	
	public function __construct($id)
	{
		$this->set($id);
	}
	
	public function get() : int
	{
		return $this->id;
	}
	
	/**
	 * @todo Improve validation here. E.g. Check this id is within our expected range of values,
	 *		 or that if we're creating a new db entity, that it's not a duplicate.
	 *
	 */
	public function set($id)
	{
		if (!is_int($id)) {
			throw new \InvalidArgumentException('1st parameter must be of type integer. ' . gettype($id) . ' given.');
		}
		
		$this->id = $id;
	}
}
