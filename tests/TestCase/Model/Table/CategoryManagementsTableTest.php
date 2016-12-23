<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryManagementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryManagementsTable Test Case
 */
class CategoryManagementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoryManagementsTable
     */
    public $CategoryManagements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.category_managements',
        'app.managements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoryManagements') ? [] : ['className' => 'App\Model\Table\CategoryManagementsTable'];
        $this->CategoryManagements = TableRegistry::get('CategoryManagements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoryManagements);

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
