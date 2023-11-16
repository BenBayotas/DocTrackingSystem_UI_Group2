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
      <form action="index.php">
        <h5 style="margin: 5px;"> Import Documents (.docx/ .xlsx/ .pdf) </h5> 
        <input type="file" name="file" id="file" class="upload" style="margin-top: 20px;"> 
        <input type="submit" name="import" class="btn import-btn" value="Import">
      </form>
    </div>

    <div class="card">
      <div class="outer-wrapper">
      <div class="table-wrapper">
      <div class="table">
        <table>
          <tr>
            <th>File name</th>
            <th>File size</th>
            <th>Type of file</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td>Jhoewell Posas</td>
            <td>20mb</td>
            <td>.docs</td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">  
              </div>
        
            </td>

          </tr>
          <tr>
            <td>Kentoy Beltran</td>
            <td>30mb</td>
            <td>.xlsx</td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">  
              </div>
        
            </td>
          </tr>
          <tr>
            <td>Ondoy Bayotas </td>
            <td>10mb </td>
            <td>.pdf </td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">
              </div>
        
            </td>
          </tr>
          <tr>
            <td>Len Tupaz</td>
            <td>15mb</td>
            <td>xlsx</td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">  
              </div>
        
            </td>
          </tr>
          <tr>
            <td>Shamic Ebarle</td>
            <td>5mb</td>
            <td>.docs</td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">  
              </div>
        
            </td>
          </tr>
          <tr>
            <td>Angelo Sanchez</td>
            <td>5mb</td>
            <td>.docs</td>
            <td>
              <div style=" width: 50%; display: inline-block;">
                <input type="submit" name="update" class="tablebtn update-btn" value="Update">
                <input type="submit" name="delete" class="tablebtn delete-btn" value="Delete">
                <input type="submit" name="export" class="tablebtn export-btn" value="Export">  
        
            </td>
          </tr>
          
          
          
        </table>
      </div>
      
    </div>  
    
  </main>
  
  <footer>All rights reserved.&copy;</footer>

</body>
</html>