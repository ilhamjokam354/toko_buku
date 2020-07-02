<h1>DELETE</h1>
<?php
  if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $sql = "DELETE FROM tbl_kategori WHERE id_kategori = $id";
      $db->runSql($sql);
      echo '
      <script>
      alert("Hapus Data Berhasil!");
      document.location.href="?f=kategori&m=select";
      </script>';
  }
?>