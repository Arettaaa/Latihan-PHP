<html>
	<head>
	  </head>
	  <body>   
	 <!-- penanganan form dengan method GET -->
	<form method="get" action="tampil.php">
	    <label>Nama Siswa</label>
		<input type="text" name="nama">
		<label>Jenis Kelamin</label>
        <select name="jk" >
        <option disabled selected>  Pilih </option>
        <option value="Perempuan"> P </option>
        <option value="Laki-laki"> L </option> 
    </select>
	<br>
		<label>Asal Sekolah</label>
		<input type="text" name="sklh">
        <label>No. Telpon</label> 
		<input type="text" name="no"><br/>
		<br/>	
	    <input type="submit" value="Daftar">
	</form>
	</body>
	</html>