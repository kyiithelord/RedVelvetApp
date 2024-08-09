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
        <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-e">
            <form action="{{route('phone.store')}}" method="post" class="grid gap-4 mb-6" >
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                    <input type="text" id="name" name="phone_number" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full">
                </div>

                <div class="mb-2">
                    <label for="person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Person</label>
                        <select name="person_id" id="person" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Person</option>
                            @foreach ($peoples as $people)
                                <option value="{{$people->id}}">{{$people->name}}</option>
                            @endforeach
                    </select>

                </div>


                <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Create</button>


            </form>

        </div>

    </div>

</body>
</html>
