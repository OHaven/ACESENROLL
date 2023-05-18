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
