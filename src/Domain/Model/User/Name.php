<?php

namespace App\Domain\Model\User;

class Name
{
	protected $first;
	protected $last;
	
	public function __construct(string $first, string $last)
	{
		$this->setFirst($first);
		$this->setLast($last);
	}
	
	public function get() : string
	{
		return $this->first . ' ' . $this->last;
	}
	
	public function setFirst(string $first)
	{
		if (!$first) {
			throw new \Exception('Parameter 1 must be non-empty string', 500);
		}
		
		$this->first = $first;
	}
	
	public function setLast(string $last)
	{
		if (!$last) {
			throw new \Exception('Parameter 2 must be non-empty string', 500);
		}
		
		$this->last = $last;
	}
}
