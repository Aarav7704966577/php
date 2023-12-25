<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="body">
    <h1>HTML FORM</h1>
    <div class="container">
        <form action="Connect.php" method="Post" class="form">
<div>
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name">
</div>
<div>
    <label>Email</lable>
    <input type="email" name="email" placeholder="Enter email id">
</div>
<div>
    <label>Gender</label>
    <input type="radio" name="gender" value="m"> Male
    <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="o"> Others
</div>
<div>
    <label>Mobile</lable>
    <input type="text" name="mobile" placeholder="Enter  your mobile">
</div>
<div>
    <label>Password</lable>
    <input type="password" name="password" placeholder="Enter  your password">
</div>
<div class="btn">
    <button type="submit">Submit data</button>
</div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>