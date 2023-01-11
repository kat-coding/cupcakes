<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/pizza.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cupcakes</title>
</head>
<body>
<div class="text-center" >
    <h1>Cupcake Fundraiser</h1>
</div>
<?php
$name ="";


?>
<div class="container">
    <div class="row mx-0 justify-content-center">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
            <form class="w-100 rounded-1 p-4 border bg-white" method="GET" action="process.php">
                <label class="d-block mb-4">
                    <span class="form-label d-block">Your name</span>
                    <input name="name"  type="text"  class="form-control"  placeholder="Please input your name:"/>
                </label>
                <label class="d-block mb-4">
                    <span class="form-label d-block">Cupcake flavor:</span>
                </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Grasshopper" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            The Grasshopper
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Whiskey" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Whiskey Maple Bacon
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Carrot" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Carrot Walnut
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Grasshopper" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Salted Caramel Cupcake
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Red" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Red Velvet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Lemon" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lemon Drop
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tiramisu" name="flavor[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tiramisu
                        </label>
                    </div>



                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-3 rounded-3" value="submit">
                        Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
