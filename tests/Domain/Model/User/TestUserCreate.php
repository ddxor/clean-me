<?php

use PHPUnit\Framework\TestCase;
use App\Domain\Model\User;
use App\Domain\Model\User\Id as UserId;
use App\Domain\Model\User\Name as UserName;

final class TestUserCreate extends TestCase
{
	public function testCanBeCreatedWithValidValues()
	{
		$this->assertInstanceOf(
			User::class,
			(new User(
				new UserId(rand(0, 50)),
				new UserName('James', 'Anslow'),
				$acceptsPets = true
			))
		);
	}
	
	public function testCantBeCreatedWithInvalidId()
	{
		$this->expectException(TypeError::class);
		
		(new User(
			'15',
			new UserName('James', 'Anslow'),
			$acceptsPets = true
		));
	}
	
	public function testCantBeCreatedWithInvalidName()
	{
		$this->expectException(TypeError::class);
		
		(new User(
			new UserId(rand(0, 50)),
			'James Anslow',
			$acceptsPets = true
		));
	}
	
	public function testCantBeCreatedWithInvalidPetsDeclaration()
	{
		$this->expectException(InvalidArgumentException::class);
		
		(new User(
			new UserId(rand(0, 50)),
			new UserName('James', 'Anslow'),
			$acceptsPets = 15
		));
	}
}
