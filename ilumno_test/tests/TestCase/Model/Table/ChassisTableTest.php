<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChassisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChassisTable Test Case
 */
class ChassisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChassisTable
     */
    public $Chassis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chassis',
        'app.models',
        'app.straps',
        'app.prices',
        'app.collections',
        'app.crystals',
        'app.dials_models',
        'app.merge_models',
        'app.model_chassis_colors',
        'app.chassis_colors',
        'app.model_clasp_colors',
        'app.clasp_colors',
        'app.model_crystal_colors',
        'app.crystal_colors',
        'app.model_dials',
        'app.dials',
        'app.model_hands',
        'app.model_hands_colors',
        'app.hands_colors',
        'app.model_straps_colors',
        'app.strap_colors',
        'app.references',
        'app.production_orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Chassis') ? [] : ['className' => 'App\Model\Table\ChassisTable'];
        $this->Chassis = TableRegistry::get('Chassis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chassis);

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
}
