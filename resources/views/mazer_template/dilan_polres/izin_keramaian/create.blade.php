@extends('mazer_template.layouts_dilanpolres.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Izin Keramaian</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Izin Keramaian</h4>
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
                                            <label for="first-name-column">Nik</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nik" name="Nama">
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
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="Tanggal lahir" name="Nama">
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
                                            <label for="first-name-column">Bentuk Keramaian</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Bentuk keramaian" name="Nama">
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
                                            <label for="last-name-column">Jumlah Peserta</label>
                                            <input type="number" id="last-name-column" class="form-control" placeholder="Jumlah peserta" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Mengundang</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Mengundang" name="lname-column">
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
