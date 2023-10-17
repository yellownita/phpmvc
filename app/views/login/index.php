<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <!-- <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css"> -->
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


