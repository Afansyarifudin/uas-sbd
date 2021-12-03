<!-- Content -->
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Data User</h3>
    </div>

    <!-- Content row isi -->
    <div class="card shadow mb-4 mr-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="judulModal">Tambah Data User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <!-- form inputan -->
                                <form action="" method="">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama">Nama User</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama User">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat User</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat User">
                                        </div>
                                        <div class="form-group">
                                            <label for="telp">No Telepon</label>
                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="No Telepon">
                                        </div>
                                        <div class="form-group">
                                            <label for="telp">Level User</label>
                                            <select class="custom-select">
                                                <option selected>Pilih Level</option>
                                                <option value="1">Mahasiswa</option>
                                                <option value="2">Dosen</option>
                                                <option value="3">Pegawai</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" name="tambah" value="proses" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabel -->
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nur Afan Syarifudin</td>
                            <td class="text-center">
                                <a href="#" class="badge badge-pill badge-primary"><i class="fa fa-info-circle"></i> Detail</a>
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
</div><a class="border rounded d-inline scroll-to-top" href="<?= BASEURL; ?>/user"><i class="fas fa-angle-up"></i></a>
</div>