<?php
//Connection requires variable
$servername = "localhost";
$username = "root";
$password = "root";
$database = "query_solutions";

try {
  $conn = new PDO("mysql:host=$servername;dbname=query_solutions", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("SELECT * FROM solutions ");
  $stmt->execute();
  
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>All Issue</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3 mb-3 text-center">
                <h2>All Issue List</h2>
            </div>
            <table class="table table-responsive table-bordered text-center">
                <thead>
                    <th>Id</th>
                    <th>Issues</th>
                    <th>Solutions</th>
                </thead>
                <tbody>

                    <?php foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $k=>$v) { ?>
                        <tr>
                            <td><?php echo $v['entity_id'] ?> </td>
                            <td><?php echo $v['issues'] ?> </td>
                            <td><?php echo $v['solutions'] ?> </td>
                            
                        </tr>
                    <?php   } ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>


<?php
// $conn = null;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>