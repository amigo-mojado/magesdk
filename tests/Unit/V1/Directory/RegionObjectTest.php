<?php

namespace Tests\MageSDK\Api;

use PHPUnit\Framework\TestCase;
use KickAss\MageSDK\V1\Directory\RegionObject;

/**
 * @covers \KickAss\MageSDK\V1\Directory\RegionObject
 */
class RegionObjectTest extends TestCase
{
    /**
     * @var RegionObject
     */
    protected $region;

    public function setUp()
    {
        $data = new \stdClass();
        $data->id = 1;
        $data->code = 'WS';
        $data->name = 'Wisconson';

        $this->region = new RegionObject($data);
    }

    /**
     * @covers \KickAss\MageSDK\V1\Directory\RegionObject::getId()
     */
    public function testGetId()
    {
        $this->assertEquals(1, $this->region->getId());
    }

    /**
     * @covers \KickAss\MageSDK\V1\Directory\RegionObject::getCode()
     */
    public function testGetCode()
    {
        $this->assertEquals('WS', $this->region->getCode());
    }

    /**
     * @covers \KickAss\MageSDK\V1\Directory\RegionObject::getName()
     */
    public function testGetName()
    {
        $this->assertEquals('Wisconson', $this->region->getName());
    }
}