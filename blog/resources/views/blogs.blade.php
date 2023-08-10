<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class="flex justify-center items-center mt-[20px]">
            <div class="bg-white rounded-lg shadow-md p-6 w-[80%]">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold mb-4">{{$heading}}</h1>
                        <span class="bg-gray-200 px-4 py-1 rounded ml-4 cursor-pointer">
                                <p class="font-bold text-gray-600">
                                    <a href="/blogs/create">new blog</a>
                                </p>
                        </span>
                </div>
                <p class="text-gray-600">Welcome to my blog app</p>
                <div class="mt-4">
                    @unless(count($blogs) === 0)
                        @foreach($blogs as $blog)
                            <h3 class="text-lg font-semibold underline pt-4">
                                <a href="/blogs/{{$blog['id']}}">
                                    {{$blog['title']}}
                                </a>
                            </h3>
                            <p class="text-gray-600">
                                {{$blog['content']}}
                            </p>
                        @endforeach
                        @else
                            <p>Currently no blogs</p>
                    @endunless
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<!-- <h1>{{$heading}}</h1>

@unless(count($blogs) === 0)

@foreach($blogs as $blog)

<h3>
    <a href="/blogs/{{$blog['id']}}">
        {{$blog['title']}}
    </a>
</h3>

<p>
    {{$blog['content']}}
</p>
@endforeach

@else

<p>Currently no blogs</p>

@endunless -->
