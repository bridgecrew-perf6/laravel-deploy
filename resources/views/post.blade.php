<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel API</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            width: 100%;
            height: 100vh;
            color: #fff;
            background-color: rgb(19, 19, 19);
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        .container h1 {
            font-size: 2.5em;
            font-weight: 500;
            font-style: bold;
            margin-bottom: 10px 20px;
            color: rgb(247, 22, 22);
        }

        .card {
            background: rgb(84, 82, 82);
            border-radius: 2px;
            box-shadow: 0 2px 2px rgba(252, 244, 244, 0.2);
            padding: 10px 20px;
            margin-top: 20px;
        }

        a {
            color: #fff;
            background-color: rgb(250, 53, 53);
            padding: 4px 50px;
            text-decoration: none;
        }

        a:hover {
            background-color: rgb(243, 237, 231);
            color: rgb(247, 22, 22);
        }

        .card-header {
            font-size: 1.2em;
            font-weight: 500;
            font-style: bold;
            color: rgb(247, 22, 22);
        }

        .api-list {
           padding: 2px;
           display: flex;
           justify-content: space-between;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            margin-top: 20px;
        }

        .search {
            display: flex;
            align-items: center;
        }

        .header input {
            width: 100%;
            padding: 10px;
            border: 1px solid rgb(247, 22, 22);
            border-radius: 2px;
            color: rgb(234, 208, 208);
            font-size: 1.2em;
            font-weight: 500;
            font-style: bold;
            outline: none;
            background-color: rgb(84, 82, 82);
        }

        .header button {
            background-color: rgb(247, 22, 22);
            color: #fff;
            padding: 10px 10px;
            text-decoration: none;
            border: 1px solid rgb(247, 22, 22);
            border-radius: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;
            padding: 2px;
        }

        th, td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #262424;
        }

        th {
            background-color: rgb(247, 22, 22);
            color: #fff;
            font-size: 1.2em;
            font-weight: 500;
            font-style: bold;
            text-align: center;
        }

        
    </style>
</head>
<body>
    <div class="body">
        <div class="container">
            <div class="card">
                <h1>Laravel API</h1>
            </div>
            <div class="card">
                <div class="header">
                    <a href="{{ route('posts.add') }}">Add New Post</a>
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button>Search</button>
                    </div>
                </div>
                <div class="crud-table">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('posts.show', $post->id) }}">Show</a>
                                        <a href="{{ route('posts.update', $post->id) }}">Edit</a>
                                        <form action="{{ route('posts.delete', $post->id) }}" method="DELETE">
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>