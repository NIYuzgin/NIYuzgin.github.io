
 <?php
        $serevername = "localhost";
        $username = "NIYuzgin_1";
        $password = "1234";
        $_database = "base_2";
       
        $mysqli = new mysqli($serevername, $username, $password, $_database);
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }


        $user_name = $_POST["user_name"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $date_birth = $_POST["date_birth"];
        $report = $_POST["report"];
       
        $sql = "INSERT INTO base_2(user_name, tel, email, date_birth, report) VALUES ('$user_name', '$tel', '$email','$date_birth','$report')";
        if(!$mysqli->query($sql))
        {
            echo "<h1>Ошбка в запросе: </h1>".$mysqli->error;
        }
        else
        {
            echo "<h1>Всё хорошо! </h1>";
            
            
        }
  
?>

<table border="1">
        <tr>
        <td >ФИО</td> 
        <td>Телефон</td>
        <td>Электронная почта</td>
        <td>Дата рождения</td>
        <td>Тема доклада</td>
        
        </tr>
        <?php
            // while ($row = $result->fetch_row())
            {
                echo "<tr>";
                echo "<td>".$user_name."</td>"; 
                echo "<td>".$tel."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$date_birth."</td>";
                echo "<td>".$report."</td>";
                echo "</tr>";
            }
        ?>
    
    </table>
