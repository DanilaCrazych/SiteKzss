<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <title>Главная страница</title>
  <link rel="stylesheet" type="text/css" href="css/Style_main.css">
  <script src="https://code.jquery.com/jquery-3.6.3.js" defer></script>
  <script src="js/script.js" defer></script>
  <?php
  require "checkWhoLogin.php";
  ?>
</head>

<body>
  <div class="main_page">
    <div class="top_panel">
      <!-- <h1>Здравствуйте: <?php echo $whologin; ?></h1>
      <a class="top_panel_a">Активные задачи:</a> -->
    </div>
    <div class="tasks">
      <?php
      include "db.php";
      require "checkWhoLogin.php";
      $workbd = mysqli_query($conn, "SELECT * FROM `tasks` WHERE staff LIKE '$whologin'");
      while ($result = mysqli_fetch_assoc($workbd)) {
      ?>
        <div class="ative_task">
          <div class="name_hide_task">
            <label class="name_Task" onclick="hideTask(event)"><?php echo $result['task']; ?></label>
            <div class="str">
              <span class="left_str"></span>
              <span class="right_str"></span>
            </div>
          </div>
          <div class="info_block">
            <div class="opisanie">
              Описание:
              <?php
              echo $result['description'];
              ?>
            </div>
            <div class="date_finish">
              <a class="opisanie">Выполнить задачу до: <?php echo $result['deadline']; ?></a>
            </div>
          </div>
        <?php
      }
        ?>
        </div>
    </div>
</body>

</html>