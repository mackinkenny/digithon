$(document).ready(function () {

    $.ajax({
        type: 'GET',
        url: '/posfind',
        data: {
            'group_id': $('#groupid').val()
        },
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i <= data.positions.length - 1; i++) {
                $('.possel').append(
                    '<option value="'+ data.positions[i].id + '">' + data.positions[i].name + '</option>'
                );
            }
        }
    })

})