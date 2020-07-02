<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = $id";
        $db->runSql($sql);
        echo '<script>
        alert("Data Berhasil Dihapus");
        document.location.href="?f=pelanggan&m=select";
        </script>';
    }
?>