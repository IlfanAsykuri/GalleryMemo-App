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
    <div class="content">
        <h2>Upload Picture</h2>
        <form id="uploadForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fileInput">Select Picture</label>
                <input type="file" class="form-control-file" id="fileInput" name="files[]" multiple accept="image/*">
            </div>
            <!-- Container untuk menampilkan file yang dipilih -->
            <div id="selectedFilesContainer" class="mt-3">
                <h5>Selected Pictures:</h5>
                <div id="selectedFilesPreview" class="d-flex flex-wrap"></div>
            </div>
            <button type="submit" class="btn btn-info mt-3">Upload</button>
        </form>
        <div id="uploadStatus"></div>
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

    // JavaScript untuk menangani upload foto
    $(document).ready(function() {
        $('#uploadForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: 'upload.php',
                type: 'POST',
                data: formData,
                success: function(data) {
                    $('#uploadStatus').html(data);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });

    // JavaScript untuk menangani perubahan pada input file dan klik pada tombol remove
    $(document).ready(function() {
        // Menangani perubahan pada input file
        $('#fileInput').change(function() {
            var files = $(this)[0].files; // Ambil file yang dipilih

            // Bersihkan container sebelum menampilkan file baru
            $('#selectedFilesPreview').empty();

            // Loop melalui setiap file dan tampilkan nama dan gambar
            for (var i = 0; i < files.length; i++) {
                var fileName = files[i].name;
                var fileReader = new FileReader();

                // Baca file sebagai URL data
                fileReader.readAsDataURL(files[i]);

                // Menambahkan gambar dan judul ke dalam container
                fileReader.onload = function(event) {
                    var filePreview = $('<div class="selected-file-item mr-2 mb-2"></div>');
                    var imagePreview = $('<img src="' + event.target.result + '" alt="' + fileName +
                        '" class="img-thumbnail" style="width: 100px;">');
                    var fileTitle = $('<div class="mt-1">' + fileName + '</div>');
                    var removeButton = $(
                        '<button class="btn btn-sm btn-danger remove-file">Remove</button>');

                    // Menambahkan event listener untuk tombol remove
                    removeButton.click(function() {
                        $(this).parent().remove(); // Hapus elemen file yang dipilih
                    });

                    filePreview.append(imagePreview, fileTitle, removeButton);
                    $('#selectedFilesPreview').append(filePreview);
                }
            }
        });

        // Menangani klik pada tombol remove
        $(document).on('click', '.remove-file', function() {
            $(this).parent().remove(); // Hapus elemen file yang dipilih
        });
    });
    </script>
</body>

</html>