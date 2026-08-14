<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

require_once "sanity.php";
require "top.php";
require "nav.php";
?>
<div id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="" frameborder="0" allowfullscreen></iframe>
</div>
<h1>Web Design for Everybody</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
  <p>Welcome to our Massive Open Online Course (MOOC). Now that you have logged in, you have access to
  course-style features of this web site.</p>
  <ul>
    <li>As you go through the <a href="lessons">Lessons</a> in the course you now will see additional links to the autograders in the class.
      You can attempt the autograders and get a score.</li>
    <li>You can track your progress through the course using the <a href="assignments">Assignments</a> tool<?php if ( ! empty($CFG->badge_encrypt_password) ) { ?>
      and when you complete a group of assignments, you can earn a <a href="badges">Badge</a>.
      You can download these badges and host them on your web site or refer the badge URLs on this site<?php } ?>.</li>
    <li>You can use these Creative Commons Licensed materials such as the <a href="lectures" target="_blank">lectures</a> in your own classes.
      You can also <a href="tsugi/cc/export.php">export the course material</a> as an IMS Common Cartridge®, or apply for an IMS Learning Tools Interoperability® (LTI®) <a href="tsugi/admin/key/index.php">key and secret</a> to launch the autograders from your LMS.</li>
  </ul>
<?php } else { ?>
  <p>Hello and welcome to my site where you can work through modules and learn to
    write syntactically correct HTML5 and CSS3, and how to create interactive web
    experiences with JavaScript. Mastering this range of technologies will allow you
    to develop high quality web sites that, work seamlessly on mobile, tablet,
    and large screen browsers accessible.</p>
<br>
  <p>You can use this web site many different ways:</p>
    <ul>
      <li>You can browse my videos and course materials under <a href="lessons">Lessons</a>.</li>
      <li>The materials I have developed for this class are all provided with a
      Creative Commons license so you can download or link to them to incorporate
      them into your own teaching if you like.</li>
      <li>We take your privacy seriously on this site, you can review our
      <a href="privacy">Privacy Policy</a> for more details.</li>
    </ul>
<?php } ?>
<p>This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a>
framework to embed a learning management system into this site and handle the autograders.
If you are interested in collaborating to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.</p>
<h3>Textbook</h3>
  <p>I am using an open textbook<a href="https://learn.shayhowe.com/html-css/"
  target="_new">Learn to Code HTML & CSS</a> by Shay Howe. All of the electronic copies
  of the book are free. Print copies of the book are available on
  <a href="https://www.informit.com/store/learn-to-code-html-and-css-develop-and-style-websites-9780321940520?ranMID=24808"
  target="_blank">Pearson</a>.</p>
<h3>Copyright</h3>
  <p>All this material produced by Colleen Van Lent (including audio and video)
  is Copyright Creative Commons Attribution 3.0
  unless otherwise indicated.</p>

<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php
require "foot.php";
