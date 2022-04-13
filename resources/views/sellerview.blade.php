<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellerview</title><title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="brand" id="brand" class="form-control input-lg dynamic" data-dependent="model">
     <option value="">Select Brand</option>
     @foreach($seller_list as $country)
     <option value="{{ $country->country}}">{{ $country->country }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="model" id="model" class="form-control input-lg dynamic" data-dependent="colour">
     <option value="">Select Model</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="colour" id="colour" class="form-control input-lg">
     <option value="">Select Colour</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#brand').change(function(){
  $('#model').val('');
  $('#colour').val('');
 });

 $('#model').change(function(){
  $('#colour').val('');
 });
 

});
</script>





