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
                    <center><h1 class="page-header">Sugerencia hecha por el usuario:&nbsp<?= h($sugerencia->nombre) ?></h1></center>
                </div>
            </div>
            <div class="sugerencias view large-9 medium-8 columns content">
    <div class="table-responsive">
    <table class="vertical-table table table-bordered">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($sugerencia->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($sugerencia->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($sugerencia->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telf O Cel') ?></th>
            <td><?= h($sugerencia->telf_o_cel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sugerencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sugerencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sugerencia->modified) ?></td>
        </tr>
    </table>
    <hr>
    </div>
    <div class="row">
        <center><h2>Sugerencia</h2>
        <?= $this->Text->autoParagraph(h($sugerencia->sugerencia)); ?> </center>
    </div>
</div>
            
        </div>  
</div>
    
<br>

