<h5>Données de ventes pour les différentes saveurs de crème glacée</h5>

<table class="table mt-2">
	<!-- Les éléments de votre table viendront ici -->
	<thead>
    <tr>
      <th scope="col">Saveur</th>
      <th scope="col">Quantite vendue</th>
    </tr>
  </thead>
	<tbody>
		<?php foreach($ventes as $value) {?>
			<tr>
				<td><?= $value['saveur'] ?></td>
				<td><?= $value['quantite'] ?></td>
			</tr>
		<?php }?>
    <tr>
</tbody>
</table>
