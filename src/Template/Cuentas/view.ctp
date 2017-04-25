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
                    <center><h1 class="page-header">Detalle de la cuenta</h1></center>
                </div>
            </div>
            <div class="users view large-9 medium-8 columns content">
   <div class="table-responsive">
    <table class="vertical-table table table-bordered">
        <tr>
            <th scope="row"><?= __('Tratamiento') ?></th>
            <td id="usuario"><?= $cuenta->has('tratamiento') ? $this->Html->link($cuenta->tratamiento->id, ['controller' => 'Tratamientos', 'action' => 'view', $cuenta->tratamiento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cuenta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Costo Total') ?></th>
            <td><?= $this->Number->format($cuenta->costo_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelado') ?></th>
            <td><?= $this->Number->format($cuenta->cancelado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo Por Pagar') ?></th>
            <td><?= $this->Number->format($cuenta->saldo_por_pagar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cuenta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cuenta->modified) ?></td>
        </tr>
    </table>
    </div>
</div>  
        </div>
    </div>
<br>

