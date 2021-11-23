<html>
<head>
  <title>Message  Spam Detection</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
  .center-block {
    display: block;
    margin-right: auto;
    margin-left: auto;
    color: blue;
  }
</style>
<body>
  <div class="container center-block">
    <h3 class="text-center">MESSAGE SPAM DETECTION IN ENGLISH LANGUAGE</h3>
    <h6 class="text-center">The Model is 98% Accurate</h6>

    <div class="text-center">
      <form action="/sms-spam-detect" method="POST">
        @csrf
        <div class="form-group">
          <label for="year">Write your SMS message here:</label>
          <textarea class="form-control" id="message" name="message" cols="10" rows="7" placeholder="SMS Message here" required>{!!old('message')!!}</textarea>
        </div>
        @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <br />
        <button type="submit" class="btn btn-primary">Predict</button>
      </form>
    </div>
    <div>
      <h2 class="text-center">Sample Messages</h2>
      <div class="row">
        <div class="col-md-6">
          <h4 class="text-center">Normal Messages</h4>
          <hr />
          <ul>
            <li>
              I'm gonna be home soon and i don't want to talk about this stuff
              anymore tonight? I've cried enough today.
            </li>
            <li>
              Pls go ahead with watts. I just wanted to be sure. Do have a
              great weekend. Abiola
            </li>
            <li>
              Am not working but am up to eyes in philosophy so will text u
              later when a bit more free for chat...
            </li>
            <li>
              Havent mus ask if u can 1st wat. Of meet 4 lunch den u n him
              meet can already lor. Or u wan 2 go ask da ge 1st then confirm w
              me asap?
            </li>
            <li>Yes:)here tv is always available in work place..</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4 class="text-center">Spam Messages</h4>
          <hr />
          <ul>
            <li>
              YES! The only place in town to meet exciting adult singles is
              now in the Kenya. Txt CHAT to 86688 now! 150p/Msg
            </li>
            <li>Win a Â£1000 cash prize or a prize worth Ksh500000</li>
            <li>
              This weeks KBM member offers are now accessible. Just call
              0741209526 for details! KBM, POBOX 139, Thika,Kenya. Only
              ksh 13455/week. KBM - offers mobile!
            </li>
            <li>
               camara! Hotties chat now cheaper, call 0741209526.
              National rate from 1.5p/min cheap to 7.8p/min peak! To stop
              texts call 0 (10p/min)
            </li>
            <li>
              Our dating service has been asked 2 contact U by someone shy!
              CALL 0741209526 NOW all will be revealed. POBox84, Thika kenya 15000p
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
