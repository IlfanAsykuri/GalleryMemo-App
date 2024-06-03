<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalleryMemo Albums</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/Favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/Favicon/site.webmanifest">
    <!-- Style Css -->
    <link rel="stylesheet" href="../css/style-dashboard.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="../img/Logo/png/logo-color-resize.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            GalleryMemo
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Muhammad Ilfan Asykuri
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="../index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../img/ilfanhs88bp@gmail.com/ilfan.jpg" alt="User Image">
            <p>Muhammad Ilfan Asykuri</p>
        </div>
        <ul>
            <li><a href="index.php"><i class="fas fa-image"></i> All Pictures</a></li>
            <li><a href="albums.php"><i class="fas fa-images"></i> My Album</a></li>
            <li><a href="addPicture.php"><i class="fas fa-cloud-upload-alt"></i> Upload Picture</a></li>
            <li><a href="profile.php"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../index.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>


    <!-- Page Content -->
    <div class="content">
        <h2>My Albums</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info btn-add-album" data-toggle="modal" data-target="#exampleModal">
            Add Album
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Album</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="albumName">Album Name</label>
                                <input type="text" class="form-control" id="albumName" placeholder="Enter Album Name">
                            </div>
                            <div class="form-group">
                                <label for="albumDescription">Album Description</label>
                                <textarea class="form-control" id="albumDescription" rows="3"
                                    placeholder="Enter Album Description"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Icon folders as an example -->
        <div class="row mt-4">
            <div class="col-md-1">
                <a href="album.php" class="folder-link">
                    <div class="folder-icon">
                        <i class="fas fa-folder"></i>
                    </div>
                    <div class="folder-title">
                        Cambridge Room
                    </div>
                </a>
            </div>
            <div class="col-md-1">
                <a href="album.php" class="folder-link">
                    <div class="folder-icon">
                        <i class="fas fa-folder"></i>
                    </div>
                    <div class="folder-title">
                        AR|VR Development
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>