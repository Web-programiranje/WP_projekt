<?php
    include_once "header.php"
?>
    <main>
        <?php
            $conn = new PDO('mysql:host=localhost;dbname=coffee_shops',"root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT * FROM shops;');
            $stmt->execute();
            $shops = $stmt->fetchAll();
            $i=1;
            foreach($shops as $shop){
        ?>
        <article class="m-5">
            <h2  class="text-center">
                <?php
                    echo $i;
                    echo ". ";
                    echo $shop["shops_name"];
                 ?>
            </h2>
            <p  class="text-justify m-3">
                <?php
                    echo $shop["shops_description"];
                ?>
            </p>
            <div class="text-center">
                <img src="<?php echo $shop["shops_image"]?>" alt="Coffee shop image" width="500" height="500">
            </div>
            
        </article>
        <?php
            $i++;
            }
        ?>
    </main>
    
<?php
    include_once "footer.php"
?>