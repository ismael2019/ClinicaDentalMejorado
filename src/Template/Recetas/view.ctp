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
                    <center><h1 class="page-header">Receta del paciente:&nbsp<?= h($receta->paciente->nombre_completo) ?></h1></center>
                </div>
            </div>
            <div class="users view large-9 medium-8 columns content">
   <div class="table-responsive">
    <table class="vertical-table table table-bordered">
     <tr>
            <th>Paciente</th>
            <td id="usuario"><?= $receta->has('paciente') ? $this->Html->link($receta->paciente->nombre_completo, ['controller' => 'Pacientes', 'action' => 'view', $receta->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($receta->id) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($receta->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($receta->modified) ?></td>
        </tr>
    </table>
    
    </div>
</div>  
<hr>
<div class="row">
       <center> <h4><?= __('Detalle De La Receta') ?></h4>
        <?= $this->Text->autoParagraph(h($receta->detalle_de_la_receta)); ?> </center>
    </div>
        </div>
    </div>
<br>
