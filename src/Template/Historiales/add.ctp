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
                    <center><h1 class="page-header">Agregar historial medico al paciente</h1></center>
                </div>
            </div>
       <?= $this->Form->create($historiale) ?>
    <fieldset>
        
        <?php
            echo $this->Form->control('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
        ?>
        <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Problemas que tiene el paciente</h3>
                </div>
        </div>
        <?php
            echo $this->Form->control('problemas_del_corazon');
            echo $this->Form->control('presion_sanguinea_alta');
            echo $this->Form->control('problemas_circulatorios');
            echo $this->Form->control('problemas_nerviosos');
            echo $this->Form->control('radioTerapia');
            echo $this->Form->control('valvulas_del_corazon_artificiales');
            echo $this->Form->control('perdida_de_peso');
            echo $this->Form->control('problemas_de_espalda');
            echo $this->Form->control('enfermedades_respiratorias');
            echo $this->Form->control('diabetes');
            echo $this->Form->control('presion_sanguinea_baja');
            echo $this->Form->control('epilepsia');
            echo $this->Form->control('hepatitis');
            echo $this->Form->control('cancer');
            echo $this->Form->control('tratamiento_siquiatrico');
            echo $this->Form->control('dieta_especial');
            echo $this->Form->control('enfermedades_de_la_sangre');
            echo $this->Form->control('artitris');
            echo $this->Form->control('glandulas_del_cuello_hinchadas');
            echo $this->Form->control('fiebre_reumatica');
            echo $this->Form->control('VIH');
            echo $this->Form->control('embolia_cerebral');
            echo $this->Form->control('ulceras');
            echo $this->Form->control('enfermedades_venereas');
            echo $this->Form->control('hemofilia');
            echo $this->Form->control('osteoporosis');
            echo $this->Form->control('enfermedades_de_higado');
            echo $this->Form->control('diarrea_cronica');
            echo $this->Form->control('drogadiccion');
            echo $this->Form->control('otros');
             ?>
        <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Alergias que tiene el paciente</h3>
                </div>
        </div>
        <?php
            echo $this->Form->control('alergias_a_anestesias');
            echo $this->Form->control('alergias_a_medicinas');
            echo $this->Form->control('alergias_generales');
        ?>
    </fieldset>
                <br><center>
                <?= $this->Form->button(('Registrar'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
                </center>
                <br>

        </div>
    </div>
<br>
