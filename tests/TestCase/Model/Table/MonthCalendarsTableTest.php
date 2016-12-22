<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonthCalendarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonthCalendarsTable Test Case
 */
class MonthCalendarsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonthCalendarsTable
     */
    public $MonthCalendars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.month_calendars',
        'app.calendars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MonthCalendars') ? [] : ['className' => 'App\Model\Table\MonthCalendarsTable'];
        $this->MonthCalendars = TableRegistry::get('MonthCalendars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MonthCalendars);

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
