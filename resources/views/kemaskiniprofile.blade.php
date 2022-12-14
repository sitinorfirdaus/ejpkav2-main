@extends('layouts.mainlayout')
@section('content')

{{-- setiap new page mesti pakai div class --}}
<div class="main-content app-content">
    <!-- container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <!--div-->
                {{-- kemaskini profile --}}
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 main-content-label">Maklumat Peribadi</div>
                            <form method="POST" action="{{ route('updateprofile') }}" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Nama Pengguna: <span class="tx-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control" name="name" required value="{{ $user->name }}">
                                            {{-- <input id="name" type="text" placeholder="masukkan nama pengguna" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Emel: <span class="tx-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input id="email" type="email" class="form-control" placeholder="Sila gunakan emel rasmi" required autocomplete="email" name="email" value="{{ $user->email }}">
                                            {{-- <input id="email" type="email" placeholder="Sila gunakan emel rasmi" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email"> --}}
                                            {{-- @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Jabatan/Bahagian: <span class="tx-danger">*</span></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input id="jabatan" type="text" class="form-control" required name="jabatan" value="{{ $user->jabatan }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Nombor Telefon Pejabat</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input id="notelefon" type="text" class="form-control" name="notelefon" value="{{ $user->notelefon }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Kemaskini</button>
                                    {{-- class="btn btn-primary waves-effect waves-light" --}}
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--/div-->

        </div>
    </div>
</div>
@endsection

