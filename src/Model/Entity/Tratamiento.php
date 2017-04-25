<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tratamiento Entity
 *
 * @property int $id
 * @property int $paciente_id
 * @property bool $caries
 * @property int $cantidad_caries
 * @property bool $conductos
 * @property int $cantidad_conductos
 * @property bool $rehabilitacion_oral
 * @property bool $extraccion_de_quistes
 * @property string $extraccion_dental
 * @property bool $ortodoncia
 * @property bool $protesis_dental
 * @property bool $blanqueamiento_dental
 * @property bool $implantes
 * @property int $cantidad_implantes
 * @property float $costo_total
 * @property string $tipo_pago
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Cuenta[] $cuentas
 */
class Tratamiento extends Entity
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
