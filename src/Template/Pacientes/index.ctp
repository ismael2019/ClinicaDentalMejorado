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
                    <center><h1 class="page-header">Lista de Pacientes</h1></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="tabla1">
                <thead id="tablacabeza">
                        <tr>
                            <th>id</th>
                            <th>Nombre completo</th>
                            <th>Sexo</th>
                            <th>C.i</th>
                            <th>Edad</th>
                            <th>Telf o cel</th>
                            <th>Email</th>
                            <th>Ciudad</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th>Atendido por</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
            <tbody id="tablacuerpo">

            
           <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->nombre_completo) ?></td>
                <td><?= h($paciente->sexo) ?></td>
                <td><?= h($paciente->c_i) ?></td>
                <td><?= $this->Number->format($paciente->edad) ?></td>
                <td><?= $this->Number->format($paciente->telf_o_cel) ?></td>
                <td><?= h($paciente->email) ?></td>
                <td><?= h($paciente->ciudad) ?></td>
                <td><?= h($paciente->created) ?></td>
                <td><?= h($paciente->modified) ?></td>
                <td id="usuario"><?= $paciente->has('user') ? $this->Html->link($paciente->user->username, ['controller' => 'Users', 'action' => 'view', $paciente->user->id]) : '' ?></td>
                <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['action' => 'view', $paciente->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['action' => 'edit', $paciente->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['action' => 'delete', $paciente->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
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
