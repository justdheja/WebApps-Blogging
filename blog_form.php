<?php 
    include "data.php";
    $editContent = [];
    for ($i=0; $i < count($contentList); $i++){
        if (isset($_GET['id'])){
        if($contentList[$i]['id'] == $_GET['id']){
            $editContent = $contentList[$i];
        }   
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
    
</head>
<body>
    <h1>Input Blog Form</h1>
    <a href="index.php"><h2>List</h2></a>
    <br/>
    <form action="save_blog.php?id=<?php echo $editContent['id'] ?>" enctype="multipart/form-data" method="post">
        <table>
            <tbody>
                <tr>
                    <th>
                        title
                    </th>
                    <td>
                        <input type="text" name="title" value="<?php
                        if(isset($editContent['title'])){ 
                        echo $editContent['title'];}?>"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        description
                    </th>
                    <td>
                        <textarea name="description" id="" cols="50" rows="10"><?php 
                        if(isset($editContent['description'])){
                        echo $editContent['description'];
                        }
                        ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                        content
                    </th>
                    <td>
                        <textarea name="content" id="" cols="50" rows="20"><?php 
                        if(isset($editContent['content'])){
                        echo $editContent['content'];}?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="reset" name="reset" value="reset"/>
                        <input type="submit" name="submit" value="submit"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>