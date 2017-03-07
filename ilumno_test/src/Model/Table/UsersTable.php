<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('_name', 'create')
            ->notEmpty('_name', 'Campo requerido');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname', 'Campo requerido');

        $validator
            ->email('email', null, 'Formato no válido')
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'Campo requerido');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone', 'Campo requerido');

        $validator
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile', 'Campo requerido');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Ya existeun usuario registrado con este correo.'));

        return $rules;
    }

    /**
     * Returns a Boolean if user exits true, if not false
     *
     * @param String $email
     * @param String $password
     * @return Boolean
     */
    public function validateUser($email, $password){
        return $this->exists(['email' => $email, 'password' => $password]);
    }
}
