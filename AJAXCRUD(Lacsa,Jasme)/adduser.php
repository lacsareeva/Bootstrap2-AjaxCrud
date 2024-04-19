<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);

    }
    h2 {
      margin-bottom: 20px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      color: #333;
    }
    a:hover {
      text-decoration: underline;
    }
    .container {
      width: 400px;
      height: 500px;
      margin: auto;
      padding:20px;
      border: 2px solid black;
      background-color: whitesmoke;
      box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.3);
      border-radius: 8px;
    }
  </style>
  </head>
  <body>
  <div class = "container">
    <h2>Add User</h2>
    <form autocomplete="off" action="" method="post">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
  </div>
    <?php require 'script.php'; ?>
  </body>
</html>
