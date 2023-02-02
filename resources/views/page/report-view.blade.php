@extends('app')

@section('content')
{{-- View Button Print, Download --}}
<div class="container" id="bAction">
    <div class="d-flex justify-content-center mb-3">
        <button type="button" class="btn btn-primer px-3 mx-2" onclick="window.print()">
            <i class="bi bi-printer-fill"></i>
            Print
        </button>
        <button type="button" class="btn btn-primer px-3 mx-2" onclick="download()">
            <i class="bi bi-file-earmark-arrow-down-fill"></i>
            Download
        </button>
    </div>
    <div>
        <hr class="row brc-default-l1 mt-3 mb-3" />
    </div>
</div>
{{-- End Button --}}

<div class="page-content container mb-5" id="pSlipGaji">
    <div class="container px-0">
        {{-- View Slip Gaji --}}
        <div class="row mt-4">
            <div class="col-12 col-lg-12">

                {{-- View Header --}}
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <img class="brand" src="img/Observer-None.png" alt="logo">
                            <span class="text-default-d3">Observer</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <small>Gedung Sarinah, Jl. Mampang Prapatan 2, Kec. Mampang Prapatan, Kel. Mampang Prapatan,
                                Jakarta Selatan.</small> <br>
                            <small>Tlpn. (021) 1234 4567.</small>
                            <small>Website. www.google.com.</small>
                        </div>
                    </div>
                </div>
                {{-- End View --}}

                <hr class="row brc-default-l1 mt-3 mb-3" />

                <div class="row">
                    {{-- View Indentitas --}}
                    <div class="col-6">
                        <div>
                            <span class="text-600 text-110 text-blue align-middle">Ainun Najib</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Adminsitration
                            </div>
                            <div class="my-1">
                                Jl. Gg Hj. Hamid, Mampang Prapatan, Jakarta Selatan, Indonesia.
                            </div>
                            <div class="my-1"><i class="bi bi-telephone-fill"></i></i> <b
                                    class="text-600">(+62)821-1141-7111</b></div>
                        </div>
                    </div>
                    {{-- End View --}}

                    {{-- View Ket Slip Gaji --}}
                    <div class="text-95 col-6 align-self-start d-sm-flex justify-content-end">
                        <div class="text-grey-m2">
                            <div class="mb-2 text-secondary-m1 text-600 text-125">
                                Slip Gaji
                            </div>
                            <div class="my-2"><span class="text-600 text-90">Date:</span> Januari 2023</div>
                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                    class="text-600 text-90">Tanggal Masuk:</span> 01/12/2022</div>
                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span
                                    class="text-600 text-90">Status:</span> Kontrak</div>
                        </div>
                    </div>
                    {{-- End View --}}
                </div>

                {{-- View Tables Slip Gaji --}}
                <div class="mt-4">
                    {{-- Gaji Pokok --}}
                    <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="col-9">Keterangan</div>
                        <div class="col-3">Jumlah</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="col-9">Gaji Pokok</div>
                            <div class="col-3 text-secondary-d2">Rp. 4.500.000,00</div>
                        </div>

                        {{-- Potongan --}}
                        <div class="row mb-2 text-600 text-white py-25 bgc-default-tp1">
                            <div class="col-9">Potongan</div>
                            <div class="col-3">Jumlah</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="col-9">Bpjs</div>
                            <div class="col-2 text-secondary-d2">Rp. 80.000,00</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                            <div class="col-9">Pinjaman</div>
                            <div class="col-2 text-secondary-d2">Rp. 0,00</div>
                        </div>

                        <div class="row mb-2 mb-sm-0 py-25 ">
                            <div class="col-9">Absen</div>
                            <div class="col-3 text-secondary-d2">Rp. 30,000,00</div>
                        </div>
                    </div>
                    {{-- End Table --}}

                    <hr class="row brc-default-l1 mt-3" />

                    {{-- View Total Potongan, PPh21, Gaji Bayar --}}
                    <div class="row">
                        <div class="col-12  mb-sm-0 text-90">
                            <div class="row my-2">
                                <div class="col-9 text-start">
                                    Total Potongan
                                </div>
                                <div class="col-3">
                                    <span class="text-110 text-secondary-d2">Rp. 110.000,00</span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-9 text-start">
                                    PPh 21 (10%)
                                </div>
                                <div class="col-3">
                                    <span class="text-110 text-secondary-d2">Rp. 50.000,00</span>
                                </div>
                            </div>

                            <hr class="row brc-default-l1 mt-3 mb-3" />

                            <div class="row my-2 align-items-center bgc-primary-l3">
                                <div class="col-9 text-start">
                                    Total Gaji yang dibayarkan
                                </div>
                                <div class="col-3">
                                    <span class="text-120 text-success-d3 opacity-2">Rp. 4.340.000,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Baris --}}

                </div>
                {{-- End Tables Slip Gaji --}}
            </div>
        </div>
        {{-- End View Slip Gaji --}}
    </div>
</div>
@endsection