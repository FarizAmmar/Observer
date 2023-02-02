@extends('app')

@section('content')
<div class="mt-3 mb-5 px-3">
    <div class="row">

        {{-- Card Employee --}}
        <div class="col-sm-3 mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee</h5>
                    <i class="bi bi-people-fill" style="font-size: 50px;"></i>
                </div>
                <a href="/employee" class="btn btn-primer">Visit</a>
            </div>
        </div>

        {{-- Card Absensi --}}
        <div class="col-sm-3  mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Absensi</h5>
                    <i class="bi bi-clipboard2-data-fill" style="font-size: 50px;"></i>
                </div>
                <a href="/absensi" class="btn btn-primer">Visit</a>
            </div>
        </div>

        {{-- Card Potongan --}}
        <div class="col-sm-3  mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Potongan</h5>
                    <i class="bi bi-pie-chart-fill" style="font-size: 50px;"></i>
                </div>
                <a href="/potongan" class="btn btn-primer">Visit</a>
            </div>
        </div>

        {{-- Card Salary --}}
        <div class="col-sm-3  mb-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Salary</h5>
                    <i class="bi bi-currency-exchange" style="font-size: 50px;"></i>
                </div>
                <a href="/salary" class="btn btn-primer">Visit</a>
            </div>
        </div>


    </div>
</div>
@endsection