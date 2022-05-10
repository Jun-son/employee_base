<?php 
  #Подключение к БД 
  $conn = new mysqli("172.10.1.2", "root", "root", "employee");
  if($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
  }
  #Кодировка для корректного отображения языка
  mysqli_set_charset($conn, 'utf8');
  $sql = "SELECT * FROM `staff`";
  #Выводим инфу на экран
  if($result = $conn->query($sql)) {
    $rowsCount = $result->num_rows;
    
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table>
          <thead>
            <tr>
              <th>id</th>
              <th>Фамилия</th>
              <th>Имя</th>
              <th>Отчество</th>
              <th>Дата рождения</th>
              <th>Должность</th>
              <th>Статус</th>
            </tr>
          </thead>";
      echo "<tbody>";
        foreach($result as $row){
          echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["patronymic"] . "</td>";
            echo "<td>" . $row["date_of_birth"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            if ($row["status"] == 1) {
              echo "<td>Трудоустроен</td>";
            } else {
              echo "<td>Уволен</td>";
            }
            echo "<td><form action='scripts/php/delete_staff.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
          echo "</tr>";
        }
      echo "</tbody>";
    echo "</table>";
    } else {
        echo "Ошибка: " . $conn->error;
      }
    $conn->close();
      ?>