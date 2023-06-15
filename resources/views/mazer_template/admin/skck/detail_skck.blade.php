@extends('mazer_template.layouts.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Form Pendaftaran Skck</h3>
            </div>
        </div>
    </div>

    @foreach($SkckDaftarDiriDetail as $item)
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Diri</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="{{ $item->nama }}" name="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="{{ $item->tempat_lahir }}" name="tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="tanggal_lahir" class="form-control" placeholder="{{ $item->tanggal_lahir }}" name="tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="jenis_kelamin" class="form-control" placeholder="{{ $item->jenis_kelamin }}" name="jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="text" id="nik" class="form-control" placeholder="{{ $item->nik }}" name="nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Pekerjaan">Pekerjaan</label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="{{ $item->pekerjaan }}" name="pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan">Kebangsaan</label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="{{ $item->kebangsaan }}" name="kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="status_perkawinan" class="form-control" placeholder="{{ $item->status_perkawinan }}" name="status_perkawinan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" id="agama" class="form-control" placeholder="{{ $item->agama }}" name="agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3" placeholder="{{ $item->alamat }}" name="alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_telepon">No Telepon</label>
                                            <input type="number" id="no_telepon" class="form-control" placeholder="{{ $item->no_telepon }}" name="no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="{{ $item->email }}" name="email" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_passport">No Passport</label>
                                            <input type="number" id="no_passport" class="form-control" placeholder="{{ $item->no_passport }}" name="no_passport" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_kitas_kitap">No Kitas/ Kitap</label>
                                            <input type="number" id="no_kitas_kitap" class="form-control" placeholder="{{ $item->no_kitas_kitap }}" name="no_kitas_kitap" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keperluan_skck">Keperluan Skck</label>
                                            <textarea class="form-control" id="keperluan_skck" rows="3" placeholder="{{ $item->keperluan_skck }}" name="keperluan_skck" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sd">Riwayat SD</label>
                                            <input type="text" id="riwayat_sd" class="form-control" placeholder="{{ $item->riwayat_sd }}" name="riwayat_sd" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sd">Tanggal Lulus SD</label>
                                            <input type="text" id="tangggal_lulus_sd" class="form-control" placeholder="{{ $item->tangggal_lulus_sd }}" name="tangggal_lulus_sd" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_smp">Riwayat SMP</label>
                                            <input type="text" id="riwayat_smp" class="form-control" placeholder="{{ $item->riwayat_smp }}" name="riwayat_smp" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_smp">Tanggal Lulus SMP</label>
                                            <input type="text" id="tangggal_lulus_smp" class="form-control" placeholder="{{ $item->tangggal_lulus_smp }}" name="tangggal_lulus_smp" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sma">Riwayat SMA</label>
                                            <input type="text" id="riwayat_sma" class="form-control" placeholder="{{ $item->riwayat_sma }}" name="riwayat_sma" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sma">Tanggal Lulus SMA</label>
                                            <input type="text" id="tangggal_lulus_sma" class="form-control" placeholder="{{ $item->tangggal_lulus_sma }}" name="tangggal_lulus_sma" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s1">Riwayat S1</label>
                                            <input type="text" id="riwayat_s1" class="form-control" placeholder="{{ $item->riwayat_s1 }}" name="riwayat_s1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s1">Tanggal Lulus S1</label>
                                            <input type="text" id="tangggal_lulus_s1" class="form-control" placeholder="{{ $item->tangggal_lulus_s1 }}" name="tangggal_lulus_s1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s2">Riwayat S2</label>
                                            <input type="text" id="riwayat_s2" class="form-control" placeholder="{{ $item->riwayat_s2 }}" name="riwayat_s2" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s2">Tanggal Lulus S2</label>
                                            <input type="text" id="tangggal_lulus_s2" class="form-control" placeholder="{{ $item->tangggal_lulus_s2 }}" name="tangggal_lulus_s2" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s3">Riwayat S3</label>
                                            <input type="text" id="riwayat_s3" class="form-control" placeholder="{{ $item->riwayat_s3 }}" name="riwayat_s3" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s3">Tanggal Lulus S3</label>
                                            <input type="text" id="tangggal_lulus_s3" class="form-control" placeholder="{{ $item->tangggal_lulus_s3 }}" name="tangggal_lulus_s3" readonly>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Suami)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_nama">Nama</label>
                                            <input type="text" id="skck_daftar_suamis_nama" class="form-control" placeholder="{{ $item->skck_daftar_suamis_nama }}" name="skck_daftar_suamis_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_suamis_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_suamis_tempat_lahir }}" name="skck_daftar_suamis_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_suamis_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_suamis_tanggal_lahir }}" name="skck_daftar_suamis_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_suamis_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_suamis_jenis_kelamin }}" name="skck_daftar_suamis_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_nik">Nik</label>
                                            <input type="number" id="skck_daftar_suamis_nik" class="form-control" placeholder="{{ $item->skck_daftar_suamis_nik }}" name="skck_daftar_suamis_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_suamis_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_pekerjaan }}" name="skck_daftar_suamis_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_suamis_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_kebangsaan }}" name="skck_daftar_suamis_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_suamis_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_status_perkawinan }}" name="skck_daftar_suamis_status_perkawinan"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_agama">Agama</label>
                                            <input type="text" id="skck_daftar_suamis_agama" class="form-control" placeholder="{{ $item->skck_daftar_suamis_agama }}" name="skck_daftar_suamis_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_suamis_alamat" rows="3" placeholder="{{ $item->skck_daftar_suamis_alamat }}" name="skck_daftar_suamis_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_suamis_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_suamis_no_telepon }}" name="skck_daftar_suamis_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_email">Email</label>
                                            <input type="email" id="skck_daftar_suamis_email" class="form-control" placeholder="{{ $item->skck_daftar_suamis_email }}" name="skck_daftar_suamis_email" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Istri)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_nama">Nama</label>
                                            <input type="text" id="skck_daftar_istris_nama" class="form-control" placeholder="{{ $item->skck_daftar_istris_nama }}" name="skck_daftar_istris_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_istris_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_istris_tempat_lahir }}" name="skck_daftar_istris_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_istris_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_istris_tanggal_lahir }}" name="skck_daftar_istris_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_istris_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_istris_jenis_kelamin }}" name="skck_daftar_istris_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_nik">Nik</label>
                                            <input type="number" id="skck_daftar_istris_nik" class="form-control" placeholder="{{ $item->skck_daftar_istris_nik }}" name="skck_daftar_istris_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_istris_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_istris_pekerjaan }}" name="skck_daftar_istris_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_istris_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_istris_kebangsaan }}" name="skck_daftar_istris_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_istris_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_istris_status_perkawinan }}" name="skck_daftar_istris_status_perkawinan"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_agama">Agama</label>
                                            <input type="text" id="skck_daftar_istris_agama" class="form-control" placeholder="{{ $item->skck_daftar_istris_agama }}" name="skck_daftar_istris_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_istris_alamat" rows="3" placeholder="{{ $item->skck_daftar_istris_alamat }}" name="skck_daftar_istris_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_istris_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_istris_no_telepon }}" name="skck_daftar_istris_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_email">Email</label>
                                            <input type="email" id="skck_daftar_istris_email" class="form-control" placeholder="{{ $item->skck_daftar_istris_email }}" name="skck_daftar_istris_email" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Bapak Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nama lengkap" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tempat Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tempat lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tanggal Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tanggal lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Jenis Kelamin</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Laki-laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nik</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="Nik" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pekerjaan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pekerjaan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Kebangsaan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Kebangsaan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Status Perkawinan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Status perkawinan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Agama</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Islan</option>
                                                <option value="">Kristen</option>
                                                <option value="">Khatolik</option>
                                                <option value="">Budha</option>
                                                <option value="">Hindu</option>
                                                <option value="">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Alamat</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Alamat" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Telepon</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="No telepon" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Email</label>
                                            <input type="email" id="last-name-column" class="form-control" placeholder="Email" name="lname-column">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Ibu Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nama lengkap" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tempat Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tempat lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tanggal Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tanggal lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Jenis Kelamin</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Laki-laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nik</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="Nik" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pekerjaan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pekerjaan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Kebangsaan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Kebangsaan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Status Perkawinan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Status perkawinan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Agama</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Islan</option>
                                                <option value="">Kristen</option>
                                                <option value="">Khatolik</option>
                                                <option value="">Budha</option>
                                                <option value="">Hindu</option>
                                                <option value="">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Alamat</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Alamat" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Telepon</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="No telepon" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Email</label>
                                            <input type="email" id="last-name-column" class="form-control" placeholder="Email" name="lname-column">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Saudara Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nama lengkap" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tempat Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tempat lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tanggal Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tanggal lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Jenis Kelamin</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Laki-laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nik</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="Nik" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pekerjaan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pekerjaan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Kebangsaan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Kebangsaan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Status Perkawinan</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Status perkawinan" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Agama</label>
                                            <select class="form-control" name="" id="">
                                                <option value="">Islan</option>
                                                <option value="">Kristen</option>
                                                <option value="">Khatolik</option>
                                                <option value="">Budha</option>
                                                <option value="">Hindu</option>
                                                <option value="">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Alamat</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Alamat" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Telepon</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="No telepon" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Email</label>
                                            <input type="email" id="last-name-column" class="form-control" placeholder="Email" name="lname-column">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Perkara Pidana</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pidana Apa</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pidana Apa" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Sejauh Mana Proses Hukumnya</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Sejauh mana proses hukumnya" name="Nama">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pelanggaran</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pelanggaran Apa</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pelanggaran apa" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Sejauh Mana Proses Hukumnya</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Sejauh mana proses hukumnya" name="Nama">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </section>
    @endforeach
</div>


<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: 'bootstrap'
        });
    });

</script>



@endsection
