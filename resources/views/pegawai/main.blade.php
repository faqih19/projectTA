@extends('layout.master')
@section ('content')


<!-- End of Topbar -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ action('PegawaiController@store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="Nama">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No HP</label>
            <input type="number" class="form-control" placeholder="No HP" name="no_hp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" placeholder="Masukan Jenis Kelamin" name="jenis_kelamin">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control" placeholder="Masukan Alamat" name="Alamat">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
            <input type="text" class="form-control" placeholder="Masukan Jabatan" name="Jabatan">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gaji</label>
            <input type="number" class="form-control" placeholder="Masukan Gaji" name="Gaji">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End MOdal -->

<!-- Modal Update -->
<!-- Update modal -->
<div class="modal fade" id="update" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ action('PegawaiController@update','update') }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
          <div class="form-group row">
            <input type="text" name="id" id="edit-id" hidden>
            <div class="mb-3">
              <label>Nama</label>
              <div class="form-label" id="the-basics">
                <input class="form-control" name="Nama" id="edit-Nama" type="text" placeholder="Masukan Nama" required>
              </div>
            </div>
            <div class="mb-3">
              <label>No HP</label>
              <div class="form-label" id="the-basics">
                <input class="form-control" name="no_hp" id="edit-no_hp" type="text" required>
              </div>
            </div>
            <div class="mb-3">
              <label>Jenis Kelamin</label>
              <div class="form-label" id="bloodhound">
                <input class="form-control" name="jenis_kelamin" id="edit-jenis_kelamin" type="text" placeholder="Jenis Kelamin" required>
              </div>
            </div>
            <div class="mb-3">
              <label>Alamat</label>
              <div class="form-label" id="bloodhound">
                <input class="form-control" name="Alamat" id="edit-Alamat" type="text" placeholder="Alamat" required>
              </div>
            </div>
            <div class="mb-3">
              <label>Jabatan</label>
              <div class="form-label" id="bloodhound">
                <input class="form-control" name="Jabatan" id="edit-Jabatan" type="text" placeholder="Jabatan" required>
              </div>
            </div>
            <div class="mb-3">
              <label>Gaji</label>
              <div class="form-label" id="bloodhound">
                <input class="form-control" name="Gaji" id="edit-Gaji" type="text" placeholder="Gaji" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-outline-primary"><i class="icon-download"></i>Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end Update modal -->
<!-- End Modal -->

<!-- Delete Modal -->
<!-- Modal Hapus -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan !!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ action('PegawaiController@destroy','delete') }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="modal-body">
          <input type="text" name="id" id="delete-id" hidden>
          <p>
            <center>
              Apakah Anda Yakin Menghapus Data ini ?
            </center>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="ti-angle-double-left btn-icon-prepend"></i>Kembali</button>
          <button type="submit" class="btn btn-outline-primary"><i class="ti-trash btn-icon-prepend"></i>Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Hapus -->
<!-- Delete Modal -->


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables Data Pegawai</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Tersedia</h6>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama</th>
              <th>No HP</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Jabatan</th>
              <th>Gaji</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
            @foreach ($pgw as $pg)
            <tr class="text-center">
              <td>{{$no++}}</td>
              <td>{{$pg->nama}}</td>
              <td>{{$pg->no_hp}}</td>
              <td>{{$pg->jenis_kelamin}}</td>
              <td>{{$pg->alamat}}</td>
              <td>{{$pg->jabatan}}</td>
              <td>{{$pg->gaji}}</td>
              <td>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                  <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#update" id="btn-edit-pegawai" data-id="{{$pg->id}}" data-nama="{{$pg->nama}}" data-jenis_kelamin="{{$pg->jenis_kelamin}}" data-alamat="{{$pg->alamat}}" data-jabatan="{{$pg->jabatan}}" data-no_hp="{{$pg->no_hp}} data-gaji=" {{$pg->gaji}}">
                    <i class="ti-reload btn-icon-prepend"></i>Ubah</button>
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-outline-danger btn-fw border-0" data-bs-toggle="modal" data-bs-target="#delete" id="btn-delete-pegawai" data-id="{{$pg->id}}"><i class="ti-trash btn-icon-prepend "></i>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<script>
  $(document).ready(function() {
    $("form").submit(function() {
      $(this).submit(function() {
        return false;
      });
      return true;
    });
  });

  $(document).on('click', '#btn-edit-pegawai', function() {
    let id = $(this).data('id');
    // AJAX
    $.ajax({
      type: "get",
      url: 'pegawai/' + id,
      dataType: 'json',
      success: function(res) {
        //  console.log(res);
        $('#edit-id').val(res[0].id);
        $('#edit-nama').val(res[0].nama);
        $('#edit-no_hp').val(res[0].no_hp);
        $('#edit-jenis_kelamin').val(res[0].jenis_kelamin);
        $('#edit-alamat').val(res[0].alamat);
        $('#edit-jabatan').val(res[0].jabatan);
        $('#edit-gaji').val(res[0].gaji);
      }
    });

  });
  $(document).on('click', '#btn-delete-pegawai', function() {
    let id = $(this).data('id');
    $('#delete-id').val(id);

  });
</script>

@endsection