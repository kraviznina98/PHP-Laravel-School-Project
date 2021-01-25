@extends('master')

@section('title','Film')

<style>

@import url("https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Spectral+SC");
body {
  background: #070000;
  background: -webkit-linear-gradient(to right, #070000, #4C0001, #070000);
  background: linear-gradient(to right, #070000, #4C0001, #070000);
}

.wireframe-title {
  text-align: center;
  color: #fff;
  font: 400 36px Helvetica, sans-serif;
  margin-bottom: 10px;
}

.iphone-container {
  width: 400px;
  height: 90vh;
  background: #fff;
  overflow-y: scroll;
  border: 5px solid #000;
  border-radius: 30px;
  margin: 0 auto;
  position: relative;
  overflow-x: hidden;
  overflow-y: hidden;
}

main {
  width: 100%;
  height: 100%;
}
main .movie {
  background: url({{$film->poster}}) no-repeat 70% 30%;
  background-size: cover;
  height: 53vh;
  width: 400px;
  border-bottom: 1px solid #333;
  border-top-right-radius: 15px;
  border-top-left-radius: 15px;
  position: relative;
  display: flex;
  justify-content: center;
}

main .movie header h1 {
  margin: 0;
  font: 400 24px "Roboto", sans-serif;
  color: #fff;
  line-height: 40px;
}
main .movie footer {
  width: 400px;
  height: 70px;
  align-self: flex-end;
  position: absolute;
  left: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #373737 100%);
}
main .description {
  background: #171717;
  width: 100%;
  height: 37vh;
  padding: 20px;
  box-sizing: border-box;
}
main .description h1 {
  margin: 0;
  padding: 0;
  color: #fff;
  font: 400 32px "Spectral SC", sans-serif;
}
main .description ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  border-bottom: 1px solid #333;
}
main .description ul.genre {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 30px;
  font: 400 12px "Roboto Mono", sans-serif;
}
main .description ul.additionalinfo {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
  line-height: 40px;
  text-align: left;
}
main .description ul li {
  padding-right: 2px;
  color: #fff;
}
main .description ul li:last-child {
  padding-right: 0;
}
main .description ul li p.highlight {
  font: 400 32px "Roboto", sans-serif;
  margin: 8px 0 0 0;
  padding: 0;
}
main .description ul li p.label {
  font: 400 12px "Roboto Mono", sans-serif;
  margin: 0 0 8px 0;
  padding: 0;
}
main .description p.about {
  color: #fff;
  font: 400 16px "Roboto", sans-serif;
  border-bottom: 1px solid #333;
  margin: 0;
  padding: 20px 0;
}
main .description .director {
  border-bottom: 1px solid #333;
}
main .description .director h2 {
  font: 400 16px "Roboto", sans-serif;
  color: #fff;
}
main .description .director .user {
  display: grid;
  grid-template-columns: 1fr 9fr;
  grid-template-rows: 1fr;
  font: 400 14px "Roboto", sans-serif;
  color: #fff;
  line-height: 30px;
  margin: 10px 0;
}
main .description .director .user p {
  margin: 0;
  padding: 0;
}
main .description .cast.double {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: auto;
}
main .description .cast h2 {
  font: 400 16px "Roboto", sans-serif;
  color: #fff;
}
main .description .cast .user {
  display: grid;
  grid-template-columns: 1fr 4fr;
  grid-template-rows: 1fr;
  font: 400 14px "Roboto", sans-serif;
  color: #fff;
  line-height: 30px;
  margin: 10px 0;
}
main .description .cast .user p {
  margin: 0;
  padding: 0;
}
</style>

@section('content')


<div class="iphone-container" style="margin-top: 35px;">
  <main>
    <div class="movie">

    </div>
    <div class="description">

      <h1>{{$film->naslov}}</h1>
      <ul class="genre">
        <li style="width: 300px;">Movie by {{$film->reziser}}</li>
      </ul>

      <p class="about">
      {{$film->opis}}
      </p>

      <ul class="additionalinfo">
        <li class="runtime"><p class="highlight">{{$film->trajanje}}</p><p class="label">Total Time</p> </li>
        <li class="rating">
          <p class="highlight">{{$film->rejting}}</p><p class="label">Rating</p> </li>
      </ul>


    </div>
  </main>
</div>

@endsection
