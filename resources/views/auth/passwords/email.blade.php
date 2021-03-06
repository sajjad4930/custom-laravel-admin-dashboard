@extends('layouts/dashboard.app')

<!-- Main Content -->
@section('content')
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Reset Password</label>


                                <input id="email" type="email" class="form-control" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>

                    </form>
                </div>

@endsection
