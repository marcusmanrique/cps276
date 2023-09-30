
<html>
<head>
  <a href="https://getbootstrap.com/docs/5.3/forms/layout/">
    https://getbootstrap.com/docs/5.3/forms/layout/
  </a>
</head>

<div class="container">


    <form class="row g-3">
      <div class="col-md-6">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>Michigan</option>
        </select>
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Male
          </label>
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Female
          </label>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>


</div>

</html>