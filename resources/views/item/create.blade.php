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
            <form action="{{route('item.store')}}" method="post" class="grid gap-4 mb-6" enctype="multipart/form-data" >
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white " >Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('name') border-red-600 @enderror " value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-600"> {{$message}} </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" id="price" name="price" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('price') border-red-600 @enderror " value="{{old('price')}}">
                    @error('price')
                        <p class="text-red-600"> {{$message}} </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="text" id="stock" name="stock" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('stock') border-red-600 @enderror " value="{{old('stock')}}">
                    @error('stock')
                        <p class="text-red-600"> {{$message}} </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <input type="text" id="description" name="description" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('description') border-red-600 @enderror " value="{{old('description')}}">
                    @error('description')
                        <p class="text-red-600"> {{$message}} </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Catageroies</label>
                        <select name="category_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>

                </div>

                <div class="mb-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" id="image" name="image" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full @error('name') border-red-600 @enderror " value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-600"> {{$message}} </p>
                    @enderror
                </div>

                <div class="mb-2">

                    <div class="flex items-center mb-1">
                        <input id="default-radio-1" type="radio" value="available" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="default-radio-2" type="radio" value="unavailable" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unavailable</label>
                    </div>

                </div>

                <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Create</button>


            </form>

        </div>

    </div>

</body>
</html>
