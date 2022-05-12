<?php
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JureWallah</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="title">
      <h1>JureWallah.com</h1>
    </div>
    <div class="bouton">
      <button
        type="input"
        onclick="toggle_text();"
        class="btn btn-outline-danger"
        
      >
        Wallah ?
      </button>
    </div>
    <div class="span-txt">
        <span id="texte"></span>
    </div>
    <div class="footer"></div>
  </body>
</html>

<script>
  function toggle_text() {
    var span = document.getElementById("texte");
    if (span.innerHTML != "") {
      span.innerHTML = "";
    } else {
      span.innerHTML = "✅OK! C'est bon ta jurer wallah";
    }
  }
</script>
