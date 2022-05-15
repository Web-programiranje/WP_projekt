<?php
    include_once "header.php"
?>
     <main>
        <div class="signup-form">
            <h2>SIGN UP</h2>
            <form action="includes/signup.include.php" method="post">
                <div class="form-group mb-3">
                    <label for="uname" class="form-label">USERNAME</label>
                    <input type="text" class="form-control" name ="uname" placeholder="">
            
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label"> EMAIL</label>
                    <input type="email" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">PASSWORD</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="cpassword" class="form-label">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="">
                </div>   
                <button type="submit" name="submit" class="btn btn-outline-dark">SIGN UP</button>
                                 
            </form>
        </div>
    </main>
    
    
<?php
    include_once "footer.php"
?>