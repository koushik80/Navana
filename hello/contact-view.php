<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Navana Contact form</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap"/>
</head>
<body>
<div>
    <a class="navbar-brand" href="/index.php"><img src="/images/logo.png" alt="logo"></a>
    </div>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label><span
                    id="userName-info" class="info"></span><br/><input
                    type="text" class="input-field" name="userName"
                    id="userName"/>
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br/><input type="text"
                    class="input-field" name="userEmail" id="userEmail"/>
            </div>
            <div class="input-row">
                <label>Organization</label> <span id="organization-info"
                    class="info"></span><br/><input type="text"
                    class="input-field" name="organization" id="organization"/>
            </div>

            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br/><input type="text"
                    class="input-field" name="subject" id="subject"/>
            </div>
            <div class="input-row">
                <label>Message</label><span id="userMessage-info"
                    class="info"></span><br/>
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="8"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send"/>

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var organization = $("#organization").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
        
            if (organization == "") {
                $("#organization-info").html("Required.");
                $("#organization").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>