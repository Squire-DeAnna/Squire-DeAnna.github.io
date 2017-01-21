<?php session_start(); ?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
    <title>Contact Us</title>
    <link href="/salmon/css/style_guide.css" type="text/css" rel="stylesheet" />
    <link href="/salmon/css/normalize.css" rel="stylesheet" media='screen' />
        <meta	name="viewport"	content="width=device-width,	
iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
    <header>
        <img src="/salmon/images/river_rafting.jpg" 
                 alt="river rafting" title="this is the Salmon River Adventures logo" width='100%' height="auto" /><br>
            <nav>
                <a href="http://foneflava.com/salmon/">| Home |</a>
                <a href="/salmon/adventures.html">| Adventures |</a>
                <a href="/salmon/guides.html">| Guides |</a>
                <a href="/salmon/contact/contact.php">| Contact Us |</a>
            </nav>
    </header>
 <div class="column1of2">
            <h3>
                River Rafting
            </h3><br>
            Here at Salmon River Adventures, we like to make sure our customers are completely prepared for and satisfied with their adventures! Please look over some of this information about river rafting before you select your adventure!<br>
            <a href="https://en.wikipedia.org/wiki/Rafting">| Wikipedia Article on Rafting |</a>
            
        </div>
        <div class="column2of2">
 <h1>Contact Us</h1> 
 <?php
 if (!empty($errors)) {
 echo '<ul class="notify">';
 foreach ($errors as $error) {
 echo "<li>$error</li>";
 }
 echo '</ul>';
 unset($errors);
}
?>
<p>Please fill out this form to send us an email with your desired adventure and guide. You may also contact us with any questions you may have.</p>
<form method="post" action="." id="contactform">
<label for="name">Name:</label><br>
<input type="text" name="name" id="name" size="40" value="<?php echo $name; ?>" required><br>
<label for="email">Email Address:</label><br>
<input type="email" name="email" id="email" size="50" value="<?php echo $email; ?>" required><br>
<label for="subject">Subject:</label><br>
<input type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br>
<label for="message">Message:</label><br>
<textarea name="message" id="message" cols="50" rows="10" required>
    <?php echo$message; ?>
</textarea><br>
<label>&nbsp;</label>
<img id="captcha"
src="captcha_images.php?width=100&amp;height=40&amp;characters=5"
alt="captcha image"> (Type these characters into the text box below)<br>
<label for="cap_code">Security Code:</label><br>
<input id="cap_code" name="cap_code" type="text" size="6" required><br>
<label for='action'>&nbsp;</label>
<input type='submit' name="action" id='action' value="Send"><br>
</form>
</div>
<footer>
            <a href="http://foneflava.com/salmon/">| Home |</a>
            <a href="/contact.php">| Contact Us |</a>
            <a href="/salmon/siteplan.html">| Site Plan |</a>
            <a href="/salmon/resources.html">| Resources |</a><br>
            &copy; Salmon River Adventures - 
            <script language="Javascript">
document.write("Last Updated: " + document.lastModified +"");
</script>
</footer>
</body>
</html>