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
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Passport</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="No Passport" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Kitas/ Kitap</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="No kitas/ kitap" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Keperluan Skck</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Keterangan keperluan skck secara singkat" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat SD</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Riwayat SD" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus SD</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat SMP</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Riwayat SMP" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus SMP</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Riwayat SMA</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Riwayat SMA" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tanggal Lulus SMA</label>
                                            <input type="datetime-local" id="last-name-column" class="form-control" placeholder="" name="lname-column">
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
