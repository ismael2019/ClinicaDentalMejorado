<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?= $this->Html->image('logooficialpng.png') ?></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu 
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>
    -->
        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top" id="menuadmin">
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Opciones <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                   <li><?= $this->Html->link('Cerrar sesion',['controller'=>'users','action'=>'logout'],['class'=>'fa fa-gear fa-fw','aria-hidden'=>'true'])?>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->link('Sugerencias',['controller'=>'sugerencias','action'=>'index'],['class'=>'fa fa-commenting-o','aria-hidden'=>'true','id'=>'menuadmin2'])?>

                        <?= $this->Html->link('Agregar usuarios',['controller'=>'users','action'=>'add'],['class'=>'fa fa-user-circle-o','aria-hidden'=>'true','id'=>'menuadmin2'])?>

                        <?= $this->Html->link('Lista de usuarios',['controller'=>'users','action'=>'index'],['class'=>'fa fa-address-book','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                    </li>
                    <li>
                        <a href="#"   id="menuadmin2"><i class="fa fa-file-text"></i> Registros<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= $this->Html->link('Registrar pacientes',['controller'=>'pacientes','action'=>'add'],['class'=>'fa fa-user-plus','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                            </li>
                            
                            <li>
                                 <?= $this->Html->link('Registrar historial medico',['controller'=>'historiales','action'=>'add'],['class'=>'fa fa-address-card','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                            </li>
                            <li>
                                 <?= $this->Html->link('Registrar tratamientos',['controller'=>'tratamientos','action'=>'add'],['class'=>'fa fa-heart','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                            </li>
                            <li>
                                 <?= $this->Html->link('Crear cuenta de pago',['controller'=>'tratamientos','action'=>'add'],['class'=>'fa fa-usd','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                            </li>
                            
                                                            
                                 
                                <li>
                                 <?= $this->Html->link('Recetar medicamentos',['controller'=>'recetas','action'=>'add'],['class'=>'fa fa-medkit','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                </li>
                            
                        </ul>
                       
                    </li>
                    <li>
                         <a href="#"   id="menuadmin2"><i class="fa fa-list-ul"></i>Listas<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                    <?= $this->Html->link('Lista de pacientes',['controller'=>'pacientes','action'=>'index'],['class'=>'fa fa-users','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                    </li>
                                    <li>
                                    <?= $this->Html->link('Lista de historiales medicos',['controller'=>'historiales','action'=>'index'],['class'=>'fa fa-list-ol','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                    </li>
                                    <li>
                                    <?= $this->Html->link('Lista de tratamientos',['controller'=>'tratamientos','action'=>'index'],['class'=>'fa fa-hospital-o','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                    </li>
                                    <li>
                                     <?= $this->Html->link('Lista de cuentas de pago',['controller'=>'cuentas','action'=>'index'],['class'=>'fa fa-cc-diners-club','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                    </li>
                                    <li>
                                     <?= $this->Html->link('Lista de recetas medicas',['controller'=>'recetas','action'=>'index'],['class'=>'fa fa-plus-square','aria-hidden'=>'true','id'=>'menuadmin2'])?>
                                    </li>
                                </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    

</div>
