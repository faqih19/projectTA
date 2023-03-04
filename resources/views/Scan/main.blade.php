@extends('layout.scan')
@section ('content')


<!-- End of Topbar -->
                <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Data Motor</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
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
                        </div>
                    </div>
                </div>
                <!-- end Update modal -->
                <div class="modal fade" id="fail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Data Motor</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                          <div class="modal-body">
                              <label for="">Data Tidak Ditemukan</label>
                          </div>
                        </div>
                    </div>
                </div>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Scan Data Motor</h1>
  <div class="card shadow mb-4">
      <div id="qr-reader" style="width: auto;"></div>
  </div>
  <!-- DataTales Example -->

</div>
<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

<script>
  $(document).ready(function() {
    $("form").submit(function() {
      $(this).submit(function() {
        return false;
      });
      return true;
    });
  });
    function onScanSuccess(decodedText, decodedResult) {
        console.log(`Code scanned = ${decodedText}`, decodedResult);

        // AJAX
        $.ajax({
            type: "get",
            url: 'scan/' + decodedText,
            dataType: 'json',
            success: function (res) {
                if(res.state == 1){
                    $(document).ready(function(){
                        $("#exampleModal").modal("show");
                    });
                    $('#edit-id').val(res.data.id);
                    $('#edit-kode_kendaraan').val(res.data.kode_kendaraan);
                    $('#edit-nama_kendaraan').val(res.data.nama_kendaraan);
                    $('#edit-tahun_pembuatan').val(res.data.tahun_pembuatan);
                    $('#edit-status_jual').val(res.data.status_jual);
                    $('#edit-harga').val(res.data.harga);
                    $('#edit-status_motor').val(res.data.status_motor);
                    $('#edit-isi_slinder').val(res.data.isi_slinder);
                    $('#edit-no_stnk').val(res.data.no_stnk);
                    $('#edit-no_rangka').val(res.data.no_rangka);
                    $('#edit-no_mesin').val(res.data.no_mesin);
                    $('#edit-tanggal').val(res.data.tanggal);
                    $('#edit-warna').val(res.data.warna);
                    $('#edit-bahan_bakar').val(res.data.bahan_bakar);
                    $('#edit-warna_tnkb').val(res.data.warna_tnkb);
                    $('#edit-foto').val(res.data.foto);
                    $('#edit-deskripsi').val(res.data.deskripsi);
                }else{
                    $(document).ready(function(){
                        $("#fail").modal("show");
                    });
                }

            }
        });

    }
    var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);


</script>


@endsection
