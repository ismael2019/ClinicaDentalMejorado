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
                    <center><h1 class="page-header">Agregar tratamientos al paciente</h1></center>
                </div>
            </div>
    <?= $this->Form->create($tratamiento) ?>
    <fieldset>
        
        <?php
            echo $this->Form->control('paciente_id',['class'=>'form-control'] , ['options' => $pacientes]);
            echo $this->Form->control('caries',['name'=>'check', 'id'=>'cantidad_caries', 'value'=>'1', 'onchange'=>'javascript:showContent()']);
        ?>
        <div class="alert alert-success" role="alert" id="contenidocaries" style="display: none;">
        <?php
            echo $this->Form->control('cantidad_caries',['class'=>'form-control','value'=>'0']);
        ?>
        </div>
        <?php
            echo $this->Form->control('conductos',['name'=>'conductos', 'id'=>'cantidad_conductos', 'value'=>'1', 'onchange'=>'javascript:showContent()']);
        ?>
        <div class="alert alert-success" role="alert" id="contenidoconductos" style="display: none;">
        <?php
            echo $this->Form->control('cantidad_conductos',['class'=>'form-control','value'=>'0']);
        ?>
        </div>
        <?php
            echo $this->Form->control('rehabilitacion_oral');
            echo $this->Form->control('extraccion_de_quistes');
            echo $this->Form->control('extraccion_dental',[
                        'options' => ['ninguno' => 'Ninguno','incisivo central' => 'Incisivo central','Incisivo lateral' => 'incisivo lateral','colmillo' => 'Colmillo', 'primer premolar' => 'Primer premolar', 'segundo premolar' => 'Segundo premolar', 'primer molar' => 'Primer molar', 'segundo molar' => 'Segundo molar','tercer' => 'Tercer molar' ],'class'=>'form-control']);
            echo $this->Form->control('ortodoncia');
            echo $this->Form->control('protesis_dental');
            echo $this->Form->control('blanqueamiento_dental');
            echo $this->Form->control('implantes',['name'=>'implantes', 'id'=>'cantidad_implantes', 'value'=>'1', 'onchange'=>'javascript:showContent()']);
        ?>
         <div class="alert alert-success" role="alert" id="contenidoimplantes" style="display: none;">
        <?php
            echo $this->Form->control('cantidad_implantes',['class'=>'form-control','value'=>'0']);
        ?>
        </div>
        <?php
            echo $this->Form->control('costo_total',['class'=>'form-control']);
            echo $this->Form->control('tipo_pago',['options' => ['Contado' => 'Contado','Cuotas'=>'Cuotas'],'class'=>'form-control']);
        ?>
    </fieldset>



    <br><center>
                <?= $this->Form->button(('Registrar tratamiento'),['class'=>'btn btn-success']) ?>
                <?= $this->Form->end() ?>
                </center>
                <br>

        </div>
    </div>
    <br>


<!--Codigo javascrip para mostrar las cantidades-->
<!--Caries-->
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("contenidocaries");
        element2 = document.getElementById("contenidoconductos");
        element3 = document.getElementById("contenidoimplantes");
        check = document.getElementById("cantidad_caries");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
        conductos = document.getElementById("cantidad_conductos");
        if (conductos.checked) {
            element2.style.display='block';
        }
        else {
            element2.style.display='none';
        }
        implantes = document.getElementById("cantidad_implantes");
        if (implantes.checked) {
            element3.style.display='block';
        }
        else {
            element3.style.display='none';
        }
    }
</script>



