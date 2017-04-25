<div class="conteni">
	<div class="container" id="fondologin">
		<div class="panel panel-default">
  			<div class="panel-heading">
    			<center><h3 class="panel-title">INICIAR SESION</h3></center>
  			</div>
  			<div class="panel-body">
    		 <div class="users form">
			<?= $this->Flash->render() ?>
			<?= $this->Form->create() ?>
				    <fieldset>
				        <center><h4>Porfavor ingrese su email y su contraseña</h4></center>
				        <center><?= $this->Html->image('../img/login/usuario.jpg') ?></center>
				        <?= $this->Form->control('email',['class'=>'form-control','placeholder'=>'Email']) ?>
				        <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>'Contraseña']) ?>
				    </fieldset>
				    <br>
			<center><?= $this->Form->button(('Iniciar sesion'),['class'=>'btn btn-primary']); ?></center>
			<?= $this->Form->end() ?>
			</div>
  			</div>
		</div>  

		 
	</div>
	
</div>
