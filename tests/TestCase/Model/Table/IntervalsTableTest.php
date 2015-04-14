<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IntervalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IntervalsTable Test Case
 */
class IntervalsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Intervals' => 'app.intervals',
        'Events' => 'app.events',
        'Sources' => 'app.sources',
        'Leagues' => 'app.leagues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Intervals') ? [] : ['className' => 'App\Model\Table\IntervalsTable'];
        $this->Intervals = TableRegistry::get('Intervals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Intervals);

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
