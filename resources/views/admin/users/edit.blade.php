@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.update', [$user->id]) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                            name="name" id="name" value="{{ old('name', $user->name) }}" required>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                            name="email" id="email" value="{{ old('email', $user->email) }}" required>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                        <select class="form-control 
                        {{-- {{ $errors->has('role_id') ? 'is-invalid' : '' }} --}}
                        "
                            name="role_id" id="role_id" required>
                            <option value="">--</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                        </select>
                        <input class="form-control {{ $errors->has('role_id') ? 'is-invalid' : '' }}" type="text"
                        name="role_id" id="role_id" value="{{ old('role_id', App\Models\User::RoleName($user->role_id)) }}" required>

                        @if ($errors->has('role_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('role_id') }}
                            </div>
                        @endif
                        {{-- <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span> --}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">
                            {{ trans('global.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
