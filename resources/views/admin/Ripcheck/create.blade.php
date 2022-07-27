@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-content">
                    <div class="card-head bg-dark">
                        <h1
                            style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center">
                            Ajouter Nouveu RIP </h1>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.Ripcheck.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="product-title">Name</label>
                                    <input type="text" name="rip_name" value="{{ old('rip_name') }}" class="form-control"
                                        id="rip_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="product-name">RIP</label>
                                    <input type="text" pattern="[0-9]{20}" name="rip_number" value="{{ old('rip_number') }}"
                                        class="form-control" id="rip_number">
                                </div>
                                <div class="col-md-6">
                                    <label for="product-name">telephone</label>
                                    <input type="text" pattern="0[5-7][0-9]{8}" name="rip_phone" value="{{ old('rip_phone') }}"
                                        class="form-control" id="rip_phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="product-name">email</label>
                                    <input type="text" name="rip_email" value="{{ old('rip_email') }}"
                                        class="form-control" id="rip_email">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark">Create RIP</button>
                        </form>
                    </div>
                </div>
                @if ($errors->all())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
