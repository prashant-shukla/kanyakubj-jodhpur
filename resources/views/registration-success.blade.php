@extends('layouts.app')

@section('content')


<style>
    /* Add a simple fade-in effect */
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
    

    /* Flip animation for the icon */
    @keyframes flipOnce {
        0% {
            transform: rotateY(270deg);
        }
        100% {
            transform: rotateY(360deg);
        }
    }

    .animate-flip-once {
        animation: flipOnce 1s linear 1;
    }

     /* Text grow animation */
    @keyframes growText {
        0% {
            transform: scale(0.75);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-grow-text {
        animation: growText 1s ease-out forwards;
    }
</style>

<div class="">
    <style>
        .fi-fo-wizard-header-step-label {
            font-size: 16px;
        }
        .fi-fo-wizard-header-step-description {
            font-size: 12px;
        }
    
        .fi-fo-wizard-header-step-indicator {
            font-size: 32px;
        }
    
        .fi-fo-wizard-header-step-icon-ctn {
            width: 50px;
            height: 50px;
        }
    </style>
    
    
    <div class="w-full max-w-7xl text-gray-800 p-8 rounded-lg shadow-lg mx-auto my-4">

        <div class="text-center">
            <hr /><br />
            <h1 class="text-6xl font-extrabold text-white bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 bg-clip-text text-transparent py-4 tracking-wide uppercase shadow-lg">
                कान्यकुब्ज ब्राह्मण समाज (रजि.), जोधपुर (राज.)
            </h1>
            <hr />
        </div>

        <div class="w-full max-w-7xl text-gray-800 p-8 rounded-lg shadow-lg mx-auto my-4 fade-in bg-white border border-green-400 shadow-lg text-green-700 p-6 rounded-xl max-w-lg text-center space-y-2">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center h-24 w-24 rounded-full border-8 border-green-500 animate-flip-once">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            
            <!-- Message Heading -->
            <h2 class="text-2xl font-bold mt-4 animate-grow-text">सदस्य सफलतापूर्वक पंजीकृत हो गया </h2>

            <!-- Message Paragraph -->
            <p class="text-gray-700">पंजीकरण प्रक्रिया के लिए धन्यवाद! अब आप सदस्यों के लिए उपलब्ध सभी सुविधाओं तक पहुंच सकते हैं।</p>

            <hr /><br />

            <!-- Message Heading -->
            <h2 class="text-2xl font-bold mt-4 animate-grow-text">Member successfully registered </h2>

            <!-- Message Paragraph -->
            <p class="text-gray-700">Thank you for registering! You can now access all the features available to members.</p>
            
            
        </div>
    </div>
</div>



@endsection
