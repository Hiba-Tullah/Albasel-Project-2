@extends('layout.master')

@section('content')



    <div class="row justify-content-center" style="padding-top:150px;padding-bottom: 150px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #081f3e;color:#fff">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">first name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: #7b7f80">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">last name</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="lname" required style="background-color: #7b7f80" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">middle name</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="midname" required style="background-color: #7b7f80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">mother name</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="moname" required style="background-color: #7b7f80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: #7b7f80">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required style="background-color: #7b7f80" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="background-color: #7b7f80">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Identity Number</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="idnumber" required style="background-color: #7b7f80">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">address</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="address" required style="background-color: #7b7f80" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">phone</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="phone" required style="background-color: #7b7f80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">mobile</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="mobile" required style="background-color: #7b7f80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Birthdate</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="birthdate" required style="background-color: #7b7f80">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">gender</label>

                            <div class="col-md-6">
                                <select name="gender"> 
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Blood Type</label>
                             <div class="col-md-6">
                                <select name="blood"  > 
                                    <option value="1">O+</option>
                                    <option value="2">O-</option>
                                    <option value="3">A+</option>
                                    <option value="4">A-</option>
                                    <option value="5">B+</option>
                                    <option value="6">B-</option>
                                    <option value="7">AB+</option>
                                    <option value="8">AB-</option>
                                </select> 
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Medical history</label>

                            <div class="col-md-6">
                                
                                 <textarea name="medhistory"  class="form-control"  style="background-color: #7b7f80" >Enter text here...</textarea>
                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



   


        

@endsection
