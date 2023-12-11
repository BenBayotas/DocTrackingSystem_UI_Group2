<?php 
include 'filesLogic.php';
include 'delete.php';

if (isset($_POST['searchBtn'])) {
  $search = $_POST['search'];
  $query = "SELECT * FROM files WHERE CONCAT(id, name) LIKE '%".$search."%'";
  $search_result = filterTable($query);
} else {
  $query =  "SELECT * FROM files";
  $search_result = filterTable($query);
}

function filterTable($query) {
  $connect = mysqli_connect("localhost", "root", "", "dts");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <title>Document Tracker System</title>
  
</head>
<body>

  <header class="header"> 
    <p> Document Tracker System </p>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <button class="signout-btn">
      <i class="bx bx-log-out" style="font-size: 25px;">
      </i><a href="auth.php" style="color: white; text-decoration: none;">  Signout </a></button>
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
      <form action="index.php" method="post">
        <header class="card-header">
          <h1>Search Documents</h1>
        </header>
<!-- Add this inside your search form -->
<input type="text" name="search" class="txt-bar" size="40px" placeholder="Enter file name...">   <br>
<input type="submit" name="searchBtn" class="search-btn" value="Search">

      </form>
    </div>

    <div class="card"> 
      <form action="index.php" method="post" enctype="multipart/form-data" >
      <header class="card-header2">
        <h1>Import Files</h1>
        </header>
        <!-- Add this inside your search form -->
          <br><br><p1 class="h2" styles= "font-size: 8px;">Import documents, spreadsheets, portable document format(.docx/ .xlsx/ .pdf)</p2><br>
          <input type="file" name="myfile" class="h2">
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
                <th>Date</th>
                <th>Time</th>
                <th>Downloads</th>
                <th>Action</th>
            </thead>
            <tbody>
   <?php while($file = mysqli_fetch_array($search_result)):?>
      <tr>
         <td><?php echo $file['id']; ?></td>
         <td><?php echo $file['name']; ?></td>
         <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
         <td><?php echo $file['date']; ?></td>
         <td><?php echo $file['time']; ?></td>
         <td><?php echo $file['downloads']; ?></td>
         <td style="width: 20%;" style="display: inline;">
         <a class="tablebtn update-btn" href="index.php?file_id=<?php echo $file['id'] ?>" style="text-decoration: none; font-size: 15px;"><i class="bx bx-download" style= "font-size: 18px; margin-top: 3px;"> Download</i></a>
            <form action="index.php" method="post">
               <input type="hidden" name="file_id" value="<?php echo $file['id']; ?>">
               <button type="submit" name="delete" class="tablebtn delete-btn" value="Delete" style="font-size: 15px;"><i class= "bx bxs-trash-alt" style= "font-size: 18px; margin-top: 3px;"> Delete</i></button>
            </form>
         </td>
      </tr>
   <?php endwhile;?>
</tbody>
          </table>
      </div> 
    </div>  
  </main>
  <footer>All rights reserved.&copy;</footer>

</body>
</html>