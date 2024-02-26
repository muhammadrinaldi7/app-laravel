@extends('template.main')
@section('container')

<div class="container-fluid py-4">
            
    <style>
        .card-img-top {
            object-fit: cover;
            height: 150px;
            width: 100%;
        }
    
        .object {
            object-fit: cover;
        }
    </style>
    
    
    <div class="row">
        <div class="col-sm-12" style="overflow-y: auto;">
            <div class="container-fluid pt-1 mb-4 border-bottom sticky-top bg-gray-100" style="white-space: nowrap; overflow-x: auto;">
                <input type="radio" class="btn-check filter-kategori" data-kategori="all" name="kategori" id="kategori-all" checked="">
                <label class="btn btn-outline-primary rounded-pill" for="kategori-all">
                    All
                </label>
                                <input type="radio" class="btn-check filter-kategori" data-kategori="makanan" name="kategori" id="kategori-Makanan">
                    <label class="btn btn-outline-primary rounded-pill" for="kategori-Makanan">
                        Makanan                </label>
                                <input type="radio" class="btn-check filter-kategori" data-kategori="minuman" name="kategori" id="kategori-Minuman">
                    <label class="btn btn-outline-primary rounded-pill" for="kategori-Minuman">
                        Minuman                </label>
                                <input type="radio" class="btn-check filter-kategori" data-kategori="snack" name="kategori" id="kategori-Snack">
                    <label class="btn btn-outline-primary rounded-pill" for="kategori-Snack">
                        Snack                </label>
                                <input type="radio" class="btn-check filter-kategori" data-kategori="dessert" name="kategori" id="kategori-Dessert">
                    <label class="btn btn-outline-primary rounded-pill" for="kategori-Dessert">
                        Dessert                </label>
                        </div>
    
                        <div class="container-fluid mb-3 kategori-menu makanan">
                    <h5 class="mb-4 align-bottom">
                        <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="32">
                            <path d="M190.58-513.333q-40.385 0-68.41-28.308t-28.025-68.504V-769.42q0-40.385 28.025-68.598 28.025-28.214 68.41-28.214h159.652q39.819 0 68.127 28.214 28.308 28.213 28.308 68.598v159.275q0 40.196-28.308 68.504-28.308 28.308-68.127 28.308H190.58Zm0 419.188q-40.385 0-68.41-28.025t-28.025-68.41v-159.652q0-39.819 28.025-68.127 28.025-28.308 68.41-28.308h159.652q39.819 0 68.127 28.308 28.308 28.308 28.308 68.127v159.652q0 40.385-28.308 68.41t-68.127 28.025H190.58Zm419.565-419.188q-40.196 0-68.504-28.308-28.308-28.308-28.308-68.504V-769.42q0-40.385 28.308-68.598 28.308-28.214 68.504-28.214H769.42q40.385 0 68.598 28.214 28.214 28.213 28.214 68.598v159.275q0 40.196-28.214 68.504-28.213 28.308-68.598 28.308H610.145Zm0 419.188q-40.196 0-68.504-28.025-28.308-28.025-28.308-68.41v-159.652q0-39.819 28.308-68.127 28.308-28.308 68.504-28.308H769.42q40.385 0 68.598 28.308 28.214 28.308 28.214 68.127v159.652q0 40.385-28.214 68.41-28.213 28.025-68.598 28.025H610.145Z"></path>
                        </svg>
                        Makanan                </h5>            
                    <div class="row">
                        
                                                                                                <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="3" data-nama="Nasi Omlete" data-harga="16000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/655eff0d77ae0.jpg" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Nasi Omlete">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Nasi Omlete</h5>
                                                <p class="card-text mb-0">Rp 16.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                                                                                                                                <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="7" data-nama="Fauzan Gaming" data-harga="30000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/656e9b38f3b59.png" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Fauzan Gaming">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Fauzan Gaming</h5>
                                                <p class="card-text mb-0">Rp 30.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                        </div>
                </div>
                        <div class="container-fluid mb-3 kategori-menu minuman">
                    <h5 class="mb-4 align-bottom">
                        <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="32">
                            <path d="M190.58-513.333q-40.385 0-68.41-28.308t-28.025-68.504V-769.42q0-40.385 28.025-68.598 28.025-28.214 68.41-28.214h159.652q39.819 0 68.127 28.214 28.308 28.213 28.308 68.598v159.275q0 40.196-28.308 68.504-28.308 28.308-68.127 28.308H190.58Zm0 419.188q-40.385 0-68.41-28.025t-28.025-68.41v-159.652q0-39.819 28.025-68.127 28.025-28.308 68.41-28.308h159.652q39.819 0 68.127 28.308 28.308 28.308 28.308 68.127v159.652q0 40.385-28.308 68.41t-68.127 28.025H190.58Zm419.565-419.188q-40.196 0-68.504-28.308-28.308-28.308-28.308-68.504V-769.42q0-40.385 28.308-68.598 28.308-28.214 68.504-28.214H769.42q40.385 0 68.598 28.214 28.214 28.213 28.214 68.598v159.275q0 40.196-28.214 68.504-28.213 28.308-68.598 28.308H610.145Zm0 419.188q-40.196 0-68.504-28.025-28.308-28.025-28.308-68.41v-159.652q0-39.819 28.308-68.127 28.308-28.308 68.504-28.308H769.42q40.385 0 68.598 28.308 28.214 28.308 28.214 68.127v159.652q0 40.385-28.214 68.41-28.213 28.025-68.598 28.025H610.145Z"></path>
                        </svg>
                        Minuman                </h5>
                    <div class="row">
                                                                                                                        <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="4" data-nama="Soda Gembira" data-harga="15000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/656d76d20bf7f.jpg" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Soda Gembira">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Soda Gembira</h5>
                                                <p class="card-text mb-0">Rp 15.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                                                        <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="5" data-nama="Milkshake" data-harga="16000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/656d76fd1079b.jpg" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Milkshake">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Milkshake</h5>
                                                <p class="card-text mb-0">Rp 16.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                                                                        </div>
                </div>
                        <div class="container-fluid mb-3 kategori-menu snack">
                    <h5 class="mb-4 align-bottom">
                        <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="32">
                            <path d="M190.58-513.333q-40.385 0-68.41-28.308t-28.025-68.504V-769.42q0-40.385 28.025-68.598 28.025-28.214 68.41-28.214h159.652q39.819 0 68.127 28.214 28.308 28.213 28.308 68.598v159.275q0 40.196-28.308 68.504-28.308 28.308-68.127 28.308H190.58Zm0 419.188q-40.385 0-68.41-28.025t-28.025-68.41v-159.652q0-39.819 28.025-68.127 28.025-28.308 68.41-28.308h159.652q39.819 0 68.127 28.308 28.308 28.308 28.308 68.127v159.652q0 40.385-28.308 68.41t-68.127 28.025H190.58Zm419.565-419.188q-40.196 0-68.504-28.308-28.308-28.308-28.308-68.504V-769.42q0-40.385 28.308-68.598 28.308-28.214 68.504-28.214H769.42q40.385 0 68.598 28.214 28.214 28.213 28.214 68.598v159.275q0 40.196-28.214 68.504-28.213 28.308-68.598 28.308H610.145Zm0 419.188q-40.196 0-68.504-28.025-28.308-28.025-28.308-68.41v-159.652q0-39.819 28.308-68.127 28.308-28.308 68.504-28.308H769.42q40.385 0 68.598 28.308 28.214 28.308 28.214 68.127v159.652q0 40.385-28.214 68.41-28.213 28.025-68.598 28.025H610.145Z"></path>
                        </svg>
                        Snack                </h5>
                    <div class="row">
                                                                                                                                                                        <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="6" data-nama="Kentang Goreng" data-harga="30000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/656d77f377c52.jpg" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Kentang Goreng">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Kentang Goreng</h5>
                                                <p class="card-text mb-0">Rp 30.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                                                </div>
                </div>
                        <div class="container-fluid mb-3 kategori-menu dessert">
                    <h5 class="mb-4 align-bottom">
                        <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="32">
                            <path d="M190.58-513.333q-40.385 0-68.41-28.308t-28.025-68.504V-769.42q0-40.385 28.025-68.598 28.025-28.214 68.41-28.214h159.652q39.819 0 68.127 28.214 28.308 28.213 28.308 68.598v159.275q0 40.196-28.308 68.504-28.308 28.308-68.127 28.308H190.58Zm0 419.188q-40.385 0-68.41-28.025t-28.025-68.41v-159.652q0-39.819 28.025-68.127 28.025-28.308 68.41-28.308h159.652q39.819 0 68.127 28.308 28.308 28.308 28.308 68.127v159.652q0 40.385-28.308 68.41t-68.127 28.025H190.58Zm419.565-419.188q-40.196 0-68.504-28.308-28.308-28.308-28.308-68.504V-769.42q0-40.385 28.308-68.598 28.308-28.214 68.504-28.214H769.42q40.385 0 68.598 28.214 28.214 28.213 28.214 68.598v159.275q0 40.196-28.214 68.504-28.213 28.308-68.598 28.308H610.145Zm0 419.188q-40.196 0-68.504-28.025-28.308-28.025-28.308-68.41v-159.652q0-39.819 28.308-68.127 28.308-28.308 68.504-28.308H769.42q40.385 0 68.598 28.308 28.214 28.308 28.214 68.127v159.652q0 40.385-28.214 68.41-28.213 28.025-68.598 28.025H610.145Z"></path>
                        </svg>
                        Dessert                </h5>
                    <div class="row">
                                                                        <div class="col-sm-12 mb-4 menu px-0" data-tersedia="true" data-id="2" data-nama="Salad Buah" data-harga="15000">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" class="card w-100 animation-card addProductSale p-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <img src="https://dev.unimasoft.id/sposerp/img/datafoto/655ef5fc7f7a0.jpg" style="height: 100px; object-fit: cover;" class="img-fluid rounded-start p-0 w-100" alt="Salad Buah">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-start py-2 text-nowrap">
                                                <h5 class="card-title">Salad Buah</h5>
                                                <p class="card-text mb-0">Rp 15.000</p>
                                                <h6 class="card-text mb-0 text-md text-success">
                                                    Tersedia                                            </h6>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                                                                                                                                                                </div>
                </div>
            
        </div>
        
        
        {{-- <button class="btn btn-primary sticky-bottom" style="border-radius: 4px" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Buka Pesanan</button> --}}
        <div class="fixed-plugin">
        <a class="fixed-plugin-button btn-success text-dark position-fixed px-3 py-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <i class="fas fa-cash-register"></i>
          </a>
        </div>
        <div class="offcanvas offcanvas-end" style="--bs-offcanvas-width:100vh" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
          <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasScrollingLabel">Pesanan</h4>
            <a type="button" class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></a>
          </div>
          <div class="offcanvas-body">
            <form action="https://dev.unimasoft.id/sposerp/pesanan/insert" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-id-card-alt ps-2" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control ps-2" name="kasir" value="ale" required="" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-user ps-2" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control ps-2" name="pelanggan" value="Customer" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-phone ps-2" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control ps-2" name="nomor_telp" value="" placeholder="08xxx" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="d-flex justify-content-between border-top pt-3 mt-4">
                    <label class="col-form-label">Daftar Belanja</label>
                    <button type="button" class="btn mt-3 btn-danger rounded-pill" id="clear">Clear All Items</button>
                </div>

                <div class="row mb-1">
                    <div class="col-sm-6 py-1 text-sm">
                        Item
                    </div>
                    <div class="col-sm-2 py-1 ps-0 text-sm">
                        Amount
                    </div>
                    <div class="col-sm-4 py-1 ps-0 text-sm">
                        Subtotal
                    </div>
                </div>
                <div id="daftar-belanja" class="pb-0 mb-2">
                </div>

                <div class="form-group border-bottom pb-2">
                    <label class="col-lg-12 col-form-label">Note</label>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="note" value="0"></textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="idTransaksi" class="col-lg-12 col-form-label">Subtotal</label>
                            <div class="input-group mb-3">
                                <span class="input input-group-text" id="button-addon1">Rp. </span>
                                <input type="number" class="form-control ps-2" id="subtotal" name="subtotal" value="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="idTransaksi" class="col-lg-12 col-form-label">
                                Pajak <span class="badge badge-warning">(
                                    11%)
                                </span>
                            </label>
                            <div class="input-group mb-3">
                                <span class="input input-group-text" id="button-addon1">Rp. </span>
                                <input type="number" class="form-control ps-2" id="pajak" name="pajak" value="0" data-pajak="11" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="idTransaksi" class="col-lg-12 col-form-label">Total</label>
                            <div class="input-group mb-3">
                                <span class="input input-group-text" id="button-addon1">Rp. </span>
                                <input type="number" class="form-control ps-2" id="total" name="total" value="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="col-lg-12 col-form-label">Pembayaran</label>
                            <select name="metode_pembayaran" id="pembayaran" class="form-control">
                                <option value="cash">Cash</option>
                                <option value="debit">Debit</option>
                                <option value="kredit">Kredit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 kode-transaksi" style="display: none;">
                        <label for="" class="col-lg-12 col-form-label">Kode Transaksi</label>
                        <div class="input-group mb-3">
                            <span class="input input-group-text" id="button-addon1">
                                <i class="fa fa-lock ps-2" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control ps-2" id="kode_transaksi" name="kode_transaksi" value="" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label for="" class="col-lg-12 col-form-label">Bayar</label>
                        <div class="input-group mb-3">
                            <span class="input input-group-text" id="button-addon1">Rp. </span>
                            <input type="number" class="form-control ps-2" id="bayar" name="bayar" value="0" min="0" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="col-lg-12 col-form-label">Kembalian</label>
                        <div class="input-group mb-3">
                            <span class="input input-group-text" id="button-addon1">Rp. </span>
                            <input type="number" class="form-control ps-2" id="kembali" name="kembali" value="0" min="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>

                <div class="row p-2" style="flex-wrap: wrap;">
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-success rounded-pill" style="white-space: nowrap" data-value="pas">Uang Pas</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="10000">Rp. 10.000</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="20000">Rp. 20.000</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="50000">Rp. 50.000</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="100000">Rp. 100.000</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="200000">Rp. 200.000</button>
                    </div>
                    <div class="col-sm-3 px-1">
                        <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="500000">Rp. 500.000</button>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <!-- <a href="" class="btn btn-info me-2 mb-0">
                            <i class="fa fa-print me-2"></i>
                            Print
                        </a> -->
                        <button type="button" class="btn btn-primary mb-0 submit-form">
                            <i class="fa fa-save me-2" aria-hidden="true"></i>
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
        {{-- <div class="col-sm-6">
            <div class="card" style="height: calc(100vh - 120px); overflow-y: auto;">
                <div class="card-body">
                    <form action="https://dev.unimasoft.id/sposerp/pesanan/insert" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-id-card-alt ps-2" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control ps-2" name="kasir" value="ale" required="" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user ps-2" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control ps-2" name="pelanggan" value="Customer" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-phone ps-2" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control ps-2" name="nomor_telp" value="" placeholder="08xxx" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
    
                        <div class="d-flex justify-content-between border-top pt-3 mt-4">
                            <label class="col-form-label">Daftar Belanja</label>
                            <button type="button" class="btn btn-danger rounded-pill" id="clear">Clear All Items</button>
                        </div>
    
                        <div class="row mb-1">
                            <div class="col-sm-6 py-1 text-sm">
                                Item
                            </div>
                            <div class="col-sm-2 py-1 ps-0 text-sm">
                                Amount
                            </div>
                            <div class="col-sm-4 py-1 ps-0 text-sm">
                                Subtotal
                            </div>
                        </div>
                        <div id="daftar-belanja" class="pb-0 mb-2">
                        </div>
    
                        <div class="form-group border-bottom pb-2">
                            <label class="col-lg-12 col-form-label">Note</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="note" value="0"></textarea>
                            </div>
                        </div>
    
    
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="idTransaksi" class="col-lg-12 col-form-label">Subtotal</label>
                                    <div class="input-group mb-3">
                                        <span class="input input-group-text" id="button-addon1">Rp. </span>
                                        <input type="number" class="form-control ps-2" id="subtotal" name="subtotal" value="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="idTransaksi" class="col-lg-12 col-form-label">
                                        Pajak <span class="badge badge-warning">(
                                            11%)
                                        </span>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input input-group-text" id="button-addon1">Rp. </span>
                                        <input type="number" class="form-control ps-2" id="pajak" name="pajak" value="0" data-pajak="11" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="idTransaksi" class="col-lg-12 col-form-label">Total</label>
                                    <div class="input-group mb-3">
                                        <span class="input input-group-text" id="button-addon1">Rp. </span>
                                        <input type="number" class="form-control ps-2" id="total" name="total" value="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-form-label">Pembayaran</label>
                                    <select name="metode_pembayaran" id="pembayaran" class="form-control">
                                        <option value="cash">Cash</option>
                                        <option value="debit">Debit</option>
                                        <option value="kredit">Kredit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 kode-transaksi" style="display: none;">
                                <label for="" class="col-lg-12 col-form-label">Kode Transaksi</label>
                                <div class="input-group mb-3">
                                    <span class="input input-group-text" id="button-addon1">
                                        <i class="fa fa-lock ps-2" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control ps-2" id="kode_transaksi" name="kode_transaksi" value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="col-lg-12 col-form-label">Bayar</label>
                                <div class="input-group mb-3">
                                    <span class="input input-group-text" id="button-addon1">Rp. </span>
                                    <input type="number" class="form-control ps-2" id="bayar" name="bayar" value="0" min="0" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="col-lg-12 col-form-label">Kembalian</label>
                                <div class="input-group mb-3">
                                    <span class="input input-group-text" id="button-addon1">Rp. </span>
                                    <input type="number" class="form-control ps-2" id="kembali" name="kembali" value="0" min="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
    
                        <div class="row p-2" style="flex-wrap: wrap;">
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-success rounded-pill" style="white-space: nowrap" data-value="pas">Uang Pas</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="10000">Rp. 10.000</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="20000">Rp. 20.000</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="50000">Rp. 50.000</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="100000">Rp. 100.000</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="200000">Rp. 200.000</button>
                            </div>
                            <div class="col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="500000">Rp. 500.000</button>
                            </div>
                        </div>
    
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <!-- <a href="" class="btn btn-info me-2 mb-0">
                                    <i class="fa fa-print me-2"></i>
                                    Print
                                </a> -->
                                <button type="button" class="btn btn-primary mb-0 submit-form">
                                    <i class="fa fa-save me-2" aria-hidden="true"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
    
    <script>
const BASEURL = window.location.href;
const form = document.querySelector('form');
const clearBtn = document.getElementById('clear');
const subtotalDisplay = document.getElementById('subtotal');
const pajakDisplay = document.getElementById('pajak');
const totalDisplay = document.getElementById('total');
const bayar = document.getElementById('bayar');
const kembali = document.getElementById('kembali');
const paymentMethodSelect = document.getElementById('pembayaran');
const kode_transaksi = document.querySelector('.kode-transaksi');
const daftar_belanja = document.getElementById('daftar-belanja');
const kategori_menu = document.querySelectorAll('.kategori-menu');
let selected_menu = {};

document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.menu').forEach(menu => {
        menu.addEventListener('click', () => {
            let id = parseInt(menu.dataset.id);
            let tersedia = JSON.parse(menu.dataset.tersedia);
            let nama = menu.dataset.nama;
            let harga = parseInt(menu.dataset.harga);

            if (tersedia) {
                if (!selected_menu.hasOwnProperty(nama)) {
                    addList(nama, harga, id);
                }
            } else {
                alert('Menu telah habis!');
            }
        });
    });

    paymentMethodSelect.addEventListener('change', () => {
        switch (paymentMethodSelect.value) {
            case 'debit':
            case 'kredit':
                kode_transaksi.style.display = 'block';
                break;
            default:
                kode_transaksi.style.display = 'none';
                break;
        }
    });

    clearBtn.addEventListener('click', () => {
        if (
            daftar_belanja.childElementCount &&
            confirm('Apakah anda yakin ingin membersihkan daftar belanja?')
        ) {
            clearList();
        }
    });

    bayar.addEventListener('input', () => {
        if (bayar.value == 0) {
            kembali.value = 0;
        } else {
            countReturnPrice(bayar.value);
        }
    });

    document.querySelectorAll('.instant-pay').forEach(btn => {
        btn.addEventListener('click', () => {
            let val = btn.dataset.value;
            if (val == 'pas') {
                countReturnPrice(totalDisplay.value);
            } else {
                countReturnPrice(val);
            }
        });
    });

    document.querySelectorAll('.filter-kategori').forEach(btn => {
        btn.addEventListener('change', () => {
            if (btn.checked) {
                let filter = btn.dataset.kategori;
                switch (filter) {
                    case 'all':
                        kategori_menu.forEach(kategori => toggleDisplay(kategori, true));
                        break;
                    default:
                        kategori_menu.forEach(kategori => toggleDisplay(kategori, false));
                        toggleDisplay(document.querySelector(`.kategori-menu.${filter}`), true);
                        break;
                }
            }
        });
    });

    document.querySelector('.submit-form').addEventListener('click', () => {
        if (document.querySelectorAll('.item').length) {
            if (bayar.value == 0 || !form.checkValidity()) {
                alert('Silahkan cek kembali!');
            } else if (confirm('Apakah anda yakin ingin memproses data ini?')) {
                form.submit();
            }
        } else {
            alert('Daftar belanja kosong!');
        }
    });

    setTimeout(() => {
        document.querySelector('a.nav-link.text-body.p-0').click(); // auto minimize the navbar
    }, 500);
});

