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
    <title>Superfoodie - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>   
</head>
<body >
<div class="body-background"></div>
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
                <span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">SUPERFOODIE<sup>TM</sup></a></div>
                <div id="w0-collapse" class="collapse navbar-collapse">
                    <ul id="w1" class="navbar-nav navbar-right nav">
                        <li><a href="index.php?r=site%2Fwhy">WHY</a></li>
                        <li><a href="index.php?r=site%2Fwhere">WHERE</a></li>
                        <li><a href="index.php?r=site%2Fwhat">WHAT</a></li>
                        <li><a href="index.php?r=site%2Feat">EAT</a></li>
                    </ul>                   
                </div>                
            </div>
            <div class="transparent-background"></div>
        </nav>
        <!-- NAVIGATION ENDS -->

        <!--<div id="loader"></div>-->

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
            <div class="pull-left carousel col-lg-4 col-md-4 col-sm-5 col-xs-12"> 
                <!-- SLIDE STARTS -->
                <div class="slides col-lg-4 col-xs-12"> 
                
                    <div id="cappuccino"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-cappuccino.png" />
                        </a>            
                    </div>
                    
                    <div id="blueberry"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-blueberry.png" />
                        </a>            
                    </div>
                    
                    <div id="coconut"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-coconut.png" />
                        </a>            
                    </div>
                    
                    <div id="banana"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-banana.png" />
                        </a>            
                    </div>
                    
                    <div id="apple"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-apple.png" />
                        </a>            
                    </div>  
                    <div id="cappuccino"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-cappuccino.png" />
                        </a>            
                    </div>
                    
                    <div id="blueberry"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-blueberry.png" />
                        </a>            
                    </div>
                    
                    <div id="coconut"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-coconut.png" />
                        </a>            
                    </div>
                    
                    <div id="banana"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-banana.png" />
                        </a>            
                    </div>
                    
                    <div id="apple"> <!-- SLIDE ITEM -->
                        <a> 
                            <img src="images/slide/product-apple.png" />
                        </a>            
                    </div>                    
             
                                           
                </div> 
                <!-- SLIDE ENDS -->   
            </div> 
            <!-- CAROUSEL ENDS -->           
            <p class="pull-right col-lg-3 col-xs-12">
                <span id="footer-icon-1"></span>
                <span id="footer-icon-2"></span>
                <a id="contact-button" href="javascript:void(0)">CONTACT</a>
            </p>
            <p class="footer-text">Introducing the Superfoodie range; deliciously cold pressed superfood slices that are hand-made in Byron Bay and inspired by ingredients all over the world.</p>
        </div>
        <div id="footer-panel">
            
            <div id="product-wrap">
                <span id="panel-close">X</span>
                <div class="product-info" id="cappuccino-info">
                    <div class="product-pic">
                        <img src="images/slide/product-cappuccino-big.png" />
                    </div>
                    <div class="product-detail">
                        <p class="product-head">
                            <span class="product-title">CAPPUCCINO CACAO</span><br>
                            <span class="product-subtitle">ALL DAY FRUIT & NUT SLICE</span>
                        </p>
                        <p class="product-description">
                            A smooth cappuccino taste with a treat 
                            for the superfoodie – Cacao nibs. 
                            This could be the ultimate pick me up.
                            100% natural ingredients:<br><br>
                            Date, Cashew, Almond, (Coconut Cream, Coconut Oil, Coffee, Cinnamon, Natural Vanilla Extract, Natural Cappuccino Extract) (10%), Cacao Nibs, Cacao (4%), Brown Rice Puff.
                        </p>
                    </div>
                </div>
                <div class="product-info" id="coconut-info">
                    <div class="product-pic">
                        <img src="images/slide/product-coconut-big.png" />
                    </div>
                    <div class="product-detail">
                        <p class="product-head">
                            <span class="product-title">COCONUT LIME</span><br>
                            <span class="product-subtitle">ALL DAY FRUIT & NUT SLICE</span>
                        </p>
                        <p class="product-description">
                            A smooth cappuccino taste with a treat 
                            for the superfoodie – Cacao nibs. 
                            This could be the ultimate pick me up.
                            100% natural ingredients:<br><br>
                            Date, Cashew, Almond (12%), Brown Rice Puff, Coconut Cream, Coconut Oil, Lemon, Natural Lime Extract (2%).
                        </p>
                    </div>
                </div>
                <div class="product-info" id="banana-info">
                    <div class="product-pic">
                        <img src="images/slide/product-banana-big.png" />
                    </div>
                    <div class="product-detail">
                        <p class="product-head">
                            <span class="product-title">BANANA COCONUT WALNUT CHIA</span><br>
                            <span class="product-subtitle">BREAKFAST FRUIT & NUT SLICE</span>
                        </p>
                        <p class="product-description">
                            Wake up and smell the banana and coconut - with all the goodness of walnut and chia. A good morning is almost guaranteed. 100% natural ingredients:<br><br>
                            Date, Banana (14%), Walnut (8%), Cashew, Coconut (5%), Brown Rice Puff, Coconut Cream, Coconut Oil, Natural Vanilla Extract, Chia (2%), Lemon.
                        </p>
                    </div>
                </div>
                <div class="product-info" id="blueberry-info">
                    <div class="product-pic">
                        <img src="images/slide/product-blueberry-big.png" />
                    </div>
                    <div class="product-detail">
                        <p class="product-head">
                            <span class="product-title">BLUEBERRY LEMON</span><br>
                            <span class="product-subtitle">ALL DAY FRUIT & NUT SLICE</span>
                        </p>
                        <p class="product-description">
                            Need some extra goodness in your system? This is a great tasting antioxidant infusion! 100% natural ingredients:<br><br>
                            Date, Blueberry (6%), Almond, Cashew, Brown Rice Puff, Lemon (2%), Coconut Cream.
                        </p>
                    </div>
                </div>
                <div class="product-info" id="apple-info">
                    <div class="product-pic">
                        <img src="images/slide/product-apple-big.png" />
                    </div>
                    <div class="product-detail">
                        <p class="product-head">
                            <span class="product-title">APPLE RASPBERRY</span><br>
                            <span class="product-subtitle">BREAKFAST FRUIT & NUT SLICE</span>
                        </p>
                        <p class="product-description">
                            The freshness of apple and raspberry with a hint of cinnamon provides a classic breakfast combination to get you going. Have a good one! 100% natural ingredients:<br><br>
                            Date, Almond, Cashew, Apple (7%), Raspberry (5%), Brown Rice Puff, Cinnamon, Natural Apple Extract.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER ENDS -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
