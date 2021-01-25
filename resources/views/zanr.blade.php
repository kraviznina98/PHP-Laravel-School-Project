@extends('master')

@section('title','Svi')

<style>
    html {
    background: #e9e9e4;
    -webkit-font-smoothing: antialiased;
  }

  /*section*/
  .top-movies {
    font-size: 0;
    background: #bfd5e0;
    background: radial-gradient(400px at 50%, #d9dbd8 0%, #bfd5e0 100%);
    padding: 45px 0;
    box-shadow: inset 0 -5px 8px 0 rgba(0, 0, 0, 0.05);
    font-family: system, -apple-system, ".SFNSDisplay-Regular", HelveticaNeue, LucidaGrande;
  }

  /*h1*/
  .top-movies__title {
    font-size: 22px;
    color: #444e50;
    margin: 0 0 14px;
    text-shadow: 0 2px 1px rgba(255, 255, 255, 0.1);
  }

  select {
    font-size: 14px;
    color: #444e50;
    margin: 0 0 14px;
    margin-top: 0px;
    text-shadow: 0 2px 1px rgba(255, 255, 255, 0.1);
  }

  .section-content {
    width: 94%;
    margin: 10px auto;
  }
  @media only screen and (min-width: 1022px) {
    .section-content {
      width: 100%;
      max-width: 960px;
    }
  }

  /*article*/
  .card {
    box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.3);
    position: relative;
    width: 150px;
    margin: 0 auto;
    transition: box-shadow 0.15s ease-out, transform 0.25s ease;
    perspective: 500px;
    perspective-origin: 50% 50%;
    transform-style: preserve-3d;
    margin: 30px 10px;

  }
  .card:hover {
    transform: scale(1.1);
    box-shadow: none;
  }
  .card.hover--ending {
    transition: box-shadow 0.5s ease;
  }
  @media only screen and (min-width: 540px) {
    .card {
      display: inline-block;
    }
  }

  /*span*/
  .highlight {
    display: block;
    position: absolute;
    width: 100px;
    height: 100px;
    top: 0;
    right: 0;
    opacity: 0;
    z-index: 3;
    transition: opacity 0.25s ease;
    background: radial-gradient(60px at 50%, rgba(255, 255, 255, 0.13) 0%, rgba(255, 255, 255, 0) 100%);
  }

  /*a*/
  .card__link {
    display: block;
    position: relative;
    width: 150px;
    height: 228px;
    overflow: hidden;
    transform-origin: center center;
    transform-style: preserve-3d;
  }

  /*img*/
  .card__image {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
  }

  /*h2*/
  .card__title {
    font-size: 14px;
    width: 100%;
    height: 24px;
    line-height: 24px;
    text-align: center;
    color: #FFFFFF;
    position: absolute;
    left: 0;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    opacity: 0;
    transition: opacity 0.15s ease-in;
    text-shadow: 0 2px 2px rgba(0, 0, 0, 0.06);
    /*article*/
  }
  .card:hover .card__title {
    opacity: 0.8;
  }

  button:focus {
      outline: none;
  }
  button:hover {
     cursor: pointer;
  }


</style>

@section('content')

        <section class="top-movies" style="height: 100vh;">
        <div class="section-content">
            <h1 style="display: inline-block;" class='top-movies__title'>{{$zanr->naziv}}</h1>
            <button id="addNewMovie" style="display: inline-block; margin-right: 20px; margin-left: 20px; background-color: #5cb85c; color: #fff; border: none; padding: 4px 7px;"><i class="fa fa-plus"></i></button>

            <form style="display: none;" id="newMovieForm" action="/add-film" method="post">
            {{ csrf_field() }}
            <input type="text" name="naslov" placeholder="naslov">
            <input type="text" name="opis" placeholder="opis">
            <input type="text" name="trajanje" placeholder="trajanje">
            <input type="text" name="reziser" placeholder="reziser">
            <input type="text" name="poster" placeholder="poster(url)">
            <input type="number" name="rejting" placeholder="rejting">
            <input style="display:none;" type="text" name="zanr_id" value="{{$zanr->id}}">
            <button type="submit">Save</button>
            </form>

            <select style="visibility: hidden; margin-left: 90%; display: inline-block; background-color: black; color: white;">

            <a style="border: 2px solid orange;" href="#"><option style="background-color: black; color: white;">{{$zanr->naziv}}</option></a>
            <a style="border: 2px solid orange;" href="#"><option style="background-color: black; color: white;">{{$zanr->naziv}}</option></a>
            <a style="border: 2px solid orange;" href="#"><option style="background-color: black; color: white;">{{$zanr->naziv}}</option></a>

            </select>


            @foreach($zanr->filmovi as $film)
            <article class="card">
                <a href="{{$zanr->id}}/{{$film->id}}" class="card__link">
                    <span class="highlight"></span>
                    <img src="{{$film->poster}}" alt="{{$film->naslov}}" class="card__image" />
                </a>
                <h2 class='card__title'>{{$film->naslov}}</h2>
                <a href="{{$zanr->id}}/{{$film->id}}">Procitaj vise..</a>
            </article>
            @endforeach

        </div>
    </section>

    <script>

var button2 = document.getElementById("addNewMovie");
var form2 = document.getElementById("newMovieForm");


button2.addEventListener("click", function() {
    if(form2.style.display === 'block') {
        form2.style.display = 'none';
   }else {
        form2.style.display = 'block';
    }
});



        $card	= $( '.card' );

$card.on( 'mousemove', function( e ) {
	var $this		= $( this ),
		eX			= e.offsetX,
		eY			= e.offsetY,
		dim			= this.getBoundingClientRect();
		w			= dim.width/2,
		h			= dim.height/2,
		tiltLimit	= 15,
		posX		= ( h - eY ) * ( tiltLimit / h );
		posY		= ( w - eX ) * ( tiltLimit / w ) * -1;

	$this.find( 'a' ).css({
		'transform': 'rotateX( ' + posX + 'deg ) rotateY( ' + posY + 'deg )',
		'box-shadow': ( posY * -1 ) + 'px ' + ( posX + 14 ) + 'px 34px 0 rgba( 0, 0, 0, 0.1 )'
	});

	$this.find( '.highlight' ).css({
		'opacity': 1,
		'transform': 'translate3d( ' + ( posX * -4 ) + 'px, ' + ( posY * -4 ) + 'px, '  + '0 )'
	});
});

$card.mouseleave( function( e ) {
	var $el = $( this ).find( 'a' );

	$el.removeAttr( 'style' ).addClass( 'hover--ending' );

	setTimeout( function() {
		$el.removeClass( 'hover--ending' );
	}, 500 );

	$el.find( '.highlight' ).removeAttr( 'style' );
});
    </script>

@endsection
