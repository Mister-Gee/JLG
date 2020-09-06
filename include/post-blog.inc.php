<?php
if(isset($_POST["post-blog"])){

    require "../core/init.php";

    $title = $_POST["title"];
    $content = $_POST["content"];
    $image = $_FILES["blg-image"];
    $category = $_POST["category"];
    $name = $_POST["name"];

    $imageName = $image['name'];
    $imageTmpName = $image['tmp_name'];
    $imageSize = $image['size'];
    $imageError = $image['error'];
    $imageType = $image['type'];

    $imgExt = explode('.', $imageName);
    $imgActualExt = strtolower(end($imgExt));

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    if(empty($title)  || empty($content) || empty($image) ) {
        header("Location: ../profile.php?error=emptyfields");
        exit();  
    }
    elseif(!in_array($imgActualExt, $allowed)){
        header("Location: ../profile.php?error=invalidImg");
        exit();
    }
    elseif($imageError !== 0){
        header("Location: ../profile.php?error=uploadError");
        exit();
    }
    elseif ($imageSize > 500000) {
        header("Location: ../profile.php?error=imgTooBig");
        exit();
    }
    else{
        $imgNameNew = "JLG-".uniqid('',true).".".$imgActualExt;
        $imgDestination = "../img/blog/images/".$imgNameNew;
        move_uploaded_file($imageTmpName, $imgDestination);
        $sql = "INSERT INTO blog (title, image_dir, content, category, author) VALUES (?, ?, ?, ?, ?);";
        $query = $db->query($sql);
       
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../profile.php?error=sqlerror");
            exit();  
        }
        else{
            mysqli_stmt_bind_param($stmt, "sssis", $title, $imgDestination, $content, $category, $name);
            mysqli_stmt_execute($stmt);
            header("Location: ../profile.php?post=success");
            exit();
        } 
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}
else{
    header("Location: ../index.php");
    exit();
}

