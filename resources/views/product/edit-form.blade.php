 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.container {
    width: 483px;
    margin-left: 373px;
    margin-top: 30px;
}

h1 {
    text-align: center;
}
</style>
</head>
<body>

<h1>product Form</h1>

<div class="container">
  <form action="{{route('product.save-edit-form')}}" method="POST">
    
    @csrf

    <input type="hidden" value="{{$geteditdata->id}}" name="editform">

    <label>Product Name</label>
    <input type="text" value="{{$geteditdata->product_name}}" name="pname" placeholder="Your product name">

    <label>Product Type</label>
    <input type="text" value="{{$geteditdata->product_type}}" name="ptype" placeholder="Your product type">
    
    <label>Product country</label>
     <select name="pcountry">
        <option>select country</option>

        @if(isset($getallcountry) && !$getallcountry->isEmpty())
          
          @foreach($getallcountry as $key=>$v)
           
           <option value="{{$v->id}}" @if($geteditdata->product_country == $v->id) selected @endif >{{$v->country_name}}</option>

          @endforeach

        @endif
     </select>

    <div>
       <label>Which Gender use</label>
       <input type="radio" value="1" @if($geteditdata->gender == 1) checked @endif name="gender">Male
       <input type="radio" value="2"  @if($geteditdata->gender == 2) checked @endif name="gender">Female 
    </div>
 
    <label>status</label>
      <select name="status">
        <option>select status</option>
        <option value="1" @if($geteditdata->status == 1) selected @endif>active</option>
        <option value="2" @if($geteditdata->status == 2 ) selected @endif>inactive</option>
      </select>
     
    <div>
      <input type="checkbox" value="1"  @if($geteditdata->confirm == 1) checked @endif name="confirm" class="my_checkbox_event" required="please agree with this condition">confirm
    </div>
   

    <div>
       <button type="submit" class="btn btn-primary">Submit</button>

       <a href="{{route('product.listing')}}" class="btn btn-danger">Cancle</a>
    </div>
    

  </form>
</div>

</body>
</html>


