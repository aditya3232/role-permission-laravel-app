@extends('mazer_template.layouts.app')
@section('title', 'Detail Formulir Pendaftaran Sidik Jari')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Formulir Pendaftaran Sidik Jari</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.formsidikjari.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control" placeholder="{{ $data->nama }}" name="nama" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_kecil_alias">Nama kecil / alias</label>
                                        <input type="text" id="nama_kecil_alias" class="form-control" placeholder="{{ $data->nama_kecil_alias }}" name="nama_kecil_alias" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" id="jenis_kelamin" class="form-control" placeholder="{{ $data->jenis_kelamin }}" name="jenis_kelamin" readonly>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat lahir</label>
                                        <input type="text" id="tempat_lahir" class="form-control" placeholder="{{ $data->tempat_lahir }}" name="tempat_lahir" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal lahir</label>
                                        <input type="date" id="tanggal_lahir" class="form-control" placeholder="{{ $data->tanggal_lahir }}" name="tanggal_lahir" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nik">Nik</label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik" class="form-control" placeholder="{{ $data->nik }}" name="nik" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="no_paspor">No. paspor</label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_paspor" class="form-control" placeholder="{{ $data->no_paspor }}" name="no_paspor" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" id="pekerjaan" class="form-control" placeholder="{{ $data->pekerjaan }}" name="pekerjaan" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="kebangsaan">Kebangsaan</label>
                                        <input type="text" id="kebangsaan" class="form-control" placeholder="{{ $data->kebangsaan }}" name="kebangsaan" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" id="agama" class="form-control" placeholder="{{ $data->agama }}" name="agama" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_saat_ini">Alamat saat ini</label>
                                        <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" placeholder="..." rows="3" readonly>{{ $data->alamat_saat_ini }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="no_telp">No. telepon</label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp" class="form-control" placeholder="{{ $data->no_telp }}" name="no_telp" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="{{ $data->email }}" name="email" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="status_pernikahan">Status Pernikahan</label>
                                        <input type="text" id="status_pernikahan" class="form-control" placeholder="{{ $data->status_pernikahan }}" name="status_pernikahan" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama ayah</label>
                                        <input type="text" id="nama_ayah" class="form-control" placeholder="{{ $data->nama_ayah }}" name="nama_ayah" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_ayah">Alamat ayah</label>
                                        <textarea name="alamat_ayah" id="alamat_ayah" cols="24" class="form-control" placeholder="..." rows="3" readonly>{{ $data->alamat_ayah }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama ibu</label>
                                        <input type="text" id="nama_ibu" class="form-control" placeholder="{{ $data->nama_ibu }}" name="nama_ibu" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_ibu">Alamat ibu</label>
                                        <textarea name="alamat_ibu" id="alamat_ibu" cols="24" class="form-control" placeholder="..." rows="3" readonly>{{ $data->alamat_ibu }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_istri">Nama istri</label>
                                        <input type="text" id="nama_istri" class="form-control" placeholder="{{ $data->nama_istri }}" name="nama_istri" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_suami">Nama suami</label>
                                        <input type="text" id="nama_suami" class="form-control" placeholder="{{ $data->nama_suami }}" name="nama_suami" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_anak">Nama anak</label>
                                        <input type="text" id="nama_anak" class="form-control" placeholder="{{ $data->nama_anak }}" name="nama_anak" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
