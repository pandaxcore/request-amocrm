<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMO CRM request form</title>
    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</head>
<body>
    <div class="center">
    <h2>CRM request</h2>
        <form method="post" action="send.php">
            <p><strong>Name</strong><br>
                <input type="text" id="name" name="name">
            </p>
            <p><strong>Phone</strong><br>
                <input type="text" id="phone" name="phone">
            </p>
            <p><strong>mail</strong><br>
                <input type="text" id="email" name="email">
            </p>
            <!-- Hidden UTM Fields START -->
            <input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
            <input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
            <input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
            <input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
            <input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">
            <input type="hidden" name="fullurl" value="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
            <!-- Hidden UTM Fields END -->
            <p>
                <input type="submit" value="Submit" name="submit">
            </p>

            
        </form>
    </div>

</body>
</html>