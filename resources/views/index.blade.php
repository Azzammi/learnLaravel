<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Dikutip dari www.malasngoding.com</h3>
                        <h3 class="my-4">List Route : </h3>
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama Tutorial</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Link</td>
                                <td></td>
                            </tr>
                        </table>
 
                        <a href="/input" class="btn btn-primary">Kembali</a>
                        <?php
                        $routeCollection = $route->getRoutes();

                        foreach ($routeCollection as $value) {
                            echo $value->getPath();
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>