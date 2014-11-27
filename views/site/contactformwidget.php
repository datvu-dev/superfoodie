<?php
use app\components\ContactFormWidget;
?>
<?=  ContactFormWidget::widget([
	<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

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
])?>