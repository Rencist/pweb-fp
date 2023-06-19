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
    <h1 class="logo">E-Learning</h1>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <a href="login.php" class="btn nav-btn">Log In</a>
      <a href="signup.php" class="btn nav-btn">Sign Up</a>
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

        <input type="hidden" name="user_id" />
        <input type="submit" class="btn submit-btn" value="Kirim Pesan" name="kontak_kami" />
      </div>
    </form>
  </main>
</body>
</html>