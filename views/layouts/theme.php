<?php
/**
 * @var $this \luya\web\View
 */

use nadar\creative\CreativeThemeAsset;

CreativeThemeAsset::register($this);
 
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="boehsermoe">
        <?php $this->head() ?>
    </head>
    <body id="page-top">
    <?php $this->beginBody() ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?= Yii::$app->siteTitle; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <?php foreach (Yii::$app->menu->find()->container('default')->root()->all() as $item): ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?= $item->link; ?>"><?= $item->title; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    </nav>
    
    <?= $content; ?>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mt-0">Let's Get In Touch!</h2>
            <hr class="divider my-4">
            <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
            <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
            <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
        </div>
        </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
    <div class="container">
        <div class="small text-center text-muted">Copyright &copy; <?= date("Y"); ?> | Theme by Start Bootstrap</div>
    </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
