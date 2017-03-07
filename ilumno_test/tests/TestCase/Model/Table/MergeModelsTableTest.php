<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MergeModelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MergeModelsTable Test Case
 */
class MergeModelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MergeModelsTable
     */
    public $MergeModels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.merge_models',
        'app.models',
        'app.chassis',
        'app.straps',
        'app.prices',
        'app.collections',
        'app.crystals',
        'app.dials_models',
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
        $config = TableRegistry::exists('MergeModels') ? [] : ['className' => 'App\Model\Table\MergeModelsTable'];
        $this->MergeModels = TableRegistry::get('MergeModels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MergeModels);

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
