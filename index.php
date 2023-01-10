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
<div class="container">
    <div class="row mx-0 justify-content-center">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
            <form class="w-100 rounded-1 p-4 border bg-white">
                <label class="d-block mb-4">
                    <span class="form-label d-block">Your name</span>
                    <input name="name"  type="text"  class="form-control"  placeholder="Name"/>
                </label>

                <label class="d-block mb-4">
                    <span class="form-label d-block">Size</span>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Small</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Medium</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Large</label>
                    </div>
                </label>
                <label class="d-block mb-4">
                    <span class="form-label d-block">Sauce</span>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Marinara</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Garlic Ranch</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">BBQ</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Ranch</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Pesto</label>
                    </div>
                </label>
                <label class="d-block mb-4">
                    <span class="form-label d-block">Toppings</span>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btnMushrooms" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnMushrooms">Mushrooms</label>
                                    <input type="checkbox" class="btn-check" id="btnOnion" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnOnion">Onion</label>
                                    <input type="checkbox" class="btn-check" id="btnArtichoke" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnArtichoke">Artichoke</label>
                                    <input type="checkbox" class="btn-check" id="btnolives" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnolives">Black olives</label>
                                    <input type="checkbox" class="btn-check" id="btngarlic" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btngarlic">Fresh garlic</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btnEggplant" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnEggplant">Eggplant</label>
                                    <input type="checkbox" class="btn-check" id="btnSpinach" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnSpinach">Spinach</label>
                                    <input type="checkbox" class="btn-check" id="btnCauliflower" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnCauliflower">Cauliflower</label>
                                    <input type="checkbox" class="btn-check" id="btnBroccoli" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnBroccoli">Broccoli</label>
                                    <input type="checkbox" class="btn-check" id="btnKale" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btnKale">Kale</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <label class="d-block mb-4">
                    <span class="form-label d-block">Meats</span>
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btnChicken" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnChicken">Chicken</label>
                        <input type="checkbox" class="btn-check" id="btnBacon" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnBacon">Bacon</label>
                        <input type="checkbox" class="btn-check" id="btnSausage" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnSausage">Sausage</label>
                        <input type="checkbox" class="btn-check" id="Pepperoni" autocomplete="off">
                        <label class="btn btn-outline-primary" for="Pepperoni">Pepperoni</label>
                    </div>
                </label>
                <label class="d-block mb-4">
                    <span class="form-label d-block">Delivery information</span>
                    <textarea name="message" class="form-control" rows="3" placeholder="floor/door lock code/etc.">
                </textarea>
                </label>
                <p>Thank you for checking out my pizza shop.</p>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-3 rounded-3">
                        Saves
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
