<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_buku WHERE id_buku = $id";
        echo $sql;
        $db->runSql($sql);
        echo '<script>
        alert("Data Berhasil Dihapus");
        document.location.href="?f=buku&m=select";
        </script>';
    }

?>