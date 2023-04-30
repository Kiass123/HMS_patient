<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <style>
.signup-content {
  width: 400px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 20px;
}

label {
  font-size: 18px;
  font-weight: bold;
}

input[type="email"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.submit {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.error {
  color: red;
  font-size: 16px;
  margin-bottom: 10px;
}
  
    </style>
    <div class="signup-content">
        <form id="form" name="signup" action="../controller/loginCheck.php" method="POST">
            <h1>Login</h1>
            <table>
                <td>
                    <label for="email">Email</label><br />
                    <input type="email" name="email" id="email" />
                </td>
                <tr>
                <tr>
                    <td>
                        <label for="password">Password</label><br />
                        <input type="password" name="password" id="password" />
                    </td>
                </tr>
                <td>
                    <input class="submit" name="submit" type="submit" value="submit" />
                </td>
                </tr>
                <tr>
                    <td>Don't have an account? <a href="./register.php"><strong>Register</strong></a></td>
                </tr>
            </table>
        </form> 
    <script>
        function validateLoginForm() {
            const username = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email == "") {
                alert("email must be filled out");
                return false;
            }

            if (password.trim() === '') {
                alert('Please enter a password');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>