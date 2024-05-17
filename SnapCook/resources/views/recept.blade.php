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

    <div class="container mx-auto p-4">
        <div id="status">Processing...</div>
        <div id="result" style="display:none;">
            <h2 class="text-2xl font-semibold text-center">Result:</h2>
            <img id="result-image" src="" alt="Processed Image" class="w-1/2 h-1/2 mx-auto">
            <p id="result-description" class="text-lg font-semibold text-center"></p>
            <p id="result-recipe" class="text-lg font-semibold text-center"></p>
            <div id="result-ingredients" class="text-lg font-semibold text-center"></div>
            <div id="result-instructions" class="text-lg font-semibold text-center"></div>
        </div>
    </div>

    <!-- Include jQuery for AJAX polling -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function checkJobStatus() {
                $.ajax({
                    url: '{{ route("job.status") }}',
                    method: 'GET',
                    success: function(response) {
                        if (response.status === 'completed') {
                            $('#status').text('Processing completed');
                            if (response.result) {
                                $('#result-image').attr('src', 'data:image/png;base64,' + response.result.image);
                                $('#result-description').text('Description: ' + response.result.description);
                                $('#result-recipe').text('Recipe: ' + response.result.recipe);

                                $('#result-ingredients').empty().append('<h3>Ingredients:</h3>');
                                response.result.ingredients.forEach(function(ingredient) {
                                    $('#result-ingredients').append('<p>' + ingredient + '</p>');
                                });

                                $('#result-instructions').empty().append('<h3>Instructions:</h3>');
                                response.result.instructions.forEach(function(instruction) {
                                    $('#result-instructions').append('<p>' + instruction + '</p>');
                                });

                                $('#result').show();
                            }
                        } else {
                            setTimeout(checkJobStatus, 2000);
                        }
                    },
                    error: function() {
                        setTimeout(checkJobStatus, 2000);
                    }
                });
            }

            // Start polling after a short delay to ensure the job has started
            setTimeout(checkJobStatus, 2000);
        });
    </script>

    @include('footer')

</body>
</html>
