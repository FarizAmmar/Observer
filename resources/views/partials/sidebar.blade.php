<nav class="col-md-4 col-lg-3 ps-3 pe-3 sidebar bg-light overflow-auto">
    <form action="#" method="POST">
        @method('filter')
        @csrf
        <div class="row py-4 mx-3 rounded" style="background: white">
            {{-- Kategori --}}
            <div class="col-12">
                <div class="row mx-3">
                    <div class="col-6 sb-title-items">
                        <b>Kategori</b>
                    </div>
                    <div class="col-6 sb-title-items d-flex justify-content-end">
                        <span>
                            <i class="bi bi-dot"></i>
                        </span>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="formal" value="formal">
                            <label class="form-check-label" for="formal">
                                Formal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kebaya" value="kebaya">
                            <label class="form-check-label" for="kebaya">
                                Kebaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="baju-muslim"
                                value="baju-muslim">
                            <label class="form-check-label" for="baju-muslim">
                                Baju Muslim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="celana" value="celana">
                            <label class="form-check-label" for="celana">
                                Celana
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Jenis Baju --}}
            <div class="col-12">
                <div class="row mt-4 mx-3">
                    <div class="col-9 sb-title-items">
                        <b>Jenis -Jenis Kain</b>
                    </div>
                    <div class="col-3 sb-title-items d-flex justify-content-end">
                        <span>
                            <i class="bi bi-dot"></i>
                        </span>
                    </div>
                    {{-- Kain Formal --}}
                    <div class="col-12 mt-3 d-none" id="jenis-kain-formal">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-drill" id="kain-drill">
                            <label class="form-check-label" for="kain-drill">
                                Kain Drill
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-oxford" id="kain-oxford">
                            <label class="form-check-label" for="kain-oxford">
                                Kain Oxford
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-katun" id="kain-katun">
                            <label class="form-check-label" for="kain-katun">
                                Kain Katun
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-polyester" id="kain-polyester">
                            <label class="form-check-label" for="kain-polyester">
                                Kain Polyester
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-thalistik" id="kain-thalistik">
                            <label class="form-check-label" for="kain-thalistik">
                                Kain Thalistik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-denim" id="kain-denim">
                            <label class="form-check-label" for="kain-denim">
                                Kain Denim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="kain-corduroy" id="kain-corduroy">
                            <label class="form-check-label" for="kain-corduroy">
                                Kain Corduroy
                            </label>
                        </div>
                    </div>
                    {{-- Kain Kebaya --}}
                    <div class="col-12 mt-3 d-none" id="jenis-kain-kebaya">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-brokat">
                            <label class="form-check-label" for="kain-brokat">
                                Kain Brokat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-organdi">
                            <label class="form-check-label" for="kain-organdi">
                                Kain Organdi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-katun">
                            <label class="form-check-label" for="kain-katun">
                                Kain Katun
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-sutra">
                            <label class="form-check-label" for="kain-sutra">
                                Kain Sutra
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-chiffron">
                            <label class="form-check-label" for="kain-chiffron">
                                Kain Chiffron
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-tulle">
                            <label class="form-check-label" for="kain-tulle">
                                Kain Tulle
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-jumputan">
                            <label class="form-check-label" for="kain-jumputan">
                                Kain Jumputan
                            </label>
                        </div>
                    </div>
                    {{-- Kain Baju Muslim --}}
                    <div class="col-12 mt-3 d-none" id="jenis-kain-baju-muslim">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-brokat">
                            <label class="form-check-label" for="kain-brokat">
                                Kain Brokat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-satin">
                            <label class="form-check-label" for="kain-satin">
                                Kain Satin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-wolfis">
                            <label class="form-check-label" for="kain-wolfis">
                                Kain Wolfis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-balotelli">
                            <label class="form-check-label" for="kain-balotelli">
                                Kain Balotelli
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-thalistik">
                            <label class="form-check-label" for="kain-thalistik">
                                Kain Thalistik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-organza">
                            <label class="form-check-label" for="kain-organza">
                                Kain Organza
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kain-sutra">
                            <label class="form-check-label" for="kain-sutra">
                                Kain Sutra
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Button Filter --}}
            <div class="col-12">
                <div class="row mt-4 mx-3">
                    <div class="col-12">
                        <button class="btn btn-primer disabled w-100" type="submit" name="filter" id="filter">
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</nav>