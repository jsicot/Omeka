<?php head(); ?>
<ul id="secondary-nav" class="navigation">
	<li><a href="#">Browse</a></li>
	<li><a href="#">Add</a></li>
</ul>
<div id="content">
<form id="search">
	<input type="text" name="search" />
	<input type="submit" name="submit" value="Search" />
</form>

<?php echo $pagination; ?><br/>
<?php foreach( $items as $key => $item ): ?>
	<?php  echo $item->id;?>) <?php echo $item->title; ?><br/>
<?php endforeach; ?>
</div>
<?php foot(); ?>