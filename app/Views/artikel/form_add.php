<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post" class="form" enctype="multipart/form-data">
  <input type="text" name="judul" placeholder="Judul..">
  <textarea name="isi" cols="50" rows="10" placeholder="Isi.."></textarea>
  <input type="file" name="gambar">
  <input type="submit" value="Kirim" class="button-kirim">
</form>
<?= $this->include('template/admin_footer'); ?>