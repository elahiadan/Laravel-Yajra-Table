<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yajra Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-bordered" id="users-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</body>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            export: true,
            ajax: "{!! route('datatables.data') !!}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'url',
                    name: 'url'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
<script>
    function hello(a) {
        alert(a);
    }
</script>

</html>