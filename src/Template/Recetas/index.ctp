<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Element('admin/menuadmin')?>
<div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Lista de Sugerencias</h1></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="tabla1">
               <thead id="tablacabeza">
                    <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
           <tbody id="tablacuerpo">
            <?php foreach ($recetas as $receta): ?>
            <tr>
                <td><?= $this->Number->format($receta->id) ?></td>
                <td><?= $receta->has('paciente') ? $this->Html->link($receta->paciente->nombre_completo, ['controller' => 'Pacientes', 'action' => 'view', $receta->paciente->id]) : '' ?></td>
                <td><?= h($receta->created) ?></td>
                <td><?= h($receta->modified) ?></td>
               <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['action' => 'view', $receta->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['action' => 'edit', $receta->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['action' => 'delete', $receta->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $receta->id)]) ?>
                            </li>
                            
                          </ul>
                        </div>
                                
                               
                                
                              
                    </td>
            </tr>
            <?php endforeach; ?>
     </tbody>
            </table>
            </div>
        </div>
            <div class="paginator" id="paginas">
      <center>  <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Principio')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?></p> </center>
    </div>
    </div>
<br>
