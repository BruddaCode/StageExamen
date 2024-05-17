<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>

    @include('nav')

    <!--Begin resultaat gedeelte-->
    <h1 class="text-4xl font-semibold text-center pt-16 pb-10">Resultaat</h1>

    <div class="flex items-center justify-center border-black pb-20">
        <?php
            use App\Models\Recipe;
            use Illuminate\Support\Facades\Session;

            $recipe = Recipe::find(Session::get('recipe_id'));

            echo $recipe->title;
            echo $recipe->description;
            echo $recipe->ingredients;
            echo $recipe->instructions;
        ?>
    </div>

<!--Eind resultaat gedeelte-->


@include('footer')

</body>
</html>
