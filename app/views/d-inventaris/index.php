<!-- Content -->

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Daftar Inventaris</h3>
    </div>

    <!-- kontennya page disini -->
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
                            <tr>
                                <td>Ruang A</td>
                                <td>12-12-2021</td>
                                <td>Layak Pakai</td>
                                <td class="text-center">
                                    <a href="#" class="badge badge-pill badge-warning"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                    <a href="#" class="badge badge-pill badge-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                                    <a href="#" class="badge badge-pill badge-primary"><i class="fa fa-info-circle"></i> Detail</a>
                                    <a href="#" class="badge badge-pill badge-success"><i class="fa fa-check-square-o"></i> Hapus</a>
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
        </div><a class="border rounded d-inline scroll-to-top" href="<?= BASEURL; ?>/dinventaris"><i class="fas fa-angle-up"></i></a>
    </div>