<?php
/**
 * Created by PhpStorm.
 * User: andreicotaga
 * Date: 2019-03-15
 * Time: 17:40
 */

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Retargeting\Brand;

/**
 * Class BrandTest
 * @package Tests\Unit
 * @property Brand brand
 */
class BrandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->brand = new Brand();
    }

    /**
     * Check if brand has id
     */
    public function testIfBrandHasId()
    {
        $this->brand->setId(33);
        $this->assertNotNull($this->brand->getId());
    }

    /**
     * Check if brand has name
     */
    public function testIfBrandHasName()
    {
        $this->brand->setName('Nike');
        $this->assertNotNull($this->brand->getName());
    }

    /**
     * Check if brand is array
     */
    public function testIfBrandIsArray()
    {
        $this->brand->setId(23);
        $this->brand->setName('Apple');

        $this->assertNotNull($this->brand->prepareBrandInformation());
    }

    /**
     * Check if brand has proper json format
     */
     public function testIfBrandHasProperFormat()
     {
         $this->brand->setName('Samsung');

         $this->assertEquals($this->brand->prepareBrandInformation(), json_encode(['id' => 99, 'name' => 'Samsung'], JSON_PRETTY_PRINT));
     }
}
