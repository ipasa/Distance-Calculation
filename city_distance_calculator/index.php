<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h3>Distance Calculation</h3>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action="calculation.php">
            <div class="form-group">
              <select class="form-control" name="cityNameFrom">
                <option value="0">Dhaka</option>
                <option value="1">Barisal</option>
                <option value="2">Chittagong</option>
                <option value="3">Khulna</option>
                <option value="4">Mymensingh</option>
                <option value="5">Rajshahi</option>
                <option value="6">Rangpur</option>
                <option value="7">Sylhet</option>
              </select>
            </div>

            <div class="form-group">
              <select class="form-control" name="cityNameTo">
                <option value="0">Dhaka</option>
                <option value="1">Barisal</option>
                <option value="2">Chittagong</option>
                <option value="3">Khulna</option>
                <option value="4">Mymensingh</option>
                <option value="5">Rajshahi</option>
                <option value="6">Rangpur</option>
                <option value="7">Sylhet</option>
              </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>

  </body>
</html>