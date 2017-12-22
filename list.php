<!-- go back:    <a href="answers.html">Click here for answers.</a>  -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <!--meta name="viewport" content="width=device-width, height=device-height, user-scalable=yes,
    shrink-to-fit=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" /-->
    <title>Untitled</title>
    <script src="libraries/p5.js" type="text/javascript"></script>

    <script src="libraries/p5.dom.js" type="text/javascript"></script>
    <script src="libraries/p5.sound.js" type="text/javascript"></script>

    <script src="sketch.js" type="text/javascript"></script>
    <!-- script src="list.php"></script -->

    <style> 
    body {padding: 0; margin: 0; background-image: url("clouds2.jpg"); background-size: "device-height";} 
    canvas {vertical-align: top;} 

    </style>
  
  </head>
  <body>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Airport</th> 
    <th>Message</th>
  </tr>
  <tr>
    <td>
      <?php echo $_GET['firstname'];?>
    </td>
    <td><?php echo $_GET['airport'];?></td> 
    <td><?php echo $_GET['message'];?></td>
  </tr>
  <tr>
    <td>____</td>
    <td>____</td> 
    <td>____</td>
  </tr>
</table>

  </body>
</html>


<!-- ?php 
$firstname = $_GET['firstname'];
$airport = $_GET['airport'];
$message = $_GET['message'];
? -->


<!-- ?php
servername = "localhost";
username = "username";
password = "password";
dbname = "myDBPDO";

try {
    conn = new PDO("mysql:host=servername;dbname=dbname", username, password);
    // set the PDO error mode to exception
    conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    // Prepare statement
    stmt = conn->prepare(sql);

    // execute the query
    stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException e)
    {
    echo sql . "<br>" . e->getMessage();
    }

conn = null;
? -->

