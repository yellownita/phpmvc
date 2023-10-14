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


