<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-prim" href="<?php echo ROOT_PATH; ?>projects/add">Voeg een nieuw project toe</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<a class="btn btn-primary" href="<?php echo $item['link']; ?>" target="_blank">Bekijk project</a>
			<a class="btn btn-success" href="<?php echo $item['link2']; ?>" target="_blank">Zie GITHUB</a>
			<a class="btn btn-option float-right" href="<?php echo ROOT_PATH; ?>projects/edit">Bewerk</a>
			<!--<a class="btn btn-prim" href="<?php //echo ROOT_PATH; ?>projects/delete">Verwijder</a>-->
			<hr />
			<p> <?php echo $item['body']; ?></p>
			<br />
			<p> <img src="/assets/images/<?php echo $item['image']?>" class="rounded float-left img-fluid" alt="..."> </p>
			<small><?php echo $item['create_date']; ?></small>
			<br />
		</div>
	<?php endforeach; ?>
</div>