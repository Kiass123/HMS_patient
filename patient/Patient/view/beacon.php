<?php
require_once '../model/connect.php';
if(isset($_POST['submit'])){
   $genericname=$_POST['genericname'];
   $brandname=$_POST['brandname'];
   $dosage=$_POST['dosage'];
   $strength=$_POST['strength'];
   $amount=$_POST['amount'];
   
   $con = getConnection();
   $sql="insert into `pharmacy` (genericname,brandname,dosage,strength,amount) 
   values('$genericname','$brandname','$dosage','$strength','$amount')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/beacondb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html lang="en">

<head>
    <title>pharmacy </title>
</head>

<body>     
 <link rel="stylesheet" href="../CSS/style.css">
    <div class="signup-content">
        <form id="form" name="login" method="POST">
            <h1>Add Medicine</h1>
            <table>
                <tr>
                    <td>
                       <h1>Generic Name</h1>
        <input type="text" name="genericname" id="genericname" value="" onkeyup="getUser()">
        <input type="button" name="click" value="click" onclick="ajax()">
        <input type="button" name="click" value="submit" onclick="alert('Check ')">
        <p id="msg"></p>
            <h1></h1>
        <script>

            function change(){
                
                let obj = document.getElementsByTagName('h1')[0];
                    obj.innerHTML = "TEST....";
                    obj.style.color = 'red';
            }

            function ajax(){
                let genericname = document.getElementById('genericname').value;
                
                let xhttp = new XMLHttpRequest();
                //xhttp.open('get', 'abc.php?notice='+notice, true);
                xhttp.open('post', '../controller/ajaxbeacon.php', true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send('genericname='+genericname);

                xhttp.onreadystatechange = function(){
                    
                    if(this.readyState == 4 && this.status == 200){
                        //alert(this.responseText);
                        document.getElementsByTagName('h1')[1].innerHTML = this.responseText;
                    }
                }

            }

            function getUser(){
                let genericname = document.getElementById('genericname').value;
                //alert(notice);

                if(genericname == ""){
                    document.getElementById('msg').innerHTML = "null value";
                    document.getElementById('msg').style.color= "blue";
                }else{
                    document.getElementsByTagName('h1')[0].innerHTML = genericname;
                }

            }
        </script>
                    </td>
                </tr>
                <tr>
                <td>
                    <label for="brandname">Brand Name</label><br />
                    <input type="brandname" name="brandname" />
                </td>
               </tr>
                <tr>    
                <td>
                <label for="dosage">Dosage</label><br />
                    <input type="dosage" name="dosage" />
               </td>
                </tr>
                <tr>
                    <td>
                        <label for="strength">Strength</label><br />
                        <input type="strength" name="strength" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="amount">Amount(Tk)</label><br />
                        <input type="amount" name="amount" />
                    </td>
                </tr>
            </table><br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
        </form>

</body>

</html>