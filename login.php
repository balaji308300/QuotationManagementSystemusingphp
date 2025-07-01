<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        
    *{
        padding: 0;
        margin: 0;
    }
    body {
        margin: 0px;
        background-color: #ebeef2;
        font-family: 'nunito', sans-serif;
    }
    #login_box
    {
        display:block;
        width:50%;
        margin:auto;
        padding:10px;
        background-color:white;
        border-radius:10px;
        margin-top:30px;
    }
    .email
    {
        display:block;
        width:90%;
        margin:auto;
        margin-top:10px;
        padding:5px;
        border-radius:10px;
        border:2px solid gray;
    }
    .login_btn
    {
        display:block;
        width:70px;
        margin:auto;
        margin-top:10px;
        margin-bottom:10px;
        padding:5px;
        border-radius:10px;
        background-color:#0352BD;
        color:white;
        border:2px solid #0352BD;
    }
  </style>
</head>
<body>
    <h2 style="text-align:center"><img src="https://static.wixstatic.com/media/8b8f2d_46f5f8aaf3ad4e93b98f0e8a390e19e8~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20Dark%20shadowed%20compressed.png" style="width:100px"> Calanjiyam Quotation Management</h2>
    <div id="login_box">
        <h3 style="text-align:center">Login to Contiune</h3>
        <form  method="POST" action="authentication.php">
            <input type="email" name="email" id="email" class="email" placeholder="Enter your email">
            <input type="password" name="passkey" id="passkey" class="email" placeholder="Enter your passkey">
            <input type="submit" name="submit" class="login_btn" id="submit" value="Login">
        </form>
    </div>
    


    <script>
    //Toggle Password
    const passwordField = document.getElementById('password');
    const togglePasswordButton = document.getElementById('togglePassword');
    
    togglePasswordButton.addEventListener('click', function () {
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
        } else {
          passwordField.type = 'password';
        }
      });
    
    </script>
</body>
</html>