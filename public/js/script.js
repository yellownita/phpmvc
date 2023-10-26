$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data ');
        
        $('.modal-footer button[type=submit').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
            URL: 'http//localhost/phpmvc/public/muser/getubah'
        })
    });

});
// console.log('ok');