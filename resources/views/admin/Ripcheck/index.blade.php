@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" /> --}}
@endsection
@section('content')
    <div class="mx-5">
        {{-- <div class="container"> --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('user.Ripcheck.search') }}" {{-- class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" --}}
                            class=" form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input value="{{ isset($query) ? $query : '' }}" name="query" type="text"
                                    placeholder="Search RIP" class="form-control bg-light border-0 small">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">GO</button>
                                </div>
                            </div>
                        </form>
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
                            @if (Auth::user()->isAdmin())
                                {{-- <th scope="col">Status</th> --}}
                                <th scope="col">Added by</th>
                                <th scope="col">V+</th>
                                <th scope="col">V-</th>
                            @endif
                            <th scope="col">Votes</th>
                            <th scope="col">+/-</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach ($Ripchecks as $Ripcheck)
                            @php
                                // $vote = '77';
                                $voteP = $Ripcheck->GetVoteP($Ripcheck->Votes);
                                $voteN = $Ripcheck->GetVoteN($Ripcheck->Votes) * -1;
                                $vote = $Ripcheck->GetVote($Ripcheck->Votes);
                            @endphp
                            @if ($vote > 0)
                                <tr id="row" class="bg-success">
                                @elseif ($vote < 0)
                                <tr id="row" class="bg-danger">
                                @else
                                <tr id="row" class="bg-light">
                            @endif
                            {{-- @if ($Ripcheck->rip_status == 0)
                                <tr class="bg-success">
                                @elseif ($Ripcheck->rip_status == 1)
                                <tr class="bg-danger">
                                @else
                                <tr class="bg-warning">
                            @endif --}}
                            {{-- @if ($Ripcheck->rip_status == 0)
                                <tr class="text-success bg-secondary">
                                @elseif ($Ripcheck->rip_status == 1)
                                <tr class="text-danger bg-secondary">
                                @else
                                <tr class="text-warning bg-secondary">
                            @endif --}}
                            <form action="{{ route('Ripcheck.vote') }}" id="form-js">
                                <th id="rip-id-js" scope="row">{{ $Ripcheck->id }}</th>
                                <td>{{ $Ripcheck->rip_name ?: '/' }}</td>
                                <td>{{ $Ripcheck->rip_number }}</td>
                                <td>{{ $Ripcheck->rip_phone ? $Ripcheck->rip_phone : '/' }}</td>
                                <td>{{ $Ripcheck->rip_email ? $Ripcheck->rip_email : '/' }}</td>
                                @if (Auth::user()->isAdmin())
                                    {{-- <td>{{ $Ripcheck->getStatus() }}</td> --}}
                                    <td>{{ $Ripcheck->name ?? '/' }}</td>
                                    <td>{{ $voteP ?: '0' }}</td>
                                    <td>{{ $voteN ?: '0' }}</td>
                                    {{-- <td>{{ $Ripcheck->Votes->count() ? $Ripcheck->Votes->count() : '0' }}</td> --}}
                                @endif
                                <td><strong> {{ $vote ?: '0' }}</strong></td>
                                <td>
                                    <form action="{{ route('Ripcheck.vote') }}" id="form-js">
                                        <select class="form-select " name="vote" id="mySelect"
                                            onchange="VoteChangeFunction({{ $Ripcheck->id }},this)">
                                            <option value="0">--</option>
                                            <option value="1" {{ $Ripcheck->sign == '1' ? 'selected' : null }}>
                                                &#xf164
                                            </option>
                                            <option value="-1" {{ $Ripcheck->sign == '-1' ? 'selected' : null }}>
                                                &#xf165
                                            </option>
                                        </select>
                                    </form>
                                </td>
                            </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $Ripchecks->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function VoteChangeFunction(el_ripid, e) {
            console.log(e.value);
            axios.post("{{ route('votechange') }}", {
                    user_id: {{ Auth::user()->id }},
                    ripcheck_id: el_ripid,
                    sign: e.value,
                })
                .then(function(response) {
                    // getAllData();
                    // $('#name').val('');
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: el_ripid + ' RIP value changed ...',
                    //     text: 'changes done!',
                    // })
                    window.location.reload();
                    // alert('changes done');
                })
                .catch(function(error) {
                    alert(error);
                });
        }
    </script>
@endsection
