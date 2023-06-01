<html>
  <head>
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/corals/1.0.1/corals.min.css" />
  </head>
  <body>
    <ul class="corals-grid corals-grid--2-cols corals-grid--3-cols@m corals-grid--4-cols@l">
      <li class="corals-card">
        <div class="corals-card__content" style="background-image">
          @foreach($heroImage as $img)
            <img width="30%" height="30%" src="{{ $img }}" alt="some" />
          @endforeach

         
          
        </div>
      </li>
    </ul>
  </body>
</html>
