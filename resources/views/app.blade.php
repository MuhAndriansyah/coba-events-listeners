<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Events</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @notifyCss
</head>

<body>

    <div class="w-full h-full bg-gray-300 font-sans">
        <div class="flex h-screen">
            <div class="m-auto">
                <h1 class="text-center text-lg font-bold tracking-wider mb-4">
                    Newsletters and special offers
                </h1>
                <form action="/newsletter" method="POST">
                    @csrf

                    @error('email')
                        <div class="py-2 px-3 w-auto mb-4 bg-red-600 rounded">
                            <p class="text-white font-bold">{{ $message }}</p>
                        </div>
                    @enderror

                    <input class="px-4 py-2 rounded-xl shadow-xl placeholder-gray-50::placeholder" type="email"
                        placeholder="Enter Email..." name="email" required>

                    <button class="px-6 py-2 bg-indigo-700 rounded-full hover:bg-indigo-800 text-white font-bold ml-2"
                        type="submit">Subscribed</button>
                </form>
            </div>
        </div>
    </div>
    @notifyJs
    <x:notify-messages />
</body>

</html>
