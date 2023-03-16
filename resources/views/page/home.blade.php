@extends('layouts.app')

@section('content')
<main class="mt-4 mb-5 px-4">
    <div class="row">
        <div class="title my-3">
            <h2>Catalog</h2>
        </div>
        <div class="col-7">
            {{-- Search --}}
            <div class="input-group mb-3">
                <span class="input-group-text" style="background: white;">
                    <i class='bx bx-search'></i>
                </span>
                <input type="search" class="form-control" id="search-product" name="search-product"
                    placeholder="Search among 100+ product">
            </div>
        </div>
        <div class="col-5">
            {{-- Filter --}}
            <div class="input-group mb-3">
                <label class="input-group-text" style="background: white;">
                    <i class="bi bi-filter-right"></i>
                </label>
                <select class="form-select">
                    <option value="popular" selected>Popular</option>
                    <option value="termurah">Barang Termurah</option>
                    <option value="termahal">Barang Termahal</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="row my-5">
        @foreach ($product as $prod)
        <div class="col-3 mb-4">
            <div class="card">
                <img src="/img/produk/batik.png" class="card-img-top img-thumbnail" alt="Gambar Produk">
                <div class="card-body">
                    <h5 class="card-title">{{ $prod->name}}</h5>
                    <p class="card-text">Kategori</p>
                    <div class="row">
                        <div class="col">
                            <p class="card-text">
                                <small class="text-muted">{{ "Rp " . number_format($prod->price, 0, ',', '.')
                                    }}</small>
                            </p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <!-- Popup Button -->
                            <button type="button" class="btn btn-primer" data-bs-toggle="modal" data-bs-target="#buy"
                                title="Order Here">
                                <i class="bi bi-bag-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $product->links() }}
    </div>
</main>
@endsection



<!-- Buy Popup -->
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="buyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="buyLabel">Pre-Order</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mx-3 my-3">
                    <div class="col-6">
                        <img class="img-fluid" src="/img/produk/batik.png" alt="" width="100%">
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col">
                                <h4 class="font-bold">
                                    Test ini adalah nama produk
                                </h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <h3 class="font-bold">
                                    Rp. 461.000
                                </h3>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga accusamus labore
                                    ratione voluptatibus nobis tenetur vitae impedit aliquam architecto. Voluptates rem
                                    pariatur harum nobis porro sit cum quam ab provident magnam eaque quibusdam incidunt
                                    omnis quae earum illo eius impedit, consequatur nostrum repellat alias doloribus,
                                    autem voluptatem labore? Alias, eum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primer">Save changes</button>
            </div>
        </div>
    </div>
</div>