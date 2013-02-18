<?php 
	// find the open/active page on the first level
	$open  = $pages->findOpen();
	$items = ($open) ? $open->children()->visible() : false; 
?>
<?php if($items && $items->count()): ?>
	<nav class="submenu">
		<div>
<?php foreach($items AS $item): ?>
			<a href="<?php echo $item->url() ?>"<?php echo ($item->isOpen()) ? ' class="active"' : '' ?>><?php echo html($item->title()) ?></a>
<?php endforeach ?>            
		</div>
	</nav>
<?php endif ?>
