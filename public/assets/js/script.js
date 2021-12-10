// DATA USER

$(function() {

    // tombol tambah data user 
    $('.tombolTambahDataUser').on('click', function() {

        $('#judulModalUser').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });
      
    // tombol ubah data user 
    $('.tampilModalUbahUser').on('click', function() {

        $('#judulModalUser').html('Ubah Data User');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/uas-sbd/public/user/ubah');

        const id_user = $(this).data('id_user');
        

        $.ajax({
            url: 'http://localhost/uas-sbd/public/user/getubahuser',
            data: {id_user : id_user},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama_user').val(data.nama_user);
                $('#alamat_user').val(data.alamat_user);
                $('#telp_user').val(data.telp_user);
                $('#level_user').val(data.level_user);
                $('#id_user').val(data.id_user);

            }

        });

    });


});

// DATA GEDUNG 

$(function() {

    // tombol tambah data gedung 
    $('.tombolTambahDataGedung').on('click', function() {

        $('#judulModalGedung').html('Tambah Data Gedung');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    // tombol ubah data gedung 
    $('.tampilModalUbahGedung').on('click', function() {

        $('#judulModalGedung').html('Ubah Data Gedung');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/uas-sbd/public/gedung/ubah');

        const id_gedung = $(this).data('id_gedung');

        $.ajax({
            url: 'http://localhost/uas-sbd/public/gedung/getubahgedung',
            data: {id_gedung : id_gedung},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama_gedung').val(data.nama_gedung);
                $('#ket_gedung').val(data.ket_gedung);
                $('#id_gedung').val(data.id_gedung);

            }

        });

    });

});

// DATA RUANGAN 
$(function() {

    // tombol tambah data ruangan
    $('.tombolTambahDataRuangan').on('click', function() {

        $('#judulModalRuangan').html('Tambah Data Ruangan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    // tombol ubah data ruangan 
    $('.tampilModalUbahRuangan').on('click', function() {

        $('#judulModalRuangan').html('Ubah Data Ruangan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/uas-sbd/public/ruangan/ubah');

        const id_ruangan = $(this).data('id_ruangan');

        $.ajax({
            url: 'http://localhost/uas-sbd/public/ruangan/getubahruangan',
            data: {id_ruangan : id_ruangan},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id_gedung').val(data.id_gedung);
                $('#nama_ruangan').val(data.nama_ruangan);
                $('#ket_ruangan').val(data.ket_ruangan);
                $('#id_ruangan').val(data.id_ruangan);
            }

        });
    });

});


// DATA BARANG 
$(function() {

    // tombol tambah data barang 


    // tombol ubah data barang 


});



// DAFTAR INVENTARIS 
$(function() {

    // tombol tambah daftar inventaris 


    // tombol ubah daftar inventaris 

});
