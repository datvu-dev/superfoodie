<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>   
</head>
<body >
<div class="body-landing body-background"></div>
<?php $this->beginBody() ?>
    <!-- BODY STARTS -->
    <div class="wrap">
        <!--<?php
            NavBar::begin([
                'brandLabel' => 'SUPERFOODIE',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'WHY', 'url' => ['/site/why']],
                    ['label' => 'WHERE', 'url' => ['/site/where']],
                    ['label' => 'WHAT', 'url' => ['/site/what']],
                    ['label' => 'EAT', 'url' => ['/site/eat']],
                    /*Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],*/
                ],
            ]);
            NavBar::end();
        ?>-->
        
        <!-- NAVIGATION STARTS -->
        <nav id="w0" class="navbar-inverse navbar" role="navigation">
            <div class="container">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button><a class="navbar-brand" href="/superfoodie/web/index.php">SUPERFOODIE<sup>TM</sup></a></div>
                <div id="w0-collapse" class="collapse navbar-collapse">
                    <ul id="w1" class="navbar-nav navbar-right nav">
                        <li><a href="/superfoodie/web/index.php?r=site%2Fwhy">WHY</a></li>
                        <li><a href="/superfoodie/web/index.php?r=site%2Fwhere">WHERE</a></li>
                        <li><a href="/superfoodie/web/index.php?r=site%2Fwhat">WHAT</a></li>
                        <li><a href="/superfoodie/web/index.php?r=site%2Feat">EAT</a></li>
                    </ul>                   
                </div>                
            </div>
            <div class="transparent-background"></div>
        </nav>
        <!-- NAVIGATION ENDS -->

        <div id="loader"></div>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
            <div id="contact-wrap" class="contact-inactive">
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
                <form id="contact-form" action="/superfoodie/web/index.php?r=site%2Fcontact" method="post" role="form" style="display: block;">
                    <input type="hidden" name="_csrf" value="am1kSkxsZjIAOwEcGxwkBTIVJiIpOlF4Bhs.Dj8GBFQuOSssfAQwSw==" style="display: inline-block;">                    
                    <div class="form-group field-contactform-name required">
                        <label class="control-label" for="contactform-name">Name</label>
                        <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]">
                        <p class="help-block help-block-error" style="display: block;"></p>
                    </div>                    
                    <div class="form-group field-contactform-email required">
                        <label class="control-label" for="contactform-email">Email</label>
                        <input type="text" id="contactform-email" class="form-control" name="ContactForm[email]">
                        <p class="help-block help-block-error" style="display: block;"></p>
                    </div>                    
                    <div class="form-group field-contactform-enquiry required">
                        <label class="control-label" for="contactform-enquiry">Enquiry</label>
                        <input type="text" id="contactform-enquiry" class="form-control" name="ContactForm[enquiry]">
                        <p class="help-block help-block-error" style="display: block;"></p>
                    </div>                   
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="contact-button">SEND</button>                    
                    </div>
                </form>  
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- BODY ENDS -->

    <!-- FOOTER STARTS -->
    <footer class="footer">
        <div class="container">
            <!-- CAROUSEL STARTS -->
            <div class="pull-left carousel col-lg-5 col-xs-12"> 
                <!-- SLIDE STARTS -->
                <div class="slides col-lg-5 col-xs-12"> 
                
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-brown.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-blue.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-green.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-yellow.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-pink.png" />
                        </a>            
                    </div>  
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-brown.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-blue.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-green.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-yellow.png" />
                        </a>            
                    </div>
                    
                    <div> <!-- SLIDE ITEM -->
                        <a href="#"> 
                            <img src="images/slide/product-pink.png" />
                        </a>            
                    </div>                    
             
                                           
                </div> 
                <!-- SLIDE ENDS -->   
            </div> 
            <!-- CAROUSEL ENDS -->           
            <p class="pull-right col-lg-2 col-xs-12">
                <a class="button" id="contact-button" href="javascript:void(0)">CONTACT</a>
            </p>
            <p class="footer-text">Introducing the Superfoodie range; deliciously cold pressed superfood slices that are hand-made in Byron Bay and inspired by ingredients all over the world.</p>
        </div>
    </footer>
    <!-- FOOTER ENDS -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
