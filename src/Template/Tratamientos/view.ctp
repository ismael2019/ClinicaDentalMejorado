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
            <td id="usuario"><?= $tratamiento->has('paciente') ? $this->Html->link($tratamiento->paciente->nombre_completo, ['controller' => 'Pacientes', 'action' => 'view', $tratamiento->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Extraccion Dental</th>
            <td><?= h($tratamiento->extraccion_dental) ?></td>
        </tr>
        <tr>
            <th>Tipo Pago</th>
            <td><?= h($tratamiento->tipo_pago) ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($tratamiento->id) ?></td>
        </tr>
        <tr>
            <th>Cantidad Caries</th>
            <td><?= $this->Number->format($tratamiento->cantidad_caries) ?></td>
        </tr>
        <tr>
            <th>Cantidad Conductos</th>
            <td><?= $this->Number->format($tratamiento->cantidad_conductos) ?></td>
        </tr>
        <tr>
            <th>Cantidad Implantes</th>
            <td><?= $this->Number->format($tratamiento->cantidad_implantes) ?></td>
        </tr>
        <tr>
            <th>Costo Total</th>
            <td><?= $this->Number->format($tratamiento->costo_total) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($tratamiento->created) ?></td>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($tratamiento->modified) ?></td>
        </tr>
        <tr>
            <th>Caries</th>
            <td><?= $tratamiento->caries ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Conductos</th>
            <td><?= $tratamiento->conductos ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Rehabilitacion Oral</th>
            <td><?= $tratamiento->rehabilitacion_oral ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Extraccion De Quistes</th>
            <td><?= $tratamiento->extraccion_de_quistes ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Ortodoncia</th>
            <td><?= $tratamiento->ortodoncia ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Protesis Dental</th>
            <td><?= $tratamiento->protesis_dental ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Blanqueamiento Dental</th>
            <td><?= $tratamiento->blanqueamiento_dental ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Implantes</th>
            <td><?= $tratamiento->implantes ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Cuenta del tratamiento') ?></h4>
        <?php if (!empty($tratamiento->cuentas)): ?>
            <?php foreach ($tratamiento->cuentas as $cuentas): ?>
        <table class="vertical-table table table-bordered">
            <tr>
                <th>Id</th>
                <td><?= h($cuentas->id) ?></td>
            </tr>
            <tr>
                <th>Tratamiento Id</th>
                <td><?= h($cuentas->tratamiento_id) ?></td>
            </tr>
            <tr>
                <th>Costo Total</th>
                <td><?= h($cuentas->costo_total) ?></td>
            </tr>
            <tr>
                <th>Cancelado</th>
                <td><?= h($cuentas->cancelado) ?></td>
            </tr>
            <tr>
                <th>Saldo Por Pagar</th>
                <td><?= h($cuentas->saldo_por_pagar) ?></td>
            </tr>
            <tr>
                <th>Created</th>
                <td><?= h($cuentas->created) ?></td>
            </tr>
            <tr>
                <th>Modified</th>
                <td><?= h($cuentas->modified) ?></td>
            </tr>
            <tr>
                <th>Actions</th>
                <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['controller' => 'Cuentas','action' => 'view', $cuentas->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['controller' => 'Cuentas','action' => 'edit', $cuentas->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['controller' => 'Cuentas','action' => 'delete', $cuentas->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $cuentas->id)]) ?>
                            </li>
                            
                          </ul>
                        </div>
                
                    </td>
            </tr>
            
            <tr>
 
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    
    </div>
</div>  


        </div>
    </div>
    </div>
<br>
