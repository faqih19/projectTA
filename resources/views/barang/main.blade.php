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
                                <form action="{{ action('BarangController@store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Merk</label>
                                        <input type="text" class="form-control" placeholder="Masukan Merk" name="Merk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Type</label>
                                        <input type="text" class="form-control"  placeholder="Masukan Type" name="Type">
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
                          <h5 class="modal-title" id="exampleModalLabel">Ubah Data Barang</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ action('BarangController@update','update') }}" method="POST">
                        @method('PATCH')
                        @csrf
                          <div class="modal-body">
                              <div class="form-group row">
                                <input type="text" name="id" id="edit-id" hidden>
                                <div class="col">
                                  <label>Merk</label>
                                  <div class="form-group" id="the-basics">
                                    <input class="form-control" name="merk" id="edit-merk" type="text" placeholder="Masukan Merk" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <label>Type</label>
                                  <div class="form-group" id="bloodhound">
                                    <input class="form-control" name="type" id="edit-type" type="text" placeholder="Nama Jurusan" required>
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
                      <form action="{{ action('BarangController@destroy','delete') }}" method="POST">
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
                    <h1 class="h3 mb-2 text-gray-800">Tables Barang</h1>

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
                                            <th>Merk</th>
                                            <th>Type</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($brg as $br)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$br->merk}}</td>
                                            <td>{{$br->type}}</td>
                                            <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#update" id="btn-edit-barang" 
                                  
                                  data-id="{{$br->id}}"
                                  data-merk="{{$br->merk}}" 
                                  data-type="{{$br->type}}" >
                                  
                                  <i class="ti-reload btn-icon-prepend"></i>Ubah</button>
                            @csrf
                            @method('DELETE')
                                <button type="button" class="btn btn-outline-danger btn-fw border-0" data-bs-toggle="modal" data-bs-target="#delete" id="btn-delete-barang" data-id="{{$br->id}}"><i class="ti-trash btn-icon-prepend "></i>Hapus</button>
                            </form>
                          </td>
                                            <!-- <td class="text-center">
                                <button type="button" class="btn btn-outline-warning btn-icon-text border-0" data-bs-toggle="modal" data-bs-target="#modalUpdate" id="btn-edit-barang" onclick="edit()" data-merk="{{$br->merk}}" data-type="{{$br->type}}"data-id="{{$br->id}}">
                                  
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

    $(document).on('click', '#btn-edit-barang', function () {
        let id = $(this).data('id');
        // AJAX
        $.ajax({
            type: "get",
            url: 'barang/' + id,
            dataType: 'json',
            success: function (res) {
                //  console.log(res);
                $('#edit-id').val(res[0].id);
                $('#edit-merk').val(res[0].merk);
                $('#edit-type').val(res[0].type);
            }
        });

    });
$(document).on('click', '#btn-delete-barang', function () {
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