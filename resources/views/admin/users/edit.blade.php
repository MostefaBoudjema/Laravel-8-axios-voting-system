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
                    {{-- <div class="form-group">
                        <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                            name="password" id="password">
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
                    </div> --}}
                    <div class="form-group">
                        <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                        {{-- <div style="padding-bottom: 4px">
                            <span class="btn btn-info btn-xs select-all"
                                style="border-radius: 0">{{ trans('global.select_all') }}</span>
                            <span class="btn btn-info btn-xs deselect-all"
                                style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                        </div> --}}
                        <select class="form-control 
                        {{-- {{ $errors->has('role_id') ? 'is-invalid' : '' }} --}}
                        " name="role_id"
                            id="role_id"  required>
                            <option value="">--</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                        </select>
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
