
<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['user_email']) != "malasanadeep@gmail.com"){
    echo "<script>alert('you are not admin.');window.location.href='/p2/login.php';</script>";
  }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request </title>
    <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  
<style>
    .table{
    color: black;
    background: rgb(97, 93, 88); 
}
#myTable{
    background:;  
    background-color: rgb(97, 93, 88) ;
}
</style>
</head>
<body>
  
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    
  </head>
  <body>
    

<nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="img/abstract-circle-wave-logo-png-image-11.png" alt="Company Logo" class="h-10 mr-5"><p class="text-white text-xl font-mono hover:text-aqua">Ocean Wave Ceramic</p>
            </div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="#home" class="hover:bg-gray-700 px-3 py-2 rounded"></a>
                <a href="admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">user details</a>
                <a href="form.php" class="hover:bg-gray-700 px-3 py-2 rounded">Add tiles</a>
                <a href="req-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Request Price</a>
                <a href="inquiry-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Inquiry</a>
                <a href="order-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Order</a>
                <?php
  echo "<a href='logout.php' class='hover:bg-gray-700 px-3 py-2 rounded '>log-out</a>";
  ?>
               <!--  <a href="#booking" class="hover:bg-gray-700 px-3 py-2 rounded">Booking</a> -->
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-white focus:outline-none" id="menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden bg-gray-800 text-white space-y-1 px-2 pt-2 pb-3 hidden" id="mobile-menu">
            <a href="admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">user details</a>
            <a href="form.php" class="hover:bg-gray-700 px-3 py-2 rounded">Add tiles</a>
            <a href="req-admin.php" class="block px-3 py-2 rounded hover:bg-gray-700">Request Price</a>
            <a href="inquiry-admin.php" class="block px-3 py-2 rounded hover:bg-gray-700">Inquiry</a>
             <a href="order-admin.php" class="block px-3 py-2 rounded hover:bg-gray-700">Ordered</a>
           <!-- <a href="#booking" class="block px-3 py-2 rounded hover:bg-gray-700">Booking</a> -->
        </div>
    </nav>
    </body>
    </html>
<h2 class="text-3xl font-extrabold mb-6 text-gray-900 text-center">Ordered</h2>
<div class="container my-4" >
  <table class="table " id="myTable">
    <hr>
    <thead>
      <tr>
        <th scope="col" style="color:white;">id</th>
        <th scope="col" style="color:white;" >User</th>
        <th scope="col" style="color:white;">Total</th>
     
      </tr>
    </thead>
    <tbody>
    <?php  
    $conn = mysqli_connect("localhost","root","","project");
        $sql = "SELECT * FROM `ordered`";
        $result = mysqli_query($conn, $sql);
        $sno=0;
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $user = $row['user'];
            $total = $row['total'];
          echo '<tr>
          <th scope="row">'. $id . '</th>
          <td>'. $user. '</td>
          <td>'. $total. '</td>
          </tr>';
        }
        ?>
         </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
</body>
</html>