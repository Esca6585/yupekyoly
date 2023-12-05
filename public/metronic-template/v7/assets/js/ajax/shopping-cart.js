$(document).on('click', '#add-to-cart', function () {
    var id = $(this).attr('data-tea-id');
    
    var data = 'id=' + id;

    $.ajax({
        url: '/api/add-shopping-cart',
        data: data,
        type: 'GET',
        success: function (data) {
            console.log(data);
        },
        error: function () {
            console.log('error');
        }
    });
});