<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HandsColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HandsColorsTable Test Case
 */
class HandsColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HandsColorsTable
     */
    public $HandsColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hands_colors',
        'app.combination_hands_colors',
        'app.direct_orders',
        'app.model_hands_colors',
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
        'app.combinations',
        'app.model_clasp_colors',
        'app.clasp_colors',
        'app.model_crystal_colors',
        'app.crystal_colors',
        'app.model_dials',
        'app.dials',
        'app.model_hands',
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
        $config = TableRegistry::exists('HandsColors') ? [] : ['className' => 'App\Model\Table\HandsColorsTable'];
        $this->HandsColors = TableRegistry::get('HandsColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HandsColors);

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
