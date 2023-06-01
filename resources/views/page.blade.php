<!doctype html>
<html lang="en">
  <head>
    <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $pageSeo['title'] }}</title>
    <meta name="description" content="{{ $pageSeo['description'] }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  </head>
  <body style="width: 100%;padding: 0%; background-color: #f4f1ed;">
  
        
        @foreach ($pageBody as $section)
                
        @if ($section['type'] === 'laravel_hero')
        <div id="banner" style="background-image: url('{{ $section['fields']['image'] }}');  background-repeat: no-repeat; background-size: cover;background-position: center;">
                    <div id="signup" style="background-color: rgba(0, 0, 0, 0.4);">
                        <div id="S_top">
                            <h1 id="welcomeText1">{{ $section['fields']['headline'] }}</h1>
                             <p id="welcomeText">{{ $section['fields']['sub-headline'] }}</p>
                        </div>
                        <div id="S_bot">
                            <div class="custom-bg-6">
                               <a href="{{ $section['fields']['button_url'] }}" style="text-decoration: none;color:inherit;"> <h4 >{{ $section['fields']['button_label'] }}</h4> </a>
                            </div>
                        </div>
                    </div>
        </div>
        <div id="slide">
        @elseif ($section['type'] === 'laravel_two_column_with_image')
            <div id="TwoColumns">
                <div id="Tleft">
                    <h2>{{ $section['fields']['heading'] }}</h2>
                    <h6>{!! $section['fields']['sub-heading'] !!}</h6>
                </div>
                <div id="Tright">
                    <img src="{{ $section['fields']['image'] }}" alt="Two Column Image" style="width:250px;height:380px;">
                </div>
            </div>
        </div>
        @elseif ($section['type'] === 'laravel_features')
          @if ($section['fields']['title'] === 'Accomodations')
          <h1 class="featureHeading">{{$section['fields']['title']}}</h1>
        <div class="features">
            
            @foreach ($section['fields']['features'] as $feature)
                <div class="featuresInner">
                    <div id="fTop">
                        <img src="{{ $feature['icon'] }}" alt="Component Icon" style="width:260px;height:160px">
                    </div>
                    <div class="fBottom">
                        <p>{{ $feature['description'] }}</p>
                        <h4>{{ $feature['name'] }}</h4>
                        <p>{{ $feature['additional'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
         @endif   
        
         @if ($section['fields']['title'] === 'Promos and Offers')
         <h1 class="featureHeading">{{$section['fields']['title']}}</h1>
        <div class="features">
            
            @foreach ($section['fields']['features'] as $feature)
                <div class="featuresInner">
                    <div id="fTop">
                        <img src="{{ $feature['icon'] }}" alt="Component Icon" style="width:260px;height:160px">
                    </div>
                    <div class="fBottom">
                        <h4>{{ $feature['name'] }}</h4>
                        <p>{{ $feature['description'] }}</p>
                        <p>{{ $feature['additional'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
            
         @endif
            @elseif ($section['type'] == 'laravel_testimonials')

            

            <div id="testimonials" style="background-image: url('{{ $section['fields']['image'] }}');  background-repeat: no-repeat; background-size: cover;background-position: center;">
                
            <div id="Theads">
                    <h2>{{ $section['fields']['headline'] }}</h2>
                </div>
                <div id="testimonials-carousel">
                @foreach ($section['fields']['testimonials'] as $testimony)
                    <div class="testimonial-item">
                    <h5>{{ $testimony['quote'] }}</h5>
                    <p style="margin-top:5px">{{ $testimony['name'] }}</p>
                    <p>{{ $testimony['title'] }}</p>
                    </div>
                @endforeach
                </div>

            </div>
            
            @elseif ($section['type'] == 'contact_us')
            <div id="contactUs">
                <h2 style="text-align:center">Contact Us</h2>
                <div id="firstBlock">
            
                    <h6>{{ $section['fields']['number'] }}</h6>
                    <h6>{{ $section['fields']['email'] }}</h6>
                    <h6>{{ $section['fields']['address'] }}</h6>

                </div>
                <div  id="secBlock">

                </div>
            

            </div>

            @endif     
                
        
    <!-- Optional JavaScript; choose one of the two! -->
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    @endforeach

   
  </body>
</html>
