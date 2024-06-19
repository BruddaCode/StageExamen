<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>

@include('nav')

<?php
    use App\Models\Recipe;
    use Illuminate\Support\Facades\Session;

    // Retrieve the recipe using the session's recipe_id
    $recipe = Recipe::find(Session::get('recipe_id'));

    // Decode JSON fields from the recipe
    $title = implode(json_decode($recipe->title, true));
    $description = json_decode($recipe->description, true);
    $ingredients = json_decode($recipe->ingredients, true);
    $instructions = json_decode($recipe->instructions, true);
    $error = implode(json_decode($recipe->error, true));
    $likes = $recipe->likes;
    $dislikes = $recipe->dislikes;

    // Check if there is an error message
    $error_msg = false;
    if ($error != "") {
        $error_msg = true;
    }

    // Get previous recipes that don't have an error and limit to the last 3
    $previous_recipes = Recipe::where('error', '[]')->get()->reverse()->take(3);
?>

<!-- Begin resultaat gedeelte -->
<h1 class="text-4xl font-semibold text-center pt-16 pb-10">Resultaat</h1>

{{-- show each recipe in its own block side by side with only the title --}}

<h1 class="text-1xl font-semibold text-center pt-16 pb-10">Previous Recipes</h1>
<div class="flex items-center justify-center">
    @foreach ($previous_recipes as $prev_recipe)
        <div class="flex items-center justify-center w-1/3">
            <div class="flex flex-col items-center justify-center w-full p-5">
                <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                    <a href="{{ route('download', ['id' => $prev_recipe->id]) }}" class="text-1xl font-light mb-4">{{ implode(json_decode($prev_recipe->title, true)) }}</a>
                    <p>Likes: {{ $prev_recipe->likes }}  Dislikes: {{ $prev_recipe->dislikes }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Display error message if there is one -->
@if ($error_msg)
    <div class="flex items-center justify-center border-black pb-20">
        <div class="flex items-center justify-center w-9/12 border-top border-2 border-black pb-20 pt-20">
            <div class="flex items-center justify-center w-3/12">
                <div class="flex flex-col items-center justify-center w-full p-5">
                    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
                        <p class="text-2xl font-semibold mb-4">{{ $error }}</p>
                        @foreach (array_slice($description, 1) as $desc)
                            <div class="mb-6 text-lg text-gray-800">{{ $desc }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Display recipe details if there is no error message -->
@if (!$error_msg)
    <div style="background-color: #F3F2F2;" class="flex items-center justify-center min-h-screen py-10">
        <div class="w-4/5 max-w-4xl bg-white border border-gray-200 shadow-lg rounded-lg p-8">
            <div class="mb-8 text-3xl font-bold text-black">{{ $title }}</div>
            <h2 class="text-xl font-semibold mb-4 text-black">Description:</h2>
            @foreach (array_slice($description, 1) as $desc)
                <div class="mb-6 text-lg text-gray-800">{{ $desc }}</div>
            @endforeach

            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-4 text-black">Ingredients:</h2>
                @foreach (array_slice($ingredients, 1) as $ingredient)
                    <div class="flex items-center border border-gray-300 p-4 mb-2 rounded-md shadow-sm bg-gray-50 w-full">
                        <input type="checkbox" class="mr-2">
                        <span class="text-gray-800">{{ $ingredient }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-black">Instructions:</h2>
                <div class="prose prose-lg text-gray-800">
                    @foreach (array_slice($instructions, 1) as $instruction)
                        <p>{{ $instruction }}</p> <br>
                    @endforeach
                </div>
            </div>

            <!-- Like and Dislike buttons -->
            <div class="flex items-center justify-between">
                <form action="{{ route('like', ['id' => $recipe->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Like</button>
                </form>
                <form action="{{ route('dislike', ['id' => $recipe->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Dislike</button>
                </form>
            </div>
        </div>
    </div>
@endif

<!-- Eind resultaat gedeelte -->

<!-- Include the footer -->
@include('footer')

</body>
</html>
