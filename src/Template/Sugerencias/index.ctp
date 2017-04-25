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
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telf_o_cel</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>Acciones</th>
                    </tr>
        </thead>
           <tbody id="tablacuerpo">
            <?php foreach ($sugerencias as $sugerencia): ?>
            <tr>
                <td><?= $this->Number->format($sugerencia->id) ?></td>
                <td><?= h($sugerencia->nombre) ?></td>
                <td><?= h($sugerencia->apellido) ?></td>
                <td><?= h($sugerencia->email) ?></td>
                <td><?= h($sugerencia->telf_o_cel) ?></td>
                <td><?= h($sugerencia->created) ?></td>
                <td><?= h($sugerencia->modified) ?></td>
                <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['action' => 'view', $sugerencia->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['action' => 'edit', $sugerencia->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['action' => 'delete', $sugerencia->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $sugerencia->id)]) ?>
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

