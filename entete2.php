<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
         .navbar-brand img {
        max-height: 30px; 
    }
    

    
    
nav{
    font-family: fractul;
    background-image: url('images/bannl.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  
}

.navbar-nav .nav-link {
        color: white;
        transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
        color: rgb(239, 255, 20);
    }
    .navbar-nav .btn {
        margin-left: 15px; 
    }
    .navbar-nav .nav-item >a{
        color: white;
    }

    #jau{
        background:green;
        border-radius:5px;
        color:white;
        margin-right: 5px;
        text-align:center;
       
    }
    #dau{
        background:red;
        border-radius:5px;
    }

    #dau:hover{
        background:black;
        border-radius:5px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/tourisme.jpg" alt="BF-TOURISME"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php
                    session_start();
                    if (isset($_SESSION['username'])) {
                      

                        echo '<li class="nav-item" >
                        <a class="nav-link " id="jau"  href="#"> '.$_SESSION['username']. '</a>
                    </li>';
                        echo '<li class="nav-item">

                                <a class="nav-link"  id="dau" href="logout.php">Déconnexion</a>
                            </li>';
                         
                    } else {
                      
                   
                        echo '<li class="nav-item">
                                <a class="nav-link" href="login.php">Connexion</a>
                            </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>
