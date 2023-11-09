<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Profile</title>
</head>
<body>
    <header class="header">
        <p style="font-size: 27px;"> User Profile </p>
    </header>
    <!-- Sidebar-->
    <head>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       </head>
    <body>
      <div class="sidebar close">
        <div class="logo-details">
          <i class='bx bx-analyse'></i>
          <span class="logo_name">UDOCX</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="index.php">
              <i class='bx bx-home-smile' ></i>
              <span class="link_name">Home</span>
            </a>
          </li>
          <li>
            <div class="iocn-link">
              <a href="fileuploads.php">
                <i class='bx bx-note' ></i>
                <span class="link_name">File Uploads</span>
              </a>
            </div>
          </li>
          <li>
            <div class="iocn-link">
              <a href="profile.php">
                <i class='bx bx-user-circle' ></i>
                <span class="link_name">Profile</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="profile.php">Profile</a></li>
              <li><a href="useractivity.php">User Activity</a></li>
            </ul>
          </li>
          <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="sign-out-icon">
          </div>
          <i class='bx bx-log-out' ></i>
        </div>
      </li>
    </ul>
      </div>
      <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu' ></i>
        </div>
      </section>
      <div class="one"></div>
      <script src="script.js"></script>
    <main class="main"> </main>
    <footer class="footer"></footer>
</body>
</html>