@extends('template.main')
@section('container')

<div class="container-fluid py-4">
            
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Shipment</h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-end">
                                <button class="btn bg-gradient-primary d-lg-block tombolTambahData" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-3">
                    <table class="table table-responsive dataTables_wrapper dt-bootstrap5" id="table_wrapper">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th>Satuan</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close btn-md btn bg-gradient-dark mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
            <div class="card" style="height: 100%; overflow-y: auto;">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-group col mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </span>
                                <input type="text" class="form-control ps-2" name="kasir" value="{{ $invoiceNumber }}" required="" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group col mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-id-card-alt ps-2" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control ps-2" name="kasir" value="{{ auth()->user()->nama }}" required="" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group col mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-user ps-2" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control ps-2" name="supplier" value="" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group col mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                <input type="date" class="form-control ps-2" name="tanggal" value="" required="" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>                            

                        </div>
                        <div class="d-flex justify-content-between border-top pt-3 mt-4">
                            <label class="col-form-label">Daftar Belanja</label>
                            <button type="button" class="btn btn-danger rounded-pill" onclick="removeAll(this)" id="clear">Clear All Items</button>
                            <button type="button" class="btn btn-success rounded-pill" onclick="addDetail()">Tambah</button>
                        </div>
                        <div class="overflow-x-auto">
                            <div style="width: 99%; min-width: 400px;">
                                <div class="row mb-1 g-2">
                                    <div class="col-6 py-1 text-sm">
                                        Item
                                    </div>
                                    <div class="col-2 py-1 text-sm text-nowrap">
                                        Amount
                                    </div>
                                    <div class="col-4 py-1 text-sm text-nowrap">
                                        Subtotal
                                    </div>
                                </div>
                                <div id="details-container" class="border-bottom pb-3 mb-2">
                                    
                                    <div class="detail row">
                                        <div class="col-2">
                                                <input class="form-control mt-2 item ps-3" type="text" name="details[0][no]" readonly value="1">
                                           
                                        </div>
                            
                                        <div class="col-3">
                                            <input class="form-control mt-2" type="text" name="details[0][nama_bahan]" required>
                                        </div>
                            
                                        <div class="col-2">
                                            <input class="form-control mt-2" type="number" name="details[0][kuantitas]" required>
                                        </div>
                            
                                        <div class="col-3">
                                            <input class="form-control mt-2" type="text" name="details[0][satuan]" required>
                                        </div>
                                        <div class="col">
                                            <button onclick="removeDetail(this)" class="btn btn-danger m-0 mt-2 removeList" type="button">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group border-bottom pb-2">
                            <label for="note" class="col-lg-12 col-form-label">Note</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control" id="note" name="note" placeholder="Keterangan tambahan..."></textarea>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="subtotal" class="col-lg-12 col-form-label">Subtotal</label>
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
                                    <label for="pajak" class="col-lg-12 col-form-label">
                                        Pajak <span class="badge badge-warning">(
                                            2%)
                                        </span>
                                    </label>
                                    <div class="input-group mb-3">
                                        <span class="input input-group-text" id="button-addon1">Rp. </span>
                                        <input type="number" class="form-control ps-2" id="pajak" name="pajak" value="0" data-pajak="2" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="total" class="col-lg-12 col-form-label">Total</label>
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
                                    <label for="pembayaran" class="col-lg-12 col-form-label">Pembayaran</label>
                                    <select name="metode_pembayaran" id="pembayaran" class="form-control">
                                        <option value="cash">Cash</option>
                                        <option value="debit">Debit</option>
                                        <option value="kredit">Kredit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 kode-transaksi" style="display: none;">
                                <label for="kode_transaksi" class="col-lg-12 col-form-label">Kode Transaksi</label>
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
                                <label for="bayar" class="col-lg-12 col-form-label">Bayar</label>
                                <div class="input-group mb-3">
                                    <span class="input input-group-text" id="button-addon1">Rp. </span>
                                    <input type="number" class="form-control ps-2" id="bayar" name="bayar" value="0" min="0" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="kembali" class="col-lg-12 col-form-label">Kembalian</label>
                                <div class="input-group mb-3">
                                    <span class="input input-group-text" id="button-addon1">Rp. </span>
                                    <input type="number" class="form-control ps-2" id="kembali" name="kembali" value="0" min="0" readonly="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
    
                        <div class="row p-2" style="flex-wrap: wrap;">
                            <div class="col-12 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-success rounded-pill" style="white-space: nowrap" data-value="pas">Uang Pas</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="10000">Rp. 10.000</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="20000">Rp. 20.000</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="50000">Rp. 50.000</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="100000">Rp. 100.000</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
                                <button type="button" class="instant-pay w-100 px-0 text-center btn btn-outline-secondary rounded-pill" style="white-space: nowrap" data-value="200000">Rp. 200.000</button>
                            </div>
                            <div class="col-6 col-sm-3 px-1">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
 
  {{-- <script>
    function addDetail() {
        var container = document.getElementById('details-container');
        var detailDiv = document.createElement('div');
        detailDiv.classList.add('row');
        detailDiv.innerHTML = `
        <div class="col-lg-3 mt-3">
                <input type="text" class="form-control" name="details[][detail_field1]" placeholder="Bahan" required>
            </div>
            <div class="col-lg-3 mt-3">
                <input type="text" class="form-control" name="details[][detail_field2]" placeholder="Qty" required>
            </div>
            <div class="col-lg-3 mt-3">
                <input type="text" class="form-control" name="details[][detail_field2]" placeholder="Satuan" required>
            </div>
            <div class="col-lg-3 mt-3">
                <input type="text" class="form-control" name="details[][detail_field2]" placeholder="Harga/Satuan" required>
            </div>
        `;
        container.appendChild(detailDiv);
    }
</script> --}}
<script>
        function addDetail() {
        var container = document.getElementById('details-container');
        var newDetail = document.createElement('div');
        newDetail.classList.add('detail', 'row');
        newDetail.innerHTML = `
            <div class="col-2">
                <input type="text" class="form-control mt-2 item ps-3" name="details[${container.children.length}][no]" readonly value="${container.children.length + 1}">
            </div>
        
            <div class="col-3">
                <input type="text" class="form-control mt-2 ps-3" name="details[${container.children.length}][nama_bahan]" required>
            </div>
        
            <div class="col-2">
                <input type="number" class="form-control mt-2 ps-3" name="details[${container.children.length}][kuantitas]" required>
            </div>
        
            <div class="col-3">
                <input type="text" class="form-control mt-2 ps-3" name="details[${container.children.length}][satuan]" required>
            </div>
            <div class="col">
                                            <button onclick="removeDetail(this)" class="btn btn-danger m-0 mt-2 removeList" type="button">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
        `;
        container.appendChild(newDetail);
    }

    function removeDetail(button) {
        var container = document.getElementById('details-container');
        var detail = button.parentNode.parentNode;
        container.removeChild(detail);

        // Update nomor urut setelah menghapus detail
        updateNo();
    }
    function removeAll(button) {
        var container = document.getElementById('details-container');
        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }
    }


    function updateNo() {
        var container = document.getElementById('details-container');
        var details = container.getElementsByClassName('detail');
        for (var i = 0; i < details.length; i++) {
            details[i].getElementsByTagName('input')[0].value = i + 1;
        }
    }
</script>
   

@endsection