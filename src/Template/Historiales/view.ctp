<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Element('admin/menuadmin')?>
<div id="page-wrapper" >
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Historial del paciente:&nbsp<?= h($historiale->paciente->nombre_completo) ?>&nbsp<br>C.I:&nbsp<?= h($historiale->paciente->c_i)?></h1></center>
                </div>
            </div>
            <div class="users view large-9 medium-8 columns content">
   <div class="table-responsive">
    <table class="vertical-table table table-bordered">
       <tr>
            <th>Paciente</th>
            <td id="usuario"><?= $historiale->has('paciente') ? $this->Html->link($historiale->paciente->nombre_completo, ['controller' => 'Pacientes', 'action' => 'view', $historiale->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($historiale->id) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($historiale->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($historiale->modified) ?></td>
        </tr>
        <tr>
            <th>Problemas del corazon</th>
            <td><?= $historiale->problemas_del_corazon ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Presion sanguinea alta</th>
            <td><?= $historiale->presion_sanguinea_alta ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas circulatorios</th>
            <td><?= $historiale->problemas_circulatorios ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas nerviosos</th>
            <td><?= $historiale->problemas_nerviosos ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Radio terapia</th>
            <td><?= $historiale->radioTerapia ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Valvulas del corazon artificiales</th>
            <td><?= $historiale->valvulas_del_corazon_artificiales ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Perdida de peso</th>
            <td><?= $historiale->perdida_de_peso ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas de espalda</th>
            <td><?= $historiale->problemas_de_espalda ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades respiratorias</th>
            <td><?= $historiale->enfermedades_respiratorias ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Diabetes</th>
            <td><?= $historiale->diabetes ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Presion sanguinea baja</th>
            <td><?= $historiale->presion_sanguinea_baja ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Epilepsia</th>
            <td><?= $historiale->epilepsia ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Hepatitis</th>
            <td><?= $historiale->hepatitis ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Cancer</th>
            <td><?= $historiale->cancer ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Tratamiento siquiatrico</th>
            <td><?= $historiale->tratamiento_siquiatrico ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Dieta especial</th>
            <td><?= $historiale->dieta_especial ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades de la sangre</th>
            <td><?= $historiale->enfermedades_de_la_sangre ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Artitris</th>
            <td><?= $historiale->artitris ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Glandulas del cuello hinchadas</th>
            <td><?= $historiale->glandulas_del_cuello_hinchadas ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Fiebre reumatica</th>
            <td><?= $historiale->fiebre_reumatica ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th>VIH</th>
            <td><?= $historiale->VIH ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Embolia cerebral</th>
            <td><?= $historiale->embolia_cerebral ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Ulceras</th>
            <td><?= $historiale->ulceras ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades venereas</th>
            <td><?= $historiale->enfermedades_venereas ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Hemofilia</th>
            <td><?= $historiale->hemofilia ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Osteoporosis</th>
            <td><?= $historiale->osteoporosis ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades de higado</th>
            <td><?= $historiale->enfermedades_de_higado ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Diarrea cronica</th>
            <td><?= $historiale->diarrea_cronica ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Drogadiccion</th>
            <td><?= $historiale->drogadiccion ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Otros</th>
            <td><?= $historiale->otros ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Alergias a anestesias</th>
            <td><?= $historiale->alergias_a_anestesias ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Alergias a medicinas</th>
            <td><?= $historiale->alergias_a_medicinas ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Alergias generales</th>
            <td><?= $historiale->alergias_generales ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    </div>
</div>  
        </div>
    </div>
<br>

