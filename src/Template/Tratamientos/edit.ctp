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
                    <center><h1 class="page-header">Editar sugerencia</h1></center>
                </div>
            </div>
             <?= $this->Form->create($tratamiento) ?>
                    <fieldset>
                       
                        <?php
                            echo $this->Form->control('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
                            echo $this->Form->control('caries');
                        ?>
                        <div class="alert alert-success">
                        <?php
                            echo $this->Form->control('cantidad_caries',['class'=>'form-control']);
                        ?>
                        </div>
                        <?php
                            echo $this->Form->control('conductos');
                        ?>
                        <div class="alert alert-success">
                        <?php
                            echo $this->Form->control('cantidad_conductos',['class'=>'form-control']);
                        ?>
                        </div>
                        <?php
                            echo $this->Form->control('rehabilitacion_oral');
                            echo $this->Form->control('extraccion_de_quistes');
                            echo $this->Form->control('extraccion_dental',['class'=>'form-control']);
                            echo $this->Form->control('ortodoncia');
                            echo $this->Form->control('protesis_dental');
                            echo $this->Form->control('blanqueamiento_dental');
                            echo $this->Form->control('implantes');
                            echo $this->Form->control('cantidad_implantes',['class'=>'form-control']);
                            echo $this->Form->control('costo_total',['class'=>'form-control']);
                            echo $this->Form->control('tipo_pago',['class'=>'form-control']);
                        ?>
                    </fieldset>
                <br>
              <center>  <?= $this->Form->button(('Cambiar'),['class'=>'btn btn-success']) ?>
                        <?= $this->Form->end() ?>
              </center>
        </div>
    </div>
    <br>

