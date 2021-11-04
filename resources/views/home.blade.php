<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .stolen_box{
                height: 100vh;
                align-items: center;
                display: flex;
                justify-content: center;
                position: relative;
                /* text-align: center; */
            }
            h3{
                text-align:right;
                margin: 30px 0;
            }
            .title {
                font-size: 84px;
                /* margin-bottom: 30px; */
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>

        <div class="stolen_box">
            
               
            <div class="content">
                <div class="title">Hello World</div>
                <h3>My name is {{$name}} {{$surname}}</h3>
                <div class="links">
                    
                    @foreach ($links as $link)
                    <a href="{{$link['url']}}">{{$link['linkName']}}</a>
                    @endforeach
                 
                </div>
            </div>
        </div>
        
    </body>
</html>