<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shops</title>
    <link rel="stylesheet" href="styles/style_index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="header-coffee" style="background-image: url('images/background-coffee.jpg'); ">
            <div class="navbar navbar-dark navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><i class="bi bi-cup-fill"></i> Coffee Shops</a>    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-end" id="navcol-1">
                        <ul class="navbar-nav">   
                            <?php
                                if(isset($_SESSION["userid"])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link btn action-button" role="button" href="profile.php" onmouseover="mOver(this)" onmouseout="mOutUser(this)"><?php echo $_SESSION["useruname"];?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn action-button" role="button" href="includes/logout.include.php" onmouseover="mOver(this)" onmouseout="mOut(this)">Log out</a>
                                </li>
                            <?php
                                }
                                else {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link btn action-button" role="button" href="login.php" onmouseover="mOver(this)" onmouseout="mOut(this)">Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn action-button" role="button" href="signup.php" onmouseover="mOver(this)" onmouseout="mOut(this)">Sign up</a>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>    
            <div class="jumbotron text-center title">
                <h1 class="text-center">The 10 Best Coffee Shops in the World</h1>
            </div>
        </div>
        
    </header>
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" >
        <div class="container-fluid ">
            <a class="navbar-brand pages" href="index.php">Coffee shops</a>
            <a class="navbar-brand pages" href="userrecom.php">User recommendations</a>
        </div>
    </nav>