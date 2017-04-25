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
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('caries') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_caries') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('conductos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_conductos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('rehabilitacion_oral') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('extraccion_de_quistes') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('extraccion_dental') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('ortodoncia') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('protesis_dental') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('blanqueamiento_dental') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('implantes') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_implantes') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('costo_total') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('tipo_pago') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                </thead>
            <tbody id="tablacuerpo">

            
           <?php foreach ($tratamientos as $tratamiento): ?>
            <tr>
                <td><?= $this->Number->format($tratamiento->id) ?></td>
                <td><?= $tratamiento->has('paciente') ? $this->Html->link($tratamiento->paciente->nombre_completo, ['controller' => 'Pacientes', 'action' => 'view', $tratamiento->paciente->id]) : '' ?></td>
                <td><?= h($tratamiento->caries) ?></td>
                <td><?= $this->Number->format($tratamiento->cantidad_caries) ?></td>
                <td><?= h($tratamiento->conductos) ?></td>
                <td><?= $this->Number->format($tratamiento->cantidad_conductos) ?></td>
                <td><?= h($tratamiento->rehabilitacion_oral) ?></td>
                <td><?= h($tratamiento->extraccion_de_quistes) ?></td>
                <td><?= h($tratamiento->extraccion_dental) ?></td>
                <td><?= h($tratamiento->ortodoncia) ?></td>
                <td><?= h($tratamiento->protesis_dental) ?></td>
                <td><?= h($tratamiento->blanqueamiento_dental) ?></td>
                <td><?= h($tratamiento->implantes) ?></td>
                <td><?= $this->Number->format($tratamiento->cantidad_implantes) ?></td>
                <td><?= $this->Number->format($tratamiento->costo_total) ?></td>
                <td><?= h($tratamiento->tipo_pago) ?></td>
                <td><?= h($tratamiento->created) ?></td>
                <td><?= h($tratamiento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tratamiento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tratamiento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tratamiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamiento->id)]) ?>
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


