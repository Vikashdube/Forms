<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    

        <div class="container">

             <form action="connect.php" method="POST">
                     
             <h1>HTML FORMS</h1>
                <div>
                     <label >Name</label>
                     <input type="text" name="name" placeholder="Enter your name"> 
                </div>
            
                <div>
                     <label >Email</label>
                     <input type="email" name="email" placeholder="Enter your email"> 
                </div>

                <div class="gcontainer">
                    <label >Gender</label>
                    <input class="gender1" type="radio" name="gender" value="m">Male
                    <input class="gender1" type="radio" name="gender" value="f">Femail
                    <input class="gender1" type="radio" name="gender" value="o">Other    
                </div>

                <div>
                    <label >Mobile</label>
                    <input type="text" name="mobile" placeholder="Enter moblie numebr">
                </div>

                <div>
                    <label >Password</label>
                    <input type="password" name="password" placeholder="Enter moblie password">
                </div>

                <div class="btn">
                    <button type="submit">Submit Data</button>
                </div>

             </form>
        </div>


</body>
</html>