<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
?>
<body id="contact">
<div class="site-contact">    
    <div class="body-content">
        <div class="top-panel col-lg-4 col-xs-10" id="contact-panel">
            
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

            <!--<p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
                <?php endif; ?>
            </p>-->

            <?php else: ?>

            
                <p class="panel-text">
                    Lot 6 Dudgeons Lane Bangalow NSW 2479<br>
                    Ph. +61 (0)2 6687 2221<br>
                    E. chat@superfoodie.com.au
                </p>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>                    
                    <?= $form->field($model, 'enquiry') ?>                   
                    <div class="form-group">
                        <?= Html::submitButton('SEND', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
                
            

            <?php endif; ?>
            <div class="transparent-background"></div>

        </div>
    </div>
</div>
</body>