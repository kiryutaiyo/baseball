<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        <h1 class="date">
            {{ $game->date }}
        </h1>
        
        <div class="content">
            
            <div class="content__game">
                <p class='time'>{{ $game -> time}}試合開始</p>
                <p class='place'>{{ $game -> place -> name}}</p>
                <p class='team_1'>{{ $game -> team1 -> name}}</p>
                <p class='team_2'>{{ $game -> team2 -> name}}</p>    
            </div>
            
        </div>
        
        <div class="footer">
            <a href="/games">戻る</a>
        </div>
    </body>
</html>