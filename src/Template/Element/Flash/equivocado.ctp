<script type="text/javascript">
                     $(function(){
                        PNotify.prototype.options.styling = "bootstrap3";
                        new PNotify({
						    title: 'Error',
						    text: '<?= $message ?>',
						    type: 'error'
						});
                    });
</script>