<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelStrapsColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelStrapsColorsTable Test Case
 */
class ModelStrapsColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelStrapsColorsTable
     */
    public $ModelStrapsColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_straps_colors',
        'app.models',
        'app.strap_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelStrapsColors') ? [] : ['className' => 'App\Model\Table\ModelStrapsColorsTable'];
        $this->ModelStrapsColors = TableRegistry::get('ModelStrapsColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelStrapsColors);

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
