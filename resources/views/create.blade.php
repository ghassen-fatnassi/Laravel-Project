<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            background-color: #d0d0d0;
            font-family: sans-serif
        }

        h1 {
            color: white;
            font-family: sans-serif;
            text-align: center;
            padding-top: 20px;
        }

        .create-post {
            background-color: white;
            width: 500px;
            margin: 0 auto;
            border: 1px solid #e2e0e0;
            border-radius: 10px;

        }

        .container {
            padding: 16px;
        }

        input[type=text] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .submitbtn {
            background-color: #232f3e;
            color: white;
            padding: 16px 20px;
            margin: 23px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .submitbtn:hover {
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }

        form h1 {
            font-weight: 200;
        }

        form label {
            font-weight: 200;
            color: #333;
        }

        .container h1 {
            color: #333;
        }
    </style>
    <div class="create-post">
        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <h1>Create a Post</h1>
                <hr>

                <label for="title"><b>Title:</b></label>
                <input type="text" placeholder="Enter Title" name="title" id="title" required>

                <label for="description"><b>Description:</b></label>
                <input type="text" placeholder="Enter Description" name="description" id="description" required>

                <label for="category"><b>Category:</b></label>
                <select name="category" id="category" required>
                    <option value="" disabled selected>Select Category</option>
                    <option value="artificial-intelligence">Artificial Intelligence</option>
                    <option value="cyber-security">Cyber Security</option>
                    <option value="machine-learning">Machine Learning</option>
                    <option value="programming-web-mobile">Programming Web/Mobile</option>
                </select>
                <br><br>
                <label for="body" style="text-align: center;"><b>Body:</b></label>
                <textarea placeholder="Enter Body" name="body" id="body" style="width: 300px; height:100%; " required></textarea>
                <br>

                <label for="file-upload"><b>Choose a file:</b></label>
                <label class="file">
                    <input type="file" id="file-upload" name="image" aria-label="File browser example">
                    <span class="file-custom"></span>
                </label>



                <button type="submit" class="submitbtn">SUBMIT</button>
            </div>
        </form>
    </div>
</body>

</html>