<!-- Content -->

<!-- Content -->
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Data Ruangan</h3>
    </div>

    <!-- Content row isi -->
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Data Ruangan</p>
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
                                    <h5 class="modal-title" id="exampleModal3Label">Tambah Data Ruang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <!-- form inputan -->
                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_ruangan">Nama Ruang</label>
                                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Nama Ruang">
                                        </div>
                                        <div class="form-group">
                                            <label for="ket_ruangan">Keterangan Ruang</label>
                                            <input type="text" class="form-control" id="ket_ruangan" name="ket_ruangan" placeholder="Keterangan Ruang">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" name="tambah" value="proses" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabel -->
            <div class="table-responsive mt-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Ruangan</th>
                            <th>Keterangan Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>R110</td>
                            <td>Lab Jarkom</td>
                            <td class="text-center">
                                <a href="#" class="badge badge-pill badge-warning"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                <a href="#" class="badge badge-pill badge-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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
</div><a class="border rounded d-inline scroll-to-top" href="<?= BASEURL; ?>/ruangan"><i class="fas fa-angle-up"></i></a>
</div>