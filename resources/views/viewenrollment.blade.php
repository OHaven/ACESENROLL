<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applicant Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2em;">

             


            
<h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Student Personal Information:</h2>
<ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Name: ') }}
                </h2>
    </li>
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Age: ') }} 
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Birthdate: ') }} 
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Gender: ') }} 
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Civil Status: ') }} 
                </h2>

    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Email: ') }} 
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Contact No: ') }} 
                </h2>

    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Student Type: ') }} 
                </h2>

    </li>
</ul>
<br>
<br>
<h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Student Enrollment Information:</h2>
<ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Semester and Academic Year: ') }}
                </h2>
    </li>
    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Course: ') }} 
                </h2>
    </li>

    <li style="list-style-type: none;">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 2em;">
                    {{ __('Year Level: ') }} 
                </h2>
    </li>

    
</ul>
            

                
          
                <div class="mt-2" x-show="photoPreview" style="margin: 5em; margin-left: 45%;">
                    <span class="block full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                          No Clearance Uploaded
                    </span>
                </div>
          
                <div class="mt-2" x-show="! photoPreview" style="margin: 5em; margin-left: 40%;">
                    <img style="height: 15em; width: 15em;" src=""  class="h-20 w-20 object-cover">
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
