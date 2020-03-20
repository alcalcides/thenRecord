<?php

/**
 * Shows number line, sample of code and comments
 * 
 * @param string $subject
 * @param string $commentTab
 */
function displaySheet(string $subject, string $commentTab) {
    define('lineTab', '&nbsp;&nbsp;&nbsp;');
    
    $sheetFile = "../../../dbSubjects/{$subject}/sheet/sheet-{$subject}.txt";
    $commentsFile = "../../../dbSubjects/{$subject}/sheet/comments/pt-br-{$subject}.txt";
    
    loadSheetAndCommentWithLineNumber(lineTab, $sheetFile, $commentTab, $commentsFile);
}

/**
 * Loads sheet content and its comments line by line displaying the number line
 * 
 * @param string $separatorSignal
 * @param string $sheetFilePath
 * @param string $commentSignal
 * @param string $commentLines
 */
function loadSheetAndCommentWithLineNumber(string $separatorSignal, string $sheetFilePath, string $commentSignal, string $commentLines)
{
    $sheetContent = file($sheetFilePath);
    $commentContent = file($commentLines);

    $numberOfLines = count($commentContent);
    for ($i = 0; $i < $numberOfLines; $i ++) {
        $line = buildLine($separatorSignal, $commentSignal, $sheetContent, $commentContent, $i);
        echo "<p class='sheetLine'>" . $line . "</p>";
    }
}

/**
 * Makes a line of content with line number
 * 
 * @param string $separatorSignal
 * @param string $commentSignal
 * @param array $sheetContent
 * @param array $commentContent
 * @param int $lineNumber
 * @return string
 */
function buildLine(string $separatorSignal, string $commentSignal, array $sheetContent, array $commentContent, int $lineNumber) : string
{
    $line = $lineNumber + 1 . $separatorSignal;
    $line .= htmlspecialchars($sheetContent[$lineNumber]) . $separatorSignal;
    if (strlen($commentContent[$lineNumber]) > 1) {
        $line .= $commentSignal . htmlspecialchars($commentContent[$lineNumber]) . $separatorSignal;
    }
    return $line;
}

