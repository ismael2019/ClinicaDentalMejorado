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
                    <center><h1 class="page-header">Editar paciente</h1></center>
                </div>
            </div>
              <?= $this->Form->create($paciente) ?>
    <fieldset>
        <?php
            echo $this->Form->control('nombre_completo',['class'=>'form-control']);
             echo $this->Form->control('sexo',[
                        'options' => ['masculino' => 'Masculino', 'femenino' => 'Femenino'],'class'=>'form-control']);
            echo $this->Form->control('c_i',['class'=>'form-control']);
            echo $this->Form->control('edad',['class'=>'form-control']);
            echo $this->Form->control('telf_o_cel',['class'=>'form-control']);
            echo $this->Form->control('email',['class'=>'form-control']);
            echo $this->Form->control('ciudad',[
                        'options' => ['cochabamba' => 'Cochabamba', 'la paz' => 'La Paz', 'Oruro' => 'Oruro', 'potosi' => 'Potosi', 'sucre' => 'Sucre', 'tarija' => 'Tarija', 'Beni' => 'Beni', 'santa cruz' => 'Santa Cruz', 'Pando' => 'Pando'],'class'=>'form-control']);
            echo $this->Form->control('user_id',['class'=>'form-control'], ['options' => $users]);
        ?>
    </fieldset>
                <br>
              <center>  <?= $this->Form->button(('Cambiar'),['class'=>'btn btn-success']) ?>
                        <?= $this->Form->end() ?>
              </center>
        </div>
    </div>


<br>
