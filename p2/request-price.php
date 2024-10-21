
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reqest</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen"><!-- Contact Us Section -->
<div class="container mx-auto w-auto p-6 mt-6 bg-white rounded-lg shadow-lg animate-slideIn ">
    
            <!-- Inquiry Form -->
                <h2 class="text-3xl font-bold mb-6">Request Form</h2>
                
<?php
    $con = mysqli_connect("localhost","root","","project");

    if(!$con){
    
        echo "Not Connected";
    
    }
    else{
      $insert=false;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $address = $_POST['address'];
            $message = $_POST['message'];
       
      
    
            
                $query = "INSERT INTO `request`( `f_name`, `l_name`, `address`, `message`) VALUES ('$f_name','$l_name','$address','$message')";
    
                $result = mysqli_query($con,$query);
    
                if($result){
                 
                  
                
                      echo "<script>alert(' Request Sucess fully sent...');window.location.href='product.php'</script>";
                    // echo "<script>alert('inquiry sent...');</script>";
          }
        
        }
    }
    
?>
                <form action="#" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input type="text" id="f_name" name="f_name" class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="l_name" name="l_name" class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <input type="text" id="address" name="address" class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
                    </div>
                    <button type="submit" class="w-full py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition-colors duration-300">Submit Inquiry</button>
                </form>
            
</body>

</html>
