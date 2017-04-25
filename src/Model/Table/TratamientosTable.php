<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tratamientos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\HasMany $Cuentas
 *
 * @method \App\Model\Entity\Tratamiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tratamiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tratamiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tratamiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tratamiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamiento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TratamientosTable extends Table
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

        $this->setTable('tratamientos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Cuentas', [
            'foreignKey' => 'tratamiento_id'
        ]);
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
            ->boolean('caries')
            ->requirePresence('caries', 'create')
            ->notEmpty('caries');

        $validator
            ->integer('cantidad_caries')
            ->requirePresence('cantidad_caries', 'create')
            ->notEmpty('cantidad_caries');

        $validator
            ->boolean('conductos')
            ->requirePresence('conductos', 'create')
            ->notEmpty('conductos');

        $validator
            ->integer('cantidad_conductos')
            ->requirePresence('cantidad_conductos', 'create')
            ->notEmpty('cantidad_conductos');

        $validator
            ->boolean('rehabilitacion_oral')
            ->requirePresence('rehabilitacion_oral', 'create')
            ->notEmpty('rehabilitacion_oral');

        $validator
            ->boolean('extraccion_de_quistes')
            ->requirePresence('extraccion_de_quistes', 'create')
            ->notEmpty('extraccion_de_quistes');

        $validator
            ->requirePresence('extraccion_dental', 'create')
            ->notEmpty('extraccion_dental');

        $validator
            ->boolean('ortodoncia')
            ->requirePresence('ortodoncia', 'create')
            ->notEmpty('ortodoncia');

        $validator
            ->boolean('protesis_dental')
            ->requirePresence('protesis_dental', 'create')
            ->notEmpty('protesis_dental');

        $validator
            ->boolean('blanqueamiento_dental')
            ->requirePresence('blanqueamiento_dental', 'create')
            ->notEmpty('blanqueamiento_dental');

        $validator
            ->boolean('implantes')
            ->requirePresence('implantes', 'create')
            ->notEmpty('implantes');

        $validator
            ->integer('cantidad_implantes')
            ->requirePresence('cantidad_implantes', 'create')
            ->notEmpty('cantidad_implantes');

        $validator
            ->numeric('costo_total')
            ->requirePresence('costo_total', 'create')
            ->notEmpty('costo_total');

        $validator
            ->requirePresence('tipo_pago', 'create')
            ->notEmpty('tipo_pago');

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
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));

        return $rules;
    }
}
