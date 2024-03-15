
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artuks Sportswear</title>
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
  <section>
    <header class="header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-3 col-6">
            <div class="logo">
              <a href="index.php"><img src="images/artuks-logo.png" alt="Logo" class="img-fluid"></a>
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
              <a class="nav-link text-dark text-dark fw-bold  active" href="index.php">Home</a>
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
                <a class="nav-link text-dark fw-bold" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark fw-bold" href="#">Promos</a>
              </li>
          </ul>
        </div>
      </nav>

      <!--HOMEPAGE-IMAGES-->
      <section id="homepage-slider">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                include 'admin../config_homepage.php';

                // Fetch images from the database
                $sql = "SELECT * FROM images";
                $result = $conn->query($sql);
                $indicatorIndex = 0;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$indicatorIndex'";
                        if ($indicatorIndex == 0) {
                            echo " class='active'";
                        }
                        echo "></li>";
                        $indicatorIndex++;
                    }
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                // Reset indicator index for carousel items
                $indicatorIndex = 0;
                // Fetch images from the database again (reset pointer)
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $active_class = $indicatorIndex == 0 ? 'active' : '';
                        echo "<div class='carousel-item $active_class'>";
                        echo "<img src='admin/" . $row['image_path'] . "' alt='" . $row['caption'] . "' class='d-block w-100'>";
                        echo "</div>";
                        $indicatorIndex++;
                    }
                }
                ?>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>

      </section>

      
      
      <!--JERSEY SLIDER-->
      <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
      </div>
      <section class="hero-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">

                  <div class="owl-carousel owl-theme">
                      <?php
                      include 'admin../config_jersey.php';
                      // Fetch images from the database
                      $sql = "SELECT * FROM images";
                      $result = $conn->query($sql);
                      
                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              echo "<div class='owl-carousel-info-wrap item'>";
                              echo "<div class='owl-carousel-image-container'>";
                              echo "<img src='admin/" . $row['image_path'] . "' class='owl-carousel-image img-fluid' alt=''>";
                              echo "</div>";
                              echo "<div class='owl-carousel-info'>";
                              echo "<h4 class='mb-2'>" . $row['caption'] . "</h4>";
                              echo "</div>";
                              echo "</div>";
                          }
                      } else {
                          echo "No images found.";
                      }
                      ?>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!--SERVICES-->
    <div id="services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="services-container">
              <h2 class="services-title">Services</h2>
              
              <div class="service-item" data-text="Sublimation">
                <h3>Sublimation</h3>
                <p class="hover-text">Polo<br>Jersey<br>T-shirt<br>Longsleve</p>
                
              </div>
              
              <div class="service-item" data-text="Silkscreen">
                <h3>Silkscreen</h3>
                <p class="hover-text">Rubberized<br>Vinyl<br>DTF</p>
              </div>
              
              <div class="service-item" data-text="Sticker">
                <h3>Sticker</h3>
                <p class="hover-text"><br>Cut Out<br>Printed<br></p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!--NEW DESIGN / GALLERY-->
<div class="container-fluid" id="boxes">
  <div class="row">
    <div class="col-md-6">
      <div class="box1">
        <a href='newdesign.php' class="float-right">See More</a>
        <div class="title fs-2">New Designs</div>
        <div class="image-container">
          <?php
          // Include the configuration file
          include 'admin../config_newxgallery.php';

          // Fetch new design images from the database
          $sql_new_design = "SELECT * FROM new_design";
          $result_new_design = $conn->query($sql_new_design);

          if ($result_new_design->num_rows > 0) {
              while ($row_new_design = $result_new_design->fetch_assoc()) {
                  echo "<img class='image' src='admin/" . $row_new_design['design_image'] . "' alt='" . $row_new_design['caption'] . "'>";
              }
          } else {
              // If no images are found, display a message
              echo "<p>No new design images found.</p>";
          }

          // Close the database connection
          $conn->close();
          ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box2">
        <a href="gallery.php" class="float-right">See More</a>
        <div class="title fs-2">Gallery</div>
        <div class="image-container">
          <?php
          // Include the configuration file
          include 'admin../config_newxgallery.php';

          // Fetch gallery images from the database
          $sql_gallery = "SELECT * FROM front_gallery";
          $result_gallery = $conn->query($sql_gallery);

          if ($result_gallery->num_rows > 0) {
              while ($row_gallery = $result_gallery->fetch_assoc()) {
                  echo "<img class='image' src='admin/" . $row_gallery['frontgallery_image'] . "' alt='" . $row_gallery['caption'] . "'>";
              }
          } else {
              // If no images are found, display a message
              echo "<p>No gallery images found.</p>";
          }

          // Close the database connection
          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

    <!--NEW DESIGN / GALLERY
    <div class="container-fluid" id="boxes">
      <div class="row">
        <div class="col-md-6">
          <div class="box1">
            <a href="newdesign.html" class=" float-right">See More</a>
            <div class="title fs-2">New Designs</div>
            <div class="image-container">
              <img class="image" src="images/n6.jpg" alt="Image 1">
              <img class="image" src="images/n10.jpg" alt="Image 2">
              <img class="image" src="images/n13.jpg" alt="Image 3">
              <img class="image" src="images/n14.jpg" alt="Image 4">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box2">
            <a href="gallery.html" class=" float-right">See More</a>
            <div class="title fs-2">Gallery</div>
            <div class="image-container">
              <img class="image" src="images/g1.jpg" alt="Image 1">
              <img class="image" src="images/g2.jpg" alt="Image 2">
              <img class="image" src="images/g3.jpg" alt="Image 3">
              <img class="image" src="images/g4.jpg" alt="Image 4">
            </div>
            
          </div>
        </div>
      </div>
    </div>-->

    
</section>
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