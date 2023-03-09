  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Inventory - Hotal Insign Management</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

  <!-- JavaScript -->
  

  </head>

    <!-- =======================================================
    * Template Name: Kelly - v4.10.0
    * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <h6 class="logo me-auto me-lg-0"><a href="index.html">Hotal Insign Management</a></h6>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="checkin.html">CHECK IN</a></li>
            <li><a href="checkout.html">CHECK OUT</a></li>
            <li><a class="active" href="inventory.html">STOCK MANAGEMENT</a></li>
            <li><a href="editroom.html">ROOM MANAEGMENT </a></li>
            <li><a href="#">STAFF MANAGEMENT</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
      
    </header><!-- End Header -->

    <main id="main">
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>STOCK MANAGEMENT</h2>
          </div>

          <div class="card gap-2 col-3 mt-1 btn-group">
            <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">Fuction</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" >Add information</a>
                <a class="dropdown-item" >Purchase order</a>
              </div>
            </div>
          </div>

          <br>
          <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>

          <br>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="card">
              <div class="card-body">
    
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount  </th>
                        <th scope="col">Unit price</th>
                        <th scope="col">Total price</th>
                        <th scope="col">Note</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Soap</td>
                      <td>50</td>
                      <td>12</td>
                      <td>600</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    
                    <tr>
                      <th scope="row">2</th>
                      <td>Liquid soap</td>
                      <td>25</td>
                      <td>35</td>
                      <td>875</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Towel</td>
                      <td>80</td>
                      <td>30</td>
                      <td>2400</td>
                      <td>ต้องเปลี่ยนให้ลูกค้าทุกวัน</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Blanket</td>
                      <td>250</td>
                      <td>60</td>
                      <td>15000</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Pillowcase</td>
                      <td>30</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>glass</td>
                      <td>60</td>
                      <td>20</td>
                      <td>1200</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Bottled water</td>
                      <td>100</td>
                      <td>10</td>
                      <td>1000</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>pillow</td>
                      <td>50</td>
                      <td>50</td>
                      <td>2500</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Dishware</td>
                      <td>150</td>
                      <td>20</td>
                      <td>3000</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>Spoon</td>
                      <td>150</td>
                      <td>10</td>
                      <td>1500</td>
                      <td>-</td>
                      <td><button type="button" class="bi bi-pencil-fill fa-1x" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat"></button></td>
                      <td><button type="button" class="bi bi-trash fa-1x" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@fat"></button></td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
              
            
            
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

            


          </form>
        </div>
   
      </section>

      <!-- Modal add -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Amount:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Unit price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Total price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal edit -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Amount:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Unit price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Total price:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal delete -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Delete imformation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Cancel</button>
              <button type="button" class="btn btn-danger">confirm</button>
            </div>
        </div>
      </div>

      
      
    </main>

    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Thank you for watching
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
          Designed by <a>Group 7</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>