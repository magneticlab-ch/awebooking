<?php

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use AweBooking\Installer;
use AweBooking\Multilingual;

class AweBooking_Test extends WP_UnitTestCase {
	/**
	 * Set up the test fixture.
	 */
	public function setUp() {
		parent::setUp();

		$this->awebooking = awebooking();
	}

	public function testInstance() {
		$this->assertClassHasStaticAttribute( 'instance', 'AweBooking' );
		$this->assertClassHasStaticAttribute( 'instance', 'AweBooking\\AweBooking' );
	}

	public function testCoreInstances() {
		$this->assertInstanceOf( Installer::class, $this->awebooking[Installer::class] );
		$this->assertInstanceOf( Installer::class, $this->awebooking->get_installer() );

		$this->assertInstanceOf( Multilingual::class, $this->awebooking[Multilingual::class] );
		$this->assertInstanceOf( Multilingual::class, $this->awebooking->get_multilingual() );

		$this->assertInstanceOf( Logger::class, $this->awebooking['logger'] );
		$this->assertInstanceOf( Logger::class, $this->awebooking->get_logger() );
		$this->assertInstanceOf( LoggerInterface::class, $this->awebooking[Logger::class] );
		$this->assertInstanceOf( LoggerInterface::class, $this->awebooking[LoggerInterface::class] );

		$this->assertInstanceOf( 'AweBooking\\Currency\\Currency', $this->awebooking['currency'] );
		$this->assertInstanceOf( 'AweBooking\\Currency\\Currency_Manager', $this->awebooking['currency_manager'] );

		// $this->assertInstanceOf( 'AweBooking\\Booking\\Store', $this->awebooking['store.booking'] );
		// $this->assertInstanceOf( 'AweBooking\\Booking\\Store', $this->awebooking['store.pricing'] );
		// $this->assertInstanceOf( 'AweBooking\\Booking\\Store', $this->awebooking['store.availability'] );

		$this->assertInstanceOf( 'AweBooking\\Support\\Flash_Message', $this->awebooking['flash_message'] );
	}
}
