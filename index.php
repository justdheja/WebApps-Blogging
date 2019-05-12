<?php
    include "content_data.php";
    // echo "<pre>";
    // var_dump($content);
    // echo "<pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>
    <link href="https://fonts.googleapis.com/css?family=Cute+Font|Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <h1>This is my first blog</h1>
    <a href="blog_form.php"><h2>Input Form</h2></a>
    <table>
        <thead>
            <tr>
                <th>
                    no.
                </th>
                <th>
                    Title
                </th>
                <th>
                    Date Time
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($contentList)){
                for ($i=0; $i<count($contentList); $i++){
                
            ?>
            <tr>
                <td>
                    <?php echo $i+1 ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['title'] ?>
                </td>
                <td>
                    <?php echo $contentList[$i]['date_time'] ?>
                </td>
                <td>
                    <a href="blog_form.php?id=<?php echo $contentList[$i]['id']?>">Edit</a> <a href="#">Remove</a>
                </td>
            </tr>
            <?php 
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>