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
                    <center><h1 class="page-header">Lista de Usuarios</h1></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="tabla1">
                <thead id="tablacabeza">
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>C.I</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>Acciones</th>
                </thead>
            <tbody id="tablacuerpo">

            
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= $this->Html->image('../files/Users/photo/' . '/' . $user->photo,['width'=>'80px']) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->c_i) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['action' => 'view', $user->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['action' => 'edit', $user->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['action' => 'delete', $user->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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

    