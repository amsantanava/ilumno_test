<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrystalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrystalsTable Test Case
 */
class CrystalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrystalsTable
     */
    public $Crystals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crystals',
        'app.assembly_types',
        'app.models',
        'app.chassis',
        'app.production_orders',
        'app.straps',
        'app.clasps',
        'app.prices',
        'app.collections',
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
        $config = TableRegistry::exists('Crystals') ? [] : ['className' => 'App\Model\Table\CrystalsTable'];
        $this->Crystals = TableRegistry::get('Crystals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crystals);

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
