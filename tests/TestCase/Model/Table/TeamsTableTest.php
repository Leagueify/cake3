<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamsTable Test Case
 */
class TeamsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Teams' => 'app.teams',
        'Leagues' => 'app.leagues',
        'Events' => 'app.events',
        'Sources' => 'app.sources',
        'Players' => 'app.players',
        'Points' => 'app.points',
        'PlayersTeams' => 'app.players_teams',
        'Intervals' => 'app.intervals',
        'Tags' => 'app.tags',
        'LeaguesTags' => 'app.leagues_tags',
        'Users' => 'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Teams') ? [] : ['className' => 'App\Model\Table\TeamsTable'];
        $this->Teams = TableRegistry::get('Teams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teams);

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
