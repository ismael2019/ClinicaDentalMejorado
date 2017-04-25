<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historiales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 *
 * @method \App\Model\Entity\Historiale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historiale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Historiale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historiale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historiale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historiale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historiale findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HistorialesTable extends Table
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

        $this->setTable('historiales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
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
            ->boolean('problemas_del_corazon')
            ->requirePresence('problemas_del_corazon', 'create')
            ->notEmpty('problemas_del_corazon');

        $validator
            ->boolean('presion_sanguinea_alta')
            ->requirePresence('presion_sanguinea_alta', 'create')
            ->notEmpty('presion_sanguinea_alta');

        $validator
            ->boolean('problemas_circulatorios')
            ->requirePresence('problemas_circulatorios', 'create')
            ->notEmpty('problemas_circulatorios');

        $validator
            ->boolean('problemas_nerviosos')
            ->requirePresence('problemas_nerviosos', 'create')
            ->notEmpty('problemas_nerviosos');

        $validator
            ->boolean('radioTerapia')
            ->requirePresence('radioTerapia', 'create')
            ->notEmpty('radioTerapia');

        $validator
            ->boolean('valvulas_del_corazon_artificiales')
            ->requirePresence('valvulas_del_corazon_artificiales', 'create')
            ->notEmpty('valvulas_del_corazon_artificiales');

        $validator
            ->boolean('perdida_de_peso')
            ->requirePresence('perdida_de_peso', 'create')
            ->notEmpty('perdida_de_peso');

        $validator
            ->boolean('problemas_de_espalda')
            ->requirePresence('problemas_de_espalda', 'create')
            ->notEmpty('problemas_de_espalda');

        $validator
            ->boolean('enfermedades_respiratorias')
            ->requirePresence('enfermedades_respiratorias', 'create')
            ->notEmpty('enfermedades_respiratorias');

        $validator
            ->boolean('diabetes')
            ->requirePresence('diabetes', 'create')
            ->notEmpty('diabetes');

        $validator
            ->boolean('presion_sanguinea_baja')
            ->requirePresence('presion_sanguinea_baja', 'create')
            ->notEmpty('presion_sanguinea_baja');

        $validator
            ->boolean('epilepsia')
            ->requirePresence('epilepsia', 'create')
            ->notEmpty('epilepsia');

        $validator
            ->boolean('hepatitis')
            ->requirePresence('hepatitis', 'create')
            ->notEmpty('hepatitis');

        $validator
            ->boolean('cancer')
            ->requirePresence('cancer', 'create')
            ->notEmpty('cancer');

        $validator
            ->boolean('tratamiento_siquiatrico')
            ->requirePresence('tratamiento_siquiatrico', 'create')
            ->notEmpty('tratamiento_siquiatrico');

        $validator
            ->boolean('dieta_especial')
            ->requirePresence('dieta_especial', 'create')
            ->notEmpty('dieta_especial');

        $validator
            ->boolean('enfermedades_de_la_sangre')
            ->requirePresence('enfermedades_de_la_sangre', 'create')
            ->notEmpty('enfermedades_de_la_sangre');

        $validator
            ->boolean('artitris')
            ->requirePresence('artitris', 'create')
            ->notEmpty('artitris');

        $validator
            ->boolean('glandulas_del_cuello_hinchadas')
            ->requirePresence('glandulas_del_cuello_hinchadas', 'create')
            ->notEmpty('glandulas_del_cuello_hinchadas');

        $validator
            ->boolean('fiebre_reumatica')
            ->requirePresence('fiebre_reumatica', 'create')
            ->notEmpty('fiebre_reumatica');

        $validator
            ->boolean('VIH')
            ->requirePresence('VIH', 'create')
            ->notEmpty('VIH');

        $validator
            ->boolean('embolia_cerebral')
            ->requirePresence('embolia_cerebral', 'create')
            ->notEmpty('embolia_cerebral');

        $validator
            ->boolean('ulceras')
            ->requirePresence('ulceras', 'create')
            ->notEmpty('ulceras');

        $validator
            ->boolean('enfermedades_venereas')
            ->requirePresence('enfermedades_venereas', 'create')
            ->notEmpty('enfermedades_venereas');

        $validator
            ->boolean('hemofilia')
            ->requirePresence('hemofilia', 'create')
            ->notEmpty('hemofilia');

        $validator
            ->boolean('osteoporosis')
            ->requirePresence('osteoporosis', 'create')
            ->notEmpty('osteoporosis');

        $validator
            ->boolean('enfermedades_de_higado')
            ->requirePresence('enfermedades_de_higado', 'create')
            ->notEmpty('enfermedades_de_higado');

        $validator
            ->boolean('diarrea_cronica')
            ->requirePresence('diarrea_cronica', 'create')
            ->notEmpty('diarrea_cronica');

        $validator
            ->boolean('drogadiccion')
            ->requirePresence('drogadiccion', 'create')
            ->notEmpty('drogadiccion');

        $validator
            ->boolean('otros')
            ->requirePresence('otros', 'create')
            ->notEmpty('otros');

        $validator
            ->boolean('alergias_a_anestesias')
            ->requirePresence('alergias_a_anestesias', 'create')
            ->notEmpty('alergias_a_anestesias');

        $validator
            ->boolean('alergias_a_medicinas')
            ->requirePresence('alergias_a_medicinas', 'create')
            ->notEmpty('alergias_a_medicinas');

        $validator
            ->boolean('alergias_generales')
            ->requirePresence('alergias_generales', 'create')
            ->notEmpty('alergias_generales');

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
