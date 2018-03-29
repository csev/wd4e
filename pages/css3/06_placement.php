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
  <h1>Code Placement</h1>
  <p>When you write code, it is important to get into the good habits of organizing your code. While there are no specific rules about how and where to place your code, there are definitely conventions. (Conventions are suggestions that most programmers follow. This way other programmers can quickly and easily understand their code.)</p>
  <p>The most common organization is to have one main folder with your html files in it. There are also subfolders (folders inside the main folder) for your CSS files and image files. (In this example I also have JavaScript files.)</p>
  <br>
  <p><a href "/images/css3/code_placement1.png"></a></p>
  <br>
  <p>When we use CodePen we use that idea of separating our code. However, be aware that CodePen doesn't require many of the things you should have in your code. For instance, in the HTML files it ignores all of the information in the <head> section. So if you develop in CodePen, make sure to test your code later using the proper folder/file structure. You will need to include links to the style sheets and images.</p>
  <p>It can be very frustrating at first to master folder. However, understanding folder structures will help you, even if you never code again.</p>
  <p>I am going to end with a screen shot of my computer.</p>
  <br>
  <p><a href "/images/css3/code_placement2.png"></a></p>
  <br>
  <p>My css folder is in the SAME directory as my html files.</p>
  <p>My link will be: <link rel="stylesheet" href="css/style.css"></p>
  <p>It is important that you even use the proper case. Because on some computers it matters and this would not work: <link rel="stylesheet" href="CSS/style.css"></p>
</body>
