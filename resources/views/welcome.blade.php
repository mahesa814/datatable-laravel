<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


</head>

<body class="bg-secondary">

    <div class="container wide-xl mx-auto m-5 card card-inner">
        <h2>DataTable</h2>
        <table class="table card-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email Verified</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as  $index => $user)

                <tr>
                    <th scope="row">{{ ++$index }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <input type="hidden" id="table-url" value="{{ route("table") }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
        <script src="{{ asset('main.js') }}"></script>
</body>

</html>
