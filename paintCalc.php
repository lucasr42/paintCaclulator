<!DOCTYPE html>
<!--
Created by Lucas Robinson
Date: 2/3/2021
Time: 2100
This calculates the cost of a paint job utilizing user input for paint price
and square feet to be painted.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paint Job Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--Banner-->
        <h2>
            <img src="watercolor.jpg" alt="Watercolor Paint Splotch" id="watercolor">
            Paint Job Calculator
            <img src="watercolor.jpg" alt="Watercolor Paint Splotch" id="watercolor">
        </h2>

        <!--Instructions-->
        <p class='paintInstructions'>
            First, choose your paint from one of our in-house 
            colors on the left. The form will auto-fill with the color and price.<br><br><br>
            Or let us know what color you're looking for, as well as the price, 
            and we'll provide the paint.<br><br><br>
            Next, let us know how many square feet you'll need painted so we can 
            complete the quote! 
        </p><br><br>

        <form action='paintCalc.php' method='post' class='form'>

            <!--Error Handling-->
            
            <!--Color Form-->
            <label>Paint Color</label><br>

                                        <input type='text' name='paintColor' value='Blue'><br><br>
            
            <!--Price Form-->
            <label>Paint Price (per gallon)</label><br>
            <input type='text' name='paintPrice' value=""><br><br>

            <!--Space to be painted form-->
            <label>Amount of Space to be Painted (square feet)
            </label><br>
            <input type='number' name='squareFeet' value="100
                   " min='0' required><br><br>

            <!--Submit Button-->
            <div>
                <input type='submit' value='Estimate'>
            </div><br>

            <!--Form Picture-->
            <img src="paintFloor.jpg" alt="Paint Buckets on the Floor" 
                 id="paintPic"><br>

        </form>       

        <!--Color Buttons-->
        <br>
        <form action='.' method='post'>
            <input type='submit' id='color1' name='color' 
                   value='White'>
        </form>
        <form action='.' method='post' >
            <input type='submit' id='color2' name='color' 
                   value='Beige'>
        </form>
        <form action='.' method='post' >
            <input type='submit' id='color3' name='color' 
                   value='Aleutian Blue'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color4' name='color' 
                   value='Pale Gray'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color5' name='color' 
                   value='Red Red Wine'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color6' name='color' 
                   value='Guilford Green'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color7' name='color' 
                   value='Friendly Yellow'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color8' name='color' 
                   value='Honey Infusion'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color9' name='color' 
                   value='Compass Blue'>
        </form>
        <form action='.' method='post'>
            <input type='submit' id='color10' name='color' 
                   value='Back to Nature'>
        </form>       

        <!--Business Address-->
        <footer class='footer'>

            <address>Real Fake Paint Co.<br>
                255 RGB Ave, Fresh Coat, WA 98052<br>
                255-255-2550<br>
                @rollers&brushes
            </address>
            <br>
            <span class="credit">
                Credit for Paint Splotch goes to: 
                <a href="https://www.vecteezy.com/free-vector/paint-splotch">
                    Paint Splotch Vectors by Vecteezy</a> 
                & Credit for Paint on the Floor goes to: 
                <a href="https://www.freepik.com/photos/cover">
                    Cover photo created by rawpixel.com - www.freepik.com</a>
            </span>

        </footer>

    </body>
</html>
