<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeaguesTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeaguesTagsTable Test Case
 */
class LeaguesTagsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'LeaguesTags' => 'app.leagues_tags',
        'Tags' => 'app.tags',
        'Leagues' => 'app.leagues',
        'Events' => 'app.events',
        'Sources' => 'app.sources',
        'Intervals' => 'app.intervals',
        'Teams' => 'app.teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LeaguesTags') ? [] : ['className' => 'App\Model\Table\LeaguesTagsTable'];
        $this->LeaguesTags = TableRegistry::get('LeaguesTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LeaguesTags);

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
