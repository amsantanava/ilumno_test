<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelHandsColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelHandsColorsTable Test Case
 */
class ModelHandsColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelHandsColorsTable
     */
    public $ModelHandsColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_hands_colors',
        'app.models',
        'app.hands_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelHandsColors') ? [] : ['className' => 'App\Model\Table\ModelHandsColorsTable'];
        $this->ModelHandsColors = TableRegistry::get('ModelHandsColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelHandsColors);

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
