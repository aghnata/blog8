<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>
    <p> Test ini halaman order</p>
    <p>
        <ul>
            @foreach ($orders as $item)
                <li> {{ $item->name }} </li>
                <form action="{{ url('order/'.$item->id)}}" method="POST">
                    @csrf
                    {{ method_field('delete') }}
                    <button>Delete</button>
                </form>
            @endforeach
        </ul>
    </p>
    <p>
        <form action="{{ url('order') }}" method="POST">
            @csrf
            <input type="text" name="name" id="">
            <button type="submit">submit</button>
        </form>
    </p>
</body>
</html>