@extends('mazer_template.layouts.app')
@section('title', 'Tambah User')
@section('content')


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah User</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            {{-- <form class="form" action="{{ route('dilanpolres.formsidikjari.store') }}" id="" method="POST"
            onSubmit="document.getElementById('submit-create-sidik-jari').disabled=true;"> --}}
            <form class="form" action="{{ route('register') }}" id="form-create-sidik-jari" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold;">Nama <span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" placeholder="..." name="name" value="{{ old('name') ? old('name') : '' }}">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email" style="font-weight: bold;">Email <span class="text-danger">*</span></label>
                                            <input type="email" id="email" class="form-control" placeholder="..." name="email"
                                                value="{{ old('email') ? old('email') : '' }}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="password" style="font-weight: bold;">Password <span class="text-danger">*</span></label>
                                            <input type="password" id="password" class="form-control" placeholder="..." name="password"
                                                value="{{ old('password') ? old('password') : '' }}">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="password_confirmation" style="font-weight: bold;">Confirm Password <span class="text-danger">*</span></label>
                                            <input type="password" id="password_confirmation" class="form-control" placeholder="..." name="password_confirmation"
                                                value="{{ old('password_confirmation') ? old('password_confirmation') : '' }}">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary btn-lg" type="submit" id="submit-create-sidik-jari" onClick="changeToLoadingFormSidikJari()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormSidikJari() {
        var btn = document.getElementById('submit-create-sidik-jari');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        // Simulating a delay of 2 seconds for demonstration purposes
        setTimeout(function () {
            // Enable the button and change the text back to "Login" after the delay
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            // Submit the form
            submitFormSidikJari();
        }, 2000);
    }

    function submitFormSidikJari() {
        // Get the form element
        var form = document.getElementById('form-create-sidik-jari');

        // Submit the form
        form.submit();
    }

</script>


@endsection
