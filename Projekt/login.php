<?php
    include_once "header.php"
?>
     <main>
        <div class="login-form">
            <h2>LOG IN</h2>
            <form action="includes/login.include.php" method="post">
                <div class="form-group mb-3">
                    <label for="uname" class="form-label">USERNAME/EMAIL</label>
                    <input type="text" class="form-control" name ="uname" placeholder="">
            
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">PASSWORD</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                </div>  
                <button type="submit" name="submit" class="btn btn-outline-dark">LOG IN</button>
                                 
            </form>
        </div>
    </main>
    
    
<?php
    include_once "footer.php"
?>