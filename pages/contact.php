<?php
  include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/centered-main.css">
  <title>Kontak Kami | E-Learning</title>
</head>
<body>
  <nav>
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item active">contact</a>
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
    <form method="post" action="/backend_kontak_kami.php">
      <h1 class="form-title">Kontak Kami</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">Judul</p>
          <input type="text" class="input-form" placeholder="Masukkan Judul" name="judul">
        </div>

        <div class="input">
          <p class="input-label">Pesan</p>
          <textarea type="text" class="input-form" placeholder="Tulis pesaan di sini ..." name="pesan"></textarea>
        </div>

        <input type="hidden" name="user_id" value="<?php if (isset($_GET['user_id'])) echo $_GET['user_id'] ?>">
        <input type="submit" class="btn submit-btn" value="Kirim Pesan" name="kontak_kami" />
      </div>
    </form>
  </main>

  <script src="../scripts/main.js"></script>
</body>
</html>