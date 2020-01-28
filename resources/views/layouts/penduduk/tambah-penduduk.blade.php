@extends('layouts.app')
@section('plugin-css')
<link href="{{ url('/') }}/assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css">
<link href="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">

            <h3 class="kt-subheader__title">
               Tambah Peserta PTSL
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                    Masukan detail santri dan simpan </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="#" class="btn btn-default btn-bold">
                Kembali </a>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="breadcrumb m-0">
						<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript: void(0);">Penduduk</a></li>
						<li class="breadcrumb-item active">Tambah Peserta PTSL</li>
					</ol>
				</div>
				<h4 class="page-title">Tambah Peserta PTSL</h4>
			</div>
		</div>
    </div>   
    
    {{-- end page title --}}

    <div class="row justify-content-center">
        <div class="col-md-10">
            <!--begin::Portlet-->
            <div class="card">
                <div class="card-body">
                        <h3 class="header-title">
                            Form Tambah Peserta PTSL
                        </h3>
                </div>
                <!--begin::Form-->
                <form action="{{ route('penduduk.simpan-penduduk') }}" id="formSantri" method="POST">
                    @csrf
                    <div class="container">
                        <div class="form-group form-group-last">
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle-outline mr-2"></i> Untuk form yang <b>bertanda bintang (*) </b>. wajib diisi
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="kt-section__title kt-section__title-md">1. Data Penduduk Sesuai NIK</h4>
                        </div>
                        <div class="form-group">
                            <label for="no_urut">Nomor Urut</label>
                            <input type="text"  value="Rongdurin.{{ old('no_urut') }}" name="no_urut" id="no_urut" class="form-control" placeholder="Masukan nama calon santri" aria-describedby="no_urut">
                            <small id="no_urut" class="text-muted">Sesuaikan dengan nomor urut di Data SPPT</small>
                          </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_penduduk">Nama Penduduk</label>
                                    <input type="text"  value="{{ old('nama_penduduk') }}" name="nama_penduduk" id="nama_penduduk" class="form-control" placeholder="Masukan nama calon santri" aria-describedby="nama_penduduk">
                                    <small id="nama_penduduk" class="text-muted">Masukan Nama Penduduk</small>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Penduduk</label>
                                    <input type="text"  value="{{ old('nik') }}" name="nik" id="nik" class="form-control" placeholder="Masukan nama calon santri" aria-describedby="nik">
                                    <small id="nik" class="text-muted">Masukan Nama Penduduk</small>
                                  </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="tempat_lahir">Tempat lahir</label>
                                  <input type="text" value="{{ old('tempat_lahir') }}" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukan tempat lahir" aria-describedby="tempat_lahir">
                                  <small id="tempat_lahir" class="text-muted">Masukan tempat lahir sesuai di KK</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal lahir*</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Masukan tempat lahir" aria-describedby="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <select class="form-control" id="pekerjaan" name="pekerjaan">
                                        <option>Pilih Jenis Pekerjaan</option>
                                        <option value="Petani/Pekebun"{{ old('pekerjaan') == 'Petani/Pekebun' ? 'selected' : '' }}>Petani/Pekebun</option>
                                        <option value="Nelayan"{{ old('pekerjaan') == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                                        <option value="Pedagang"{{ old('pekerjaan') == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                        <option value="Wiraswasta"{{ old('pekerjaan') == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <input type="text" value="Islam {{old('agama')}}" name="agama" id="agama" class="form-control" placeholder="Masukan Agama">
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="alamat">Alamat Santri</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="6" class="form-control">{{ old('alamat') }}</textarea>
                        </div>
    
                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                        <hr>
    
                        <div class="form-group">
                            <h4 class="kt-section__title kt-section__title-md mb-3">Data SPPT</h4>
                        </div>
    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dt_nama">DT Nama</label>
                                    <input value="{{ old('dt_nama') }}" type="text" name="dt_nama" id="dt_nama" class="form-control" placeholder="Masukan DT Nama" aria-describedby="dt_nama">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="luas">Luas</label>
                                    <input value="{{ old('luas') }}" type="text" name="luas" id="luas" class="form-control" placeholder="Masukan Luas" aria-describedby="luas">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="no_sppt">No SPPT</label>
                                    <input value="{{ old('no_sppt') }}" type="text" name="no_sppt" id="no_sppt" class="form-control" placeholder="Masukan DT Nama" aria-describedby="no_sppt">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sppt">SPPT</label>
                                    <input value="{{ old('sppt') }}" type="text" name="sppt" id="sppt" class="form-control" placeholder="Masukan sppt" aria-describedby="sppt">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="blok">Blok</label>
                                    <input value="{{ old('blok') }}" type="text" name="blok" id="blok" class="form-control" placeholder="Masukan blok" aria-describedby="blok">
                                </div>
                            </div>


                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nama_sppt">Nama SPPT</label>
                                    <input value="{{ old('nama_sppt') }}" type="text" name="nama_sppt" id="nama_sppt" class="form-control" placeholder="Masukan DT Nama" aria-describedby="nama_sppt">
                                </div>
                            </div>
                            
                        </div>

                    
                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                        <hr>
    
                        <div class="form-group">
                            <h4 class="kt-section__title kt-section__title-md mb-3">Data Pendukung</h4>
                        </div>
    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sta_tanah">STA. Tanah</label>
                                    <input value="Yasin {{ old('sta_tanah') }}" type="text" name="sta_tanah" id="sta_tanah" class="form-control" placeholder="Masukan DT Nama" aria-describedby="sta_tanah">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="peng_tanah">Peng. Tanah</label>
                                    <input value="{{ old('peng_tanah') }}" type="text" name="peng_tanah" id="peng_tanah" class="form-control" placeholder="Masukan peng_tanah" aria-describedby="peng_tanah">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="perolehan">Perolahan</label>
                                    <select class="form-control" id="perolehan" name="perolehan">
                                        <option>Pilih Jenis perolehan</option>
                                        <option value="Jual/Beli"{{ old('perolehan') == 'Jual/Beli' ? 'selected' : '' }}>Jual/beli</option>
                                        <option value="Hibah"{{ old('perolehan') == 'Hibah' ? 'selected' : '' }}>Hibah</option>
                                        <option value="Waris"{{ old('perolehan') == 'Waris' ? 'selected' : '' }}>Waris</option>
                                    </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="letak_tanah">Letak Tanah</label>
                            <textarea  name="letak_tanah" id="letak_tanah" cols="30" rows="4" class="form-control"> {{ old('letak_tanah') }} </textarea>
                        </div>
                    </div>
                    <div class="container p-2">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary"><i class="ti-save mr-1"></i>Tambah Santri</button>
                            <button type="reset" class="btn btn-danger"><i class=" ti-na mr-1"></i>Batal</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>
@endsection


@section('plugin-js')
<script src="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{ url('/') }}/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="{{ url('/') }}/assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="{{ url('/') }}/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ url('/') }}/assets/libs/jquery-toast/jquery.toast.min.js"></script>
<script src="{{ url('/') }}/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="{{ url('/') }}/assets/js/pages/form-pickers.init.js"></script>
<script src="{{ url('/') }}/assets/js/pages/toastr.init.js"></script>
@if (Session::has('sukses'))
<script>
    $.toast({
          text: "Satu data berhasil di tambahkan", // Text that is to be shown in the toast
          heading: 'Sukses', // Optional heading to be shown on the toast
          icon: 'success', // Type of toast icon
          showHideTransition: 'slide', // fade, slide or plain
          allowToastClose: true, // Boolean value true or false
          hideAfter: 7000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
          stack: 15, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
          position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
          textAlign: 'left',  // Text alignment i.e. left, right or center
          loader: true,  // Whether to show loader or not. True by default
          loaderBg: '#9EC600',  // Background color of the toast loader
      });
 </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
          $.toast({
                text: "{{ $error }}", // Text that is to be shown in the toast
                heading: 'Gagal', // Optional heading to be shown on the toast
                icon: 'error', // Type of toast icon
                showHideTransition: 'slide', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 7000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 15, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                
                
                
                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#9EC600',  // Background color of the toast loader
                
                
                
                
            });
       </script>
    @endforeach
@endif
<script src="{{ url('/') }}/assets/js/pages/form-validation.init.js"></script>

@endsection
