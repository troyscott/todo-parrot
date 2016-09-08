<?php

class WelcomeTest extends TestCase {
	
	
	public function testCanSeeTheContactUsLink()
	{
		$this->visit('/')->see('Contact Us');
			
	}
	
}
