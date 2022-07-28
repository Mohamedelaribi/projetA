<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                    <h1></h1>
                </header>
                <main class="category">
                    <div class="CatgoryHouse">
                        <img src="images/Apartment.png" alt="">
                        <img src="images/house.png" alt="">
                        <img src="images/TWELVE HOUSE.png" alt="">
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completModal">
                        Ajouter Un Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="completModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Un Neauveux Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id ="formCategory" class="formCategory" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="completNomCategory" class="form-label">Nom Category</label>
                                            <input type="text" class="form-control" name="nameCategory" id="nameCategory"
                                                placeholder = "Enter Un Nom De Category">
                                        </div>
                                        <div class="mb-3">
                                            <label for="completFile" class="form-label">Password</label>
                                            <input type="file"  name="imageCategory"class="form-control" id="imageCategory">
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="submit" name="addCategory">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Anuler</button>
                                    
                                </div>
                            </form>
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