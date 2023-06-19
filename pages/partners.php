<?php
  include("../config.php");
  $sql = "SELECT nama, deskripsi FROM partner";
  $query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/courses.css">
  <title>Daftar Partners | E-Learning</title>
</head>
<body>
<nav>
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item active">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <?php if (!isset($_GET['user_id'])): ?>
        <a href="login.php" class="btn nav-btn">Log In</a>
        <a href="signup.php" class="btn nav-btn">Sign Up</a>
      <?php else: ?>
        <?php
          $sql_nav = "SELECT nama FROM `user` WHERE id=".$_GET['user_id'];
          $query_nav = mysqli_query($db, $sql_nav);
          $user = mysqli_fetch_assoc($query_nav);
        ?>
        <button class="btn nav-btn" onclick="logout()">Log Out <?php echo $user['nama'] ?></button>
      <?php endif; ?>
    </div>
  </nav>
  <main>
    <h1 class="form-title">Daftar Partner</h1>
    <section class="catalog">
      <?php while ($partner = mysqli_fetch_array($query)): ?>
        <div class="card">
          <div class="card-header">
            <img src="../images/course-card.png" alt="partner card">
            <div class="card-caption">
              <h2 class="card-caption-title"><?php echo $partner['nama'] ?></h2>
            </div>
          </div>
          
          <div class="card-body">
            <div class="card-body-top">
              <p class="card-body-description"><?php echo $partner['deskripsi'] ?></p>
            </div>

          </div>
        </div>
      <?php endwhile; ?>
    </section>
  </main>

  <script src="../scripts/main.js"></script>
</body>
</html>