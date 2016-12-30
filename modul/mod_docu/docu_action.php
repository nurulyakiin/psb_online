<?
session_start();

include '../../config/koneksi.php';
$id_keterangansiswa = $_POST['id_keterangansiswa'];
for ($i = 0; $i < count ($_FILES['userfile']['name']); $i++)
    {
        $tmp_file = $_FILES['userfile']['tmp_name'][$i];
        $filetype = $_FILES['userfile']['type'][$i];
        $filesize = $_FILES['userfile']['size'][$i];
        $filename = $_FILES['userfile']['name'][$i];
        $destination = $path['dirname'] . '../../images/document/' . $filename;
        if (move_uploaded_file($tmp_file, $_SERVER['DOCUMENT_ROOT'] . $destination))
        {
            $result = mysql_query ("INSERT INTO psb_dokumen (id_keterangansiswa, location,
                filetype, filename, filesize)
                VALUES ('".$id_keterangansiswa."', '" . $destination . "','" . $filetype .
                "','" . $filename . "'," . $filesize . ")");
        }
    }
?>