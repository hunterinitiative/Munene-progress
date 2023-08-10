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
            <div class="bg-white rounded-lg shadow-md p-6 w-96">
                <h2 class="text-xl font-semibold mb-4">Update your blog Post</h2>
                <form method="POST" action="/blogs/{{$blog->id}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ $post->title }}" class="mt-1 p-2 w-full border border-gray-100 rounded-md focus:outline-none focus:ring focus:ring-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea id="content" name="content" rows="4" class="mt-1 p-2 w-full border border-gray-100 rounded-md focus:outline-none focus:ring focus:ring-gray-300">{{ $post->content }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" id="author" name="author" value="{{ $post->author }}" class="mt-1 p-2 w-full border border-gray-100 rounded-md focus:outline-none focus:ring focus:ring-gray-300">
                    </div>
                    <button type="submit" class="w-full bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300">Update</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>