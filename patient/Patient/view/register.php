<?php
include '../model/connect.php';
?>
<html lang="en">
<head>
    <title>Registration Form</title>
    <script type="text/javascript">
function validateForm() {
            var username = document.forms["registration"]["username"].value;
            var email = document.forms["registration"]["email"].value;
            var password = document.forms["registration"]["password"].value;
            var repassword = document.forms["registration"]["repassword"].value;
            var phone = document.forms["registration"]["phone"].value;
            var address = document.forms["registration"]["address"].value;

            if (username == "") {
                alert("Username must be filled out");
                return false;
            }

            if (email == "") {
                alert("Email must be filled out");
                return false;
            }

            if (password == "") {
                alert("Password must be filled out with 8-letters");
                return false;
            }

            if (password != repassword) {
                alert("Passwords do not match");
                return false;
            }
            if (/^01/.test(phoneNumber)) {
             form.submit();
           } else {
           const error = document.createElement("div");
           error.innerHTML = "Phone number must start with '01'";
           error.style.color = "red";
           form.appendChild(error);
           }

            if (address == "") {
                alert("Address must be filled out");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <style>
.signup-content {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
}

td {
    padding: 10px;
}

label {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 18px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 15px 20px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

a {
    color: #4CAF50;
}

@media screen and (max-width: 768px) {
    .signup-content {
        max-width: 100%;
    }
}
</style>

    <div class="signup-content">
        <form id="form" name="registration" action="../controller/registrationCheck.php" method="POST" onsubmit="return validateForm()">
           <form id="form">
  <h1>Sign Up</h1>
  <table>
    <tr>
      <td>
        <label for="username">Username</label><br />
        <input type="text" name="username" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="email">Email</label><br />
        <input type="email" name="email" />
      </td>
    </tr>
    <tr>
      <td>
        <label for="password">Password</label><br />
        <input type="password" name="password" id="password" />
        <div id="passwordError" style="color: red;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <label for="repassword">Re-password</label><br />
        <input type="password" name="repassword" id="repassword" />
        <div id="repasswordError" style="color: red;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <label for="phone">Phone</label><br />
        <input type="text" name="phone" id="phone" />
        <div id="phoneError" style="color: red;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <label for="address">Address</label><br />
        <input type="text" name="address" />
      </td>
    </tr>
    <tr>
      <td>
        <input class="submit" name="submit" type="submit" value="submit" />
      </td>
    </tr>
    <tr>
      <td>Have an account? <a href="./login.php"><strong>Login</strong></a></td>
    </tr>
  </table>
</form>

</body>

</html>
