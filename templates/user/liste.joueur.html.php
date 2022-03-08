<div id="listeJoueur">
    <p>LISTE DES JOUEURS PAR SCORE</p><br>
        <table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>score</th>
            </tr>
            <?php foreach ($data as $value) : ?>
                <tr>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['nom'] ?></td>
                    <td><?= $value['score'] ?> pts</td>
                </tr>
            <?php endforeach  ?>
        </table>    
</div>