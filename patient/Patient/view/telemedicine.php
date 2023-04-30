<?php
include 'connect.php';
?>
<html>
    <body>
    <Style></style>
                     <form method="post" action="" enctype="">
                      <div class="TeleMedicine"></div>
                       <a href="./dashboard.php">Go Back</a>  
                                     <h4><u> Message Us</u></h4>
                                     
                                    <p>If U have any quries related to your treatment,you can send me message from from here.It's my pleasure to help you</p>
                                    <table>
                                            <tr>
                                        <td><label for="text">Name:</label></td>
                                          <td><input type="text" name="name" id="name" placeholder="Enter your Name"></td>
                                    </tr>
                    
                                    <tr>
                                        <td><label for="text">Email:</label></td>
                    
                                        <td><input type="text" name="email" id="email" placeholder="Enter your Email"></td>
                    
                                    </tr>
                                    
                <tr>
                    <td><label for="text">Message:</label></td>

                    <td><input type="text" name="message" id="message" placeholder="Enter your Message"></td>
                                </table>
                                <br>
                                       <tr>
                                        <td>        
                                        <input type="submit" name="submit" value="Submit">
                                        <input type="reset" name="reset" value="reset">
                                      </td>
                                    </tr>

                            </form>
                                      <br>
                        </body>
                    </html>