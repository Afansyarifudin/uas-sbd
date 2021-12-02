<!-- Content -->

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Data Barang</h3>
    </div>

    <!-- kontennya page disini -->
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Data Barang</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal3Label">Tambah Data Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="nama">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="merk">Merk Barang</label>
                                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi">Kondisi Barang</label>
                                        <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl">Tanggal Barang</label>
                                        <input type="date" class="form-control" id="tgl" name="tgl">
                                    </div>
                                    <div class="form-group">
                                        <label for="Jumlah">Jumlah Barang</label>
                                        <input type="number" min="0" class="form-control" id="Jumlah" name="Jumlah" placeholder="Jumlah Barang">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button  type="submit" name="tambah" value="proses" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Barang</th>
                            <th>Merk Barang</th>
                            <th>Kondisi Barang</th>
                            <th>Tanggal Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Aksi</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laptop</td>
                            <td>Asus</td>
                            <td>Layak Pakai</td>
                            <td>2008/11/28</td>
                            <td>2</td>
                            <td class="text-center">
                            <button type="button" class="btn btn-warning my-2"><i class="fa fa-pencil-square-o"></i> Edit</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- div ini jangan di hapus ya karena ada sambungannya sama yg atas -->
</div> 
            
        <!-- footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © kelompok 6</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="<?= BASEURL; ?>/barang"><i class="fas fa-angle-up"></i></a>
    </div>