<?php
    include_once "header.php"
?>
    <main>
        <?php
            $servername = "localhost";
            $dbname = "coffee_shops";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM shops;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);

        ?>
    </main>
    
<?php
    include_once "footer.php"
?>