<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Project bewerken</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>ID</label>
            <select name="id" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
   </select>
        </div>
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
    	<input class="btn btn-primary" name="submit" type="submit" value="Bewerken" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>projects">Terug</a>
    </form>
  </div>
</div>