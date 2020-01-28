@extends('layouts.app')
@section('plugin-css')
<link href="{{ url('/') }}/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
	<!-- start page title -->
	<div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript: void(0);">PTSL</a></li>
						<li class="breadcrumb-item active">Data Penduduk</li>
					</ol>
				</div>
				<h4 class="page-title">Data Penduduk yang Daftar</h4>
			</div>
		</div>
	</div>     
	<!-- end page title --> 

    <div class="row">
        <div class="col-xl-4">
            <div class="card-box" dir="ltr">
                <h4 class="header-title mb-3">Pencapaian</h4>

                <div class="widget-chart text-center">
                    <input data-plugin="knob" data-width="160" data-height="160" data-linecap=round data-fgColor="#4fc6e1" value="{{ round($statistik['persentase'], 2) }}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                    <h5 class="text-muted mt-3">Total Penduduk Terdaftar</h5>
                    <h2>{{ $statistik['jumlahTerdaftar'] }}</h2>

                    <p class="text-muted w-75 mx-auto sp-line-2">Rincian dari target sertifikat tanah <b>Peserta PTSL 2020 Desa Rongdurin</b> </p>

                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                            <h4><i class="fe-arrow-right text-info mr-1"></i>880</h4>
                        </div>
                        <div class="col-4">
                            <p class="text-muted font-15 mb-1 text-truncate">Terdaftar</p>
                            <h4><i class="fe-arrow-up text-success mr-1"></i>{{ \App\Models\Penduduk::all()->count() }}</h4>
                        </div>
                        <div class="col-4">
                            <p class="text-muted font-15 mb-1 text-truncate">Keseluruhan</p>
                            <h4><i class="fe-arrow-down text-danger mr-1"></i>{{ $statistik['belumTerdaftar'] }}</h4>
                        </div>
                    </div>
                    
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col-->

        <div class="col-xl-8">
            <h4 class="header-title mb-3">Total Pendaftar Per-Blok</h4>

            <div class="row">
                <div class="col-md-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                    <h1 class="avatar-title text-info pb-3">1</h1>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $statistik['blok1'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Terdaftar</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                    <h1 class="avatar-title text-primary pb-3">2</h1>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $statistik['blok2'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Terdaftar</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                    <h1 class="avatar-title text-warning pb-3">3</h1>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $statistik['blok3'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Pendaftar</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                    <h1 class="avatar-title text-success pb-3 pr-1">4</h1>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $statistik['blok4'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Terdaftar</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
    <div class="row"> 
        <div class="col-12">    
            <div class="card">
                
                <div class="card-body">
                    
                    <h4 class="header-title">Tabel Daftar Penduduk</h4>
                    <p class="text-muted font-13 mb-3">
                        Daftar seluruh penduduk yang daftar untuk sertifikat tanah, silahkan klik nama untuk melakukan perubahan
                    </p>

                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>Nomor PTSL</th>
                                <th >Nama Penduduk</th>
                                <th >NIK</th>
                                <th >Tempat Lahir</th>
                                <th >Tanggal Lahir</th>
                                <th >Umur</th>
                                <th >Agama</th>
                                <th >Pekerjaan</th>
                                <th >Alamat</th>
                                <th >DT Nama</th>
                                <th >Luas</th>
                                <th >No. SPPT</th>
                                <th >SPPT</th>
                                <th >Blok</th>
                                <th >Nama SPPT</th>
                                <th >STA Tanah</th>
                                <th >Peng Tanah</th>
                                <th >Letak Tanah</th>
                                <th>Perolehan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penduduks as $penduduk)
                            <tr>
                                <td>Rongdurin.{{ $penduduk->no_urut }}</td>
                                <td class="table-info">{{ $penduduk->nama_penduduk }}</td>
                                <td class="table-info">{{ $penduduk->nik }}</td>
                                <td class="table-info">{{ $penduduk->tempat_lahir }}</td>
                                <td class="table-info">{{ $penduduk->tanggal_lahir }}</td>
                                <td class="table-info">{{ $penduduk->umur }} Thn</td>
                                <td class="table-info">{{ $penduduk->agama }}</td>
                                <td class="table-info">{{ $penduduk->pekerjaan }}</td>
                                <td class="table-info">{{ $penduduk->alamat }}</td>
                                <td class="table-danger">{{ $penduduk->dt_nama }}</td>
                                <td class="table-danger">{{ $penduduk->luas }} M<sup>2</sup></td>
                                <td class="table-danger">{{ $penduduk->no_sppt }}</td>
                                <td class="table-danger"> {{ $penduduk->sppt }}</td>
                                <td class="table-danger"> {{ $penduduk->blok }}</td>
                                <td class="table-danger">{{ $penduduk->nama_sppt }}</td>
                                <td class="table-success">{{ $penduduk->sta_tanah }}</td>
                                <td class="table-success">{{ $penduduk->peng_tanah }}</td>
                                <td class="table-success">{{ $penduduk->letak_tanah }}</td>
                                <td>{{ $penduduk->perolehan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="card-text mt-3">
                        <a href="{{ route('penduduk.export') }}" class="mb-2 pb-2">
                            <button class="btn btn-primary"><i class="fa fa-print mr-1"></i>Print Data</button>
                        </a>
                    </p>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection

@section('plugin-js')
<!-- third party js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ url('/') }}/assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/buttons.html5.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/buttons.flash.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/buttons.print.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="{{ url('/') }}/assets/libs/datatables/dataTables.select.min.js"></script>
<script src="{{ url('/') }}/assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('/') }}/assets/libs/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('/') }}/assets/libs/jquery-toast/jquery.toast.min.js"></script>
<script src="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{ url('/') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="{{ url('/') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{ url('/') }}/assets/libs/flot-charts/jquery.flot.js"></script>
<script src="{{ url('/') }}/assets/libs/flot-charts/jquery.flot.time.js"></script>
<script src="{{ url('/') }}/assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
<script src="{{ url('/') }}/assets/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="{{ url('/') }}/assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

<!-- Dashboar 1 init js-->
<script src="{{ url('/') }}/assets/js/pages/dashboard-1.init.js"></script>
<script src="{{ url('/') }}/assets/js/pages/toastr.init.js"></script>
<!-- Datatables init -->
<script src="{{ url('/') }}/assets/js/pages/datatables.init.js"></script>

<script>
	$('.btnDelete').click(function (e) {
		e.preventDefault();
		let id = $(this).data('id');
		console.log(id)
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: '{{ route('penduduk.hapus-penduduk') }}',
					data: {id: id, _token: '{{ csrf_token() }}'},
					success: function(data) {
						if (data) {
							$('#'+id).remove()
							Swal.fire(
								'Deleted!',
								'Your file has been deleted.',
								'success'
							)
						}
					}
				})
			}
			})
		})
</script>
@endsection
