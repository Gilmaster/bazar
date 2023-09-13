<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NomeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NomeTable Test Case
 */
class NomeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NomeTable
     */
    protected $Nome;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Nome',
        'app.Produto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Nome') ? [] : ['className' => NomeTable::class];
        $this->Nome = $this->getTableLocator()->get('Nome', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Nome);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NomeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
