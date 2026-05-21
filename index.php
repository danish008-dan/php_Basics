<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>practice</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>

<div class="container">

        <div class="form-box">

           <form action="demo.php" method="POST">
            <h1>
                <span class="counter" data-target="1000">0</span>+
            </h1>      
            <h2 data-aos="fade-up">Login</h2>

              <input type="hidden" name="action" value="login">
              <input type="text" name="login_username" placeholder="Username" required>
              <input type="password" name="login_password" placeholder="Pasword" required>
              <button type="submit">Login</button>
            </form>   
        </div>

        <div class="form-box">

            <form action="demo.php" method="POST">
             <h1>
                 <span class="counter" data-target="95">0</span>%
             </h1>   
             <h2 data-aos="fade-right">Register</h2>

                <input type="hidden" name="action" value="register">
                <input type="text" name="reg_username" placeholder="Username" required>
                <input type="text" name="reg_email" placeholder="Email" required>
                <input type="password" name="reg_password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>
        
</div>

<div class="card" data-aos="zoom-in">
    <h3>Pizza</h3>
</div>
<div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-easing="ease-in-out">
    <h3>Pasta</h3>
</div>
<div class="card" data-aos="zoom-in" data-aos-delay="300">
    <h3>Burger</h3>
</div>

<script src="counter.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init()
</script>
</body>
</html>
