<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); 
	$restictfileExtsArr = Configure::read('RESTRICT_FILE_EXTS');	?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css(array('/assets/css/bootstrap.min', '/assets/font-awesome/css/font-awesome.min','/assets/css/fonts.googleapis.com', '/assets/css/ace.min',
									 '/assets/css/ace-skins.min',  '/assets/css/ace-rtl.min'));
		
		echo $this->Html->script(array('/assets/js/ace-extra.min', '/assets/js/jquery-2.1.4.min', '/assets/js/bootstrap.min', '/assets/js/jquery-ui.custom.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="no-skin">
	 <?php echo $this->element('topbar');
	   	   $message =  $this->Session->flash(); ?>
	<?php if (isset($message) && !empty($message)) { 
		$style = "block";
	} elseif (empty($message)) {
		$style = "none";
	} ?>

	 <div class="modal fade" id="dataMessage" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                    	Attention!!!
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success">
                    	<?php echo $message; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>
		<?php echo $this->element('sidebar'); ?>
		<?php CakeSession::delete('Message.flash'); ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('footer');?>
	</div>
		<!-- END CONTAINER -->
		<?php echo $this->element('sql_dump'); ?>

	<script type="text/javascript">
		$(document).ready(function() {
			var message = '<?php echo $message;?>';
			if (message.length > 0 ) {
				$("#dataMessage").modal('toggle');
			} else {
				$("#dataMessage").modal('hide');
			}
		});
	</script>
</body>
</html>