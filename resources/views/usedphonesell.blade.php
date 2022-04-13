<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('UserLogged-IN') }}
        </h2>
    </x-slot>
    
        <div>
        <h1>Welcome!!!!User</h1>
        </div>
        <br>
        <br>
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Home</a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Sell Phone </a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Donate </a> 
<a class="max-w-7xl mx-auto sm:px-6 lg:px-8" href="usedphonesell.blade.php" >Recycle </a> 




<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    Select brand <br> <div class="custom-select" style="width:200px;">
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

</div>
    
</x-app-layout>

