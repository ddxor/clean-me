# Facts/Assumptions

* I have only focused on the User part of the code
* Rather than trying to write something complete I have tried to write something that demonstrates my approach
* We want to use a Domain Driven Development methodology
* We want to build to tests - I.e. TDD
* Our architecture should be eventually formed in the following fashion: Presentation->Application->Domain->Infrastructure
* I'm not using any framework or libraries (as requested)
* This could, say, eventually form part of a User management microservice?
* We're using the PSR-2 code standard
* Written for PHP 7.0

# Todo

* Create new domain model for property
* Create user <-> property relation
* Add code, tests & infrastructure to query against a datastore
* Define functional tests

# Testing

* Run phpunit from the root directory