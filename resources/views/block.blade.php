@extends('layouts.block')

@section('pend')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-gray-200 w-full px-16 md:px-0 h-screen flex items-center justify-center">
    <div class="bg-white border border-gray-200 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl">
        <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300">Wait!</p>
        <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-500 mt-4">Admins are yet to verify your account.</p>
        <p class="text-gray-500 mt-4 pb-4 border-b-2 text-center">Wait for the admins to approve your application.</p>
        <a href="{{ route('logout') }}" class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 mt-6 rounded transition duration-150" title="Return Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            <span>Return Home</span>
        </a>
    </div>
</div>
</div>
</div>
@endsection

@section('rej')
<div class="bg-gray-200 w-full px-16 md:px-0 h-screen flex items-center justify-center">
    <div class="bg-white border border-gray-200 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl">
        <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300">No Entry!</p>
        <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-500 mt-4">Thou Shalt Not Pass</p>
        <p class="text-gray-500 mt-4 pb-4 border-b-2 text-center">Admin had rejected your Account Application.<br> To apply again, please provide more details to the Admins via email.
        </p>
        <a href="{{ route('logout') }}" class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 mt-6 rounded transition duration-150" title="Return Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            <span>Return Home</span>
        </a>
    </div>
</div>
@endsection


@section('regpend')
<div class="bg-gray-200 w-full px-16 md:px-0 h-screen flex items-center justify-center">
    <div class="bg-white border border-gray-200 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl">
    <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-gray-300">Wait!</p>
        <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-500 mt-4">Registrar are yet to verify your account.</p>
        <p class="text-gray-500 mt-4 pb-4 border-b-2 text-center">Registrar is reviewing your Account Application.<br>
        </p>
        <a href="{{ route('logout') }}" class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 mt-6 rounded transition duration-150" title="Return Home">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            <span>Return Home</span>
        </a>
    </div>
</div>
@endsection