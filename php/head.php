<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="generator" content="Bludit">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>
<?php echo  Theme::css('css/font-awesome/css/font-awesome.min.css');?>
<?php echo  Theme::css('plugins/slick/slick.css');?>
<?php echo  Theme::css('plugins/slick/slick-theme.css');?>

  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&amp;subset=latin-ext" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet" />

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/style.css'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
