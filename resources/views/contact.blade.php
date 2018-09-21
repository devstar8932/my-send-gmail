<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <title>Contact</title>
</head>
<body>
  <div class="row">
    <div class="col-md-12">
      <h3>Contact me</h3>
      <hr>
      <form action="{{url('contact')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label name="email">Email</label>
          <input id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <label name="subject">Subject</label>
          <input id="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
          <label name="message">Message</label>
          <textarea id="message" name="message" class="form-control">
            Type your message here...
          </textarea>
        </div>

        <input type="submit" value="Send message" class="btn btn-success">
      </form>
    </div>
  </div>
</body>
</html>