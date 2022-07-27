@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Rip Check Title') }}</div> --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container d-flex ">
                            <div class="row g-3">
                                <div class="col-2">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                                        value="Search">
                                </div>
                                <div class="col-auto">
                                    <form method="GET" action="{{ route('user.Ripcheck.search') }}">
                                        <input value="{{ isset($query) ? $query : '' }}" name="query" type="text"
                                            placeholder="Search RIP">
                                        <button class="btn btn-primary mb-3" type="submit">GO</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name / Fb / Insta</th>
                            <th scope="col">RIP</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">e-mail</th>
                            @if (Auth::user()->isAdmin()) <th scope="col">Added by</th> @endif
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Ripchecks as $Ripcheck)
                            @if ($Ripcheck->rip_status == 0)
                                <tr class="bg-success">
                                    <th scope="row">{{ $Ripcheck->id }}</th>
                                    <td>{{ $Ripcheck->rip_name  ?: '/' }}</td>
                                    <td>{{ $Ripcheck->rip_number }}</td>
                                    <td>{{ $Ripcheck->rip_phone ? $Ripcheck->rip_phone : '/'  }}</td>
                                    <td>{{ $Ripcheck->rip_email ? $Ripcheck->rip_email : '/'  }}</td>
                                    @if (Auth::user()->isAdmin())<td>{{ $Ripcheck->user->name ?? '/'  }}</td> @endif
                                    <td>{{ $Ripcheck->getStatus() }}</td>
                                </tr>
                            @elseif ($Ripcheck->rip_status == 1)
                                <tr class="bg-danger">
                                    <th scope="row">{{ $Ripcheck->id }}</th>
                                    <td>{{ $Ripcheck->rip_name ?:'/'  }}</td>
                                    <td>{{ $Ripcheck->rip_number }}</td>
                                    <td>{{ $Ripcheck->rip_phone ? $Ripcheck->rip_phone : '/'  }}</td>
                                    <td>{{ $Ripcheck->rip_email  ? $Ripcheck->rip_email : '/' }}</td>
                                    @if (Auth::user()->isAdmin())<td>{{ $Ripcheck->user->name ?? '/'  }}</td> @endif
                                    <td>{{ $Ripcheck->getStatus() }}</td>
                                </tr>
                            @else
                                <tr class="bg-warning">
                                    <th scope="row">{{ $Ripcheck->id }}</th>
                                    <td>{{ $Ripcheck->rip_name ?: '/' }}</td>
                                    <td>{{ $Ripcheck->rip_number }}</td>
                                    <td>{{ $Ripcheck->rip_phone ? $Ripcheck->rip_phone : '/'  }}</td>
                                    <td>{{ $Ripcheck->rip_email  ? $Ripcheck->rip_email : '/' }}</td>
                                    @if (Auth::user()->isAdmin())<td>{{ $Ripcheck->user->name ?? '/'  }}</td> @endif
                                    <td>{{ $Ripcheck->getStatus() }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $Ripchecks->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
