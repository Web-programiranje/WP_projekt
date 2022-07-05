    <footer>
        <p>
            <em>
                <p>Information <br></p>

                <i class='bi bi-envelope'></i> love_coffee@gmail.com <br>
                <i class='bi bi-facebook'></i> Coffee Lovers <br>
                <i class='bi bi-instagram'></i> coffee_lovers <br>
                <i class='bi bi-telephone-fill'></i> 031 245 333<br>
            </em>
        </p>
        <p>Copyright &copy 2022 Magdalena Jukić i Ana-Marija Katić, all rights reserved</p>
    </footer>
    <?php
        $name = $_SESSION["useruname"] ?? "";
    ?>
    <script>
        function mOver(obj){
            obj.innerHTML=obj.innerHTML.toUpperCase();
        }
        function mOut(obj){
            obj.innerHTML=obj.innerHTML.substring(0,1).toUpperCase()+obj.innerHTML.substring(1).toLowerCase();
        }
        function mOutUser(obj){
            var name="<?php echo $name?>";
            obj.innerHTML=name;
        }
    </script>
</body>
</html>