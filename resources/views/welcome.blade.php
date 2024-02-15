<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name.."></input>
                    </div>
                    <br>

                    <br>
                    <div>
                        <label>image</label>
                        <input type="file" name="image_url" class="form-control"></input>
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"
                            placeholder="Enter your password.."></input>
                    </div>

                    <div>
                        <label>password</label>
                        <input type="password" name="password" class="form-control"
                            placeholder="Enter your name.."></input>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Create</button>
                </form>
                <a href="{{route('message')}}" class="btn btn-success">Create Message</a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="w-100">
                    <thead>
                        <tr class="border">
                            <th class="border p-2">id</th>
                            <th class="border p-2">Name</th>
                            <th class="border p-2">email</th>
                            <th class="border p-2">password</th>
                            <th class="border p-2">Image</th>
                            <th class="border p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if(!empty($users))
                        @foreach($users as $user)
                        <tr>
                            <td class="border p-2">{{$user->id}}</td>
                            <td class="border p-2">{{$user->name}}</td>
                            <td class="border p-2">{{$user->email}}</td>
                            <td class="border p-2"> {{$user->password}}</td>
                            <td class="border p-2">
                                <img src="{{Storage::url($user->image_url)}}" width='50px' heigt="50px" alt="">
                            </td>
                            <td class="border p-2">
                                <i class="fa-solid fa-eye text-success cursor-pointer"></i>

                            </td>

                        </tr>
                        @endforeach

                        @else
                        <h1>Nothing</h1>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>