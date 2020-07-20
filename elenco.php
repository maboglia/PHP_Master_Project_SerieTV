<?php include './model/Serie.php'; ?>
<?php include './database/ConnessionePDO.php'; ?>
<?php include './controller/SerieController.php'; ?>
<h2>elenco</h2>


<?php
$sc = new SerieController();
$serieTiVu = $sc->trovaTutti();

?>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">genere</th>
            <th scope="col">rating</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($serieTiVu as $serie) : ?>
            <tr>
                <th scope="row"><?= $serie->id ?></th>
                <td><a href="?id=<?= $serie->id ?>"><?= $serie->presenta() ?></a></td>
                <td><?= $serie->genere ?></td>
                <td><?= $serie->rating ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>