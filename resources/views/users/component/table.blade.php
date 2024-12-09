<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <div>
            <input type="search" name="search" id="search" class="form-control mb-3" style="width: 500px;" placeholder="Search here...">
        </div>
        <div>
            <select class="form-control " id="select" name="select" >
                <option value="All">Show All Data</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Jamalpur">Chittagong</option>
                <option value="Mymensingh">Rangpur</option>
                <option value="Mymensingh">Barisal</option>
            </select>
        </div>
        <div>
            @include('users.component.createModal')
            @include('users.component.updateModal')
        </div>
    </div>
    <table class="table table-striped table-hover text-center" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@push('scripts')
<script>
    function loadUserData(data = {}) {
        var content = '';
            $.ajax({
                type: 'GET',
                url: '/api/get-users-data',
                data:data,
                success: function (response) {
                    if (response.users.length>0) {
                        $.each(response.users, function (key, value) {
                            content +=
                                // <td>+(key+1)+</td>
                                // <a class="updateData" href='#' data-id="`+ value.id +`">Update</a>
                                // <a class="deleteData" href='#' data-id="`+ value.id +`">Delete</a>
                                `<tr>
                                <td>`+value.id+`</td>
                                <td>`+value.name+`</td>
                                <td>`+value.email+`</td>
                                <td>`+value.location+`</td>
                                <td>`+value.password+`</td>
                                <td><button class=" btn btn-success updateData" data-id="`+ value.id +`" data-bs-toggle="modal" data-bs-target="#userUpdate">Update</button></td>
                                <button type="button" class="btn btn-success" >Update New User</button>
                                <td><button class=" btn btn-danger deleteData" data-id="`+ value.id +`">Delete</button></td>
                                <tr>`
                            });
                            $('#users-table tbody').html(content);
                    } else {
                        $('#users-table tbody').html("<tr><td colspan='6'>No Data Found</td></tr>");
                    }
                },
                error: function (error) {
                    console.log(error);
                },
            });
    };
</script>
<script>
    $(document).ready(()=>{
        loadUserData();
        $('#users-table').on('click','.deleteData',function(){
            // event.preventDefault();
            var id = $(this).attr('data-id');
            // alert(id);
                $.ajax({
                    url:'/delete-users-data/'+id,
                    type:'GET',
                    success:(response)=>{
                        // response.preventDefault();
                        console.log(response.message);
                        // alert(response.message);
                        // window.open('/users');
                        loadUserData();
                    },
                    error:(error)=>{
                        console.log(error);
                        // alert(error);
                    },
                });
            });
        });
    </script>
<script>
    $(document).ready(()=>{
        $('#search').on('keyup',function(){
            search = $('#search').val();
            loadUserData({search});
            });
        });
</script>
{{-- <script>
    $(document).ready(()=>{
        $('#select').on('click')
        <option value="Dhaka">Dhaka</option>
        $('#select').on('click',function(){
            select = $('#select').val();
            loadUserData({select});
            });
        });
</script> --}}
@endpush
