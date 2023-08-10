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
            <div class="bg-white rounded-lg shadow-md p-6 w-[80%]">
                <div class="flex items-center justify-between">
                    <h2 class="underline text-xl font-semibold mb-4">{{$blog['title']}}</h2>
                    <span class="bg-gray-200 px-4 py-1 rounded ml-4 cursor-pointer">
                        <p class="text-sm font-bold text-gray-600">
                            <a href="/">Back</a>
                        </p>
                    </span>
                </div>
                <p class="text-gray-600">Read more about <em>{{$blog['title']}}</em></p>
                <div class="mt-2">
                    <p class="text-gray-600">{{$blog['content']}}</p>
                </div>
                <div class=" flex items-center justify-between mt-8">
                    <div class="">
                        <p><em>{{ $blog->created_at->diffForHumans() }} ,</em></p>
                        <p class="font-bold">{{$blog['author']}}</p>
                    </div>
                    <div class="flex items-center justiify-around">
                        <span class="border px-6 py-1 rounded cursor-pointer">
                            <p class="text-sm font-bold text-gray-500 ">
                                <a href="/blogs/{{$blog->id}}">Edit</a>
                            </p>
                        </span>
                        <form method="POST" action="/blogs/{{$blog->id}}">
                            @crsf
                            @method('DELETE')
                            <span class="bg-gray-200 px-4 py-1 rounded ml-4 cursor-pointer">
                                <p class="text-sm font-bold text-gray-600">
                                    <a href="/delete">Delete</a>
                                </p>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<!-- <h1>{{$blog['title']}}</h1>

<p>{{$blog['content']}}</p> -->