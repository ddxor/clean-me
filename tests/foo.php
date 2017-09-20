<?php

namespace App;

require_once('../app/Domain/User/User.php');
require_once('../app/Domain/User/Name.php');
require_once('../app/Domain/User/Id.php');

use App\Domain\Model\User as User;
use App\Domain\Model\User\Id as UserId;
use App\Domain\Model\User\Name as UserName;

$user = new User(
	new UserId(5),
	new UserName('James', 'Anslow'),
	$acceptsPets = true
);

echo 'Hello ' . $user->name;

die(var_dump($user));
