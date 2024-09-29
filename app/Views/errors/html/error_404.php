<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
      <!-- CSS only -->
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
      <!-- fancybox -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css">
      <!-- style -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
      <!-- responsive -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
      <!-- color -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/color.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/ecs.css">
      <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script> 
     
</head>
<body>
    <section class="ecs_about bannr" style="height: 100vh; background-image: url(assets/img/hero-three.webp);">
    <div class="d-flex" style="height: 100vh;">
        <div class="m-auto text-center">
            <h1 class="text-white" style="
    font-weight: 900;
    font-size: 100px;
">404</h1>
            <p class="text-white"> 
                <?php if (ENVIRONMENT !== 'production') : ?>
                    <?= nl2br(esc($message)) ?>
                <?php else : ?>
                    <?= lang('Errors.sorryCannotFind') ?>
                <?php endif; ?>    
            </p>

            <a href="<?= base_url() ?>" class="btn btn-close-white btn-sm mt-3 px-5">Go to home</a>
            
        </div>
    </div>
</section> 
</body>
</html>
