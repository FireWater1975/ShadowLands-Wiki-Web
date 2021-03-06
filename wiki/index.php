<?php include ($_SERVER['DOCUMENT_ROOT']."/app/controller/api/server_status.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="MineCraft herní český server." />

  <!-- Site Properties -->
  <title>ShadowLands Wikki | Survival CZ/SK</title>
  <link rel="stylesheet" type="text/css" href="/css/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/components/site.css">

  <link rel="stylesheet" type="text/css" href="/css/components/container.css">
  <link rel="stylesheet" type="text/css" href="/css/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/css/components/header.css">
  <link rel="stylesheet" type="text/css" href="/css/components/image.css">
  <link rel="stylesheet" type="text/css" href="/css/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/css/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">
  <link rel="stylesheet" type="text/css" href="/css/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/css/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="/css/components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    /*position: fixed; */
    margin: 5em 0em 0em;
    padding: 5em 0em;
    bottom: 0;
    width: 100%;
  }
  </style>
</head>
<body>
<!-- Page Contents -->
  <?php include($_SERVER['DOCUMENT_ROOT']."/app/includes/following_menu/main_wiki_menu.php"); ?>


  <div class="ui main center aligned text container">
    <h1 class="ui header">Wiki Stránka</h1>
    <img class="ui middle aligned tiny image" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Wikipedia-logo-en-big.png" style="border-radius:50%;height:250px;width:250px;">
    <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <h2>Vítej na Wikki Stránce serveru ShadowLands CZ/SK.
      Najdeš zde všechno co budeš potřebovat k normálnímu hraní na našem serveru !</h2>
    </div>
  </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/includes/footer.php"); ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../css/components/visibility.js"></script>
<script src="../css/components/sidebar.js"></script>
<script src="../css/components/transition.js"></script>

</html>
