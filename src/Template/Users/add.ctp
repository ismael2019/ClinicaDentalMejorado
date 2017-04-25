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
                    <center><h1 class="page-header">Agregar usuarios</h1></center>
                </div>
            </div>
              <?= $this->Form->create($user,['class'=>'form-group','type' => 'file']) ?>
                <fieldset>
                    <?php
                        echo $this->Form->control('photo', ['type' => 'file']);
                        echo $this->Form->control('username',['class'=>'form-control']);
                        echo $this->Form->control('email',['class'=>'form-control']);
                        echo $this->Form->control('password',['class'=>'form-control']);
                        echo $this->Form->input('role',[
                        'options' => ['dentista' => 'Dentista', 'protesista' => 'Protesista'],'class'=>'form-control'
                    ]);
                        echo $this->Form->control('c_i',['class'=>'form-control']);
                    ?>
                </fieldset>
                <br><center>
                <?= $this->Form->button(('Registrar'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
                </center>

        </div>
    </div>
<br>
  
