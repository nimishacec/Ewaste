<x-app-layout>
<style>
.container {
  display: flex;
  align-items: center;
  justify-content: center;
}

img {
  max-width: 100%
}

.image {
  flex-basis: 40%
}

.text {
  font-size: 15px;
  padding-left: 10px;
}
</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('UserLogged-IN') }}
        </h2>
    </x-slot>
    
        <div>
        <h1>Welcome!!!!User</h1><br>
        <br>
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Home</a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.php" >Sell Phone </a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Donate </a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Recycle </a> 
    </div>
    <br><br>
    

      <div class="container">
      
    <div class="text">
        <p>Quick Mobile Is The Best Online Platform, Where You Can Sell Old Mobile Phones, Quick Mobile Is The Best Online Platform,<br> Where You Can Sell Old Mobile Phones, ctively Through Our Technicians So That You Can Enjoy Your Phone And Its Services <br>UninterruptedlyQuick Mobile Is The Best Online Platform, Where You Can Sell Old Mobile Phones, ctively Through Our<br> Technicians So That You Can Enjoy Your Phone And Its Services UninterruptedlyQuick Mobile Is The Best Online Platform, Where You Can <br>Sell Old Mobile Phones, ctively Through Our Technicians So That You Can Enjoy Your Phone And Its Services Uninterruptedlyctively Through Our Technicians So That You Can Enjoy Your Phone And Its Services Uninterruptedly.</p>
</div>

<div class="image">
<img src="/image/sell1.jpg" height="400px" width="450px"></div>
</div>
    
   <p> Select brand <br> <div class="custom-select" style="width:200px;">
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

<p> Select Model <br> <div class="custom-select" style="width:200px;">
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


</x-app-layout>

