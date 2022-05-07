<!DOCTYPE html>
<html lang="en">
<head>
  <title>Invitation #</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Invitation #</h2>
  <form action="{{ route('store_user_new') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" id="name" required placeholder="Enter name" name="name">
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" required placeholder="Enter phone" name="phone">
      </div>
      <div class="form-group">
        <label for="text">The number of people:</label>
        <input type="text" class="form-control" id="text" required placeholder="The number of people" name="people_number">
      </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
