<!-- Content -->

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Daftar Inventaris</h3>
    </div>

    <!-- flasher  -->
    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- akhir flasher -->

    <!-- kontennya page disini -->
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-4">
                    <p class="text-primary m-2 font-weight-bold">Daftar Inventaris</p>
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary tombolTambahDataInventaris" data-toggle="modal" data-target="#inventarisModal">
                        <i class="fa fa-plus-circle"></i> Tambah Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="inventarisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!-- modal header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="judulModalInventaris">Tambah Data Inventaris</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>


                                <!-- modal body -->
                                <div class="modal-body">
                                    <!-- form inputan -->
                                    <form action="<?= BASEURL; ?>/dinventaris/tambah" method="POST">
                                        <input type="hidden" name="id_inventaris" id="id_inventaris">
                                        <div class="form-group">
                                            <label for="id_ruangan">Ruang</label>
                                            <select class="form-control" id="id_ruangan" name="id_ruangan">
                                                <?php foreach ($data['ruang'] as $ruang) : ?>
                                                    <option value="<?= $ruang['id_ruangan']; ?>"><?= $ruang['nama_ruangan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_inventaris">Nama Inventaris</label>
                                            <input type="text" class="form-control" id="nama_inventaris" name="nama_inventaris">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_inventaris">Tanggal Inventaris</label>
                                            <input type="date" class="form-control" id="tgl_inventaris" name="tgl_inventaris">
                                        </div>
                                        <div class="form-group">
                                            <label for="ket_inventaris">Keterangan Inventaris</label>
                                            <input type="text" class="form-control" id="ket_inventaris" name="ket_inventaris">
                                        </div>
                                </div>

                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <button type="submit" name="tambah" value="proses" class="btn btn-primary">Tambah</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            </div>

            <div class="table-responsive mt-2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Inventaris</th>
                            <th>Tanggal Inventaris</th>
                            <th>Keterangan Inventaris</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['invent'] as $invent) : ?>
                            <tr>
                                <td><?= $invent['nama_inventaris']; ?></td>
                                <td><?= $invent['tgl_inventaris']; ?></td>
                                <td><?= $invent['ket_inventaris']; ?></td>
                                <td class="text-center">

                                    <a href="<?= BASEURL; ?>/dinventaris/ubah/<?= $invent['id_inventaris']; ?>" class="badge badge-pill badge-warning tampilModalUbahInventaris" data-toggle="modal" data-target="#inventarisModal" data-id_inventaris="<?= $invent['id_inventaris']; ?>"><i class="fa fa-pencil-square-o"></i> Ubah</a>
                                    <a href="<?= BASEURL; ?>/dinventaris/hapus/<?= $invent['id_inventaris']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Apakah Anda Yakin?');"><i class="fa fa-trash-o"></i> Hapus</a>
                                    <a href="#" class="badge badge-pill badge-success" data-toggle="modal" data-target="#modalPinjam"><i class="fa fa-check-square-o"></i> Pinjam</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalPinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal3Label">Peminjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <!-- form inputan -->
                        <form action="<?= BASEURL; ?>/dinventaris/pinjam" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id_user">Nama User</label>
                                    <select class="form-control" id="id_user" name="id_user">
                                        <?php foreach ($data['usr'] as $usr) : ?>
                                            <option value="<?= $usr['id_user']; ?>"> <?= $usr['nama_user']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_inventaris">Nama Inventaris</label>
                                    <select class="form-control" id="id_inventaris" name="id_inventaris">
                                        <?php foreach ($data['invent'] as $invent) : ?>
                                            <option value="<?= $invent['id_inventaris']; ?>"> <?= $invent['nama_inventaris']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_peminjam">Nama Peminjam</label>
                                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">
                                </div>
                                <div class="form-group">
                                    <label for="ket_peminjaman">Keterangan Peminjaman</label>
                                    <input type="text" class="form-control" id="ket_peminjaman" name="ket_peminjaman">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="tambah" value="proses" class="btn btn-primary">Pinjam</button>
                            </div>
                            <form>
                    </div>
                </div>
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
</div><a class="border rounded d-inline scroll-to-top" href="<?= BASEURL; ?>/dinventaris"><i class="fas fa-angle-up"></i></a>
</div>