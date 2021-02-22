<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator task</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f4f4f4;
      }

      .container {
        margin: 0 auto;
        padding: 3rem;
        display: grid;
        place-items: center;
        text-align: center;
        width: 90%;
        max-width: 1200px;
      }
      .input-field {
        padding: 0.7rem 0.9rem;
        outline: none;
        border: none;
        border-radius: 5px;
      }

      select {
        padding: 0.3rem 0.4rem;
        margin: 0 0.7rem;
        border: none;
      }

      select:focus {
        border: none;
      }

      button {
        padding: 0.7rem 1.5rem;
        margin: 1rem 0;
        background-color: rgb(141, 179, 213);
        display: inline-block;
        outline: none;
        border: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="">
        <input
          type="text"
          name="value1"
          class="input-field"
          placeholder="First value"
        />
        <input
          type="text"
          name="value2"
          class="input-field"
          placeholder="Second value"
        />

        <select name="operator" id="">
          <option>Add</option>
          <option>Subtract</option>
          <option>Multiply</option>
          <option>Divide</option>
          <option>None</option>
        </select>

        <br />

        <button type="submit" name="answer">Result</button>
      </form>

      <h4>Your Answer is:</h4>

      <?php 

    if(isset($_GET['answer'])) {
      $value1 = $_GET['value1'];
      $value2 = $_GET['value2'];
      $operator = $_GET['operator'];


      //the calculator logic, switch statements can also be used
      if ($operator == 'Add') {
        echo $value1 + $value2;
      } elseif ($operator == 'Subtract'){
        echo $value1 - $value2;
      } elseif ($operator == 'Multiply'){
        echo $value1 * $value2;
      } elseif ($operator == 'Divide'){
        echo $value1 / $value2;
      } else {
        echo 'Error please fill in all fields';
      }
    }
    ?>
    </div>
  </body>
</html>
