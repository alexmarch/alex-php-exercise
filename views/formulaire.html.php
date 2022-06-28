<h5>Ajouter des données de ventes (par saveur de crème glacée)</h5>

<form method="POST" action="index.php">
	<!-- Les éléments de votre formulaire viendront ici -->
	<div class="form-group">
		<label for="saveur">Saveur:</label>
		<input type="text" class="form-control" id="saveur" name="saveur" placeholder="ex. Chocolat">
	</div>
	<div class="form-group">
		<label for="quantite">Quantite vendue:</label>
		<input type="number" class="form-control" id="quantite" name="quantite" placeholder="ex. 15">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

