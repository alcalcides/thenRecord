<?php

/**
 * Shows topic file
 * 
 * @param string $top
 */
function displayTopics(string $topic)
{
    define('lineTab', '&nbsp;|&nbsp;&nbsp;');
    $path = null;
    switch ($topic) {
        case "Object Orientation":
            $path = "../../../dbSubjects/objectOrientation/topics-objectOrientation.txt";

            break;
        default:
            $path = null;
            break;
    }

    loadTopic(lineTab, $path);
}

/**
 * Loads text file
 *
 * @param string $topicContent
 */
function loadTopic(string $separatorSignal, string $path)
{
    $content = file($path);
    $numberOfLines = count($content);
    echo "<table><thead>
    <tr>
        <th></th>
        <th></th>
    </tr></thead>";

    for ($i = 0; $i < $numberOfLines; $i ++) {
        $line = buildLine($separatorSignal, "", $content, $i);
        echo "<tr><td class='topicLine'>" . $line . "</td></tr>";
    }
    echo "</table>";
}

/**
 * Makes a line of content with line number
 *
 * @param string $separatorSignal
 * @param string $commentSignal
 * @param array $topicContent
 * @param int $lineNumber
 * @return string
 */
function buildLine(string $separatorSignal, string $commentSignal, array $topicContent, int $lineNumber): string
{
    $numberSeparatorSignal = str_replace("|", "", $separatorSignal);
    $line = $lineNumber + 1 . $numberSeparatorSignal . "</td><td>";
    $line .= str_replace("\t", $separatorSignal, htmlspecialchars($topicContent[$lineNumber]));

    return $line;
}
