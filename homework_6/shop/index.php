<?php
require_once "tmp/header.php";
require_once "server/config.php";

?>


<div class="newproducts">
    <div class="container">
        <h3>Товары дня</h3>
        <div class="top_brands_grids">
            <?php

            $sql = "SET NAMES utf8";
            $res = mysqli_query($connect, $sql);

            $sql = "select * from goods";
            $res = mysqli_query($connect, $sql);

            while ($data = mysqli_fetch_assoc($res)) :?>

            <div class="col-md-3 top_brand_left-1">
                <div class="hover14 column">
                    <div class="top_brand_left_grid">
                        <div class="top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.php?id=<?= $data['id']?>"><img title=" " alt=" " src="<?php echo PATH_SMALL.$data['img'] ?>"></a>
                                        <p><?= $data['title']?></p>
                                        <h4><?= $data['price']?> руб</h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="submit" name="submit" value="Купить" class="button">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
<?php endwhile;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<?php require_once "tmp/footer.php";

