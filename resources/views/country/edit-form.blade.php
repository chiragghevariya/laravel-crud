<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-bottom: 40px;">
  <h2>Country Form</h2>

  <form action="{{route('country.update-form-route')}}" method="POST" style="margin-top: 40px;">
    
    @csrf

     <input type="hidden"  value="{{$editdata->id}}" name="edit_record_id"  >

    <div class="form-group">
      <label> Country  Name:</label>
      <input type="text" class="form-control" value="{{$editdata->country_name}}" id="name" placeholder="Entercountry  name" name="name_of_country">
    </div>

    
    
    <button type="submit" class="btn btn-default">Submit</button>

    <a href="{{ route('country.listing') }}" class="btn btn-danger">Cancle</a>

  </form>
</div>

</body>
</html>
