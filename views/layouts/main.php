<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Codifica caratteri',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $items = [['label' => 'Home', 'url' => ['/site/index']]];
            $items[] = ['label' => 'Categories', 'url' => ['/category']];
            $items[] = ['label' => 'Symbols', 'url' => ['/symbol']];

            if (Yii::$app->user->isGuest){
                $items[] = ['label' => 'Login', 'url' => ['/user/login']];
            } else {
                $items[] = ['label' => 'User', 'url' => ['/user']];
                $items[] = ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                            'url' => ['/user/logout'],
                            'linkOptions' => ['data-method' => 'post']];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $items //[
                    // ['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'About', 'url' => ['/site/about']],
                    // ['label' => 'Categories', 'url' => ['/category']],
                    // ['label' => 'Symbols', 'url' => ['/symbol']],
                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                    // Yii::$app->user->isGuest ?
                        // ['label' => 'Login', 'url' => ['/site/login']] :
                        // ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            // 'url' => ['/site/logout'],
                            // 'linkOptions' => ['data-method' => 'post']],
                    // ['label' => 'User', 'url' => ['/user']],
                    // Yii::$app->user->isGuest ?
                        // :
                        // ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                            // 'url' => ['/user/logout'],
                            // 'linkOptions' => ['data-method' => 'post']],
                // ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Ritoll <?= date('Y') ?></p>
            <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
