<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NomeFixture
 */
class NomeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'nome';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
