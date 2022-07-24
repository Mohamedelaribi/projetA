
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Dashboard.css">
    <title>Document</title>
</head>
<body>
    <!-- Dashboard Started -->
    <div class="wrapper">
    <div class="sideBar">
        <img src="images/logo.png">
        <nav class="sideNavBar">
            <li class="sideNavBarLi active"><i class='bx bxs-dashboard'></i><a href="">Dashboard</a> </li>
            <li class="sideNavBarLi active"><i class='bx bxs-grid-alt'></i><a href="">Catégorie</a> </li>
            <li class="sideNavBarLi active"><i class='bx bx-building-house'></i><a href="">Maison</a> </li>
            <li class="sideNavBarLi active"><i class='bx bxs-message-rounded'></i><a href="">Messages</a></li>
        </nav>
    </div>
    <div class="container">
        <div class="haederContainer">
        <header class="haeder">
            <h1>hallo</h1>
        </header>
        <main class="category">
            <div class="CatgoryHouse">
                <img src="images/Apartment.png" alt="">
                <img src="images/house.png" alt="">
                <img src="images/TWELVE HOUSE.png" alt="">
            </div>
            <div class="addCategoryButton">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Ajouter Un Catégorie
                </button>            
            </div>
        <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Ajouter Un Catégorie</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" id="formCategory">
                        <label for="nameCategory">Nom Catégorie</label>
                        <input type="text" id="nameCategory" ><br>
                        <label for="nameCategory">Nom Catégorie</label>
                        <input type="file" id="ImgCategory" name="image[]"multiple accept=".png, .jpeg, .jpg" ><br>
                        <input type="submit" id="submit" value="submit" name="submitButton">
                        </form>
                </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                
                    </div>
                    </div>
                </div>
        </main>
        </div>
    </div>
</div>

<script src="Dashboard.js"></script>
</body>
</html>