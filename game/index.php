<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../login/main_login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Play | Multipli</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="trainer.js"></script>
        <script type="text/javascript" src="timer.js"></script>
    </head>
    <body>
        <div id="question" style="display: none">
            <div id="question_math"></div>
            <div id="progress"></div>
            <div id="timer"></div>
        </div>
        <div id="user" style="display: none">
            <input type="number" id="result" /> 
            <p>Hit space to skip a question.</p>
            <input type="submit" value="Quit Game" id="quit_to_options" />
        </div>
        <div id="score" style="display: none">
            <h1>Time Over</h1>
            In <span id="score_time">a certain time</span>, you have solved
            <span id="score_total">n</span> problems (skipped
            <span id="score_skipped">k</span>).
        </div>
        <div id="options">
            <h1>Multipli</h1>
            Train your mental arithmetic skills
            <div id="error_wrapper" style="display: none"><span id="options_error"></span></div>
            <br />Play for <input type="number" name="timer length" min="1" id="timer_length" value="3" /> minutes.
            <br />Create problems with numbers in the following range:
            <br />Min: <input type="number" id="min" value="1" />
            &nbsp; Max: <input type="number" id="max" value="10" />
            <br />
            <br /><label for="avoid_negative">Avoid negative results for subtraction?</label>
            <input type="checkbox" id="avoid_negative" checked="checked" />
            <span style="font-size: 0.9em">Only applicable if min and max aren't negative.</span>
            <div id="op_wrapper">Include: 
                <input type="checkbox" id="op_add" checked="checked" /> <label for="op_add">Addition</label>
                <input type="checkbox" id="op_sub" checked="checked" /> <label for="op_sub">Subtraction</label>
                <input type="checkbox" id="op_mul" checked="checked" /> <label for="op_mul">Multiplication</label>
                <input type="checkbox" id="op_div" checked="checked" /> <label for="op_div">Division</label>
            </div>
            <br /><input type="submit" id="start" value="Start" style="display: none" />
        </div>
        <noscript>
            <h2>JavaScript Required</h2>
            <p>JavaScript is required to run this trainer; please enable it in your browser.</p>
        </noscript>
    </body>
</html>