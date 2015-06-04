<?php

//include 'path/to/dependencies.php';

class GenericTest extends PHPUnit_Framework_TestCase
{
    //private $var; declare any variables used in the tests

    /**
     * Sets up the framework for the test suite
     * intialise variables.
     */
    public function setUp(){}

    /**
     * 
     */
    public function testSomething(){
        //$returned = $this->val->getSomething(); get or mutate a value to get a value
        //$this->assertTrue($returned); check the returned value is what you expected
    }
    
    /**
     * Removes the framework for the test suite
     * unintialise variables and destroy any existing variables
     */
    public function tearDown(){}
}
?>