<?php snippet('header') ?>
<?php snippet('menu') ?>
	<section>
<?php $articles = $page->children()->visible()->flip()->paginate(3) ?>
<?php foreach($articles as $article): ?>
		<div class="post">
			<h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
			<h3>Posted on <time datetime="<?php echo $article->date('Y-m-d') ?>"><?php echo $article->date('F j, Y') ?></time></h3>
<?php echo kirbytext($article->text()) ?>
		</div>
<?php endforeach ?>
<?php if($articles->pagination()->hasPages()): ?>
		<nav class="pagination">
<?php if($articles->pagination()->hasPrevPage()): ?>
			<a class="previous" href="<?php echo $articles->pagination()->prevPageURL() ?>">&larr; Previous</a>
<?php else: ?>
			<span class="previous disabled">&larr; Previous</span>
<?php endif ?>
<?php if($articles->pagination()->hasNextPage()): ?>
			<a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">Next &rarr;</a>
<?php else: ?>
			<span class="next disabled">Next &rarr;</span>
<?php endif ?>
		</nav>
<?php endif ?>
	</section>
<?php snippet('footer') ?>