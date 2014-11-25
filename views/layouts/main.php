<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<body>

<?php $this->beginBody() ?>
    <!-- MAIN BODY SECTION -->
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
        
        <!-- NAVIGATION -->
        <nav id="w0" class="navbar-inverse navbar" role="navigation">
            <div class="container">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button><a class="navbar-brand" href="/superfoodie/web/index.php">SUPERFOODIE</a></div>
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
        <div id="loader"></div>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>


    </div>


    <!-- FOOTER SECTION -->
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>            
            <p class="pull-right">
                <button class="button">CONTACT</button>
            </p>
            <p class="footer-text">Introducing the Superfoodie range; deliciously cold pressed superfood slices that are hand-made in Byron Bay and inspired by ingredients all over the world.</p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
