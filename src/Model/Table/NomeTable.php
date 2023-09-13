<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nome Model
 *
 * @property \App\Model\Table\ProdutoTable&\Cake\ORM\Association\HasMany $Produto
 *
 * @method \App\Model\Entity\Nome newEmptyEntity()
 * @method \App\Model\Entity\Nome newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Nome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nome get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nome findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Nome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nome[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nome[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nome[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nome[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nome[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NomeTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('nome');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Produto', [
            'foreignKey' => 'nome_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->maxLength('nome', 200)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        return $validator;
    }
}
