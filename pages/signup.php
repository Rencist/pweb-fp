<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/centered-main.css">
  <title>Sign Up | E-Learning</title>
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
      <a href="signup.php" class="btn signup-btn">Sign Up</a>
    </div>
  </nav>
  <main>
    <form method="post" action="/backend_daftar_user.php">
      <h1 class="form-title">Daftar</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">Nama</p>
          <input type="text" class="input-form" placeholder="Masukkan Nama" name="nama">
        </div>

        <div class="input">
          <p class="input-label">Email</p>
          <input type="text" class="input-form" placeholder="Masukkan Email" name="email">
        </div>

        <div class="input">
          <p class="input-label">Nomor Telepon</p>
          <input type="text" class="input-form" placeholder="Masukkan Nomor Telepon" name="no_telp">
        </div>

        <div class="input">
          <p class="input-label">Password</p>
          <input type="password" class="input-form" placeholder="Masukkan Kata Sandi" name="password">
        </div>

        <input type="submit" class="btn submit-btn" value="Daftar" name="daftar_user" />
      </div>
    </form>
  </main>
</body>
</html>