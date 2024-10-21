
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slideIn {
            animation: slideIn 0.5s ease-out forwards;
        }

        @keyframes buttonHover {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .hover\:animate-buttonHover:hover {
            animation: buttonHover 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-8 max-w-md w-full animate-slideIn">
        <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>
<?php
$conn = mysqli_connect("localhost","root","","project");
if (!$conn){
    die("error". mysqli_connect_error());    
}
else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $useremail= $_POST['email'];
    $userpass = $_POST['password'];

    $result= mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$useremail' AND `password`='$userpass'");
    $num= mysqli_num_rows($result);

    if($num > 0){
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['is_user'] = true;
        if($useremail=='malasanadeep@gmail.com' and $userpass=='admin'){
            echo "<script>alert('$user[email]Logged In...');window.location.href='admin.php'</script>";
        }
        else{
        echo "<script>alert('$user[email]Logged In...');window.location.href='index.php'</script>";
    }
    }
    else{
        echo "<script>alert('not logged in....')</script>";
    }
}

}
?>
        <form action="" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition-colors duration-300 hover:animate-buttonHover">Login</button>
        </form>
        <button type="cansel" class=" w-full mt-5 py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition-colors duration-300 hover:animate-buttonHover"> <a href="javascript:history.back();" >Cancel</a></button>
        <p class="mt-4 text-center text-sm">
            Don't have an account? <a href="signup.php" class="text-blue-500 hover:underline">Sign up</a>
        </p>
    </div>

</body>
</html>
