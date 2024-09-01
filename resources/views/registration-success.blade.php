@extends('layouts.app')

@section('content')

   
<div class="w-full max-w-7xl text-gray-800 p-8 rounded-lg shadow-lg mx-auto my-4 fade-in bg-white border border-green-400 shadow-lg text-green-700 p-6 rounded-xl max-w-lg text-center space-y-2">
        <!-- Icon -->
        <div class="inline-flex items-center justify-center h-24 w-24 rounded-full border-8 border-green-500 animate-flip-once">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        
        <!-- Message Heading -->
        <h2 class="text-2xl font-bold mt-4 animate-grow-text">Member successfully registered.</h2>

        <!-- Message Paragraph -->
        <p class="text-gray-700">Thank you for registering! You can now access all the features available to members.</p>

</div>

@endsection
