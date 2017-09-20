<?php

/** 
 * Obviously in the real world i'd be using a libraries autoloader, or even the SPL autoloader.
 * In this case, I'm running from the CLI (no SPL autoloader) and not using any 3rd party libraries or frameworks.
 * Forgive me for this.
 *
 */

$requires = [
	'Domain/Model/User/User.php',
	'Domain/Model/User/Id.php',
	'Domain/Model/User/Name.php',
];

foreach ($requires as $require) {
	include(dirname(__FILE__) . '/' . $require);
}
