<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<?php include(TEMPLATE_FRONT . DS . "top_nav.php") ?>

  <div class="container">

    <div class="profile">

      <?php

      $query = query(" SELECT * FROM login_users");
      confirm($query);
      $rows = row_count($query);

      while($row = fetch_array($query)) {

        if(isset($_SESSION['email']));


      $product = <<<DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
                  <p>Full Name:<p>
                  <h4>{$row['first_name']}</h4>
                  <h4>{$row['last_name']}</h4>

                  <br>

                  <p>User Name:<p>
                  <h4>{$row['username']}</h4>

                  <br>

                  <p>Address:<p>
                  <h4>{$row['address']}</h4>

                  <br>

                  <p>ZipCode:<p>
                  <h4>{$row['zipcode']}</h4>

                  <br>

                  <p>Phone Number:<p>
                  <h4>{$row['phone']}</h4>

                  <br>

                  <p>Email Address:<p>
                  <h4>{$row['email']}</h4>

            </div>
DELIMETER;
echo $product;
}




       ?>

    </div>






<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
