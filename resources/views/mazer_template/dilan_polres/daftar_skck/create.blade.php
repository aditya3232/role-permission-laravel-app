@extends('mazer_template.layouts_dilanpolres.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Skck</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Diri</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="Nama"
                                                value="{{ old('nama') ? old('nama') : '' }}">
                                            @if($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir"
                                                value="{{ old('tempat_lahir') ? old('tempat_lahir') : '' }}">
                                            @if($errors->has('tempat_lahir'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="datetime-local" id="tanggal_lahir" class="form-control" placeholder="Tempat lahir" name="tanggal_lahir"
                                                value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : '' }}">
                                            @if($errors->has('tanggal_lahir'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                <option selected disabled value="">--Jenis Kelamin--</option>
                                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="number" id="nik" class="form-control" placeholder="Nik" name="nik" value="{{ old('nik') ? old('nik') : '' }}">
                                            @if($errors->has('nik'))
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="Pekerjaan" name="pekerjaan"
                                                value="{{ old('pekerjaan') ? old('pekerjaan') : '' }}">
                                            @if($errors->has('pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan">Kebangsaan</label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="Kebangsaan" name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="status_perkawinan" class="form-control" placeholder="Status Perkawinan" name="status_perkawinan"
                                                value="{{ old('status_perkawinan') ? old('status_perkawinan') : '' }}">
                                            @if($errors->has('status_perkawinan'))
                                                <span class="text-danger">{{ $errors->first('status_perkawinan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control" name="agama" id="agama">
                                                <option selected disabled value="">--Pilih Agama--</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ?  'selected' : '' }}>Islam
                                                </option>
                                                <option value="Kristen" {{ old('agama') == 'Kristen' ?  'selected' : '' }}>Kristen
                                                </option>
                                                <option value="Khatolik" {{ old('agama') == 'Khatolik' ?  'selected' : '' }}>
                                                    Khatolik</option>
                                                <option value="Budha" {{ old('agama') == 'Budha' ?  'selected' : '' }}>Budha
                                                </option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ?  'selected' : '' }}>Hindu
                                                </option>
                                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ?  'selected' : '' }}>
                                                    Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_perkawinan">Alamat</label>
                                            <textarea name="alamat" id="alamat" cols="10" class="form-control" placeholder="Tuliskan Alamat"
                                                rows="3">{{ old('status_perkawinan') ? old('status_perkawinan') : '' }}</textarea>
                                            @if($errors->has('status_perkawinan'))
                                                <span class="text-danger">{{ $errors->first('status_perkawinan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_telepon">No Telepon</label>
                                            <input type="number" id="no_telepon" class="form-control" placeholder="No Telepon" name="no_telepon"
                                                value="{{ old('no_telepon') ? old('no_telepon') : '' }}">
                                            @if($errors->has('no_telepon'))
                                                <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Email" name="email"
                                                value="{{ old('email') ? old('email') : '' }}">
                                            @if($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_passport">No Passport</label>
                                            <input type="number" id="no_passport" class="form-control" placeholder="No Passport" name="no_passport"
                                                value="{{ old('no_passport') ? old('no_passport') : '' }}">
                                            @if($errors->has('no_passport'))
                                                <span class="text-danger">{{ $errors->first('no_passport') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_kitas_kitap">No Kitas / Kitap</label>
                                            <input type="number" id="no_kitas_kitap" class="form-control" placeholder="No Kitas / Kitap" name="no_kitas_kitap"
                                                value="{{ old('no_kitas_kitap') ? old('no_kitas_kitap') : '' }}">
                                            @if($errors->has('no_kitas_kitap'))
                                                <span class="text-danger">{{ $errors->first('no_kitas_kitap') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keperluan_skck">Keperluan Skck</label>
                                            <textarea name="alamat" id="alamat" cols="10" class="form-control" placeholder="Tuliskan Keperluan Skck"
                                                rows="3">{{ old('keperluan_skck') ? old('keperluan_skck') : '' }}</textarea>
                                            @if($errors->has('keperluan_skck'))
                                                <span class="text-danger">{{ $errors->first('keperluan_skck') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sd">Riwayat SD</label>
                                            <input type="text" id="riwayat_sd" class="form-control" placeholder="Riwayat SD" name="riwayat_sd"
                                                value="{{ old('riwayat_sd') ? old('riwayat_sd') : '' }}">
                                            @if($errors->has('riwayat_sd'))
                                                <span class="text-danger">{{ $errors->first('riwayat_sd') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sd">Tanggal Lulus SD</label>
                                            <input type="datetime-local" id="tangggal_lulus_sd" class="form-control" placeholder="Tanggal Lulus SD" name="tangggal_lulus_sd"
                                                value="{{ old('tangggal_lulus_sd') ? old('tangggal_lulus_sd') : '' }}">
                                            @if($errors->has('tangggal_lulus_sd'))
                                                <span class="text-danger">{{ $errors->first('tangggal_lulus_sd') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_smp">Riwayat SMP</label>
                                            <input type="text" id="riwayat_smp" class="form-control" placeholder="Riwayat SMP" name="riwayat_smp"
                                                value="{{ old('riwayat_smp') ? old('riwayat_smp') : '' }}">
                                            @if($errors->has('riwayat_smp'))
                                                <span class="text-danger">{{ $errors->first('riwayat_smp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_smp">Tanggal Lulus SMP</label>
                                            <input type="datetime-local" id="tangggal_lulus_smp" class="form-control" placeholder="Tanggal Lulus SMP" name="tangggal_lulus_smp"
                                                value="{{ old('tangggal_lulus_smp') ? old('tangggal_lulus_smp') : '' }}">
                                            @if($errors->has('tangggal_lulus_smp'))
                                                <span class="text-danger">{{ $errors->first('tangggal_lulus_smp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sma">Riwayat SMA</label>
                                            <input type="text" id="riwayat_sma" class="form-control" placeholder="Riwayat SMA" name="riwayat_sma"
                                                value="{{ old('riwayat_sma') ? old('riwayat_sma') : '' }}">
                                            @if($errors->has('riwayat_sma'))
                                                <span class="text-danger">{{ $errors->first('riwayat_sma') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sma">Tanggal Lulus SMA</label>
                                            <input type="datetime-local" id="tangggal_lulus_sma" class="form-control" placeholder="Tanggal Lulus SMA" name="tangggal_lulus_sma"
                                                value="{{ old('tangggal_lulus_sma') ? old('tangggal_lulus_sma') : '' }}">
                                            @if($errors->has('tangggal_lulus_sma'))
                                                <span class="text-danger">{{ $errors->first('tangggal_lulus_sma') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat S1</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Riwayat S1" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus S1</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat S2</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="riwayat S2" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus S2</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat S3</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Riwayat S3" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus S3</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="Tanggal Lulus S3" name="lname-column">
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
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
                            <form class="form">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>


<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: 'bootstrap'
        });
    });

</script>



@endsection
