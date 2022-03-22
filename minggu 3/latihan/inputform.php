<html>
<head>
	<title>Form Pencatatan Nilai Mahasiswa </title>
</head>
	<body>
		<Body BGCOLOR="white" TEXT="black">
		<table align="center" border="0" cellpadding="2" cellspacing="2" height="260" color="grey">
		<FORM ACTION="prosesform.php" METHOD="POST" NAME="input">
	
			<form>
			<tr><td><tr>          
			<th align=height:30px;" colspan="2" bgcolor="blue"> <font color="black" size="5">FORM NILAI MAHASISWA</font></th></tr>
	
			<tr><td>NIM</td><td>
			<input type="text" name="nim" placeholder="Diisi Manual" align="center"></td></tr>
	
			<tr><td>Program Studi</td>
			<td><select name="prodi" id="">
				<option value="pilih" select="select">Pilih Data</option>
				<option value="A11">Teknik Informatika S1</option>
				<option value="A12">Sistem Informasi</option>
				<option value="A22">Teknik Informatika D3</option>
				</select></td></tr>
	
			<tr><td>Nilai Tugas</td>
			<td><input type="number" max="100" placeholder="Isian angka maksimal 100" name="ntugas"></td></tr>

			<tr><td>Nilai UTS</td>
			<td><input type="number" max="100" placeholder="Isian angka maksimal 100" name="nuts"></td></tr>

			<tr><td>Nilai UAS</td>
			<td><input type="number" max="100" placeholder="Isian angka maksimal 100" name="nuas"></td></tr>

			<tr><td>Catatan Khusus</td>
			<td><input name="catatan[]" value="Sering hadir </br> " type="checkbox">Kehadiran >= 70%</br>
				<input name="catatan[]" value="Interaktif </br> " type="checkbox">Interaktif di Kelas</br>
				<input name="catatan[]" value="Tugas tidak terlambat </br> " type="checkbox">Tidak terlambat mengumpulkan tugas</td></tr>
			
			<tr><td><input type="submit" name="Input" value="Input"></td></tr>

			</form>
		</table>
	</body>
</html>