<?php
include '../model/connect.php';
?>

<html>
    <body>
      <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

form {
  margin: 0 auto;
  width: 60%;
  padding: 20px;
  background-color: white;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

h4 {
  font-size: 24px;
  margin-top: 0;
  color: #4CAF50;
}

button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

button:hover {
  background-color: #3e8e41;
}

a {
  color: white;
  text-decoration: none;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline;
}
</style>
     <form method="post" action="" enctype="">
        <div class="Payment"></div>
          <a href="./dashboard.php">Go Back</a>  
            <h4><u> Payment Procedure</u></h4>
            <td>
            <button><Ul><li><a href="bkash.php"> Bkash</a></li></Ul></button>
            <button><Ul><li><a href="bkash.php"> Rocket</a></li></Ul></button>
            <button><Ul><li><a href="bkash.php"> Nagad</a></li></Ul></button>
            </td>
         <tr>
     </form>
  </body>
</html>