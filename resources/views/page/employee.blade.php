@extends('app')

@section('content')
<main class="mt-4 mb-5 px-4">

    {{-- Start Modify By Fariz 20230126 --}}
    <div class="row">
        <div class="col-sm-6">
            {{-- Search Form --}}
            {{-- Remarks By Fariz 20230127 --}}
            <form action="/employee">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="input-group mb-3 d-flex justify-content-start">
                            <input type="search" class="form-control form-control-sm" placeholder="Search.."
                                value="{{ request('search') }}" name="search">
                            <button class="btn btn-primer" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col">
            {{-- View Button Export, Filter, New --}}
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primer px-3 mx-2" id="btnExport" onclick="btnExport()">
                    <i class="bi bi-arrow-down-square-fill"></i>
                    Export
                </button>
                <button type="button" class="btn btn-primer px-3 mx-2" id="btnExport" onclick="btnFilter()">
                    <i class="bi bi-filter-square-fill"></i>
                    Filter
                </button>
                @if (auth()->user()->level_id == 1)
                <a href="/new-employee">
                    <button type="button" class="btn btn-primer px-3 mx-2">
                        <i class="bi bi-file-plus-fill"></i>
                        New
                    </button>
                </a>
                @endif
            </div>
            {{-- End Button --}}
        </div>
    </div>
    {{-- End Modify By Fariz 20230126 --}}

    {{-- View Export --}}
    <div class="card mt-3 mb-5" id="vExport" style="display: none">
        <div class="card-body">
            <div>
                <p>Export</p>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Format download .xls
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Format download .pdf
                </label>
            </div>
            <button type="submit" class="btn btn-primer">Download</button>
        </div>
    </div>
    {{-- End View --}}

    {{-- View Filter --}}
    <div class="card mt-3 mb-5" id="vFilter" style="display: none">
        <div class="card-body">
            <div>
                <p>Filter</p>
            </div>
            <form action="/employee">
                <div>
                    <div class="row ">
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputNama">Nama</label>
                            <input type="text" class="form-style" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputJabatan">Jabatan</label>
                            {{-- Remarks By Fariz 20230126 --}}
                            {{-- <input type="text" class="form-style" id="inputJabatan" placeholder="Jabatan"> --}}
                            {{-- Modify By Fariz 20230126 --}}
                            <select class="form-style" id="inputJabatan" name="position">
                                <option value="" selected hidden>Pilih Jabatan</option>
                                @foreach ($positions as $pos)
                                <option value="{{ $pos->name }}">{{ $pos->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- Remarks By Fariz 20230126 --}}
                        {{-- <div class="form-group col-md-6 mb-2">
                            <label for="inputAlamat">Alamat</label>
                            <input type="text" class="form-style" id="inputAlamat" placeholder="Alamat">
                        </div> --}}
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputJabatan">Hak Akses</label>
                            <select class="form-style" name="access">
                                <option value="" selected hidden>Hak Akses</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primer">Search</button>
                </div>
            </form>
        </div>
    </div>
    {{-- End View --}}

    {{-- View Table Employee --}}
    <div class="card mt-3 mb-5">
        <div class="card-body">
            <div>
                <p>Employee</p>
                <hr>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="table-responsive-lg">
                <table class="table table-striped">
                    <thead>
                        {{-- Start Modify By Fariz 20230126 --}}
                        <tr>
                            @if (auth()->user()->level_id == 1)
                            <th scope="col" class="text-center">Option</th>
                            @endif
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Hak Akses</th>
                            <th scope="col">Tanggal Masuk</th>
                            {{-- Remarks By Fariz 20230128 --}}
                            {{-- <th scope="col">Edit</th> --}}
                        </tr>
                        {{-- Ended Modify By Fariz 20230126 --}}
                    </thead>
                    <tbody>
                        @if ($employees->count())
                        {{-- Start Modify By Fariz 20230126 --}}
                        @foreach ($employees as $emp)
                        <tr>
                            {{-- Remarks By Fariz 20230128 --}}
                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                            {{-- Modify By Fariz 20230128 --}}
                            @if (auth()->user()->level_id == 1)
                            <td>
                                <a href="/edit-employee/{{ $emp->username }}"
                                    class="btn btn-primer p-1 px-2 rounded-pill" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="/employee/{{ $emp->username }}" method="POST" class="ms-2">
                                    @method('delete')
                                    @csrf`
                                    <button type="submit" class="btn btn-danger p-1 px-2 rounded-pill"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                        onclick="confirm('Are you sure want to delete the record?!')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                            @endif
                            <td>{{ $emp->name }}</td>
                            <td>{{ $emp->username }}</td>
                            <td>{{ $emp->email }}</td>
                            <td>{{ $emp->position->name }}</td>
                            <td>{{ $emp->level->name }}</td>
                            <td>{{ $emp->created_at->toDateString() }}</td>
                        </tr>
                        @endforeach
                        {{-- End Modify By Fariz 20230126 --}}
                        @else
                        <p class="text-center my-5">No data Employees found.</p>
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- View Show by entires --}}
            <div class="d-flex justify-content-start dataTables_length bs-select" id="dtBasicExample_length">

                {{-- <label>Show
                    <select class="mx-2" name="dtBasicExample_length aria-controls=" dtBasicExample"
                        class="custom-select custom-select-sm form-style form-control-sm">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> entries</label> --}}
            </div>

            {{-- View Pagination --}}
            <div class="d-flex justify-content-end" aria-label="Page navigation example">
                {{-- Added By Fariz 20230127 --}}
                {{ $employees->links() }}
                {{-- Remarks By Fariz 20230127 --}}
                {{-- <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul> --}}
            </div>
            {{-- End Pagination --}}

        </div>
    </div>
    {{-- End View Table --}}
</main>
@endsection
