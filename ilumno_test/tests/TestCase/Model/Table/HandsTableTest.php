<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HandsTable Test Case
 */
class HandsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HandsTable
     */
    public $Hands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hands',
        'app.assembly_types',
        'app.model_hands',
        'app.hands_colors',
        'app.model_hands_colors',
        'app.models',
        'app.chassis',
        'app.production_orders',
        'app.straps',
        'app.clasps',
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
        'app.combinations',
        'app.direct_orders',
        'app.model_straps_colors',
        'app.strap_colors',
        'app.references'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hands') ? [] : ['className' => 'App\Model\Table\HandsTable'];
        $this->Hands = TableRegistry::get('Hands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hands);

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
