<table border="1">
        <tr>
            <td>NIM </td>
            <td>Program Studi</td>
            <td>Nilai Akhir</td>
            <td>Status</td>
            <td>Catatan Khusus</td>
        </tr>
<?php
if (isset($_POST['Input'])) 
if ($_POST["nim"]) {
	$prodi = "pilih";
if ($_POST['prodi'] == "A11") {
    $prodi = "Teknik Informatika S1";
	}elseif ($_POST['prodi'] == "A12") {
		$prodi = "Sistem Informasi S1";
	}else {
		$prodi = "Teknik Informatika D3";
}

$nilai = ($_POST['ntugas'] * 40 / 100) + ($_POST['nuts'] * 30 / 100) + ($_POST['nuas'] * 30 / 100);
    if ($nilai > 60) {
        $lulus = "LULUS";
    } else {
        $lulus = "TIDAK LULUS";
    }

$catatan = ("");
    for ($i = 0; $i <= (count($_POST['catatan']) - 1); $i++) {
        $catatan .= $_POST['catatan'][$i];
    }

?>
    <tr><td><?= $_POST['nim']; ?></td>
        <td><?= $prodi; ?></td>
        <td><?= $nilai; ?></td>
        <td><?= $lulus; ?></td>
        <td><?= $catatan; ?></td></tr>
<?php
}
?>
</table>