<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SourcesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SourcesController Test Case
 */
class SourcesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Sources' => 'app.sources',
        'Events' => 'app.events',
        'Intervals' => 'app.intervals',
        'Leagues' => 'app.leagues',
        'Teams' => 'app.teams',
        'PlayersTeams' => 'app.players_teams',
        'Players' => 'app.players',
        'Points' => 'app.points',
        'Tags' => 'app.tags',
        'LeaguesTags' => 'app.leagues_tags'
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
