<!-- Fixed navbar -->
 <?php
            if ($current_user['role'] != 'dentista' && $current_user['role'] != 'protesista')
        {
        ?>

    <div class="navbar navbar-inverse navbar-fixed-top" id="menucon">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><?= $this->Html->image('logooficialpng.png') ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" id="menu">
            <li><?= $this->Html->link('Inicio',['controller'=>'Users','action'=>'bienvenido'],['class'=>'fa fa-home' ,'aria-hidden'=>'true'])?>
            </li>
            <li class="dropdown" >
              <a href="#" class="fa fa-stethoscope dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tratamientos <span class="caret"></span></a>
              <ul class="dropdown-menu" id="menudesple">
              <li><a href="#ortodoncia">Ortodoncia</a></li>
              <li><a href="#endodoncia">Endodoncia</a></li>
              <li><a href="#periodoncia">Periodoncia</a></li>
              <li><a href="#protesis">Protesis Dental</a></li>
              <li><a href="#implantologia">Implantologia</a></li>
              <li><a href="#estetica">Estetica Dental</a></li>
              <li><a href="#blanqueamiento">Blanqueamiento Dental</a></li>
              <li><a href="#rehabilitacion">Rehabilitacion Oral</a></li>
              <li role="separator" class="divider"></li>
              <li class="disabled"> <a href="#">Cirugia Bucal:</a></li>
              <li><a href="#quistes">Quistes</a></li>
              <li><a href="#apicectomia">Apicectomia</a></li>
            </ul>
          </li>
            <li ><a class="fa fa-angellist" aria-hidden="true" href="#misionvision">Mision y Vision</a></li>
            
            <li><a class="fa fa-whatsapp" aria-hidden="true" href="#contactenos">Contactenos</a></li>
            <li role="presentation"><?= $this->Html->link('Sugerencias',['controller'=>'sugerencias', 'action'=>'add'],['class'=>'fa fa-envelope-open-o', 'aria-hidden'=>'true'])?></li>

            
            <li><?= $this->Html->link('Login',['controller'=>'Users','action'=>'login'],['class'=>'fa fa-user-md', 'aria-hidden'=>'true'])?></li>
            
			       
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php } ?>