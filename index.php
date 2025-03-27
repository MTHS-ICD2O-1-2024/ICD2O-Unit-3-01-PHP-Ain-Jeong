<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of Trapezoid, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid_area.png" alt="Area of Trapezoid image" width="250" />
      </div>
      <br />
      <div class="page-content-heading">Formula</div>
      <div class="page-content-heading">Area = [(a + b) / 2] x h</div>
      <div class="page-content">Please enter integers for dimensions:</div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <label class="page-content">a base: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="a-base-of-trapezoid" />
            <label class="mdl-textfield__label" for="a-base-of-trapezoid">a base of trapezoid (mm)</label>
            <span class="mdl-textfield__error">Input is not a number.</span>
          </div>
          <label class="page-content">mm</label>
          <br />
          <label class="page-content">b base: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="b-base-of-trapezoid" />
            <label class="mdl-textfield__label" for="b-base-of-trapezoid">b base of trapezoid (mm)</label>
            <span class="mdl-textfield__error">Input is not a number.</span>
          </div>
          <label class="page-content">mm</label>
          <br />
          <label class="page-content">height: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="height-of-trapezoid" />
            <label class="mdl-textfield__label" for="height-of-trapezoid">height of trapezoid (mm)</label>
            <span class="mdl-textfield__error">Input is not a number.</span>
          </div>
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate Area
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
