@extends('layout.master')
@section ('content')


                <!-- End of Topbar -->
<!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ action('KelolaController@store') }}" method="POST">
                                    @csrf
                                    <label for="formFileMultiple" class="form-label">Tambahkan Foto Barang</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kode_kendaraan</label>
                                        <input type="text" class="form-control" placeholder="Masukan Merk" name="kode_kendaraan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama_kendaraan</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tahun_Pembuatan</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Tahun">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status_jual</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Status">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Harga">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status_Motor</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="StatusMotor">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Isi_Slinder</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Slinder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No_STNK</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="NoStnk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No_Rangka</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="NoRangka">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No_Mesin</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="NoMesin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control"  placeholder="Masukan Type" name="Tanggal">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Warna</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Warna">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Bahan_Bakar</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="BahanBakar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Warna_TNKB</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="WarnaTNKB">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                                        <input type="blob" class="form-control"  placeholder="Masukan Type" name="Foto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="des">
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
                          <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kelola Barang</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ action('KelolaController@update','update') }}" method="POST">
                        @method('PATCH')
                        @csrf
                          <div class="modal-body">
                              <div class="form-group row">
                                <input type="text" name="id" id="edit-id" hidden>
                                <div class="col">
                                  <label>Kode_kendaraan</label>
                                  <div class="form-group" id="the-basics">
                                    <input class="form-control" name="kode_kendaraan" id="edit-kode_kendaraan" type="text" placeholder="Masukan kode kendaraan" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Nama_kendaraan</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Nama" id="edit-nama_kendaraan" type="text" placeholder="Nama Kendaraan" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Tahun_Pembuatan</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Tahun" id="edit-tahun_pembuatan" type="text" placeholder="Tahun Pembuatan" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Status_jual</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Status" id="edit-status_jual" type="text" placeholder="Status jual" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Harga</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Harga" id="edit-harga" type="text" placeholder="Harga" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Status_Motor</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="StatusMotor" id="edit-status_motor" type="text" placeholder="Status Motor" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Isi_Slinder</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Slinder" id="edit-isi_slinder" type="text" placeholder="isi slinder" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>No_STNK</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="NoStnk" id="edit-no_stnk" type="text" placeholder="No STNK" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>No_Rangka</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="NoRangka" id="edit-no_rangka" type="text" placeholder="No Rangka" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>No_Mesin</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="NoMesin" id="edit-no_mesin" type="text" placeholder="No Mesin" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Tanggal</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Tanggal" id="edit-tanggal" type="date" placeholder="Tanggal" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Warna</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Warna" id="edit-warna" type="text" placeholder="Warna" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Bahan_Bakar</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="BahanBakar" id="edit-bahan_bakar" type="text" placeholder="Bahan Bakar" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Warna_TNKB</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="WarnaTNKB" id="edit-warna_tnkb" type="text" placeholder="Warna TNKB" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Foto</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="Foto" id="edit-foto" type="text" placeholder="Foto" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Deskripsi</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="des" id="edit-deskripsi" type="text" placeholder="deskripsi" required>
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
                      <form action="{{ action('KelolaController@destroy','delete') }}" method="POST">
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
                    <h1 class="h3 mb-2 text-gray-800">Tables Kelola Barang</h1>

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
                                            <th>id</th>
                                            <th>Kode Kendaraan</th>
                                            <th>Nama Kendaraan</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Status Jual</th>
                                            <th>Harga</th>
                                            <th>Status Motor</th>
                                            <th>Isi Slinder</th>
                                            <th>No STNK</th>
                                            <th>No Rangka</th>
                                            <th>No Mesin</th>
                                            <th>Tanggal</th>
                                            <th>Warna</th>
                                            <th>Bahan Bakar</th>
                                            <th>Warna TNKB</th>
                                            <th>Foto</th>
                                            <th>Deskripsi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($klo as $kl)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$kl->id}}</td>
                                            <td>{{$kl->kode_kendaraan}}</td>
                                            <td>{{$kl->nama_kendaraan}}</td>
                                            <td>{{$kl->tahun_pembuatan}}</td>
                                            <td>{{$kl->status_jual}}</td>
                                            <td>{{$kl->harga}}</td>
                                            <td>{{$kl->status_motor}}</td>
                                            <td>{{$kl->isi_slinder}}</td>
                                            <td>{{$kl->no_stnk}}</td>
                                            <td>{{$kl->no_rangka}}</td>
                                            <td>{{$kl->no_mesin}}</td>
                                            <td>{{$kl->tanggal}}</td>
                                            <td>{{$kl->warna}}</td>
                                            <td>{{$kl->bahan_bakar}}</td>
                                            <td>{{$kl->warna_tnkb}}</td>
                                            <td>{{$kl->foto}}</td>
                                            <td>{{$kl->deskripsi}}</td>
                                            <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#update" id="btn-edit-kelola_barang" 
                                  
                                  data-id="{{$kl->id}}"
                                  data-kode_kendaraan="{{$kl->kode_kendaraan}}"
                                  data-nama_kendaraan="{{$kl->nama_kendaraan}}" 
                                  data-tahun_pembuatan="{{$kl->tahun_pembuatan}}" 
                                  data-status_jual="{{$kl->status_jual}}" 
                                  data-harga="{{$kl->harga}}" 
                                  data-status_motor="{{$kl->status_motor}}" 
                                  data-isi_slinder="{{$kl->isi_slinder}}" 
                                  data-no_stnk="{{$kl->no_stnk}}" 
                                  data-no_rangka="{{$kl->no_rangka}}" 
                                  data-no_mesin="{{$kl->no_mesin}}" 
                                  data-tanggal="{{$kl->tanggal}}" 
                                  data-warna="{{$kl->warna}}" 
                                  data-bahan_bakar="{{$kl->bahan_bakar}}" 
                                  data-warna_tnkb="{{$kl->warna_tnkb}}" 
                                  data-foto="{{$kl->foto}}" 
                                  data-deskripsi="{{$kl->deskripsi}}" >
                                  
                                  <i class="ti-reload btn-icon-prepend"></i>Ubah</button>
                            @csrf
                            @method('DELETE')
                                <button type="button" class="btn btn-outline-danger btn-fw border-0" data-bs-toggle="modal" data-bs-target="#delete" id="btn-delete-kelola_barang" data-id="{{$kl->id}}"><i class="ti-trash btn-icon-prepend "></i>Hapus</button>
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
    $(document).ready(function(){
        $("form").submit(function(){
            $(this).submit(function(){
                return false;
            });
            return true;
        });
    });

    $(document).on('click', '#btn-edit-kelola_barang', function () {
        let id = $(this).data('id');
        // AJAX
        $.ajax({
            type: "get",
            url: 'kelola/' + id,
            dataType: 'json',
            success: function (res) {
                //  console.log(res);
                $('#edit-id').val(res[0].id);
                $('#edit-kode_kendaraan').val(res[0].kode_kendaraan);
                $('#edit-nama_kendaraan').val(res[0].nama_kendaraan);
                $('#edit-tahun_pembuatan').val(res[0].tahun_pembuatan);
                $('#edit-status_jual').val(res[0].status_jual);
                $('#edit-harga').val(res[0].harga);
                $('#edit-status_motor').val(res[0].status_motor);
                $('#edit-isi_slinder').val(res[0].isi_slinder);
                $('#edit-no_stnk').val(res[0].no_stnk);
                $('#edit-no_rangka').val(res[0].no_rangka);
                $('#edit-no_mesin').val(res[0].no_mesin);
                $('#edit-tanggal').val(res[0].tanggal);
                $('#edit-warna').val(res[0].warna);
                $('#edit-bahan_bakar').val(res[0].bahan_bakar);
                $('#edit-warna_tnkb').val(res[0].warna_tnkb);
                $('#edit-foto').val(res[0].foto);
                $('#edit-deskripsi').val(res[0].deskripsi);
            }
        });

    });
$(document).on('click', '#btn-delete-kelola_barang', function () {
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