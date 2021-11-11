<html>
<head>
    <meta charset="utf-8">
    <title>Stockfinder: Sign in</title>
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
  <div class="wrapper">
    <form class="form" id="f1" method="POST">
      <div class="pageTitle title">Sign Up </div>
      <div class="secondaryTitle title">Please fill this form to sign up.</div>
      <input type ="text" name="name" class="name formEntry" value="<?= htmlspecialchars( array_key_exists( 'name', $_POST )?$_POST['name']:'' ); ?>">
      <input id="submit" type="submit" class="submit formEntry" value="Submit" style="background: orange"/>

      <div id="target" class="field padding-bottom--24"></div>

    </form>
  </div>
<!-- <script src="script/js.js"></script> -->
</body>
</html>
