@extends('mazer_template.layouts.app')
@section('title', 'Update Roles')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Roles</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.roles.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ url('admin/roles/update/'.$role->id) }}" id="" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nama Role</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="name">Nama Role</label>
                                            <input type="text" id="name" class="form-control" placeholder="Nama role" name="name" value="{{ old('name') ? old('name') : $role->name }}">
                                            @if($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form class="form" action="{{ route('admin.roles.assignpermissions', $role->id) }}" id="" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Permission</h4>

                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="permissions" style="font-weight: bold;">Permissions :</label>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    @if($role->permissions->count() > 0)
                                                        @foreach($role->permissions as $item)
                                                            <span class="badge bg-light-primary">{{ $item->name }}</span>
                                                        @endforeach
                                                    @else
                                                        <span class="badge bg-light-primary">No permissions</span>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="permissions" style="font-weight: bold;">Permissions <span class="text-danger">*</span></label>
                                            <select class="form-control select2-permissions" name="permissions[]" multiple="multiple">
                                                {{-- <option selected disabled value="">...</option> --}}
                                            </select>
                                            @if($errors->has('permissions'))
                                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
