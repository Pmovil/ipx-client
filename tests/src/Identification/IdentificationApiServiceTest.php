<?php

namespace Pmovil\Ipx\Identification;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-06 at 15:11:02.
 */
class IdentificationApiServiceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var IdentificationApiService
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new IdentificationApiService();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Pmovil\Ipx\Identification\IdentificationApiService::createSession
     */
    public function testCreateSession() {
        $request = new CreateSessionRequest($correlationId, $clientIPAddress, $returnURL, $serviceName, $serviceCategory, $serviceMetaData, $language, $campaignName, $username, $password);
        $this->object->checkStatus($request);
    }

    /**
     * @covers Pmovil\Ipx\Identification\IdentificationApiService::checkStatus
     * @todo   Implement testCheckStatus().
     */
    public function testCheckStatus() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pmovil\Ipx\Identification\IdentificationApiService::finalizeSession
     * @todo   Implement testFinalizeSession().
     */
    public function testFinalizeSession() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
