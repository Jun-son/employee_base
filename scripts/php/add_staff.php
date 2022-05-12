<div class="input_staff">
  <p><a href="/index.php">Вернуться</a></p>
  <form method="POST" action="/index.php">
    <p> Фамилия
      <input class="attribute" name="surname" type="text" required placeholder="Фамиллия" value="Бахарев">
    </p>
    <p> Имя
      <input class="attribute" name="name" type="text" required placeholder="Имя" value="Степан">
    </p>
    <p> Отчество
      <input class="attribute" name="patronymic" type="text" required placeholder="Отчество" value="Павлович">
    </p>
    <p> Должность
      <input class="attribute" name="position" type="text" required placeholder="Должность" value="Специалист">
    </p>
    <p> Дата рождения
      <input class="attribute" name="date_of_birth" type="datetime" placeholder="1999-03-01" value="1999-03-01" required>
    </p>
    <p> Трудоустроен
      <input type="hidden" name="status" value="0">
      <input type="checkbox" name="status" value="1" class="attribute">
    </p>
    <button formaction='add_staff.php' name="data_post" type="submit">Отправить</button>
  </form>
</div>

<?php 
  if(isset($_POST['data_post'])) {

    $conn = new mysqli("172.10.1.2", "root", "root", "employee");
    mysqli_set_charset($conn, 'utf8');
    if($conn->connect_error) {
      die("Ошибка: " . $conn->connect_error);
    }
    if (!$conn) {
      exit(mysqli_error());
    }
    $surname = $_POST['surname'];
    $name = $_POST['name']; 
    $patronymic = $_POST['patronymic'];
    $position = $_POST['position'];
    $date_of_birth = $_POST['date_of_birth'];
    $status = $_POST['status'];

    #Ввод&Отправка данных из формы в БД 
    $result = mysqli_query($conn, "INSERT INTO `staff`(`surname`, `name`, `patronymic`, `position`,`date_of_birth`, `status`) VALUES ('$surname','$name','$patronymic', '$position','$date_of_birth','$status')");
    if ($result) {
      echo "Данные успешно сохранены!";
    }
    else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
    } 
  }
?>