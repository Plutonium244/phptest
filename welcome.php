<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Тестируем PHP</title>

  <!-- Bootstrap CSS (jsDelivr CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <label> Вы в welcome</label>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Your link to get short version</label>
    <input class="form-control" id="exampleInputEmail1" placeholder="Enter your link">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  $(function () {
    $('[data-toggle="popover"]').popover({trigger:'hover'});
  });
</script>

</body>
</html>