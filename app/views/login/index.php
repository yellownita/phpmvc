<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css"> 
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="container mt-3">

<div class="row">
  <div class="col-log-6">
    <?php Flasher::flash(); ?>
  </div>
</div>



</div>
<div class="container"> 
<form action="<?= BASEURL; ?>/login/" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p> 
            <p class="login-text" style="font-size: 1rem; font-weight: 500;"> jangan lupa registrasi dulu</p> 
            <div class="input-group"> 
                <input type="text"  class="form-control" id="username" name="username" placeholder="Email" name="email" required> 
            </div> 
            <div class="input-group"> 
                <input type="password"  class="form-control" id="password" name="password" placeholder="Password" name="password" required> 
            </div> 
            <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role">
            <option value="admin">Admin</option>
            <option value="perusahaan">Perusahaan</option>
            <option value="pengguna">Pengguna</option>
        </select>
    </div>
            <div class="input-group"> 
                <button type="submit" class="btn">Login</button> 
            </div> 
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p> 
        </form> 
    </div> 


<form action="<?= BASEURL; ?>/login/" method="post">
    <input type="hidden" name="id" id="id">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role">
            <option value="admin">Admin</option>
            <option value="perusahaan">Perusahaan</option>
            <option value="pengguna">Pengguna</option>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>


