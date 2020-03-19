<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Git | Then Record</title>
</head>
<body>
    
    <?php 
        require '../../control/loadSheet.php';
        
        $sheetFile = "../../../dbSubjects/git/sheet/sheet-git.txt";
        $commentsFile = "../../../dbSubjects/git/sheet/comments/pt-br-git.txt";
        
        loadSheetAndCommentWithLineNumber("&nbsp;&nbsp;&nbsp;", $sheetFile, "//", $commentsFile);
            
    ?>
</body>
</html>