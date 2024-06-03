<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalleryMemo Cambridge Room</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/Favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/Favicon//favicon-16x16.png">
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
    <div class="content col-md-4 mx-auto">
        <h2>Update Profile</h2>
        <form id="updateForm">
            <div class="form-group">
                <small class="form-text text-muted">Choose a new profile picture</small>
                <div id="profilePicturePreview" class="mt-2">
                    <img id="profilePictureImg" src="../img/ilfanhs88bp@gmail.com/ilfan.jpg" alt="Dummy Profile"
                        class="rounded-circle" style="width: 100px; height: 100px;">
                </div>
                <label for="profilePicture">Profile Picture</label>
                <input type="file" class="form-control-file" id="profilePicture" name="profilePicture" accept="image/*"
                    onchange="previewProfilePicture(event)">
            </div>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName"
                    placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="oldPassword">Old Password</label>
                <input type="password" class="form-control" id="oldPassword" name="oldPassword"
                    placeholder="Enter your old password">
            </div>
            <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword"
                    placeholder="Enter your new password">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                    placeholder="Confirm your new password">
            </div>
            <button type="submit" class="btn btn-info">Update Profile</button>
        </form>
        <div id="updateStatus" class="mt-3"></div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- FancyBox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Custom Script for Sidebar Toggle -->
    <script>
    $(document).ready(function() {
        // Sembunyikan sidebar saat dokumen dimuat pada layar kecil
        if ($(window).width() < 768) {
            $(".sidebar").removeClass("sidebar-active");
        }

        $(".navbar-toggler").click(function() {
            // Toggle kelas sidebar-active ketika tombol navbar-toggler diklik
            $(".sidebar").toggleClass("sidebar-active");
        });

        // Sembunyikan sidebar saat lebar layar diubah
        $(window).resize(function() {
            if ($(window).width() < 768) {
                $(".sidebar").removeClass("sidebar-active");
            }
        });
    });

    function previewProfilePicture(event) {
        const profilePicture = event.target.files[0];
        const profilePictureImg = document.getElementById('profilePictureImg');

        if (profilePicture) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profilePictureImg.src = e.target.result;
            }
            reader.readAsDataURL(profilePicture);
        } else {
            profilePictureImg.src =
                '../img/dummy-profile.jpg'; // Tampilkan foto dummy jika tidak ada gambar yang dipilih
        }
    }
    </script>
</body>

</html>