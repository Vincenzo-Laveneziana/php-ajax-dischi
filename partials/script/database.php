<?php 

  $albums = [
    [
      "poster" => "https://m.media-amazon.com/images/I/51oCus3FkJL._SS500_.jpg",
      "title" => "Love",
      "author" => "Thegiornalisti",
      "year" => "2018",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/91Dnsr1+OrL._SS500_.jpg",
      "title" => "Good Times",
      "author" => "Ghali",
      "year" => "2020",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/81DH2FECgIL._SS500_.jpg",
      "title" => "Il ballo delle incertezze",
      "author" => "Ultimo",
      "year" => "2018",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/71MyHmXGziL._SS500_.jpg",
      "title" => "Safe and Sound",
      "author" => "Ultimo",
      "year" => "2018",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/718LCOi83zL._SS500_.jpg",
      "title" => "Il posto dei santi",
      "author" => "Negramaro",
      "year" => "2015",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/816ByJ91MXL._SS500_.jpg",
      "title" => "Caramelle",
      "author" => "J-AX con Neffa",
      "year" => "2014",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/81K6oi+IzML._SS500_.jpg",
      "title" => "Dall'alba al tramonto",
      "author" => "Ermal Meta",
      "year" => "2018",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/71VPhMi6R8L._SS500_.jpg",
      "title" => "La Serenissima",
      "author" => "Rondò Veneziano",
      "year" => "1979",
    ],
    [
      "poster" => "https://m.media-amazon.com/images/I/71+H-bohdhL._SS500_.jpg",
      "title" => "Una Vita In Vacanza",
      "author" => "Lo Stato Sociale",
      "year" => "2018",
    ],
  ];

  header("Content-Type: application/json");

  echo json_encode($albums);

?>