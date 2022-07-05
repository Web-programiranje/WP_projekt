<?php
    include_once "header.php"
?>
    <?php
            if(isset($_SESSION["userid"])) {
        ?>
            <div class="positon-relative">
                <a class="btn btn-outline-dark position-fixed bottom-0 end-0 translate-middle-y me-3" role="button" href="recommend.php"><i class="bi bi-heart-fill"> ADD</i></a>
            </div>
        <?php
            }
        ?>
    <main>


        <?php
            $conn = new PDO('mysql:host=localhost;dbname=coffee_shops',"root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT * FROM recommendations;');
            $stmt->execute();
            $recommendations = $stmt->fetchAll();
            $i=1;
            foreach($recommendations as $recommendation){
        ?>
        
        <article style="margin: 20px 0px;">
            <table style="width:100%;">
                <tr>
                    <td rowspan = "4" colspan="2">
                        <div style="margin-right:10px;">
                            <img class="rounded" src="<?php echo $recommendation["recommendations_image"]?>" alt="Coffee shop image" width="150" height="150">
                        </div>
                    </td>
                    <td colspan="2">
                        <h3>
                            <?php
                                echo $recommendation["recommendations_name"];
                            ?>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">
                        <p>
                            <?php
                                echo $recommendation["recommendations_review"];
                            ?>
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <p>
                        	<?php
                                echo $recommendation["recommendations_location"];
                            ?>
                        </p>
                    </td>
                    <td>
                        <p style="text-align:right;">
                            <?php
                                echo $recommendation["recommendations_user"];
                            ?>
                        </p>
                    </td>
                </tr>
            </table>
        </article>

        <?php
            $i++;
            }
        ?>
        

    </main>
    
<?php
    include_once "footer.php"
?>