<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class="flex justify-center items-center h-screen">
            <div class="bg-white rounded-lg shadow-md p-6 w-[40%]">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold mb-4">Create a New Blog Post!</h2>
                        <span class="bg-gray-200 px-4 py-1 rounded ml-4 cursor-pointer">
                                <p class="font-bold text-gray-600">
                                    <a href="/">Back</a>
                                </p>
                        </span>
                </div>
                <form method="POST" action="/blogs">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea id="content" name="content" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" id="author" name="author" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-gray-300">
                    </div>
                    <button type="submit" class="w-full bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Post</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>