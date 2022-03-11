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
    <div></div>
    <div class="buttonPaginer">
        <?php
        if($page>1):
        ?>
        <button type="submit"><a href="<?='?controller=user&action=lister_joueur&page='.$page-1?>">Page precedent</a></button>
        <?php
        endif
        ?>
        <div numeruPage>
        <?php
        for ($k=1; $k < $nbreDePage; $k++) { 
          echo "<a  href='?controller=user&action=lister_joueur&page=$k'>$k</a>&nbsp&nbsp";
        }
        ?>
        </div>
        <?php
        if($page < $nbreDePage):
        ?>
        <button type="submit"><a href="<?='?controller=user&action=lister_joueur&page='.$page+1?>">Page suivente</a></button>
        <?php
        endif
        ?>
    </div>
</div>