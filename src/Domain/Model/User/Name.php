<?php

namespace App\Domain\Model\User;

class Name
{
	protected $prefix;
	protected $first;
	protected $last;
	protected $validPrefixes = [
		'Mr',
		'Mrs',
		'Miss',
		'Master',
		'Dr',
	];
	
	public function __construct($prefix, $first, $last)
	{
		$this->setPrefix($prefix);
		$this->setFirst($first);
		$this->setLast($last);
	}
	
	public function get() : string
	{
		return $this->prefix . ' ' . $this->first . ' ' . $this->last;
	}
	
	public function setPrefix($prefix)
	{
		if (!is_string($prefix)) {
			throw new \InvalidArgumentException('1st parameter must be of type string. ' . gettype($prefix) . ' given.');
		}
		
		if (!$prefix) {
			throw new \UnexpectedValueException('Parameter 1 must be non-empty string.');
		}
		
		if (!in_array($prefix, $this->validPrefixes)) {
			throw new \UnexpectedValueException('Prefix is not a valid value.');
		}
		
		$this->prefix = $prefix;
	}
	
	public function setFirst($first)
	{
		if (!is_string($first)) {
			throw new \InvalidArgumentException('1st parameter must be of type string. ' . gettype($first) . ' given.');
		}
		
		if (!$first) {
			throw new \UnexpectedValueException('Parameter 1 must be non-empty string.');
		}
		
		$this->first = $first;
	}
	
	public function setLast($last)
	{
		if (!is_string($last)) {
			throw new \InvalidArgumentException('1st parameter must be of type string. ' . gettype($last) . ' given.');
		}
		
		if (!$last) {
			throw new \UnexpectedValueException('Parameter 2 must be non-empty string.');
		}
		
		$this->last = $last;
	}
}
