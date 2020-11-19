<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kerjasama Mitra</title>
<link rel="stylesheet" href="style/css/materialize.min.css" type="text/css">
<link rel="stylesheet" href="style/css/materialize.css" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="style/js/materialize.js"></script>
<script src="style/js/materialize.min.js"></script>
<script type = "text/javascript"
src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
<script>
	$(document).ready(function() {
		$('select').material_select();
         });
</script>
</head>

<body>
	 <div class="container">
	 <div class="row">
		 <div class="center">
    <div class="col s12 m12">
      <div class="card green">
        <div class="card-content white-text">
          <span class="card-title"><h4><strong>Form Kerja Sama Mitra</strong></h4></span>
        </div>
		  </div>
       <div class="row">
    <div class="col s12 m12">
      <div class="card white">
        <div class="card-content white-text">
			<div class="row">
				
	 <!--<p>Ini Form Nama Lembaga</p> -->			
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="nama_lembaga" type="text" class="validate">
          <label for="nama_lembaga">Nama Lembaga</label>
        </div>
		   <!--<p>Ini Form Nama Kegiatan</p> -->
        <div class="input-field col s6">
          <input id="nama_kegiatan" type="text" class="validate">
          <label for="nama_kegiatan">Nama Kegiatan</label>
        </div>
      </div>
		
		 <!--<p>Ini Selected Form Tingkat </p> -->
      <div class="row">
        <div class="input-field col s4">
    <select>
      <option value="" disabled selected>Pilih Tingkat</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Tingkat</label>
  </div>

		   <!--<p>Ini Selected Form Tahun </p> -->
		<div class="input-field col s4">
    <select>
      <option value="" disabled selected>Pilih Tahun Kerjasama</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Tahun Kerjasama</label>
  </div>
		  
		   <!--<p>Ini Selected Form Tahun Berakhir </p> -->
		<div class="input-field col s4">
    <select>
      <option value="" disabled selected>Pilih Tahun Berakhir</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Tahun Berakhir</label>
  </div>
      </div>
		
		 <!--<p>Ini Textarea Form Manfaat kerjasama </p> -->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="manfaat_kerjasama" class="materialize-textarea"></textarea>
          <label for="manfaat_kerjasama">Manfaat Kerjasama</label>
        </div>
	</div>
  
      
		 <!--<p>Ini Form Input Multiple Form </p> -->
		
      <div class="row">
        <div class="input-field col s12">
          <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>Bukti Kerjasama</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload satu atau lebih bukti kerjasama">
      </div>
    </div>
  </form>
        </div>
      </div>
			
			<!--<p>Ini Tombol Submit </p> -->
		<div align="right" class="input-field col s11">
      <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
      </div> 
    </form>
      </div>
      </div>
    </div>
  </div>
     </div>
    </div>
  </div>          
     </div>
  </div> 
        

  
    
       
</body>
</html>