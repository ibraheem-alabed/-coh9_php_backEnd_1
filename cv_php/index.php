<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cv forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center" >cv forms</h1>
    <hr>



    <div class="row container my-5 m-auto">

    <!-- ---------------------------------- -->

        <div class="col-4 border-end my-5">
        <div class="input-group mb-3">
        <input type="search" class="form-control" placeholder="Recipient's username" name="s" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">search</button>
</div>
        </div>


<!-- -------------------------------------------------- -->

        <div class="col-8 border-start p-3 ">

        <h2 class="text-center mb-5">create new CV</h2>
        <form class="row g-3 mt-3" method="GET" action="./create_cv.php">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" name="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">job title </label>
    <input type="text" class="form-control is-valid" id="validationServer02" name="job_title" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" name="Email" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" name="City" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" name="State" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">tel</label>
    <input type="number" class="form-control is-invalid" id="validationServer05" name="tel" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid number.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="mb-3">
    <label for="validationTextarea" class="form-label" require >object</label>
    <textarea class="form-control" id="validationTextarea" name="object"  placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
    Please enter a message in the textarea.
    </div>
    <label for="validationTextarea" class="form-label" require >personal information</label>
    <textarea class="form-control" id="validationTextarea" name="personal_information" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
    Please enter a message in the textarea.
    </div>
    <label for="validationTextarea" class="form-label" require >education</label>
    <textarea class="form-control" id="validationTextarea" name="education" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
    Please enter a message in the textarea.
    </div>
    <label for="validationTextarea" class="form-label" require >courses</label>
    <textarea class="form-control" id="validationTextarea" name="courses" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
    Please enter a message in the textarea.
    </div>
    <label for="validationTextarea" class="form-label" require >Experians</label>
    <textarea class="form-control" id="validationTextarea" name="Experians" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
    Please enter a message in the textarea.
    </div>
    <div class="col-12 my-4">
    <button class="btn btn-primary" type="submit">create</button>
  </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
