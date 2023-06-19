<?php
  include("../config.php");
  $sql = "SELECT c.id, c.nama, c.deskripsi, c.harga, c.durasi, t.nama as tutor, p.nama as 'partner' FROM course c JOIN (SELECT id, nama FROM tutor) t ON c.tutor_id=t.id JOIN (SELECT id, nama FROM partner) p ON c.partner_id=p.id";
  $query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/courses.css">
  <title>Daftar Kursus | E-Learning</title>
</head>
<body>
  <nav>
    <h1 class="logo">E-Learning</h1>
    <div class="nav-list">
      <a href="courses.php" class="nav-item active">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <a href="login.php" class="btn nav-btn">Log In</a>
      <a href="signup.php" class="btn nav-btn">Sign Up</a>
    </div>
  </nav>
  <main>
    <h1 class="form-title">Daftar Kursus</h1>
    <section class="catalog">
      <?php while ($courses = mysqli_fetch_array($query)): ?>
        <div class="card">
          <div class="card-header">
            <img src="/images/course-card.png" alt="course card">
            <div class="card-caption">
              <h2 class="card-caption-title"><?php echo $courses['nama'] ?></h2>
              <p class="card-caption-subtitle">
                <span><?php echo $courses['tutor'] ?></span>
                <span>•</span>
                <span><?php echo $courses['partner'] ?></span>
              </p>
            </div>
          </div>
          
          <div class="card-body">
            <div class="card-body-top">
              <p class="card-body-header">
                <span><?php echo $courses['durasi'] ?> Bulan</span>
                <span>•</span>
                <span>Rp <?php echo $courses['harga'] ?></span>
              </p>
              <p class="card-body-description"><?php echo $courses['deskripsi'] ?></p>
            </div>

            <div class="card-body-bottom">
              <a href=<?php echo "admissions?id=".$courses['id'] ?> class="btn submit-btn">Beli</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </section>
  </main>
</body>
</html>