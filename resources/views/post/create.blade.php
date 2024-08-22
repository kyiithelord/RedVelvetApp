<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div class="container mx-auto mt-10">
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
            <form action="{{route('post.store')}}" method="POST" class="grid gap-4 mb-6" >
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="title" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('name') border-red-600 @enderror" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-2">
                   @foreach ($users as $user)
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" name="user_ids[]" value="{{$user->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$user->name}}</label>
                    </div>
                   @endforeach
                </div>
                <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Create</button>


            </form>

        </div>

    </div>

</body>
</html>
