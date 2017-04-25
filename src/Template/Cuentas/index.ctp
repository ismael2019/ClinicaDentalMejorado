<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Element('admin/menuadmin')?>
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Lista de cuentas</h1></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="tabla1">
                <thead id="tablacabeza">
                       <tr>
                            <th>id</th>
                            <th>tratamiento_id</th>
                            <th>costo_total</th>
                            <th>cancelado</th>
                            <th>saldo_por_pagar</th>
                            <th>created</th>
                            <th>modified</th>
                            <th>Actions</th>
                        </tr>
                </thead>
            <tbody id="tablacuerpo">

            
            <?php foreach ($cuentas as $cuenta): ?>
            <tr>
                <td><?= $this->Number->format($cuenta->id) ?></td>
                <td><?= $cuenta->has('tratamiento') ? $this->Html->link($cuenta->tratamiento->id, ['controller' => 'Tratamientos', 'action' => 'view', $cuenta->tratamiento->id]) : '' ?></td>
                <td><?= $this->Number->format($cuenta->costo_total) ?></td>
                <td><?= $this->Number->format($cuenta->cancelado) ?></td>
                <td><?= $this->Number->format($cuenta->saldo_por_pagar) ?></td>
                <td><?= h($cuenta->created) ?></td>
                <td><?= h($cuenta->modified) ?></td>
                <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['action' => 'view', $cuenta->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['action' => 'edit', $cuenta->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['action' => 'delete', $cuenta->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $cuenta->id)]) ?>
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

