<div id="listeJoueur">
    <p>LISTE DES JOUEURS PAR SCORE</p>
    <div id="tableJoueur" style="margin-left:5rem">
        <table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>score</th>
            </tr>

            <?php foreach ($data as $value) : ?>
            <tr>
                <td><?= $value['Prenom'] ?></td>
                <td><?= $value['Nom'] ?></td>
                <td><?= $value['score'] ?> pts</td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>