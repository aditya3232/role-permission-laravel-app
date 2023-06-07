@extends('mazer_template.layouts_dilanpolres.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Provost Online</h3>
                {{-- <p class="text-subtitle text-muted">Multiple form layout you can use</p> --}}
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div> --}}
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
        </div>
    </section>

    <!-- Basic Vertical form layout section start -->
    {{-- <section id="basic-vertical-layouts">
        <div class="row match-height">
        </div>
    </section> --}}
    <!-- // Basic Vertical form layout section end -->


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pelapor</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tempat Lahir</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Tanggal Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Jenis Kelamin</label>
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Pekerjaan</label>
                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Alamat</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Agama</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">No.Telepon</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Faks</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    {{-- <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Terlapor</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Tempat Lahir</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Tanggal Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Jenis Kelamin</label>
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Pekerjaan</label>
                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Alamat</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Agama</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">No.Telepon</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Faks</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                        </div>
                                    </div>
                                    {{-- <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>

@endsection
