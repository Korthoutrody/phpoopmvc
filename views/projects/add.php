<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Nieuw project toevoegen</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Titel van project</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Beschrijving</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
        <div class="form-group">
            <label>Foto (i.e.:foto.jpg)</label>
            <input type="text" name="image" class="form-control" />
        </div>
    	<div class="form-group">
    		<label>Link naar project</label>
    		<input type="text" name="link" class="form-control" />
    	</div>
        <div class="form-group">
            <label>Link naar github</label>
            <input type="text" name="link2" class="form-control" />
        </div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Aanmaken" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>projects">Terug</a>
    </form>
  </div>
</div>