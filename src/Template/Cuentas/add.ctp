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
                    <center><h1 class="page-header">Agregar cuenta</h1></center>
                </div>
            </div>
              <?= $this->Form->create($cuenta) ?>
                    <fieldset>
                        
                        <?php
                            echo $this->Form->control('tratamiento_id',['class'=>'form-control'], ['options' => $tratamientos]);
                            echo $this->Form->control('costo_total',['class'=>'form-control']);
                            echo $this->Form->control('cancelado',['class'=>'form-control']);
                            echo $this->Form->control('saldo_por_pagar',['class'=>'form-control']);
                        ?>
                    </fieldset>
                <br><center>
                <?= $this->Form->button(('Registrar'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
                </center>

        </div>
    </div>
<br>
  
