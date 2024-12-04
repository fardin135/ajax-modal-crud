function loadUserData() {
    var data = '';
    $.ajax({
        type: 'GET',
        url: '/api/get-users-data',
        success: function (response) {
            if (response.users.length>0) {
                $.each(response.users, function (key, value) {
                    data+=
                        `<tr>
                        <td>`+(key+1)+`</td>
                        <td>`+value.name+`</td>
                        <td>`+value.email+`</td>
                        <td>`+value.password+`</td>
                        <td><a href=''>Update</a></td>
                        <td><a href=''>Delete</a></td>
                        <tr>`
                        $('#users-table tbody').html(data);
                });
            } else {
                $('#users-table tbody').html("<tr><td colspan='6'>No Data Found</td></tr>");
            }
        },
        error: function (error) {
            console.log(error);
        },
    });
};