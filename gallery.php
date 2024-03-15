<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
      <header class="header">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-3 col-6">
              <div class="logo">
                <a href="index.html"><img src="images/artuks-logo.png" alt="Logo" class="img-fluid"></a>
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
            <a class="nav-link text-dark text-dark fw-bold" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fw-bold" href="#">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="newdesign.php">Jersey Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="#">Sample</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="pricelist.html">Price List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold active" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="#">Promos</a>
            </li>
        </ul>
      </div>
    </nav>
        </section>

        
        <!--GALLERY-->

        <div class="container-fluid" id="gallery">
          <div class="row">
          <?php
    // Include your database connection configuration
    include 'admin../config_newxgallery.php';

    // Fetch images from the database
    $sql = "SELECT * FROM gallery";
    $result = mysqli_query($conn, $sql);

    // Check if there are any images in the database
    if (mysqli_num_rows($result) > 0) {
      // Loop through each row in the result set
      while ($row = mysqli_fetch_assoc($result)) {
        // Display each image in a column
        echo '<div class="col-md-3">';
        echo '<div class="gallery-item">';
        echo '<img src="admin/' . $row['gallery_image'] . '" alt="' . $row['caption'] . '">';
        echo '</div>';
        echo '</div>';
      }
    } else {
      // If no images found in the database
      echo "No images found";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
  </div>
</div>

        <!-- Modal HTML -->
        <!-- Modal HTML -->
        <div id="imageModal" class="modal">
          <span class="close">&times;</span>
          <div class="modal-content">
            <img id="modalImage" class="zoomable" src="">
          </div>
        </div>



        <script src="js/gallery.js"></script>
</body>
</html>