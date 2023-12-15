<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  --box-height: 40px;
  --border-radius: 5px;
  --space-between: 20px;
  --font-size: 16px;

  --color-0: #ffffff;
  --color-1: #dcdcdd;
  --color-2: #c5c3c6;
  --color-3: #212529;
  --color-4: #23AA11;
  --color-5: #ce4257;
}

* {
  margin: 0;
  padding: 0;
  font-family: Barlow, sans-serif;
  box-sizing: border-box;
}

body {
  padding: 0 10px;
  background-image: url("https://i.postimg.cc/BnhHF28S/nastuh-abootalebi-y-Wwob8kw-OCk-unsplash-modified.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
}

#survey-container {
  margin: 20px auto;
  padding: 30px 20px;
  width: 100%;
  max-width: 840px;
  border-radius: calc(3 * var(--border-radius));
}

#title {
  margin: 30px 0;
  text-align: center;
  font-family: "Kumbh Sans", sans-serif;
  font-size: 50px;
  text-transform: capitalize;
  color: var(--color-3);
}

#description {
  margin: 30px 0;
  padding: 5px;
  text-align: center;
  font-size: 22px;
  font-weight: bold;
  color: var(--color-3);
}

#survey-form {
  padding: 30px;
  padding-top: 20px;
  background: var(--color-1);
  opacity: 98%;
  border: none;
  border-radius: calc(2 * var(--border-radius));
}

#survey-form * {
  font-size: var(--font-size);
}

.row-label,
.row-input {
  padding: 5px 10px;
  margin: 0;
  height: var(--box-height);
  width: 100%;
  display: block;
}

.row-label {
  color: var(--color-3);
  font-weight: 600;
}

.row-label:not(:first-child) {
  margin-top: var(--space-between);
}

.row-input:not(.small) {
  background: white;
  border: none;
  border-radius: var(--border-radius);
}

.inline-label {
  margin-left: 10px;
  font-size: 14px;
  color: var(--color-3);
}

.small {
  height: calc(var(--box-height) * 0.75);
}

#comments {
  padding: 10px;
  margin: 0;
  height: 120px;
  width: 100%;
  background: white;
  border: none;
  border-radius: var(--border-radius);
  resize: none;
}

#submit {
  margin-top: calc(2 * var(--space-between));
  height: var(--box-height);
  width: 100%;
  background: var(--color-4);
  border: none;
  border-radius: var(--border-radius);
  color: white;
  font-weight: 600;
  cursor: pointer;
  text-transform: capitalize;
}

#submit:hover {
  box-shadow: 0 0 2px var(--color-3);
}

    </style>
</head>
<body>
    <div id="survey-container">

        <h1 id="title">Invesment Form</h1>
      
        <p id="description">Fill in to Invest</p>
      
        <form id="survey-form">
      
          <!-- name -->
          <label id="name-label" class="row-label" for="name">Name:</label>
          <input id="name" class="row-input" type="text" placeholder="Enter your name" required>

          <!-- mobile -->
          <label id="name-label" class="row-label" for="name">Mobile Number:</label>
          <input id="name" class="row-input" type="text" placeholder="Enter your mobile number" required>
      
          <!-- email -->
          <label id="email-label" class="row-label" for="email">Email:</label>
          <input id="email" class="row-input" type="email" placeholder="Enter your email" required>
      
          <!-- education dropdown -->
          <label class="row-label" for="dropdown">Number of project Invesment:</label>
          <select id="dropdown" class="row-input" required>
            <option disabled selected>Select an option</option>
            <option value="primary">one</option>
            <option value="secondary">Two</option>
            <option value="higher">Three</option>
            <option value="na">Above Three</option>
          </select>
      
          <!-- years of experience -->
          <label id="number-label" class="row-label" for="number">Years of experience in Investment (optional):</label>
          <input id="number" class="row-input" type="number" placeholder="Enter number of years of experience" min="0" max="50">
      
          <!-- programs checkbox -->
          <!-- <p class="row-label">Known programs:</p>
      
          <label class="row-input small" for="box-windows">
            <input type="checkbox" id="box-windows" name="checkbox" value="windows">
            <span class="inline-label">HTML</span>
          </label>
      
          <label class="row-input small" for="box-word">
            <input type="checkbox" id="box-word" name="checkbox" value="word">
            <span class="inline-label">CSS</span>
          </label>
      
          <label class="row-input small" for="box-excel">
            <input type="checkbox" id="box-excel" name="checkbox" value="excel">
            <span class="inline-label">Javascript</span>
          </label>
      
          <label class="row-input small" for="box-powerpoint">
            <input type="checkbox" id="box-powerpoint" name="checkbox" value="powerpoint">
            <span class="inline-label">Java</span>
          </label>
      
          <label class="row-input small" for="box-outlook">
            <input type="checkbox" id="box-outlook" name="checkbox" value="outlook">
            <span class="inline-label">Php</span>
          </label> -->
      
          <!-- salary radio -->
          <p class="row-label">Expected Budget:</p>
      
          <label class="row-input small" for="below-3k">
            <input type="radio" id="below-3k" name="radio" value="below-3k">
            <span class="inline-label">Below $3K</span>
          </label>
      
          <label class="row-input small" for="3k-4k">
            <input type="radio" id="3k-4k" name="radio" value="3k-4k">
            <span class="inline-label">$3K - $4K</span>
          </label>
      
          <label class="row-input small" for="4k-5k">
            <input type="radio" id="4k-5k" name="radio" value="4k-5k">
            <span class="inline-label">$4K - $5K</span>
          </label>
      
          <label class="row-input small" for="above-5k">
            <input type="radio" id="above-5k" name="radio" value="above-5k">
            <span class="inline-label">Above $5K</span>
          </label>
      
          <label class="row-input small" for="dont-know">
            <input type="radio" id="dont-know" name="radio" value="dont know">
            <span class="inline-label">Don't know</span>
          </label>
      
          <!-- comments textarea -->
          <label class="row-label" for="comments">Additional informations:</label>
          <textarea id="comments" placeholder="Enter other informations here..."></textarea>
      
          <!-- submit button -->
          <button id="submit" type="submit">Submit</button>
      
        </form>
      
      </div>
</body>
</html>