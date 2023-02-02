@extends('app')

@section('content')
<div class="row justify-content-center">
    <main class="col-md-6 mt-3 mb-5 px-3">
        <div class="card mt-3 mb-5">
            <div class="card-body">
                <div>
                    <p>Report</p>
                </div>

                {{-- Input Report --}}
                <form class="mb-5">
                    <div>
                        <div class="form-group mb-2">
                            <label for="inputNama">Nama</label>
                            <input type="text" class="form-style" id="inputNama" placeholder="Nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputJabatan">Jabatan</label>
                            <input type="text" class="form-style" id="inputJabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputTglSalary">Tanggal Salary</label>
                            <input type="date" class="form-style" id="inputTglSalary" placeholder="date">
                        </div>
                    </div>

                    {{-- Button Search, Download --}}
                    <a href="/report-view">
                        <button type="button" class="btn btn-primer mt-3">
                            Search
                        </button>
                    </a>
                </form>
                {{-- End Report --}}

            </div>
        </div>
    </main>
</div>
@endsection