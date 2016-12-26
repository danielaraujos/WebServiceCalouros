<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryTypsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryTypsTable Test Case
 */
class CategoryTypsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoryTypsTable
     */
    public $CategoryTyps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.category_typs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoryTyps') ? [] : ['className' => 'App\Model\Table\CategoryTypsTable'];
        $this->CategoryTyps = TableRegistry::get('CategoryTyps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoryTyps);

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
