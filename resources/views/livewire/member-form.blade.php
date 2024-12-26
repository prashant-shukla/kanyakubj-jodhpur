<div class="min-h-screen flex items-center justify-center bg-orange-600 p-8">
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
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="text-center">
                <hr /><br />
                <h1 class="text-6xl font-extrabold text-white bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 bg-clip-text text-transparent py-4 tracking-wide uppercase shadow-lg">
                    कान्यकुब्ज ब्राह्मण समाज (रजि.), जोधपुर (राज.)
                </h1>
                <hr />

                <h2 class="text-2xl font-semibold text-gray-100 bg-gradient-to-r from-green-300 via-blue-400 to-purple-500 bg-clip-text text-transparent mt-4 tracking-wide">
                    सदस्यता आवेदन पत्र 
                </h2>
                <br />
            </div>

            <div class="dark bg-gray-800 rounded-lg">
                {{ $this->form }}

                <br />
            
                <x-filament::button
                    type="submit"
                    class="w-full bg-gradient-to-r from-success-500 to-success-600 text-white hover:from-success-600 hover:to-success-700 font-semibold py-3 px-5 rounded-lg shadow-md transform transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-success-400 focus:ring-opacity-50 flex items-center justify-center space-x-2"
                >
                    <span>सबमिट / SUBMIT</span>
                </x-filament::button>
            </div>
        </form>

        <x-filament-actions::modals />
    </div>
</div>


