<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Historiale Entity
 *
 * @property int $id
 * @property int $paciente_id
 * @property bool $problemas_del_corazon
 * @property bool $presion_sanguinea_alta
 * @property bool $problemas_circulatorios
 * @property bool $problemas_nerviosos
 * @property bool $radioTerapia
 * @property bool $valvulas_del_corazon_artificiales
 * @property bool $perdida_de_peso
 * @property bool $problemas_de_espalda
 * @property bool $enfermedades_respiratorias
 * @property bool $diabetes
 * @property bool $presion_sanguinea_baja
 * @property bool $epilepsia
 * @property bool $hepatitis
 * @property bool $cancer
 * @property bool $tratamiento_siquiatrico
 * @property bool $dieta_especial
 * @property bool $enfermedades_de_la_sangre
 * @property bool $artitris
 * @property bool $glandulas_del_cuello_hinchadas
 * @property bool $fiebre_reumatica
 * @property bool $VIH
 * @property bool $embolia_cerebral
 * @property bool $ulceras
 * @property bool $enfermedades_venereas
 * @property bool $hemofilia
 * @property bool $osteoporosis
 * @property bool $enfermedades_de_higado
 * @property bool $diarrea_cronica
 * @property bool $drogadiccion
 * @property bool $otros
 * @property bool $alergias_a_anestesias
 * @property bool $alergias_a_medicinas
 * @property bool $alergias_generales
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente $paciente
 */
class Historiale extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
