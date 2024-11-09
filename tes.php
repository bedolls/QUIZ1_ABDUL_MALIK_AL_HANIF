<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
        <div class="card">
  <div class="card-header">
   <h3>Form DOSEN</h3> 
  </div>
  <div class="card-body">
    <form action="proses_latihan.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">KODE</label>
    <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Jurusan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="jurusan">
  </div>
    <div class="mb-3">
    <input type="checkbox" class="form-check-input" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary"> Submit </button>
    <button type="reset" class="btn btn-primary"> reset </button>
    </form>
  </div>
  </div>
</div>
</div>
</body>
</html>