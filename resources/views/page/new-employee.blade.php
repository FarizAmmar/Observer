@extends('app')

@section('content')
<main class="mt-4 mb-5 px-4">
    <div>
        <p>New Employee</p>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    {{-- Input Employee --}}
    <form class="mb-5" action="" method="POST">
        @csrf
        <div>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputNama"
                        name="name" placeholder="Nama" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="inputUsername"
                        name="username" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                        name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputJabatan">Jabatan</label>
                    <select class="form-control @error('position_id') is-invalid @enderror" name="position_id"
                        id="inputJabatan">
                        <option value="" selected hidden>Pilih Jabatan</option>
                        @foreach ($positions as $pos)
                        <option value="{{ $pos->id }}">{{ $pos->name }}</option>
                        @endforeach
                    </select>
                    @error('position_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- Remarks By Fariz 20230128 --}}
                    {{-- <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan"> --}}
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                        id="inputAlamat" cols="10" rows="3" maxlength="100"
                        placeholder="Masukan alamat lengkap">{{ old('address') }}</textarea>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- Remarks By Fariz 20230128 --}}
                    {{-- <input type="text" class="form-control" id="inputAlamat" name="address" placeholder="Alamat"
                        max="100">
                    --}}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputSalary">Salary</label>
                    <select class="form-control @error('salary_id') is-invalid @enderror" name="salary_id"
                        id="inputSalary">
                        <option value="" selected hidden>Pilih Salary</option>
                        @foreach ($salaries as $salary)
                        <option value="{{ $salary->id }}">Rp. {{ $salary->ammount }}</option>
                        @endforeach
                    </select>
                    @error('salary_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- Remarks By Fariz 20230128 --}}
                    {{-- <input type="text" class="form-control" id="inputSalary" placeholder="Salary"> --}}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputRole">Role</label>
                    <select class="form-control  @error('level_id') is-invalid @enderror" name="level_id"
                        id="inputRole">
                        <option value="" selected hidden>Pilih Role</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('level_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- Remarks By Fariz 20230128 --}}
                    {{-- <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan"> --}}
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                        id="inputPassword" name="password" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputConf">Confirm Password</label>
                    <input type="password" class="form-control  @error('confPassword') is-invalid @enderror"
                        id="inputConf" name="confPassword" placeholder="Confirm Password">
                    @error('confPassword')
                    <div class="invalid-feedback">
                        The password must match.
                    </div>
                    @enderror
                </div>
            </div>

            {{-- Button Submit, Back --}}
            <button type="submit" class="btn btn-primer mt-3">Submit</button>
            <button type="button" class="btn btn-primer mt-3" onclick="back()">Back</button>

        </div>
    </form>
    {{-- End Input --}}

</main>
@endsection
