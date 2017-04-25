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
                    <center><h1 class="page-header">Usuario:&nbsp<?= h($user->username) ?>&nbspC.I:&nbsp<?= h($user->c_i)?><br>&nbspCorreo:&nbsp<?= h($user->email)?></h1></center>
                </div>
            </div>
            <div class="users view large-9 medium-8 columns content">
   <div class="table-responsive">
    <table class="vertical-table table table-bordered">
        <tr>
            <th>Foto:</th>
            <td><?= $this->Html->image('../files/Users/photo/' . '/' . $user->photo,['class'=>'img-thumbnail','width'=>'400px']) ?></td>
        </tr>
        <tr>
            <th>Nombre de usuario:</th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>Ocupacion:</th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th>C.I:</th>
            <td><?= h($user->c_i) ?></td>
        </tr>
        <tr>
            <th>Id:</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Created:</th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th>Modified:</th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    </div>
</div>  
        </div>
    </div>
<br>