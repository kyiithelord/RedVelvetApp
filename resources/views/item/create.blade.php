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
            <form action="{{route('item.store')}}" method="post" class="grid gap-4 mb-6" >
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full">
                </div>

                <div class="mb-2">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" id="price" name="price" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full">
                </div>

                <div class="mb-2">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="text" id="stock" name="stock" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full">
                </div>

                <div class="mb-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="text" id="description" name="description" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full">
                </div>

                <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Create</button>


            </form>

        </div>

    </div>

</body>
</html>
