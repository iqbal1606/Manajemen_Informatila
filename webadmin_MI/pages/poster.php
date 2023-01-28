<title>Poster</title>
<!-- Page Heading -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
  <li class="breadcrumb-item active">Data Poster</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <h1 class="h3 mb-0 text-gray-800">Data Poster</h1>

</div>

<!-- Content Row -->
<div class="row col">
  <div class="col-12">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Data Poster</h6>
        <br>
        <a class="btn btn-success" href="#" role="button" data-toggle="modal"
          data-target="#tambahposterModal">Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>1</td>
                <td><a href="#"><img width="35%" src="img/ricuh.JPG"></a></td>
                <td>Aktif</td>
                <td>
                  <a class="btn btn-primary" href="#" role="button" data-toggle="modal"
                    data-target="#ubahposterModal">Ubah</a>
                  <a class="btn btn-danger" href="#" role="button" data-toggle="modal"
                    data-target="#hapusdatatahunajarModal">Hapus</a>
                </td>

              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <!-- tambah data -->

  <div class="modal fade" id="tambahposterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Silahkan Tambah Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="card-body">
          <form action="index.php?page=datapegawai" method="post" enctype="multipart/form-data" id="frm-mhs">
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" id="nama_kos" class="form-control" name="foto" class="required" />
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="aktif">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Aktif
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jkmhs" id="flexRadioDefault2" value="tidak_aktif">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Tidak Aktif
                  </label>
                </div>
              </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

          </form>

        </div>
      </div>
    </div>


  </div>

  <!-- editdata -->

  <div class="modal fade" id="ubahposterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Status</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="card-body">
          <form action="index.php?page=datapegawai" method="post" enctype="multipart/form-data" id="frm-mhs">
            <div class="form-group">
              <label>id_poster</label>
              <input type="text" id="nama_kos" class="form-control" name="id_poster" value="1" class="required" readonly/>
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="aktif">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Aktif
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jkmhs" id="flexRadioDefault2" value="tidak_aktif">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Tidak Aktif
                  </label>
                </div>
              </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

          </form>

        </div>
      </div>
    </div>


  </div>

  <!-- hapus data -->

  <div class="modal fade" id="hapusdatakontrakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="index.php?data=datapelanggan">Hapus</a>
        </div>
      </div>
    </div>


  </div>