<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <nav id="w0" class="navbar-fixed-top navbar"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button></div><div id="w0-collapse" class="collapse navbar-collapse"><ul id="w1" class="navbar-nav bg-dark nav"><li id="down_menu" class="dropdown active"><a class="dropdown-toggle" href="/web/index.php?r=site%2Findex" data-toggle="dropdown">Красноярский край <span class="caret"></span></a><ul id="w2" class="dropdown-menu"><li><a href="/web/index.php?r=site%2Fabout" tabindex="-1">Кемеровская область</a></li>
<li><a href="/web/index.php?r=site%2Fcontact" tabindex="-1">Омская область</a></li>
<li><a href="/web/index.php?r=site%2Fcontact" tabindex="-1">Новосибирская область</a></li>
<li><a href="/web/index.php?r=site%2Fcontact" tabindex="-1">Тюменская область</a></li>
<li><a href="/web/index.php?r=site%2Fcontact" tabindex="-1">Алтайская область</a></li></ul></li>
<li><a href="/web/index.php?r=site%2Fabout">Доставка и оплата</a></li>
<li><a href="/web/index.php?r=site%2Fabout">Техцентр</a></li>
<li><a href="/web/index.php?r=site%2Fabout">О компании</a></li>
<li><a href="/web/index.php?r=site%2Fcontact">Контакт</a></li></ul><ul id="w3" class="navbar-nav navbar-right bg-dark nav"><li><a href="/web/index.php?r=site%2Fcontact">Регистрация</a></li>
<li><a href="/web/index.php?r=site%2Flogin">Вход</a></li></ul></div></div></nav>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
