<?php include 'config_newxgallery.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artuks Admin/Front-Gallery Page</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <!--Animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
</head>
<body>
    <header class="header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-3 col-6">
            <div class="logo">
            <a href=""><img src="images/homepage-image2.png" alt="Logo" class="img-fluid"></a>
            </div>
          </div>
          <div class="col-md-6 col-5">
            <div class="search-bar">
              <input type="text" class="form-control" id="searchInput" placeholder="Search...">
              
            </div>
          </div>
          <div class="col-md-3 col-6 text-right"> <!-- Adjusted col-6 for smaller screens -->
            <div class="icons">
              <a href="https://www.google.com/maps/place/Artuks+Printz/@14.1473846,121.314678,17z/data=!3m1!4b1!4m6!3m5!1s0x33bd5d18cac1673f:0x166f192e4db61c57!8m2!3d14.1473846!4d121.3172529!16s%2Fg%2F11vqhw1v6s?entry=ttu" target="_blank"><i class="fas fa-map-marker-alt"></i></a> <!-- Location Icon -->
              <a href="https://www.facebook.com/AnyARTSservice/" target="_blank"><i class="fas fa-comments"></i> </a><!-- Chat Icon -->
            </div>
          </div>
        </div>
      </div>
    </header>
    
      
    <!--NAVIGATION-->
    <nav class="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link text-dark text-dark fw-bold" href="admin_homepage-image.php">Homepage-Image</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="admin_jersey-slider.php">Jersey-Slider</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-bold active" href="admin_newdesign.php">New Design</a>
              </li>
              <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="jersey-design.php">Jersey Design</a>
              </li>
              <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="admin_front-gallery.php">Front Gallery</a>
              </li>
              <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="admin_gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="#">Promos</a>
              </li>
          </ul>
        </div>
      </nav>


    
      <!--Popup Message-->
       <!--UploadedSuccessfully-->
       <div id="uploadSuccessMessage" class="alert alert-success text-center fw-bold" style="display: none;">
              Image uploaded successfully!
        </div>

        <!--DeletedSuccess-->
        <div id="deleteSuccessMessage" class="alert alert-success text-center fw-bold" style="display: none;">
            Image deleted successfully!
        </div>



    
    
        <h2>Add New Image for Front Gallery</h2>
    <form action="upload_front-gallery.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="text" name="caption" placeholder="Caption">
        <button type="submit" name="submit">Upload</button>
    </form>

    <h2>Manage Images</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Caption</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM front_gallery";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><img src='" . $row['frontgallery_image'] . "' width='100'></td>";
                echo "<td>" . $row['caption'] . "</td>";
                echo "<td><a href='front-gallery_delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

        <!-- JS for POPUP message -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
            <?php if (isset($_GET['uploadsuccess'])) { ?>
              $('#uploadSuccessMessage').fadeIn();
              setTimeout(function() {
                $('#uploadSuccessMessage').fadeOut();
              }, 3000); // Hide the message after 3 seconds
            <?php } ?>

            <?php if (isset($_GET['deletesuccess'])) { ?>
              $('#deleteSuccessMessage').fadeIn();
              setTimeout(function() {
                $('#deleteSuccessMessage').fadeOut();
              }, 3000); // Hide the message after 3 seconds
            <?php } ?>
          });
        </script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/searchbar-function.js"></script>
    <script src="js/service-color.js"></script>

      

        
    
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
