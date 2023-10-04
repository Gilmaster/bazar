<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoginFixture
 */
class LoginFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'login';
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
                'login' => '2023-09-18 15:25:10',
                'logon' => '2023-09-18 15:25:10',
            ],
        ];
        parent::init();
    }
}
