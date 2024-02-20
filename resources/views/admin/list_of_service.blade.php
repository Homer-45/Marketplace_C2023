@extends('front_master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0" style="font-weight: 500; font-size: 30px;"><strong>File Manager</strong></h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable Example</h3>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Files</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample data rows -->
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>Description 1</td>
                                <td><a href="file1.pdf" download>File 1</a></td>
                                <td><button class="btn btn-danger btn-sm delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Maria Makiling</td>
                                <td>Description 2</td>
                                <td><a href="file2.pdf" download>File 2</a></td>
                                <td><button class="btn btn-danger btn-sm delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Roronoa Zoro</td>
                                <td>Description 3</td>
                                <td><a href="file3.pdf" download>File 3</a></td>
                                <td><button class="btn btn-danger btn-sm delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Monkey Luffy</td>
                                <td>Description 4</td>
                                <td><a href="file4.pdf" download>File 4</a></td>
                                <td><button class="btn btn-danger btn-sm delete">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Ako si Doggie</td>
                                <td>Description 5</td>
                                <td><a href="file5.pdf" download>File 5</a></td>
                                <td><button class="btn btn-danger btn-sm delete">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#example').DataTable({
            responsive: true
        });

        // Handle row delete button click
        $('#example tbody').on('click', '.delete', function() {
            var row = table.row($(this).parents('tr'));
            row.remove().draw();
        });
    });
</script>
@endsection