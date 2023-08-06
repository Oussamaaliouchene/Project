<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>DZAIRFRAMER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="styleH.css" />
    
  </head>
  <body>
    <div class="logo-bar">
      <div class="profile">
        <img src="/Pictures/profile.png" alt="Profile Picture" id="profile-picture" onclick="toggleProfileOptions()" style="cursor: pointer;">
        <div  class="profile-options">
          <a onclick="RedirectProfile()" style="cursor: pointer;">Profile</a>
          <a onclick="logout()" style="cursor: pointer;">Logout</a>
        </div>
      </div>
      <div class="logo">
        <img src="/Pictures/Rectangle 1.png" alt="Logo">
      </div>
      <div class="flags">
        <img src="/Pictures/flagA.png" >
        <img src="/Pictures/flagU.png" > 
      </div>
    </div>
      <div class="login-container">
        <h2>Create an account</h2>
        <form class="login-form">
          <input type="email" placeholder="name">
          <input type="password" placeholder="Email">
          <input type="password" placeholder="Password">
          <a class="create-account" href="login.html">Use email</a>
            <div class="date-of-birth">
              <h3>Date of Birth</h3>
              <div class="dob-select">
                <input type="number" name="day" id="day" placeholder="Day">
                <input type="number" name="month" id="month" placeholder="Month">
                <input type="text" name="year" id="year" placeholder="Year">
              </div>
            </div>
            
          </div>
        </form>
        <button type="submit" class="signin-but">SIGNUP</button>

      </div>
     

      <script src="script.js"></script>
  </body>
</html>