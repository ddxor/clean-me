<?php

use PHPUnit\Framework\TestCase;
use App\Domain\Model\User;
use App\Domain\Model\User\Id as UserId;
use App\Domain\Model\User\Name as UserName;

final class TestUserUpdate extends TestCase
{
	public function testUpdateIdWithValidValue()
	{
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$newUserId = rand(0, 50);
		
		$user->setId(new UserId($newUserId));
		
		$this->assertEquals($user->getId(), $newUserId);
	}
	
	public function testUpdateNameWithValidValue()
	{
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$user->setName(new UserName('John', 'Doe'));
		
		$this->assertEquals($user->getName(), 'John Doe');
	}
	
	public function testUpdateAcceptsPetsWithValidValue()
	{
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$user->setAcceptsPets(false);
		
		$this->assertEquals($user->getAcceptsPets(), false);
	}
	
	public function testCantUpdateIdWithInvalidValue()
	{
		$this->expectException(TypeError::class);
		
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$user->setId('James');
	}
	
	public function testCantUpdateNameWithInvalidValue()
	{
		$this->expectException(TypeError::class);
		
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$user->setName(new UserId(5));
	}
	
	public function testCantUpdateAcceptsPetsWithInvalidValue()
	{
		$this->expectException(InvalidArgumentException::class);
		
		$user = new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		);
		
		$user->setAcceptsPets(50);
	}
}
