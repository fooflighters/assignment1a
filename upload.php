<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photo uploader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Photo Uploader</h1>
    <p>Student ID: 101335460</p>
    <p>Name: Phu Dao</p>

    <form>
        <fieldset>
            <p>
                <label>Photo Title: </label>
                <input type="text" >
            </p>
            <p>
                <label>Select a photo: </label>
                <input type="file" >
            </p>
            <p>
                <label>Description: </label>
                <input type="text" >
            </p>
            <p>
                <label>Date: </label>
                <input type="text" >
            </p>
            <p>Keywords (separated by a semicolon, e.g. keyword1; keyword2; etc.):</p>
            <input type="text">
            <p></p>
            <input type="button" value="Upload" id="uploadBtn">
        </fieldset>
    </form>
</body>
</html>
 