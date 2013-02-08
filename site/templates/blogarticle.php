<?php snippet('header') ?>
<?php snippet('menu') ?>
	<section>
		<div class="post">
			<h2><?php echo html($page->title()) ?></h2>
			<h3>Posted on <time datetime="<?php echo $page->date('Y-m-d') ?>"><?php echo $page->date('F j, Y') ?></time></h3>
<?php echo kirbytext($page->text()) ?>
		</div>
		<nav class="pagination">
			<a class="previous" href="<?php echo url('blog') ?>">&larr; Back</a>
		</nav>
	</section>
<?php snippet('footer') ?>