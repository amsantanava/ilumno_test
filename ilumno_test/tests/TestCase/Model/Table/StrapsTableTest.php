<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StrapsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StrapsTable Test Case
 */
class StrapsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StrapsTable
     */
    public $Straps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.straps',
        'app.clasps',
        'app.models',
        'app.chassis',
        'app.production_orders',
        'app.prices',
        'app.collections',
        'app.crystals',
        'app.assembly_types',
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
        'app.model_hands',
        'app.model_hands_colors',
        'app.hands_colors',
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
        $config = TableRegistry::exists('Straps') ? [] : ['className' => 'App\Model\Table\StrapsTable'];
        $this->Straps = TableRegistry::get('Straps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Straps);

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
