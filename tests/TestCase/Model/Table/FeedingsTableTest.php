<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedingsTable Test Case
 */
class FeedingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedingsTable
     */
    public $Feedings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feedings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Feedings') ? [] : ['className' => 'App\Model\Table\FeedingsTable'];
        $this->Feedings = TableRegistry::get('Feedings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feedings);

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
