<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<title><?php echo $head_title ?></title>

<?php echo str_replace("rss.xml", "feed", $head); ?>
<?php echo $styles ?>
<?php echo $scripts ?>

</head>

<body>
<div class="container">
<h1><a href="<?php echo $base_path?>"><?php echo $site_name ?></a></h1>
<div class="slogan"><?php echo $site_slogan ?></div>
<hr>
<?php echo theme_links($primary_links) ?>
<hr>
<?php if($left_sidebar) { ?><div class="left_sidebar"><?php echo $left ?></div><?php } ?>
<?php echo $breadcrumbs ?>
<div class="center_content">
<div class="inner_center">
<?php if($messages) { ?><?php echo $messages; } ?>
<?php if($tabs) { ?><div class="tabs"><?php echo $tabs ?></div><?php } ?>
<?php echo $content ?>
</div>
</div>
<div class="right_sidebar"><?php echo $right ?></div>
</div>
<?php if (!empty($footer_message)) { echo $footer_message; } ?>
<?php if (!empty($footer)) { echo $footer; } ?>
<?php echo $closure ?>
</body>
</html>
