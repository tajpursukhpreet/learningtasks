<!--Tajpur-->
<!--Reference: https://codingartistweb.com/2021/10/how-to-create-calculator-using-html-css-and-javascript/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lasallian Calculator</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="calculator">
      <div class="display">
        <input type="text" placeholder="0" id="input" disabled />
      </div>
      <div class="buttons">
        <!--ERASE ALL -->
        <input type="button" value="AC" id="clear" />
        <!-- ERASE ONLY ONE -->
        <input type="button" value="DEL" id="erase" />
        <!--- FUNCTIONS AND NUMBERS-->
        <input type="button" value="/" class="input-button" />
        <input type="button" value="*" class="input-button" />
        <input type="button" value="7" class="input-button" />
        <input type="button" value="8" class="input-button" />
        <input type="button" value="9" class="input-button" />
        <input type="button" value="-" class="input-button" />
        <input type="button" value="6" class="input-button" />
        <input type="button" value="5" class="input-button" />
        <input type="button" value="4" class="input-button" />
        <input type="button" value="+" class="input-button" />
        <input type="button" value="1" class="input-button" />
        <input type="button" value="2" class="input-button" />
        <input type="button" value="3" class="input-button" />
        <input type="button" value="=" id="equal" />
        <input type="button" value="0" class="input-button" />
        <input type="button" value="." class="input-button" />
      </div>
    </div>
    <!--external to script -->
    <script src="script.js"></script>
  </body>
</html>