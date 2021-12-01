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

        <!-- tabel -->
        <div class="card-body">
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
                                <button type="button" class="btn btn-primary ">Detail</button>
                                <button type="button" class="btn btn-success ">Edit</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
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