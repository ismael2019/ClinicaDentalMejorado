<script type="text/javascript">
                     $(function(){
                     	PNotify.prototype.options.styling = "bootstrap3";
                        new PNotify({
					    title: 'Cierre de sesion',
					    text: '<?= $message ?>',
					    type: 'info'
					});
		});
</script>