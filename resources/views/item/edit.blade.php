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
            <form action="{{route('item.update',$item->id)}}" method="POST" class="grid gap-4 mb-6" >
                @csrf
                @method('put')
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full" value="{{$item->name}}">
                </div>

                <div class="mb-2">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" id="price" name="price" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full" value="{{$item->price}}">
                </div>

                <div class="mb-2">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                    <input type="text" id="stock" name="stock" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full" value="{{$item->stock}}">
                </div>

                <div class="mb-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea type="text" id="description" name="description" class="bg-gray-200 border border-gray-600 text-gray-950 text-sm rounded-lg w-full"> {{$item->description}} </textarea>
                </div>

                <div class="mb-2">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Catageroies</label>
                        <select name="category_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                            @endforeach
                    </select>

                </div>

                <div class="mb-2">

                    <div class="flex items-center mb-1">
                        <input id="default-radio-1" type="radio" value="available" {{$item->status == 'available' ? 'checked' : ''}} name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                    </div>
                    <div class="flex items-center">
                        <input id="default-radio-2" type="radio" value="unavailable" {{$item->status == 'unavailable' ? 'checked' : ''}} name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unavailable</label>
                    </div>

                </div>
                <div class="flex justify-center">
                    <a href="{{route('item.index')}}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>
                    <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Update</button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>
