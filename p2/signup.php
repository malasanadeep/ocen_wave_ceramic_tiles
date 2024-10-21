
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ocean Wave Ceramic</title>
  <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 <?php
        

?>
<body class="bg-gradient-to-r from-blue-100 to-indigo-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-10 rounded-2xl shadow-2xl w-full max-w-lg">
    <h2 class="text-3xl font-extrabold mb-6 text-gray-900 text-center">Create an Account</h2>
    <?php

$con = mysqli_connect("localhost","root","","project");

if(!$con){

    echo "Not Connected";

}
else{
  $insert=false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
          // Check if mobile number is 10 digits
  //   if (!preg_match('/^\d{10}$/', $mobile)) {
  //     $errors[] = "Mobile number must be 10 digits.";
        if($password == $cpassword){

            $query = "INSERT INTO `users`( `name`, `email`, `address`, `mobile`, `password`) VALUES ('$name','$email','$address','$mobile','$password')";

            $result = mysqli_query($con,$query);

            if($result){
              $insert=true;
            
              echo "<script>alert('user created ');window.location.href='login.php'</script>";
                
            }
            else{
                echo "<script>alert('Not created');</script>";

            }

        }
        else{

            echo "<script>alert('Password And Confirm Password does not Match');</script>";
        }
      }
      catch(mysqli_sql_exception $e){
          echo "<script>alert('User is already existed...');</script>";

        }
    }
}

?>
    <form action="" method="post">
      <div class="mb-3">
        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Enter Name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="example@mail.com" required>
      </div>

      <div class="mb-3">
        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="********" required>
      </div>

      <div class="mb-3">
        <label for="confirm-password" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
        <input type="password" id="confirm-password" name="cpassword" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="********" required>
      </div>

      <div class="mb-3">
        <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
        <textarea id="address" name="address" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="123 Main St, City, Country" rows="3" required></textarea>
      </div>

      <div class="mb-3">
        <label for="phone" class="block text-gray-700 font-semibold mb-2">Mobile Phone</label>
        <input type="tel" id="phone" name="mobile" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" onchange="(event) => handleMobile(event)" placeholder="+1 234 567 890">
      </div>

      <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-300 ease-in-out">
        Sign Up
      </button>
     
    </form>
    <button type="cansel" class="w-full  bg-indigo-600 mt-5 text-white font-semibold py-3 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-300 ease-in-out">
    <a href="javascript:history.back();" class="	no-underline text-white">Cancel</a>
      </button>

    <p class="mt-6 text-center text-gray-600">
      Already have an account? 
      <a href="login.php" class="text-indigo-500 hover:text-indigo-600 font-medium">Log In</a>
    </p>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
