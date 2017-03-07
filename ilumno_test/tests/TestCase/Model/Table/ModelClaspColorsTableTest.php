<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelClaspColorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelClaspColorsTable Test Case
 */
class ModelClaspColorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelClaspColorsTable
     */
    public $ModelClaspColors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_clasp_colors',
        'app.models',
        'app.clasp_colors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelClaspColors') ? [] : ['className' => 'App\Model\Table\ModelClaspColorsTable'];
        $this->ModelClaspColors = TableRegistry::get('ModelClaspColors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelClaspColors);

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