function toggleDisplay(element, bool) {
    if (bool) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function addList(nama, price, id) {
    selected_menu[nama] = price;

    let item = document.createElement('div');
    item.setAttribute('class', 'row item');
    item.innerHTML = `
        <div class="col-sm-6">
            <input type="hidden" name="id[]" value="${id}">
            <div class="input-group mb-3">
                <button class="btn btn-danger m-0 removeList" type="button" data-nama="${nama}">
                    <i class="far fa-trash-alt"></i>
                </button>
                <input type="text" class="item form-control ps-3" name="item[]" value="${nama}" readonly>
            </div>
        </div>
        <div class="col-sm-2 ps-0">
            <input type="number" class="amount form-control ps-2" name="amount[]" data-nama="${nama}" value="1" min="1">
        </div>
        <div class="col-sm-4 ps-0">
            <div class="input-group mb-3">
                <span class="input input-group-text">Rp. </span>
                <input type="number" class="subtotal form-control ps-2" name="item_subtotal[]" value="${price}" readonly>
            </div>
        </div>
    `;
    daftar_belanja.appendChild(item);

    refreshAmountEvent();
}

function removeList(button) {
    delete selected_menu[button.dataset.nama];
    button.parentElement.parentElement.parentElement.remove();

    refreshAmountEvent();
}

function clearList() {
    daftar_belanja.innerHTML = '';
    refreshAmountEvent();
}

function refreshAmountEvent() {
    const allAmountInput = document.querySelectorAll('.amount');
    const allDeleteBtn = document.querySelectorAll('.removeList');

    if (document.querySelectorAll('.item').length) {
        allAmountInput.forEach(amount => {
            amount.onchange = () => {
                const subtotal = amount.parentElement.parentElement.querySelector('.subtotal');
                const nama = amount.dataset.nama;
                subtotal.value = amount.value * selected_menu[nama];
                countTotal();
            };
        });
    
        allDeleteBtn.forEach(btn => {
            btn.onclick = () => {
                removeList(btn);
            }
        });
    
        allAmountInput[allAmountInput.length - 1].focus();
        countTotal();
    } else {
        selected_menu = {};
        form.reset();
        bayar.value = 0;
        kembali.value = 0;
        kode_transaksi.style.display = 'none';
    }
}

function countTotal() {
    subtotalDisplay.value = 0;
    document.querySelectorAll('.subtotal').forEach(subtotal => {
        subtotalDisplay.value = parseInt(subtotalDisplay.value) + parseInt(subtotal.value);
    });

    pajakDisplay.value = parseInt(subtotalDisplay.value) * (parseInt(pajakDisplay.dataset.pajak) / 100);

    totalDisplay.value = parseInt(subtotalDisplay.value) + parseInt(pajakDisplay.value);
}

function countReturnPrice(pay) {
    bayar.value = pay;
    let returnPrice = parseInt(bayar.value) - parseInt(totalDisplay.value);
    kembali.value = returnPrice;
}
    </script>
    
    
</div>

@endsection