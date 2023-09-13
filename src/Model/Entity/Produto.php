<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $produto
 * @property string $valor
 * @property string $status
 * @property int $nome_id
 *
 * @property \App\Model\Entity\Nome $nome
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'produto' => true,
        'valor' => true,
        'status' => true,
        'nome_id' => true,
        'nome' => true,
    ];
}
