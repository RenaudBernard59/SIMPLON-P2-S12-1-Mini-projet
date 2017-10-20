<article class="col-sm-12">
    <h2><?php echo("$title"); ?></h2>
    <p><?php echo("$description"); ?></p>
    <div class="col-sm-6">
        <time datetime="2012-12-21"><?php echo("$date"); ?></time>
    </div>
    <div class="col-sm-6">
		<form class="form-inline">
		  <div class="form-group">
			<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			<div class="input-group">
			  <input type="checkbox" name="etat" checked>
			</div>
		  <button type="submit" class="btn btn-primary">OK</button>
		  <button type="submit" class="btn btn-danger">Suppr</button>
		  </div>
		</form>
    </div>
</article>
