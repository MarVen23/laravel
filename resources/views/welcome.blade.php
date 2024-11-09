<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
            <center>

            <h3>products<h3>
                <div>
                    Product Name
                    <input type="text" for="product">
                    Product Price
                    <input type="number" for="price">
                    <button>Submit</button>
                </div>   

                <div>
                    list
                </div>

            </center>
            
        </div>
    </body>
</html>
