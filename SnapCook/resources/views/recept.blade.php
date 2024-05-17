<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>

@include('nav')

<!--Begin resultaat gedeelte-->
<h1 class="text-4xl font-semibold text-center pt-16 pb-10">Resultaat</h1>

<div style="background-color: #F3F2F2;" class="flex items-center justify-center min-h-screen py-10">
    <div class="w-4/5 max-w-4xl bg-white border border-gray-200 shadow-lg rounded-lg p-8">
        <?php
        use App\Models\Recipe;
        use Illuminate\Support\Facades\Session;

        $recipe = Recipe::find(Session::get('recipe_id'));

        // Ensure $recipe is not null before accessing its properties
        if ($recipe) {
            echo '<div class="mb-8 text-3xl font-bold text-black">' . htmlspecialchars($recipe->title) . '</div>';
            echo '<h2 class="text-xl font-semibold mb-4 text-black">Description:</h2>';
            echo '<div class="mb-6 text-lg text-gray-800">' . nl2br(htmlspecialchars($recipe->description)) . '</div>';

            echo '<div class="mb-6">';
            echo '<h2 class="text-xl font-semibold mb-4 text-black">Ingredients:</h2>';
            $ingredients = explode("\n", $recipe->ingredients); // Assuming ingredients are separated by new lines
            foreach ($ingredients as $ingredient) {
                echo '<div class="flex items-center border border-gray-300 p-4 mb-2 rounded-md shadow-sm bg-gray-50 w-full">';
                echo '<input type="checkbox" class="mr-2">';
                echo '<span class="text-gray-800">' . htmlspecialchars($ingredient) . '</span>';
                echo '</div>';
            }
            echo '</div>';

            echo '<div class="mb-6">';
            echo '<h2 class="text-xl font-semibold mb-2 text-black">Instructions:</h2>';
            echo '<div class="prose prose-lg text-gray-800">' . nl2br(htmlspecialchars($recipe->instructions)) . '</div>';
            echo '</div>';

            echo '<div class="text-xl font-semibold text-center text-black mt-10">Eetsmakelijk!</div>';
        } else {
            echo '<div class="text-red-500">Recipe not found.</div>';
        }
        ?>
    </div>
</div>


<!--Eind resultaat gedeelte-->


@include('footer')

</body>
</html>
