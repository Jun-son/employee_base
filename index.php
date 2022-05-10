<!doctype html>
<html lang="ru">
<!-- Project by Nikita Mikhaylov  -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta lang="ru">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>База сотрудников</title>
  </head>

  <body>
    <header>
      <h1 class="main_header">Employee DB</h1>
      <div class="add_staff">
        <a href="scripts/php/add_staff.php">
          Добавить сотрудника
        </a>
      </div>
    </header>

    <div class="search_Line">
      <form>
        <input type="search" name="query" placeholder="Введите ФИО сотрудника">
        <button type="search">
          поиск
        </button>
      </form>
    </div>
    
      <?php 
        include 'scripts/php/staff_table.php' 
      ?>
  </body>
</html>