<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="api.php" method="post">
      <div class="">
        <label for="nom"> name </label>
        <input type="text" name="nom" value="" required="required" >
      </div>
      <div class="">
        <label for="url">Enter the URL</label>
        <input type="url" name="url" value="" required="required">
      </div>
      <div class="">
        <label for="weight"> weight </label>
        <input type="text" name="weight" value="" required="required" maxlength="4" min="1">
      </div>
      <div class="">
        <input type="submit" name="valider" value="send">
      </div>
    </form>

  </body>
</html>
