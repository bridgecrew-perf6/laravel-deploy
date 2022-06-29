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
            background-color: rgb(215, 130, 39);
            color: rgb(247, 22, 22);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }
        form button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
            background-color: rgb(250, 53, 53);
            color: #fff;
        }

    </style>
</head>
<body>
    <div class="body">
        <div class="container">
            
            <div class="card">
                <a href="{{ route('posts.show') }}">Back to Posts</a>
            </div>
            <div class="card">
                <form action={{ route ('posts.store')}} method='POST'>
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>