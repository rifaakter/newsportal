<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->

    <link rel="stylesheet" href="./assets/style.css">
    <title>News Portal</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
           
            font-family: "Poppins", sans-serif;
            background-color: ;
        }

        .upload {
            height: 100vh;
            width: 80%;
            margin: auto;
            background-color: rgb(0, 150, 62);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .upload__from {
            height: 80vh;
            width: 60%;
            overflow: hidden;
        }

        .input_from label {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 600px;
        }

        .input_from textarea {

            background: transparent;
            background-color: rgba(240, 255, 246, 0.493);
            color: black;
            border: none;
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
            border-right: 0;
            box-sizing: border-box;
            padding: 10px 10px;
            font-size: 18px;
            border-radius: 5px 5px;
        }

        #post_btn {
            padding: 15px 30px;
            background-color: darkorange;
            color: white;
            text-align: center;

        }
    </style>
</head>

<body>

    <div class="upload">

        <div class="upload__from">
            <h3>Content Upload Pages</h3>
            <form action="" method="post" class="input_from">
                <label for="post_title" class="input_item">Post Title :</label>
                <textarea name="post_title" id="post_title" cols="200" rows="1"></textarea> <br><br>

                <label for="post_dic">Post Discaption :</label>
                <textarea name="dic" id="post_dic" cols="200" rows="10"></textarea> <br><br>

                <label for="post_image">Post Image :</label>
                <input type="file" name="post_image" id="image"> <br><br>

                <!-- <select>
                    <option type="">Private</option>
                    <option>shedule</option>
                    <option>Public</option>
                </select> -->

                <input type="submit" value="POST" id="post_btn">


            </form>
        </div>
    </div>
</body>

</html>