<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrystalColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrystalColorsTable Test Case
 */
class CrystalColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrystalColorsTable
     */
    public $CrystalColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crystal_colors',
        'app.combinations',
        'app.direct_orders',
        'app.model_crystal_colors',
        'app.models',
        'app.chassis',
        'app.production_orders',
        'app.straps',
        'app.clasps',
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
        'app.model_dials',
        'app.dials',
        'app.model_hands',
        'app.model_hands_colors',
        'app.hands_colors',
        'app.model_straps_colors',
        'app.strap_colors',
        'app.pos_products',
        'app.pos_products_strap_colors',
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
        $config = TableRegistry::exists('CrystalColors') ? [] : ['className' => 'App\Model\Table\CrystalColorsTable'];
        $this->CrystalColors = TableRegistry::get('CrystalColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CrystalColors);

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
