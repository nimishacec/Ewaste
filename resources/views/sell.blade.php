@extends ('layouts.master')
@section ('title','Sell')
@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
<h1>Sell Page</h1>

<style>
            h1 {
                text-align:center;
                color:blue;
            }
            
            
            .container .box {
               display : flex;
              flex-direction : row;
               
            }
      
            
            .container .box .box-cell.box1 {
                background:green;
                color:white;
                text-align:left;
             }
            .container .box .box-cell.box2 {
                background:lightgreen;
                align:left;
            }
            .container .box .col-md-auto{
                background:pink;
                color:white;
                align:center;
            }
            .container .box .box-cell.box3 {
                background:lightblue;
                align:center;
            }
            .container .box .box-cell.box4 {
                
                align:right;
            }
        </style>

<div class="container">
            <div class="box">
                <div class="box-row">
                    <div class="box-cell box1">
                                 Selling Old Phones Is Not An Easy Task To Do When You Have To
                                 Find The Right Customer For Your Phone Who Offers You A Better 
                                 Price. Now You Can Do The Same In An Easy Manner Through Quick 
                                 Mobile And Can Save Your Time And Energy Too. We Help You Sell
                                 Your Phone At The Comfort Of Your Location With Easy Doorstep 
                                 Pickup Service.
                    </div>
                    <div class="box-cell box2">
                    <img src="/image/sell1.jpg" class="rounded mx-auto d-block" height="150" width="350" alt="..."></div>
                    </div>
                    </div> </div>



                    <div class="container">
                    <div class="box">
                    
                    Select brand  <br><div class="col-md-auto" >
    <select>
      <option value="0">Select Brand:</option>
      <option value="1">Samsung</option>
      <option value="2">Oppo</option>
      <option value="3">Vivo</option>
      <option value="4">RedMi</option>
      <option value="5">Motorola</option>
      <option value="6">Nokia</option>
      
    </select>  
          </div>
          
         
        
    
  Select Model<div class="col-md-auto">
    <select>
      <option value="0">Select Model:</option>
      <option value="1">A series</option>
      <option value="2">O series</option>
      <option value="3">M31 series</option>
      <option value="4">Ax Note</option>
      <option value="5">E3 Series</option>
      <option value="6">One Plus</option>
    
    </select>
  
   
</div>
 


        </div>
    </div>
</div>



<br>
<br>
<br>
<br>


                    </div><br>
<br>
                    <br><div class="container">
            <div class="box">
                    <div class="box-cell box4"> Get extra credit for in-hands
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck1">Battery</label>

  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2">Original Charger</label>

  <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck3">Display</label>
  </div>
<br>
I agree terms and conditions
<input type="checkbox" class="btn-check" id="btncheck1" >
<br>
  <button type="button" class="btn btn-primary">Submit</button>
       
        </div>
        <br>
        <br>
        
        <div class="box-row" margin-right="right">
             PaymentMethods:       <div class="box-cell box3">    <img src="/image/pay2.jpg" height="150" width="250"class=""  alt="..."></div>
        </div>
@endsection
