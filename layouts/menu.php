

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <center>
                    <img src="../assets/side_image.png" class="rounded-circle" style="width: 120px; height: 110px; border: 2px solid #A9A9A9; background-color: #A9A9A9;" alt="Avatar"/><br>
                    <h3 >CanvaJer</h3>
                </center>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo WEB_ROOT; ?>/home/dashboard.php"><i class="bi bi-border-all"></i>&nbspDashboard</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenuMesyuarat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i>&nbspParticipants</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuMesyuarat">
                        <li>
                            <a href="<?php echo WEB_ROOT; ?>/participant/add.php"><i class="fas fa-plus"></i>&nbspAdd</a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_ROOT; ?>/participant/index.php"><i class="bi bi-list"></i>&nbspList</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenuUser" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-bookmark"></i>&nbspEvents</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuUser">
                        <li>
                            <a href="<?= WEB_ROOT ?>/event/create.php"><i class="bi bi-calendar-event"></i>&nbspCreate</a>
                        </li>
                        <li>
                            <a href="<?= WEB_ROOT ?>/event/index.php"><i class="bi bi-list"></i>&nbspList</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?php echo WEB_ROOT; ?>/controllers/userController.php?cmd=logout" class="btn btn-danger btn-lg btn-block"><i class="bi bi-box-arrow-in-left"></i>&nbspLog keluar</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div>
                        Hai, <?php echo $_SESSION['user']['ad_username']; ?>
                    </div>
                </div>
            </nav>

            