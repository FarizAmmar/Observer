@extends('app')

@section('content')
<main class="mt-4 mb-5 px-4">
    {{-- Button Export, Filter, New --}}
    <div class="d-flex justify-content-end mb-3">
        <button type="button" class="btn btn-primer px-3 mx-2" id="btnExport" onclick="btnExport()">
            <i class="bi bi-arrow-down-square-fill"></i>
            Export
        </button>
        <button type="button" class="btn btn-primer px-3 mx-2" id="btnExport" onclick="btnFilter()">
            <i class="bi bi-filter-square-fill"></i>
            Filter
        </button>
        <a href="/new-absensi">
            <button type="button" class="btn btn-primer px-3 mx-2">
                <i class="bi bi-file-plus-fill"></i>
                New
            </button>
        </a>
    </div>
    {{-- End Button --}}

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
    {{-- End View Export --}}


    {{-- View Filter --}}
    <div class="card mt-3 mb-5" id="vFilter" style="display: none">
        <div class="card-body">
            <div>
                <p>Filter</p>
            </div>
            <form>
                <div>
                    <div class="row ">
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputNama">Nama</label>
                            <input type="text" class="form-style" id="inputNama" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputJabatan">Jabatan</label>
                            <input type="text" class="form-style" id="inputJabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group col-md-4 mb-2">
                            <label for="inputTgl">Tanggal</label>
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
                    <button type="submit" class="btn btn-primer">Search</button>
                </div>
            </form>
        </div>
    </div>
    {{-- End View Filter --}}

    {{-- Tabs --}}
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">All Attendance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">My Attendance</a>
        </li>
    </ul>

    {{-- View Table Absensi --}}
    <div class="card mt-3 mb-5">
        <div class="card-body">
            <div>
                <p>Absensi</p>
            </div>

            <div class="table-responsive-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Hadir</th>
                            <th scope="col">Absen</th>
                            <th scope="col">Cuti</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>01/01/2023</td>
                            <td>Najib</td>
                            <td>Admin</td>
                            <td>20</td>
                            <td>0</td>
                            <td>0</td>
                            <td><a class="btn-primer p-1 px-3 rounded-pill" href="/edit-absensi"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>01/01/2023</td>
                            <td>Jacob</td>
                            <td>Admin</td>
                            <td>19</td>
                            <td>1</td>
                            <td>0</td>
                            <td><a class="btn-primer p-1 px-3 rounded-pill" href="/edit-absensi"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>01/01/2023</td>
                            <td>Krab</td>
                            <td>Marketing</td>
                            <td>18</td>
                            <td>2</td>
                            <td>0</td>
                            <td><a class="btn-primer p-1 px-3 rounded-pill" href="/edit-absensi"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>01/01/2023</td>
                            <td>Larry</td>
                            <td>Programmer</td>
                            <td>17</td>
                            <td>1</td>
                            <td>2</td>
                            <td><a class="btn-primer p-1 px-3 rounded-pill" href="/edit-absensi"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- End View Table --}}

            {{-- View Show by entires --}}
            <div class="d-flex justify-content-start dataTables_length bs-select" id="dtBasicExample_length">
                <label>Show
                    <select class="mx-2" name="dtBasicExample_length aria-controls=" dtBasicExample"
                        class="custom-select custom-select-sm form-style form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select> entries</label>
            </div>

            {{-- View Pagination --}}
            <div class="d-flex justify-content-end" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            {{-- End Pignation --}}

        </div>
    </div>
    {{-- End View Table --}}
</main>
@endsection
