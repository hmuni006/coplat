<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">

    <img style="float:left; height:50px; margin-left:50px"src='/coplat/images/mentor.png'/>
    <h2 style="margin-bottom:40px;float:left;margin-left:10px">Collaborative Platform Login</h2>
    <div id="login">
		<?php 
			$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            	'id'=>'login-form',
				'type'=>'horizontal',
            	'enableClientValidation'=>true,
            	'clientOptions'=>array(
                'validateOnSubmit'=>true,
            	),
        	)); 
		?>
    
		<?php echo $form->textField($model,'username',array('placeholder'=>'User Name')); ?>
        <?php echo $form->error($model,'username'); ?></br></br>
    
        <?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
        <?php echo $form->error($model,'password'); ?></br></br>
        
        <?php 
			echo $form->checkBox($model,'rememberMe',array('style'=>'float:left')); 
		?>
		<p style="float:left; margin-left:5px">Remember Me</p></br></br>
        
        <div style="float:left;">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>'Login',
            )); ?>	
        </div>
        
		<div style="float:left; margin-left: 10px;margin-top: -5px;">
			<a style="float:left;" href= "/coplat/index.php/site/forgotPassword" >  Forgot Password? </a>	
			<div style="clear:both"></div>
			<a style="float:left;" href= "/coplat/index.php/user/create" > Register  </a>	
		</div>
        
        
   </div>

<?php $this->endWidget(); ?>
</div><!-- form -->