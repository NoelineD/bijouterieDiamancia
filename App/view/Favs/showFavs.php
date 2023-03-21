<main>
    <div class="mainContainer">
        <figure class="introFigure">

            <figcaption class="introFigcaption">Votre Panier</figcaption>
            <img class="introImg" src="/Autres/banner3 (3).jpg" alt="introImg" style="width:100%">

        </figure>

        <table class="table">
            <tr class="">
                <th class="name">Nom de l'article</th>
                <th>Image Produit</th>
                <th>Ajouter au panier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            foreach ($itemFavs as $item) {
                echo '<tr>
            <td>' . $item->getTitle() . '</td>
            <td> <img src="/App/Assets/' . $item->getImage_name() . '"class="imgArticle"/></td>
            <td class="btnFont"><a class=" btn"
                 href="index.php?entite=favoris&action=add&id=' . $item->getId() . '">
                 +</a>
            </td>
             <td class="btnFont"><a class=" btn"
                 href="index.php?entite=favoris&action=remove&id=' . $item->getId() . '">
                 +</a>
            </td>
        </tr>';
            }
            ?>
        </table>

    </div>
</main>