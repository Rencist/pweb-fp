<?php
  include("../config.php");
  if (!isset($_GET['id'])) {
    header("Location: /pages/courses.php");
  }
?>

<?php if (isset($_GET['id'])): ?>
<?php
  $sql = "SELECT c.id, c.nama, c.deskripsi, c.harga, c.durasi, t.nama as tutor, p.nama as 'partner' FROM course c JOIN (SELECT id, nama FROM tutor) t ON c.tutor_id=t.id JOIN (SELECT id, nama FROM partner) p ON c.partner_id=p.id WHERE c.id=".$_GET['id'];
  $query = mysqli_query($db, $sql);

  if (!$query) {
    header('Location: /pages/courses.php?status=not_found');
  }

  $course = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admissions.css">
  <title>Pendaftaran | E-Learning</title>
</head>
<body>
  <nav>
    <h1 class="logo">E-Learning</h1>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item active">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <a href="login.php" class="btn nav-btn">Log In</a>
      <a href="signup.php" class="btn nav-btn">Sign Up</a>
    </div>
  </nav>
  <main>
    <form method="post" action="/backend_pendaftaran_kursus.php">
      <h1 class="form-title">Pendaftaran</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">
            <span><?php echo $course['nama'] ?></span>
            <span>•</span>
            <span><?php echo $course['tutor'] ?></span>
            <span>•</span>
            <span><?php echo $course['partner'] ?></span>
          </p>
          <textarea type="text" class="input-form" readonly rows="5"><?php echo $course['deskripsi'] ?></textarea>
        </div>

        <div class="form-grid-2">
          <div class="input">
            <p class="input-label">Durasi Kursus</p>
            <input type="text" class="input-form" readonly value="<?php echo $course['durasi'] ?> Bulan" />
          </div>
          
          <div class="input">
            <p class="input-label">Harga Kursus</p>
            <input type="text" class="input-form" readonly value="Rp <?php echo $course['harga'] ?>" />
          </div>
        </div>

        <input type="submit" class="btn submit-btn" value="Daftar Kursus" name="daftar_kursus" />
      </div>
    </form>
  </main>
</body>
</html>
<?php endif; ?>