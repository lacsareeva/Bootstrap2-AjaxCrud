<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <style>
    body{
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);

    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    th {
      background-color: #f2f2f2;
    }
    td a {
      text-decoration: none;
      color: blue;
    }
    td a:hover {
      text-decoration: underline;
    }
    button {
      padding: 5px 10px;
      border: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding:7px 15px;
      border: 1px solid black;
      
    }
    button:hover {
      background-color: darkred;
    }
    a{
      text-decoration:none;
      background-color: lightblue;
      color: black;
      padding:7px 15px;
      border: 1px solid black;

    }
  </style>
  </head>
  <body>
    <h2>Index</h2>
    <table border = 1>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>
      <?php
      require 'config.php';
      $rows = mysqli_query($conn, "SELECT * FROM users");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
    <?php require 'script.php'; ?>
  </body>
</html>
