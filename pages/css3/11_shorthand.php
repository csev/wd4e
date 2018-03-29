<!DOCTYPE html>

<html>
<head>
<?php require_once ("../head.php"); ?>
<style>
li { padding: 5px; }
</style>
</head>
<body style="margin-left:5%; margin-bottom: 60px; margin-right: 5%; font-family: sans-serif;">
  <div class = "visible-print-block">
  <b style = "float:right">www.wd4e.com</b>
  </div>
  <h1>Shorthand Rules</h1>
  <p>As you have probably picked up by now, I love my Sublime editor. It does lots of great things for me, but sometimes it offers suggestions that I didn't really mean to use. One common example is that I often unintentionally switch between using background and background-color. Does this make a difference?</p>
  <br>
  <p>For the most part no. The background property can take a number of different values. Think about the border example we did in the Box Model lecture. This code</p>
  <br>
  <pre>
    border: 1px solid black;
  </pre>
  <br>
  <p>is shorthand for</p>
  <pre>
    border-width: 1px;
    border-color: black;
    border-style: solid;
  </pre>
  <br>
  <p>So when I switch back-and-forth between background and background-color I am doing the same sort of thing...using the shorthand. What other things can go in the background property? Here is an example:</p>
  <br>
  <pre>
    background: #00ff00 url("imgs/ocean.jpg") no-repeat fixed center;
  </pre>
  <br>
  <p>This rule sets:</p>
  <li>background-color</li>
  <li>background-image</li>
  <li>background-repeat</li>
  <li>background-position</li>
</body>
</html>
