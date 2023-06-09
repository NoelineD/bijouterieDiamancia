    <div class="containerupdate">
        <div>

            <h1>Modification du produit</h1><br>

            <div>
                <form id="formContainer" method="post" action="index.php?entite=jewels&action=update" enctype="multipart/form-data">
                    <fieldset>
                        <legend><strong><em>Fiche produit</em></strong></legend>

                        <?php if ($error) : ?>
                            <div style="background-color:brown;"><?= $error ?></div>
                        <?php endif ?>

                        <input type="hidden" name="id" value="<?= $jewel->getId(); ?>">
                        <input type="hidden" name="image_name" value="<?= $jewel->getImage_name(); ?>">

                        <div class="line">
                            <label for="id_title">Titre de l'article' : * </label>
                            <input type="text" name="title" id="id_title" value="<?= $jewel->getTitle(); ?>" placeholder="" autofocus required>
                        </div>


                        <div class="line">
                            <label for="id_details">details : * </label>
                            <input type="text" name="details" id="id_details" value="<?= $jewel->getDetails(); ?>" placeholder="" required>
                        </div>

                        <div class="line">
                            <label for="id_color">couleur dominante : * </label>
                            <input type="text" name="color" id="id_color" value="<?= $jewel->getColor(); ?>">
                        </div>

                        <div class="line">
                            <label for="id_file">Nom de l'image : * </label>
                            <input type="file" name="image" id="id_file" value="<?= $jewel->getImage_name(); ?>" required>
                        </div>

                        <div class="line">
                            <label for="id_price">prix : * </label>
                            <input type="text" name="price" id="id_price" value="<?= $jewel->getPrice(); ?>" required>
                        </div>

                        <div class="line">
                            <label for="id_stock">Stock : * </label>
                            <input type="text" name="stock" id="id_stock" value="<?= $jewel->getStock(); ?>" required>
                        </div>

                        <div class="line">
                            <label for="id_type">Identifiant du type : * </label>
                            <input type="text" name="id_Type" id="id_type" value="<?= $jewel->getType(); ?>" required>
                        </div>

                        <div class="line">
                            <label for="id_stone">Identifiant de la pierre : * </label>
                            <input type="text" name="id_Stone" id="id_stone" value="<?= $jewel->getStone(); ?>" required>
                        </div>

                        <div class="line">
                            <label for="id_metal">Identifiant du metal : * </label>
                            <input type="text" name="id_Metal" id="id_metal" value="<?= $jewel->getMetal(); ?>" placeholder="" required>
                        </div>

                        <div class="line">
                            <label for="id_size">Identifiant de la Taille : * </label>
                            <input type="text" name="id_Size" id="id_size" value="<?= $jewel->getSize(); ?>" placeholder="" required>
                        </div>

                        <br>
                        <button class="btn" type="submit">
                            Modifier
                        </button>
                    </fieldset>
                </form>

                <div class="positionDel">
                    <a class="btn" href="index.php?entite=jewels&action=delete&id=<?= $jewel->getId(); ?>">Supprimer l'article</a>
                </div>
            </div>
        </div>

    </div>