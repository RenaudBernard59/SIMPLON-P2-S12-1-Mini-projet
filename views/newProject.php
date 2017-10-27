<section class="container">
    <h2>Nouveau projet</h2>
	<form  action="../model/formNewProject.php" method="post">
		<div class="form-group">
		    <label for="title">Titre du nouveau projet</label>
		    <input type="text" name="title" id="title" class="form-control" />
		</div>
		<div class="form-group">
		    <label for="description" >Description du nouveau projet</label>
		    <textarea name="description" id="description" class="form-control">Description du nouveau projet</textarea>
		</div>
		<div class="form-group">
		    <label for="dateFin" ></label>
		    <input type="date" name="dateFin" id="dateFin" class="form-control"/>
		</div>
		<button type="submit" class="btn btn-default">Créer projet</button>
	</form>
</section>


