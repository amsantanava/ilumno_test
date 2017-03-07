<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelDialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelDialsTable Test Case
 */
class ModelDialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelDialsTable
     */
    public $ModelDials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_dials',
        'app.models',
        'app.dials'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelDials') ? [] : ['className' => 'App\Model\Table\ModelDialsTable'];
        $this->ModelDials = TableRegistry::get('ModelDials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelDials);

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
