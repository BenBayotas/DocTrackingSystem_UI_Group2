<?php include 'filesLogic.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <title>Document Tracker System</title>
  
</head>
<body>

  <header class="header" style="text-align: center;"> 
    <p style="font-size: 27px;"> Document Tracker System </p>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <button class="signout-btn">
      <i class="bx bx-log-out">
      </i><a href="auth.php">  Signout </a></button>
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
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Home</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="fileuploads.php">
              <i class='bx bx-note' ></i>
              <span class="link_name">File Uploads</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">File Uploads</a></li>
            </ul>
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
      </ul>
    </div>

    
    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu' ></i>
      </div>
    </section>
    <div class="one"></div>
    <script src="script.js"></script>

  <main class="main">

    <div class="card">
      <form action="index.php">
        <h5 style="margin: 5px;"> Search Documents </h5>
        <input type="text" name="src-bar" class="txt-bar" size="40px"> <br>
        <input type="submit" name="searcg" class="btn" value="Search"> 
        <input type="submit" name="clear" class="btn" value="Clear">
      </form>
    </div>

    <div class="card"> 
      <form action="index.php" method="post" enctype="multipart/form-data" >
          <h5 style="margin: 5px;"> Import Documents (.docx/ .xlsx/ .pdf) </h5><br>
          <input type="file" name="myfile"> 
          <button type="submit" name="save" class="btn import-btn">Import</button>
        </form>

    </div>

    <div class="card">
      <div class="outer-wrapper">
      <div class="table-wrapper">
      <div class="table">
      <table>
            <thead>
                <th>ID</th>
                <th>File Name</th>
                <th>File Size</th>
                <th>Downloads</th>
                <th>Action</th>
            </thead>
            <tbody>
              <?php foreach ($files as $file): ?>
                <tr>
                  <td><?php echo $file['id']; ?></td>
                  <td><?php echo $file['name']; ?></td>
                  <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                  <td><?php echo $file['downloads']; ?></td>
                  <td style="width: 30%;">
                      <a class="tablebtn update-btn" href="index.php?file_id=<?php echo $file['id'] ?>">Download</a>
                      <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                      <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete"> 
                  </td>
                </tr>
              <?php endforeach;?>

            </tbody>

          </table>
      </div>
      
    </div>  
    
  </main>
  
  <footer>All rights reserved.&copy;</footer>

</body>
</html>