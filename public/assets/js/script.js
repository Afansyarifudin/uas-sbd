$(function() {

    $('.tombolTambahDataUser').on('click', function() {

        $('#judulModalUser').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });
    
    
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