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
             <?= $this->Form->create($receta) ?>
                <fieldset>
                    <legend><?= __('Edit Receta') ?></legend>
                    <?php
                        echo $this->Form->control('paciente_id',['class'=>'form-control'], ['options' => $pacientes]);
                        echo $this->Form->control('detalle_de_la_receta',['class'=>'form-control']);
                    ?>
                </fieldset>
                <br>
              <center>  <?= $this->Form->button(('Cambiar'),['class'=>'btn btn-success']) ?>
                        <?= $this->Form->end() ?>
              </center>
        </div>
    </div>
    <br>

