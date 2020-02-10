$(function () {
    $('.btnDelete').on('click', function (e) {
        e.preventDefault();
        var $prodId = $(this).attr('data-product-id');
        var $etalaseId = $(this).attr('data-etalase-id');
        var $confirm = confirm('Anda yakin akan menghapus etalasi ini?');
        if ($confirm) {
            window.location.href = _baseURL + '/etalase/hapus/' + $etalaseId + '/' + $prodId;
        }
    });
});