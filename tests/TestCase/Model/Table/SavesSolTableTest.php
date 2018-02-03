<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SavesSolTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SavesSolTable Test Case
 */
class SavesSolTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SavesSolTable
     */
    public $SavesSol;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.saves_sol'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SavesSol') ? [] : ['className' => SavesSolTable::class];
        $this->SavesSol = TableRegistry::get('SavesSol', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SavesSol);

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
