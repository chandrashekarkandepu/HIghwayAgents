 <?php
  if (isset($_POST["submit"])) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "phpmyadmin";

      // Create connection
      $conn = mysqli_connect("localhost","root","","phpmyadmin");

      if(!$conn) {
          die("Connection failed: " . mysqli_connect_error($conn));
      }

      $sql = "INSERT INTO markers(name,addr,lat,lng)

    values('" . $_POST["agencyname"] . "','" . $_POST["address"] . "','" . $_POST["latitude"] . "','" . $_POST["longitude"] . "')";

      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
			header('Refresh:5;mapping.html');
      } else {
          echo "Error: " . $sql . "" . mysqli_error($conn);
      }
  }
  ?>