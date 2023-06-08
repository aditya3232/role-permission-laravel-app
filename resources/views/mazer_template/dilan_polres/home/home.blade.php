@extends('mazer_template.layouts_dilanpolres_home.app')
@section('content')

<div class="page-heading">
    <h3>Layanan Online Polres Malang</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">SKCK Online</h4>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cekSkck">
                                    Cek Data
                                </button>
                                <a type="button" class="btn btn-primary block mt-2" href="{{ route('dilanpolres.daftarskck') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">SP2HP</h4>
                                <button class="btn btn-primary block" data-bs-toggle="modal" data-bs-target="#cekSp2hp">Cek Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Provost</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('dilanpolres.laporanprovost') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Izin Keramaian</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('dilanpolres.izinkeramaian') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Pengaduan Masyarakat</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('dilanpolres.pengaduanmasyarakat') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Pengawalan Benda Berharga</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('dilanpolres.pengawalanbendaberharga') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Pengawalan Tahanan</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('dilanpolres.pengawalantahanan') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Polisi</h4>
                                <button class="btn btn-primary block">Input Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Kehilangan</h4>
                                <button class="btn btn-primary block">Input Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Surat Keterangan Bebas Narkoba</h4>
                                <button class="btn btn-primary block">Input Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            
        </div> --}}
    </section>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="cekSkck" tabindex="-1" aria-labelledby="cekSkckLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekSkckLabel">Resi Skck</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan resi skck anda</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Cek Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="cekSp2hp" tabindex="-1" aria-labelledby="cekSp2hpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekSp2hpLabel">SP2HP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan nomor laporan</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <p class="text-subtitle text-muted mt-3">* Cara monitoring perkembangan SP2HP:</p>
                        <p class="text-subtitle text-muted">* Masukkan No.LP (laporan polisi) tanpa spasi</p>
                        <p class="text-subtitle text-muted">* Contoh:</p>
                        <p class="text-subtitle text-muted">* LP.B/00/I/2019/KAL-BAR/KTG</p>
                        <p class="text-subtitle text-muted">* LP.B/00/I/2019/KAL-BAR/KTG/SEK….</p>
                        <p class="text-subtitle text-muted">* Selanjutnya klik tombol cek data</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Cek Data</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
