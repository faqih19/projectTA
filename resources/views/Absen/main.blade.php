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
                                        <label for="exampleInputEmail1" class="form-label">Id Pegawai</label>
                                        <input type="text" class="form-control" placeholder="Masukan id_pegawai" name="id_pegawai">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                                        <input type="text" class="form-control"  placeholder="Masukan nama" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control"  placeholder="Masukan jenis kelamin" name="jenis_kelamin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Jabatan" name="Jabatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control"  placeholder="Masukan tanggal" name="tanggal">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jam</label>
                                        <input type="text" class="form-control"  placeholder="Masukan jam" name="jam">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kehadiran</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Kehadiran" name="Kehadiran">
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
                                  <label>Id Pegawai</label>
                                  <div class="form-label" id="the-basics">
                                    <input class="form-control" name="id_pegawai" id="edit-id_pegawai" type="text" placeholder="id pegawai" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Nama</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="nama" id="edit-nama" type="text" placeholder="nama" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Jenis Kelamin</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="jenis_kelamin" id="edit-jenis_kelamin" type="text" placeholder="Jenis Kelamin" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Jabatan</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="jabatan" id="edit-jabatan" type="text" placeholder="Jabatan" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Tanggal</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="tanggal" id="edit-tanggal" type="text" placeholder="Tanggal" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Jam</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="jam" id="edit-jam" type="text" placeholder="Jam" required>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label>Kehadrian</label>
                                  <div class="form-label" id="bloodhound">
                                    <input class="form-control" name="Kehadrian" id="edit-Kehadrian" type="text" placeholder="Kehadrian" required>
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
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"                aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <h1 class="h3 mb-2 text-gray-800">Tables pgnsi</h1>

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
                                        <tr>
                                            <th>No</th>
                                            <th>Id Pegawai</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Kehadiran</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($ab as $pg)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$pg->pegawai->id_pegawai}}</td>
                                            <td>{{$pg->Nama}}</td>
                                            <td>{{$pg->jenis_kelamin}}</td>
                                            <td>{{$pg->Jabatan}}</td>
                                            <td>{{$pg->Kehadiran}}</td>
                                            <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#update" id="btn-edit-pgnsi" 
                                  
                                  data-id="{{$pg->id}}"
                                  data-id_pegawai="{{$pg->id_pegawai}}" 
                                  data-nama="{{$pg->Nama}}" 
                                  data-jenis_kelamin="{{$pg->jenis_kelamin}}" 
                                  data-jabatan="{{$pg->Jabatan}}" 
                                  data-tanggal="{{$pg->tanggal}}" 
                                  data-jam="{{$pg->jam}}" 
                                  data-Kehadiran="{{$pg->Kehadiran}}" >
                                  
                                  <i class="ti-reload btn-icon-prepend"></i>Ubah</button>
                            @csrf
                            @method('DELETE')
                                <button type="button" class="btn btn-outline-danger btn-fw border-0" data-bs-toggle="modal" data-bs-target="#delete" id="btn-delete-pgn" data-id="{{$pg->id}}"><i class="ti-trash btn-icon-prepend "></i>Hapus</button>
                            </form>
                          </td>
                                            <!-- <td class="text-center">
                                <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#modalUpdate" id="btn-edit-barang" onclick="edit()" data-merk="{{$pg->merk}}" data-type="{{$pg->type}}"data-id="{{$pg->id}}">
                                  
                                  <i class="ti-reload btn-icon-prepend"></i>Ubah</button>
                          </td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            
<script>
    $(document).ready(function(){
        $("form").submit(function(){
            $(this).submit(function(){
                return false;
            });
            return true;
        });
    });

    $(document).on('click', '#btn-edit-pgn', function () {
        let id = $(this).data('id');
        // AJAX
        $.ajax({
            type: "get",
            url: 'pegawai/' + id,
            dataType: 'json',
            success: function (res) {
                //  console.log(res);
                $('#edit-id').val(res[0].id);
                $('#edit-id_pegawai').val(res[0].id_pegawai);
                $('#edit-nama').val(res[0].nama);
                $('#edit-jenis_kelamin').val(res[0].jenis_kelamin);
                $('#edit-jabatan').val(res[0].jabatan);
                $('#edit-tanggal').val(res[0].tanggal);
                $('#edit-jam').val(res[0].jam);
                $('#edit-Kehadiran').val(res[0].Kehadiran);
            }
        });

    });
$(document).on('click', '#btn-delete-pgn', function () {
        let id = $(this).data('id');
        $('#delete-id').val(id);

    });

    // function edit(){

    //     // var id = $('#btn-edit-barang').attr("data-id")
    //     // var merk = $('#btn-edit-barang').attr("data-merk")
    //     // var type = $('#btn-edit-barang').attr("data-type")

    //     // $('#id_upd').val(id);
    //     // $('#merk_upd').val(merk);
    //     // $('#type_upd').val(type);

    // }

    // function update(ms){
    //     $('#')
    // }
       
        // AJAX
   
//     });
</script>

@endsection