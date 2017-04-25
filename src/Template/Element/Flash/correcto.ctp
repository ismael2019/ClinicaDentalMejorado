
<script type="text/javascript">
                     $(function(){
                     	PNotify.prototype.options.styling = "bootstrap3";
                        new PNotify({
					    title: 'Exito',
					    text: '<?= $message ?>',
					    type: 'success'
					});
		});
</script>