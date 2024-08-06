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
            <div class="max-w-sm p-6 bg-white border-2 border-gray-200 rounded-lg shadow-lg">
                <p class="mb-3 font-normal text-gray-900 dark:text-gray-400">
                    Item Name : {{$item->name}}
                </p>

                <p class="mb-3 font-normal text-gray-900 dark:text-gray-400">
                    Item Price : {{$item->price}}
                </p>

                <p class="mb-3 font-normal text-gray-900 dark:text-gray-400">
                    Item Stock : {{$item->stock}}
                </p>

                <p class="mb-3 font-normal text-gray-900 dark:text-gray-400">
                    Item Description : {{$item->description}}
                </p>

                <p class="mb-3 font-normal text-gray-900 dark:text-gray-400">
                    Item Status : {{$item->status}}
                </p>


                <p class="mb-6 font-normal text-gray-900 dark:text-gray-400">
                    Item Category : {{$item->category->name}}
                </p>

                <div class="flex items-center ">
                    <a href="{{route('item.index')}}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
