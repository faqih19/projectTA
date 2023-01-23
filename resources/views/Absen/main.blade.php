@extends('layout.master')
@section ('content')

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Absensi</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
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
              <th>Kehadiran</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
            @foreach ($absens as $ab)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$ab->pegawai->id_pegawai}}</td>
              <td>{{$ab->pegawai->nama}}</td>
              <td>{{$ab->pegawai->jenis_kelamin}}</td>
              <td>{{$ab->pegawai->jabatan}}</td>
              <td class="text-center">
                <input data-id="{{$ab->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Hadir" data-off="Tidak Hadir" {{ $ab->status ? 'checked' : '' }}>
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
  $('.toggle-class').change(function() {
    var status = $(this).prop('checked') == true ? 1 : 0;
    var id = $(this).data('id');
    // var hadirr = 0;
    // var tidakk = 0;

    $.ajax({
      type: "GET",
      dataType: "json",
      url: '/changeStatus',
      data: {
        'status': status,
        'id': id
      },
      success: function(data) {
        console.log(data.success)


      }
    });

  })
</script>

@endsection