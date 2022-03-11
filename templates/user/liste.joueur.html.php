<div id="listeJoueur">
    <p>LISTE DES JOUEURS PAR SCORE</p><br>
    <div id="tableJoueur">
        <table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>score</th>
            </tr>
            <?php foreach ($tableauJoueurParPage as $value) : ?>
                <tr>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['nom'] ?></td>
                    <td><?= $value['score'] ?> pts</td>
                </tr>
            <?php endforeach  ?>
        </table> 
    </div>   
    <div class="buttonPaginer">
        <button type="submit"><a href="">Page precedent</a></button>
        <?php
        for ($k=1; $k < $nbreDePage; $k++) { 
          echo "<a href='?controller=user&action=lister_joueur&page=$k'>$k</a>&nbsp&nbsp";
        }
        ?>
        <button type="submit"><a href="">Page suivente</a></button>
    </div>
</div>