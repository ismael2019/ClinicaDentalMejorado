<div id="page-wrapper" >
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Agregar Sugerencia</h1></center>
                </div>
            </div>
             <?= $this->Form->create($sugerencia) ?>
    <fieldset>
       <?php
            echo $this->Form->control('nombre',['class'=>'form-control']);
            echo $this->Form->control('apellido',['class'=>'form-control']);
            echo $this->Form->control('email',['class'=>'form-control']);
            echo $this->Form->control('telf_o_cel',['class'=>'form-control']);
            echo $this->Form->control('sugerencia',['class'=>'form-control']);
        ?>
    </fieldset>
    <br><center>
                <?= $this->Form->button(('Enviar sugerencia'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
                </center>

        </div>
    </div>
    <br>

