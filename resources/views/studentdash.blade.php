<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if($status[0]==1)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding:2em;">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Upload Clearance') }}
        </h2>     
        <form style="margin: 1em;" method="POST" enctype="multipart/form-data">
        @csrf
  <label for="file-input" class="sr-only">Choose file</label>
  <input type="file" name="file" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
    file:bg-transparent file:border-0
    file:bg-gray-100 file:mr-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">
    <input type="text" name="type" value="Old" hidden>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top: 2em;">Submit</button>
</form>
            </div>
        </div>
    </div>

    @elseif($status[0]==0)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding:2em;">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Upload Prospectus/TOR/Proof of Enrollment') }}
        </h2>     
        <form style="margin: 1em;" method="POST" enctype="multipart/form-data">
        @csrf
  <label for="file-input" class="sr-only">Choose file</label>
  <input type="file" name="file" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
    file:bg-transparent file:border-0
    file:bg-gray-100 file:mr-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">
    <input type="text" name="type" value="New" hidden>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top: 2em;">Submit</button>
</form>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
