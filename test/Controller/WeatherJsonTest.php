<?php

namespace Anax\Weather;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the IpAPIControllerTest.
 */
class JsonApiControllerWeather2Test extends TestCase
{

    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");

        $this->di = $di;

        $this->controller = new JsonApiController();
        $this->controller->setDI($this->di);
        $this->controller->initialize();
    }

    public function testIndexAction()
    {
        $this->di->get("request")->setGet("city", "Paris");
        $res = $this->controller->indexAction();
        $this->assertNotNull($res);
    }
}
