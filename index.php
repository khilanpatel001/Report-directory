<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K3 inward quantity by model wise</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h1>K3 inward quantity by model wise</h1>
        <form action="form.php" method="post">
            <label for="project">Project:</label>
            <input type="text" id="project" name="project" required>

            <label for="material_code">Material Full Code:</label>
            <input type="text" id="material_code" name="material_code" required>

            <label for="specification">Specification:</label>
            <input type="text" id="specification" name="specification" required>

            <label for="total">Total:</label>
            <input type="number" id="total" name="total" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>