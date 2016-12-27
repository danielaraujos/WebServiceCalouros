<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApisTable Test Case
 */
class ApisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ApisTable
     */
    public $Apis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.apis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Apis') ? [] : ['className' => 'App\Model\Table\ApisTable'];
        $this->Apis = TableRegistry::get('Apis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Apis);

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
