<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelCrystalColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelCrystalColorsTable Test Case
 */
class ModelCrystalColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelCrystalColorsTable
     */
    public $ModelCrystalColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_crystal_colors',
        'app.models',
        'app.crystal_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelCrystalColors') ? [] : ['className' => 'App\Model\Table\ModelCrystalColorsTable'];
        $this->ModelCrystalColors = TableRegistry::get('ModelCrystalColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelCrystalColors);

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
