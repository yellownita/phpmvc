<div class="container" mt-5>
<div class="card" style="width: 18rem;">
  <div class="card-body">
      <h5 class="card-title"><?= $data['msr']['nama']; ?></h5>
    <h5 class="card-title"><?= $data['msr']['id']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data ['msr']['username']; ?></h6>
    <p class="card-text"><?= $data['msr']['email']; ?></p>
    <a href="#" class="card-link"><?= $data['msr']['telepon']; ?></a>
    <a href="<?= BASEURL; ?>/muser" class="card-link">Kembali</a>
  </div>
</div>
</div>