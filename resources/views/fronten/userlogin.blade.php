@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 mx-auto">
            <div class="login_wrapper">
                <div class="animate form login_form">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>           
                            @endforeach
                        </div>
                    @endif
                    <h1>please login</h1>
                <form action="{{ route('userloginstore') }}" method="post">
                        @csrf

                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2 mx-auto">
            <div class="login_wrapper">
                <div class="animate form login_form">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>           
                            @endforeach
                        </div>
                    @endif
                    <h1>Please Register</h1>
                    <form action="{{ route('userregister') }}" method="post">
                        @csrf
                        <div>
                            <input type="text" class="form-control" name="name" placeholder="name" required />
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
