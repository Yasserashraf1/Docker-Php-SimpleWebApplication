<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db name
);

$table_name = "Students_info";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

if (mysqli_num_rows($response) > 0) {
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Cloud Project</title>";
    echo "<link rel='icon' type='image/x-icon' href='images/dockericon.ico'>";
    echo "<style>
            body {
                background-image: url('images/download.jpg');
                background-size: cover;
                background-position: center;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 90%;
                margin: 100px auto;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.8); 
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            }
            table {
                width: 100%;
                border-collapse: collapse;
                background-color: rgba(255, 255, 255, 0.9); 
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            }
            th, td {
                padding: 10px;
                text-align: left;
                color: #333333;
            }
            th {
                background-color: #f2f2f2; 
                border-bottom: 2px solid #dddddd;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9; 
            }
            caption {
                padding: 10px;
                font-weight: bold;
                font-size: 18px;
                color: #ffffff;
                background-color: rgba(0, 0, 0, 0.5); 
                border-radius: 5px;
                margin-bottom: 10px;
            }
        </style>";
    echo "</head>";
    echo "<body>";

    echo "<div class='container'>";
    echo "<table>";
    echo "<caption><strong>Students Data</strong></caption>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>CGPA</th>
          </tr>";

    while($row = mysqli_fetch_assoc($response)) {
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['CGPA']."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    echo "</body>";
    echo "</html>";

} else {
    echo "No records found";
}

mysqli_close($connect);
?>
