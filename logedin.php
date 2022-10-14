<?php
session_start();
include 'db/db.php';

function login($data)
{
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['role'] = $data['role'];
    return 2;
  } else return 1;
}

if (isset($_POST["username"])) {
  $username_ = $db->real_escape_string($_POST["username"]);
} else {
  $username_ = "";
}
if (isset($_POST["password"])) {
  $password_ = $db->real_escape_string($_POST["password"]);
} else {
  $password_ = "";
}

$user = $db->query("SELECT id, password, nama, email, role FROM user WHERE username='" . $username_ . "' AND password='" . md5($password_) . "'", 0);
$result = $user->fetch_assoc();

if ($result == NULL) {
  echo '<script>
  alert("Data Tidak Ditemukan, Anda tidak memiliki akses");
  window.history.go(-1);
  </script>';
} else {
  $id = $result['id'];
  $password = $result['password'];
  $nama = $result['nama'];
  $email = $result['email'];
  $role = $result['role'];


  if ($role == 'Administrator') {
    $data = [
      'id' => $id,
      'password' => $password,
      'password_hash' => md5($password_),
      'nama' => $nama,
      'email' => $email,
      'role' => $role
    ];

    $loginArea = login($data);

    if ($loginArea == 2) {
      echo '<script>
      alert("Hai, ' . $nama . '. kamu berhasil login");
      location.href = "index.php"
      </script>';
    } else if ($loginArea == 1) {
      echo '<script>
      alert("Gagal Login");
      window.history.go(-1);
      </script>';
    }
  } else {
    echo '<script>
    alert("Gagal Login, Anda tidak memiliki akses");
    window.history.go(-1);
    </script>';
  }
}