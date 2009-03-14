<div class="node content">
	<h2><a href="<?php echo $node_url ?>"><?php echo $title ?></a></h2>
	<div class="credits">by <?php echo $name ?> on <?php echo $date ?></div>
	<?php if($terms) { ?><div class="terms">Tags: <?php echo $terms; ?></div><?php } ?>
	<?php echo $content ?>
	<div class="links"><?php echo $links ?></div>
</div>