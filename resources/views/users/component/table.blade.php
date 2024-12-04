<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <div>
            @include('users.component.createModal')
        </div>
        <div>
            @include('users.component.updateModal')
        </div>
    </div>
    <table class="table table-striped table-hover text-center" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody id="users-tbody">
            {{-- <tr>
                <td>asdasd</td>
                <td>Namasdasdase</td>
                <td>Emdasdasdaail</td>
                <td>Passdasdsadsword</td>
                <td>update</td>
                <td>delete</td>
            </tr> --}}
        </tbody>
    </table>
</div>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script src="{{ asset('custom_js/custom.js') }}"></script>
        <script src="{{ asset('ajax/jquery.js') }}"></script>
<script>

        loadUserData();

    </script>
