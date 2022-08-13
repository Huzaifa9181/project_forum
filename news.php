<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php
      include 'components/database.php';
      include 'components/nav.php';
      $n_sql = "SELECT * FROM `post`";
      $n_result = mysqli_query($conn,$n_sql);
     ?>

    <div class="container mt-5 mb-5">
        <div class="row">
          <?php
           while($row = mysqli_fetch_assoc($n_result)){
              echo'
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="uploads/'.$row['image'].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'.$row['title'].'</h5>
                            <p class="card-text">'.$row['description'].'</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>';
           }
          ?>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid">
        <div class="copy">
            <p class="text-center text-white bg-dark mb-0">Copyright iForum 2022 | All right reserved </p>
        </div>
    </div>
</body>

</html>