<link rel="stylesheet" type="text/css" href="css/Style_left_panel.css">
<script src="js/script.js" defer></script>
<style>
  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }

    .sidenav a {
      font-size: 18px;
    }
  }
</style>

<body class="body">
  <div class="sidenav">
    <div class="logotip">
      <img src="Images/logogogog.png" alt="">
    </div>
    <div class="left_panel_menu">
      <div class="test">
        <div class="name_hide_task">
          <div class="label_fon_menu" onclick="hideTask(event)">
            <label class="left_panel_label">Персонал</label>
            <div class="str">
              <span class="left_str"></span>
              <span class="right_str"></span>
            </div>
          </div>
          <div class="left_info_block">
            <a for="" href="/newStaff.php">Новый сотрудник</a><br>
            <a for="" href="#">Все сотрудники</a><br>
          </div>
        </div>
      </div>
      <div class="test">
        <div class="name_hide_task">
          <div class="label_fon_menu" onclick="hideTask(event)">
            <label class="left_panel_label">Задачи</label>
            <div class="str">
              <span class="left_str"></span>
              <span class="right_str"></span>
            </div>
          </div>
          <div class="left_info_block">
            <a for="" href="#">Новая задача</a><br>
            <a for="" href="#">Все задачи</a><br>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>