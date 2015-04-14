<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TeamsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TeamsController Test Case
 */
class TeamsControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
