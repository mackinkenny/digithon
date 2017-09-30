$(document).ready(function () {

    $('#groups').change(function () {
        alert($( "#groups option:selected" ).val())
        $.ajax({
            type: 'GET',
            url: '/posfind',
            data: {

                'group_id': $( "#groups option:selected" ).val()
            },
            dataType: 'json',
            success: function (data) {
                alert('Connect available')
                $('.possel').empty()

                for (var i = 0; i < data.positions.length; i++) {

                    $('.possel').append(
                        '<option value="'+ data.positions[i].id + '">' + data.positions[i].name + '</option>'
                    );
                }
            },
            error: function () {
                alert('Connect failed')
            }
        })
    })

})