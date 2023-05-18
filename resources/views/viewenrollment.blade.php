<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applicant Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2em;">

            <div class="container-fluid" style="float:right; margin:2em;" > 
            <a href="tocash?id={{$stdntid[0]}}">   <button class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" style="display:inline-flex;">
                                                         <span>Approve Enrollment</span>
                                            </button> </a>
</div>
                                         


            
<h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white"  style="margin:2em;">Student Personal Information:</h2>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Name: ') }}    <span style="font-size: 1em; float:right; margin-right: 1em;">{{$name[0]}}</span>
                </h2>
             
    </li>
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Age: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$age[0]}} years old</span>
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Birthdate: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$bday[0]}}</span>
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Gender: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$gender[0]}}</span>
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Civil Status: ') }} <span style="font-size: 1em; float:right; margin-right: 1em;">{{$cv[0]}}</span>
                </h2>

    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Email: ') }} <span style="font-size: 1em; float:right; margin-right: 1em;">{{$email[0]}}</span>
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Contact No: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$cn[0]}}</span>
                </h2>

    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Student Type: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">@if($stntype[0]==1)
                    Old Student
                    @elseif($stntype[0]==0)
                    New Student 
                    @else 
                    Unknown 
                    @endif</span>
                </h2>

    </li>

<br>
<br>
<h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white" style="margin:2em;">Student Enrollment Information:</h2>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Semester and Academic Year: ') }} <span style="font-size: 1em; float:right; margin-right: 1em;">{{$stdsy[0]}}</span>
                </h2>
    </li>
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Course: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$stdcrs[0]}}</span>
                </h2>
    </li>

    <li style="list-style-type: none; ">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Year Level: ') }}  <span style="font-size: 1em; float:right; margin-right: 1em;">{{$stdyrlevel[0]}}</span>
                </h2>
    </li>

    <br>
<br>
    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white" style="margin:2em;">Student Subjects:</h2>
            
    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Course
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Teacher
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < $stud_subjc ;$i++)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$stdcrs[0]}}
                </th>
                <td class="px-6 py-4">
                    {{$stud_subj[$i]}}
                </td>
                <td class="px-6 py-4">
                   {{$stud_teach[$i]}}
                </td>
                <td class="px-6 py-4">
                  
                </td>
            </tr>
            @endfor
           
        </tbody>
    </table>
</div>


<form method="POST" action="editsub?idss=">
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
                
          @if($fcount < 0)
                <div class="mt-2" x-show="photoPreview" style="margin: 5em; margin-left: 45%;">
                    <span class="block full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                          No Clearance Uploaded
                    </span>
                </div>
          @else
                <div class="mt-2" x-show="! photoPreview" style="margin: 5em; margin-left: 40%;">
                    <img style="height: 15em; width: 15em;" src="{{$fname[0]}}"  class="h-20 w-20 object-cover">
                </div>
             @endif  
            </div>
        </div>
    </div>
</x-app-layout>
