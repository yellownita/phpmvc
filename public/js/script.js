$(function() {

    $('.tampilTambahData').on('click', function(){
        $('#formModalLabel').html('tambah data user');
        $('modal-footer button[type=submit').html('tambah data');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('ubah data user');
        $('modal-footer button[type=submit').html('ubah data');
    });

});