@extends('app')

@section('content')
<main class="mt-4 mb-5 px-4">
    <div>
        <p>Edit Employee</p>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    {{-- Input Employee --}}
    <form class="mb-5" action="" method="POST">
        @method('edit')
        @csrf
        <div>
            <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-style" id="inputNama" value="{{ $user->name }}" placeholder="Nama">
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputJabatan">Jabatan</label>
                    <input type="text" class="form-style" id="inputJabatan" placeholder="Jabatan"
                        value="{{ $user->position->name }}">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="inputAlamat">Alamat</label>
                    {{-- Remarks By Fariz 20230127 --}}
                    {{-- <input type="text" class="form-style" id="inputAlamat" placeholder="Alamat"> --}}
                    <textarea class="form-style" name="inputAlamat" id="inputAlamat" cols="10" rows="3"
                        maxlength="100">{{ $user->address }}</textarea>
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputTglMasuk">Tanggal Masuk</label>
                    <input type="date" class="form-style" id="inputTglMasuk" placeholder="date"
                        value="{{ $user->created_at->toDateString() }}">
                </div>
                <div class="form-group col-md-6 mb-2">
                    <label for="inputSalary">Salary</label>
                    <select class="form-style" name="inputSalary" id="inputSalary">
                        <option value="" selected hidden>{{ $user->salary->ammount }}</option>
                        @foreach ($salaries as $salary)
                        <option value="{{ $salary->id }}">{{ $salary->ammount }}</option>
                        @endforeach
                    </select>
                    {{-- Remarks By Fariz 20230128 --}}
                    {{-- <input type="text" class="form-style" id="inputSalary" placeholder="Salary" value=""> --}}
                </div>
            </div>

            {{-- Button Submit, Back --}}
            <button type="submit" class="btn btn-primer mt-3">Submit</button>
            <button type="button" class="btn btn-outline-warning mt-3" onclick="back()">Back</button>

        </div>
    </form>
    {{-- End Input --}}

</main>
@endsection
