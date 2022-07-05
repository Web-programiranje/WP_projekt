<?php
    include_once "header.php"
?>
    <main>
        <?php
            $conn = new PDO('mysql:host=localhost;dbname=coffee_shops',"root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT * FROM recommendations;');
            $stmt->execute();
            $recommendations = $stmt->fetchAll();
            $i=1;
            $flag=0;
            foreach($recommendations as $recommendation){
                if($_SESSION["useruname"]==$recommendation["recommendations_user"]){
                    $flag=1;
        ?>
        
        <article style="margin: 20px 0px;">
            <table style="width:100%;">
                <tr>
                    <td rowspan = "4" colspan="2">
                        <div style="margin-right:10px;">
                            <img class="rounded" src="<?php echo $recommendation["recommendations_image"]?>" alt="Coffee shop image"  width="220" height="220">
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
                }
            $i++;
            }
            if($flag==0){
        ?>   
        <h2 style="text-align:center;margin-top:20px;margin-bottom:80px">You have not written any recommendation.</h2> 
        <?php
            }
        ?>
        

    </main>
    
<?php
    include_once "footer.php"
?>