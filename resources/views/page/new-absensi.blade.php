@extends('app')

@section('content')
<main class="mt-4 mb-5 px-4">
    <div>
        <p>New Absensi</p>
    </div>

    {{-- Input Absensi --}}
    <form class="mb-5">
        <div>
            <div class="row ">
                <div class="form-group col-md-12 mb-2">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-style" id="inputNama" placeholder="Nama">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="inputJabatan">Jabatan</label>
                    <input type="text" class="form-style" id="inputJabatan" placeholder="Jabatan">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label for="inputTgl">Tanggal </label>
                    <input type="date" class="form-style" id="inputTgl" placeholder="date">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="inputHadir">Hadir</label>
                    <input type="text" class="form-style" id="inputHadir" placeholder="Hadir">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="inputAbsen">Absen</label>
                    <input type="text" class="form-style" id="inputAbsen" placeholder="Absen">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="inputCuti">Cuti</label>
                    <input type="text" class="form-style" id="inputCuti" placeholder="Cuti">
                </div>
            </div>

            {{-- Button Submit, Back --}}
            <button type="submit" class="btn btn-primer mt-3" onclick="">Submit</button>
            <button type="button" class="btn btn-primer mt-3" onclick="back()">Back</button>

        </div>
    </form>
    {{-- End Input --}}

</main>
@endsection