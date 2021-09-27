<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Exercise</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4 pt-5">
          <h1><a href="" class="logo">PHP Exercise</a></h1>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href='Exercise1'>Exercise 1</a>
            </li>
            <?php
            for ($x = 2; $x <= 11; $x++) {
              echo "<li>
                <a href='Exercise$x'>Exercise $x</a>
              </li>";
            }?>
          </ul>

        </div>
      </nav>

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <?php
          $url = substr($_SERVER['REQUEST_URI'],7);
          $url = $url?$url:"home";
          $fullPath = './views/'.$url.'.view.php';
          include_once($fullPath);
        ?>
      </div>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>