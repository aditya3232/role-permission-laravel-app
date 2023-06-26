@extends('mazer_template.layouts_dilanpolres.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulir Pendaftaran Sidik Jari</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('dilanpolres.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="" id="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="..." name="nama" value="{{ old('nama') ? old('nama') : '' }}">
                                            @if($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_kecil_alias">Nama kecil / alias</label>
                                            <input type="text" id="nama_kecil_alias" class="form-control" placeholder="..." name="nama_kecil_alias"
                                                value="{{ old('nama_kecil_alias') ? old('nama_kecil_alias') : '' }}">
                                            @if($errors->has('nama_kecil_alias'))
                                                <span class="text-danger">{{ $errors->first('nama_kecil_alias') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis kelamin</label>
                                            <select class="form-control form-select" name="jenis_kelamin">
                                                <option selected disabled value="">...</option>
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
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="..." name="tempat_lahir"
                                                value="{{ old('tempat_lahir') ? old('tempat_lahir') : '' }}">
                                            @if($errors->has('tempat_lahir'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal lahir</label>
                                            <input type="datetime-local" id="tanggal_lahir" class="form-control" placeholder="..." name="tanggal_lahir"
                                                value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : '' }}">
                                            @if($errors->has('tanggal_lahir'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik" class="form-control" placeholder="..." name="nik"
                                                value="{{ old('nik') ? old('nik') : '' }}">
                                            @if($errors->has('nik'))
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_paspor">No. paspor</label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_paspor" class="form-control" placeholder="..." name="no_paspor"
                                                value="{{ old('no_paspor') ? old('no_paspor') : '' }}">
                                            @if($errors->has('no_paspor'))
                                                <span class="text-danger">{{ $errors->first('no_paspor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="..." name="pekerjaan"
                                                value="{{ old('pekerjaan') ? old('pekerjaan') : '' }}">
                                            @if($errors->has('pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan">Kebangsaan</label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control form-select" name="agama">
                                                <option selected disabled value="">...</option>
                                                <option value="islam" {{ old('agama') == 'islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="protestan" {{ old('agama') == 'protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="katolik" {{ old('agama') == 'katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="hindu" {{ old('agama') == 'hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="buddha" {{ old('agama') == 'buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="khonghucu" {{ old('agama') == 'khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_saat_ini">Alamat saat ini</label>
                                            <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_saat_ini') ? old('alamat_saat_ini') : '' }}</textarea>
                                            @if($errors->has('alamat_saat_ini'))
                                                <span class="text-danger">{{ $errors->first('alamat_saat_ini') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp">No. telepon</label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp" class="form-control" placeholder="..." name="no_telp"
                                                value="{{ old('no_telp') ? old('no_telp') : '' }}">
                                            @if($errors->has('no_telp'))
                                                <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" class="form-control" placeholder="..." name="email"
                                                value="{{ old('email') ? old('email') : '' }}">
                                            @if($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="status_pernikahan">Status pernikahan</label>
                                            <select class="form-control form-select" name="status_pernikahan">
                                                <option selected disabled value="">...</option>
                                                <option value="menikah" {{ old('status_pernikahan') == 'menikah' ?  'selected' : '' }}>
                                                    Menikah
                                                </option>
                                                <option value="belum_menikah"
                                                    {{ old('status_pernikahan') == 'belum_menikah' ?  'selected' : '' }}>
                                                    Belum Menikah
                                                </option>
                                            </select>
                                            @if($errors->has('status_pernikahan'))
                                                <span class="text-danger">{{ $errors->first('status_pernikahan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama ayah</label>
                                            <input type="text" id="nama_ayah" class="form-control" placeholder="..." name="nama_ayah"
                                                value="{{ old('nama_ayah') ? old('nama_ayah') : '' }}">
                                            @if($errors->has('nama_ayah'))
                                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_ayah">Alamat ayah</label>
                                            <textarea name="alamat_ayah" id="alamat_ayah" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_ayah') ? old('alamat_ayah') : '' }}</textarea>
                                            @if($errors->has('alamat_ayah'))
                                                <span class="text-danger">{{ $errors->first('alamat_ayah') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama ibu</label>
                                            <input type="text" id="nama_ibu" class="form-control" placeholder="..." name="nama_ibu"
                                                value="{{ old('nama_ibu') ? old('nama_ibu') : '' }}">
                                            @if($errors->has('nama_ibu'))
                                                <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_ibu">Alamat ibu</label>
                                            <textarea name="alamat_ibu" id="alamat_ibu" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_ibu') ? old('alamat_ibu') : '' }}</textarea>
                                            @if($errors->has('alamat_ibu'))
                                                <span class="text-danger">{{ $errors->first('alamat_ibu') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_istri">Nama istri</label>
                                            <input type="text" id="nama_istri" class="form-control" placeholder="..." name="nama_istri"
                                                value="{{ old('nama_istri') ? old('nama_istri') : '' }}">
                                            @if($errors->has('nama_istri'))
                                                <span class="text-danger">{{ $errors->first('nama_istri') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_suami">Nama suami</label>
                                            <input type="text" id="nama_suami" class="form-control" placeholder="..." name="nama_suami"
                                                value="{{ old('nama_suami') ? old('nama_suami') : '' }}">
                                            @if($errors->has('nama_suami'))
                                                <span class="text-danger">{{ $errors->first('nama_suami') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_anak">Nama anak</label>
                                            <input type="text" id="nama_anak" class="form-control" placeholder="..." name="nama_anak"
                                                value="{{ old('nama_anak') ? old('nama_anak') : '' }}">
                                            @if($errors->has('nama_anak'))
                                                <span class="text-danger">{{ $errors->first('nama_anak') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
