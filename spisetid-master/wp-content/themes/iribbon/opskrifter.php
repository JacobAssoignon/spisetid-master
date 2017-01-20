<?php
/*
  Template Name: Opskrifter
 */


get_header();
?>
<style type="text/css">
.form-wrapper {
        width: 700px;
        padding: 15px;
        margin: 50px auto 17px auto;
        background: #444;
        background: rgba(0,0,0,.2);
        border-radius: 10px;
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }

</style>

<div class="container">
    <div class="row">
        <div class="span10 offset1">
            <h1>Opskrifter </h1>
            <p class="lead">Her kan du finde alle sidens opskrifter...</p>
            <?php
            $serverName = "localhost";
            $usrName = "spisetid-admin";
            $pass = "minimum64D.";
            $dbName = "spisetid";

            $conn = mysqli_connect($serverName, $usrName, $pass, $dbName);

            $query = "SELECT id, navn, kategori, importurl, imageurl FROM opskrifter";
            $data = mysqli_query($conn, $query);
            $savedData = mysqli_fetch_all($data, MYSQLI_ASSOC);
            mysqli_close($conn);
            ?>
            <div class="span1">
            <table class="form-wrapper">
                <thead>
                    <tr>
                        <th>Navn</th>
                        <th>Kategori</th>
                        <th>Billede</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($savedData as $i => $recipe) {
                        ?>
                        <tr>
                            <td><a href="<?php echo getenv('HTTP_HOST') . "/opskrifter/opskrift?recipe=" 
                                    . $recipe['id'];?>"</a><?php echo $recipe['navn'] ?></a></td>
                            <td><?php echo $recipe['kategori'] ?></td>
                            <td><?php
                                $pic = $recipe['imageurl'];
                                $pic = explode("_", $pic)[0];
                                ?><img src="<?php echo $pic . "_97.jpg" ?>"></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>