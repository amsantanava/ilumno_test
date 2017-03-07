<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelChassisColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelChassisColorsTable Test Case
 */
class ModelChassisColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelChassisColorsTable
     */
    public $ModelChassisColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_chassis_colors',
        'app.models',
        'app.chassis_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelChassisColors') ? [] : ['className' => 'App\Model\Table\ModelChassisColorsTable'];
        $this->ModelChassisColors = TableRegistry::get('ModelChassisColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelChassisColors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
