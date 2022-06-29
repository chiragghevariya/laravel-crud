<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Edit Banner Form</h2>

  <form action="{{route('banner.update-form-route')}}" method="POST">
    
    @csrf

     <input type="hidden"  value="{{$editdata->id}}" name="edit_record_id"  >

    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" value="{{$editdata->name}}" id="name" placeholder="Enter name" name="name_of_form">
    </div>

    <div class="form-group">
      <label >Link:</label>
      <input type="text" class="form-control" value="{{$editdata->link}}"id="link" placeholder="Enter link" name="name_of_link">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

    <a href="{{route('banner.index')}}" class="btn btn-danger">Cancle</a>

  </form>
</div>

</body>
</html>
