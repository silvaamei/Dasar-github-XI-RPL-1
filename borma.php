<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Documents</title>
  </head>
  <body>
      <br>
      <center>
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <form action="output.php" method="post">
  <div class="form-group row">
      <h2>Borma Cibaduyut</h2>
      <br>
      <br>
      <p>Sistem Penggajian Berdasarkan golongan karyawan</p>
      <br>
      <br>
      <p>Jumlah Jam Kerja</p>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="jam">
    </div>
  </div>
  
  <fieldset class="form-group row">
    <p>Golongan Kerja</p>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="grid" id="gridRadios1" value="A" checked>
        <label class="form-check-label" for="gridRadios1">
          A
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="grid" id="gridRadios2" value="B">
        <label class="form-check-label" for="gridRadios2">
          B
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="grid" id="gridRadios3" value="C">
        <label class="form-check-label" for="gridRadios3">
          C
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="grid" id="gridRadios4" value="D">
        <label class="form-check-label" for="gridRadios4">
          D
        </label>
      </div>
    </div>
    <center>
  <div class="form-group row">
    <div class="col-sm-10">
        <br>
      <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
    </div>
  </div>
  </center>
</form>

  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>