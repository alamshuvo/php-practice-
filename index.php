<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $massege="Dark Matter";
    $read=true;
    $books=[
        "the unknwo fact ",
        "this is another book",
        "this is more another book"
    ];
    if ($read) {
      $massege=" you read $massege";
    }
    else{
     $massege="you dont read $massege";
    }

    function echoWorld($books,$authors){
        return `The $books is written by $authors`;
    }
  
    ?>
    <h1><?php echo "ohh " . "$massege" ?></h1>
    <h1>Recomanded books</h1>
<ul>
 <?php
 foreach($books as $book): ?>
 <li><?= echoWorld($book,"iftakhar alam") ?></li>
 <?php endforeach; ?>
</ul>
</body>
</html>