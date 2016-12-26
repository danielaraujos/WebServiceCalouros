<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypsTable Test Case
 */
class TypsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypsTable
     */
    public $Typs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typs') ? [] : ['className' => 'App\Model\Table\TypsTable'];
        $this->Typs = TableRegistry::get('Typs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typs);

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
