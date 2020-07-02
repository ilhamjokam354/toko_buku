<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tbl_user WHERE id_user = $id";

        $db->runSql($sql);
        echo '<script>
        alert("Hapus Data Berhasil");
        document.location.href="?f=user&m=select";
        </script>';
    }

?>