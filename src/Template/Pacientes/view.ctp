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
                    <center><h1 class="page-header">Paciente:&nbsp<?= h($paciente->nombre_completo) ?>&nbspC.I:&nbsp<?= h($paciente->c_i)?></h1></center>
                </div>
            </div>
            <div class="users view large-9 medium-8 columns content">
   <div class="table-responsive">
    <table class="vertical-table table table-bordered">
        <tr>
            <th>Nombre Completo</th>
            <td><?= h($paciente->nombre_completo) ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?= h($paciente->sexo) ?></td>
        </tr>
        <tr>
            <th>C I</th>
            <td><?= h($paciente->c_i) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($paciente->email) ?></td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td><?= h($paciente->ciudad) ?></td>
        </tr>
        <tr>
            <th>Atendido por</th>
            <td id="usuario"><?= $paciente->has('user') ? $this->Html->link($paciente->user->username, ['controller' => 'Users', 'action' => 'view', $paciente->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?= $this->Number->format($paciente->edad) ?></td>
        </tr>
        <tr>
            <th>Telf O Cel</th>
            <td><?= $this->Number->format($paciente->telf_o_cel) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($paciente->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($paciente->modified) ?></td>
        </tr>
    </table>
     <div class="related">
        <h4><?= __('Historial medico del paciente:') ?></h4>
        <?php if (!empty($paciente->historiales)): ?>
        <table class="vertical-table table table-bordered">
        <?php foreach ($paciente->historiales as $historiales): ?>
            <tr>
                <th>Id</th>
                <td><?= h($historiales->id) ?></td>
            </tr>
            <tr>
                <th>Paciente Id</th>
                <td><?= h($historiales->paciente_id) ?></td>
            </tr>
            <tr>
                <th>Problemas Del Corazon</th>
                <td><?= h($historiales->problemas_del_corazon) ?></td>
            </tr>
            <tr>
                <th>Presion Sanguinea Alta</th>
                <td><?= h($historiales->presion_sanguinea_alta) ?></td>
            </tr>
            <tr>
                <th>Problemas Circulatorios</th>
                <td><?= h($historiales->problemas_circulatorios) ?></td>
            </tr>
            <tr>
                <th>Problemas Nerviosos</th>
                <td><?= h($historiales->problemas_nerviosos) ?></td>
            </tr>
            <tr>
                <th>RadioTerapia</th>
                <td><?= h($historiales->radioTerapia) ?></td>
            </tr>
            <tr>
                <th>Valvulas Del Corazon Artificiales</th>
                <td><?= h($historiales->valvulas_del_corazon_artificiales) ?></td>
            </tr>
            <tr>
                <th>Perdida De Peso</th>
                <td><?= h($historiales->perdida_de_peso) ?></td>
            </tr>
            <tr>
                <th>Problemas De Espalda</th>
                <td><?= h($historiales->problemas_de_espalda) ?></td>
            </tr>
            <tr>
                <th>Enfermedades Respiratorias</th>
                <td><?= h($historiales->enfermedades_respiratorias) ?></td>
            </tr>
            <tr>
                <th>Diabetes</th>
                <td><?= h($historiales->diabetes) ?></td>
            </tr>
            <tr>
                <th>Presion Sanguinea Baja</th>
                <td><?= h($historiales->presion_sanguinea_baja) ?></td>
            </tr>
            <tr>
                <th>Epilepsia</th>
                <td><?= h($historiales->epilepsia) ?></td>
            </tr>
            <tr>
                <th>Hepatitis</th>
                <td><?= h($historiales->hepatitis) ?></td>
            </tr>
            <tr>
                <th>Cancer</th>
                <td><?= h($historiales->cancer) ?></td>
            </tr>
            <tr>
                <th>Tratamiento Siquiatrico</th>
                <td><?= h($historiales->tratamiento_siquiatrico) ?></td>
            </tr>
            <tr>
                <th>Dieta Especial</th>
                <td><?= h($historiales->dieta_especial) ?></td>
            </tr>
            <tr>
                <th>Enfermedades De La Sangre</th>
                <td><?= h($historiales->enfermedades_de_la_sangre) ?></td>
            </tr>
            <tr>
                <th>Artitris</th>
                <td><?= h($historiales->artitris) ?></td>
            </tr>
            <tr>
                <th>Glandulas Del Cuello Hinchadas</th>
                <td><?= h($historiales->glandulas_del_cuello_hinchadas) ?></td>
            </tr>
            <tr>
                <th>Fiebre Reumatica</th>
                <td><?= h($historiales->fiebre_reumatica) ?></td>
            </tr>
            <tr>
                <th>VIH</th>
                <td><?= h($historiales->VIH) ?></td>
            </tr>
            <tr>
                <th>Embolia Cerebral</th>
                <td><?= h($historiales->embolia_cerebral) ?></td>
            </tr>
            <tr>
                <th>Ulceras</th>
                <td><?= h($historiales->ulceras) ?></td>
            </tr>
            <tr>
                <th>Enfermedades Venereas</th>
                <td><?= h($historiales->enfermedades_venereas) ?></td>
            </tr>
            <tr>
                <th>Hemofilia</th>
                <td><?= h($historiales->hemofilia) ?></td>
            </tr>
            <tr>
                <th>Osteoporosis</th>
                <td><?= h($historiales->osteoporosis) ?></td>
            </tr>
            <tr>
                <th>Enfermedades De Higado</th>
                <td><?= h($historiales->enfermedades_de_higado) ?></td>
            </tr>
            <tr>
                <th>Diarrea Cronica</th>
                <td><?= h($historiales->diarrea_cronica) ?></td>
            </tr>
            <tr>
                <th>Drogadiccion</th>
                <td><?= h($historiales->drogadiccion) ?></td>
            </tr>
            <tr>
                <th>Otros</th>
                <td><?= h($historiales->otros) ?></td>
            </tr>
            <tr>
                <th>Alergias A Anestesias</th>
                <td><?= h($historiales->alergias_a_anestesias) ?></td>
            </tr>
            <tr>
                <th>Alergias A Medicinas</th>
                <td><?= h($historiales->alergias_a_medicinas) ?></td>
            </tr>
            <tr>
                <th>Alergias Generales</th>
                <td><?= h($historiales->alergias_generales) ?></td>
            </tr>
            <tr>
                <th>Created</th>
                <td><?= h($historiales->created) ?></td>
            </tr>
            <tr>
                <th>Modified</th>
                <td><?= h($historiales->modified) ?></td>
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
                            <li><?= $this->Html->link(('Mostrar'), ['controller'=>'historiales','action' => 'view', $historiales->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['controller'=>'historiales','action' => 'edit', $historiales->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['controller'=>'historiales','action' => 'delete', $historiales->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $historiales->id)]) ?>
                            </li>
                            
                          </ul>
                        </div>
                                
                               
                                
                              
                    </td>
            </tr>
            
           
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Recetas del paciente:') ?></h4>
        <?php if (!empty($paciente->recetas)): ?>
            <?php foreach ($paciente->recetas as $recetas): ?>
        <table class="vertical-table table table-bordered">
            <tr>
                <th>Id</th>
                <td><?= h($recetas->id) ?></td>
            </tr>
            <tr>
                <th>Paciente id</th>
                <td><?= h($recetas->paciente_id) ?></td>
            </tr>
            <tr>
                <th>Detalle de la receta</th>
                <td><?= h($recetas->detalle_de_la_receta) ?></td>
            </tr>
            <tr>
                <th>Creado</th>
                <td><?= h($recetas->created) ?></td>
            </tr>
            <tr>
                <th>Modificado</th>
                <td><?= h($recetas->modified) ?></td>
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
                            <li><?= $this->Html->link(('Mostrar'), ['controller'=>'recetas','action' => 'view', $recetas->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['controller'=>'recetas','action' => 'edit', $recetas->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['controller'=>'recetas','action' => 'delete', $recetas->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $recetas->id)]) ?>
                            </li>
                            
                          </ul>
                        </div>
                                
                               
                                
                              
                    </td>
            </tr>
            
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Tratamientos del pacientes:') ?></h4>
        <?php if (!empty($paciente->tratamientos)): ?>
        <?php foreach ($paciente->tratamientos as $tratamientos): ?>
        <table class="vertical-table table table-bordered">
            <tr>
                <th>Id</th>
                <td><?= h($tratamientos->id) ?></td>
            </tr>
            <tr>
                <th>Id del paciente</th>
                <td><?= h($tratamientos->paciente_id) ?></td>
            </tr>
            <tr>
                <th>Caries</th>
                <td><?= h($tratamientos->caries) ?></td>
            </tr>
            <tr>
                <th>Cantidad de caries</th>
                <td><?= h($tratamientos->cantidad_caries) ?></td>
            </tr>
            <tr>
                <th>Conductos</th>
                <td><?= h($tratamientos->conductos) ?></td>
            </tr>
            <tr>
                <th>Cantidad de conductos</th>
                <td><?= h($tratamientos->cantidad_conductos) ?></td>
            </tr>
            <tr>
                <th>Rehabilitacion oral</th>
                <td><?= h($tratamientos->rehabilitacion_oral) ?></td>
            </tr>
            <tr>
                <th>Extraccion de quistes</th>
                <td><?= h($tratamientos->extraccion_de_quistes) ?></td>
            </tr>
            <tr>
                <th>Extraccion dental</th>
                <td><?= h($tratamientos->extraccion_dental) ?></td>
            </tr>
            <tr>
                <th>Ortodoncia</th>
                <td><?= h($tratamientos->ortodoncia) ?></td>
            </tr>
            <tr>
                <th>Protesis dental</th>
                <td><?= h($tratamientos->protesis_dental) ?></td>
            </tr>
            <tr>
                <th>Blanqueamiento dental</th>
                <td><?= h($tratamientos->blanqueamiento_dental) ?></td>
            </tr>
            <tr>
                <th>Implantes</th>
                <td><?= h($tratamientos->implantes) ?></td>
            </tr>
            <tr>
                <th>Cantidad implantes</th>
                <td><?= h($tratamientos->cantidad_implantes) ?></td>
            </tr>
            <tr>
                <th>Costo total</th>
                <td><?= h($tratamientos->costo_total) ?></td>
            </tr>
            <tr>
                <th>Tipo pago</th>
                <td><?= h($tratamientos->tipo_pago) ?></td>
            </tr>
            <tr>
                <th>Creado</th>
                <td><?= h($tratamientos->created) ?></td>
            </tr>
            <tr>
                <th>Modificado</th>
                <td><?= h($tratamientos->modified) ?></td>
            </tr>
                <th>Actions</th>
                <td id="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Acciones
                            <span class="fa fa-gear fa-fw"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="menuacciones">
                            <li><?= $this->Html->link(('Mostrar'), ['controller'=>'tratamientos','action' => 'view', $tratamientos->id],['class'=>'btn btn-info']) ?>
                            </li>
                            <li> <?= $this->Html->link(('Editar'), ['controller'=>'tratamientos','action' => 'edit', $tratamientos->id],['class'=>'btn btn-success']) ?>
                             </li>
                            <li><?= $this->Form->postLink(('Eliminar'), ['controller'=>'tratamientos','action' => 'delete', $tratamientos->id], ['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $tratamientos->id)]) ?>
                            </li>
                            
                          </ul>
                        </div>
                                
                               
                                
                              
                    </td>
                </tr>
             <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    </div>
</div>  
        </div>
    </div>
<br>
