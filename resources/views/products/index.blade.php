<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style="background-color: whitesmoke;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgb(51, 137, 216)!important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family: 'Montserrat', 'sans-serif'; color: whitesmoke;">Time Tracking App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('product.login') }}"><input type="submit" class="btn btn-hidden" style="color: whitesmoke;" value="LOGOUT"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Accounts</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <h1>Accounts</h1>
                <div>
                    @if(@session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
                <div>
                    <div class="mb-3">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Create a New Account</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->email }}</td>
                                    <td>{{ $product->password }}</td>
                                    <td>{{ $product->role }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('product.delete', ['product' => $product]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
        </html>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>Time Tracking</h1>
        </div>
        <div class="d-flex justify-content-end" style="gap: .5rem;">
            <input type="submit" class="btn btn-primary" value="ADD">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Role
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Student</a></li>
                    <li><a class="dropdown-item" href="#">Facilitator</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                </ul>
            </div>
        </div>
        <table id="crudTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">User Name</th>
                    <th class="text-center">Time-In</th>
                    <th class="text-center">Time-Out</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="d-flex justify-content-center" style="gap: .5rem;">
                            <input type="submit" class="btn btn-secondary" value="EDIT">
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="crudOperations.js"></script>

</body>
</html>
