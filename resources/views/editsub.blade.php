<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
     Edit Subject: {{$yrsub[0]}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2em;">

              

               
<form method="POST" action="editsub">
    @csrf
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
    <input type="text" name="sub" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value=" {{$yrsub[0]}}" disabled>
    <input type="number" name="id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value=" {{$ids[0]}}" style="display:none;">
</div>
  <div class="mb-6">
    <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
    <select name="course" class="block mt-1 w-full" style="border: 0.5px solid rgb(214, 214, 214); border-radius: 0.4em;">
                            @for($i=0; $i < $crcnt; $i++)
                            <option value="{{$crs[$i]}}" class="block mt-1 w-full">{{$crs[$i]}}</option>
                            @endfor
                </select> </div>
  <div class="mb-6">

    <x-label for="" value="{{ __('Year level') }}" />
                        
                        <x-input id="schoolyear" class="block mt-1 w-full" type="number" name="yrlevel" required />  </div>
  <div class="flex items-start mb-6">
   
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
