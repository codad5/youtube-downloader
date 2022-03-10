<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube DownLoader</title>
    <style>

        :root{
            --red-color:#f22;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            
        }

        header, footer, main, section {
            width:100vw;
            
        }

        main{
            height:90vh;
        }

        .header_title{
            width: 100%;
            text-align: center;
            padding:0.5rem 0;
        }

        .link_form{
            width:100%;
            display:flex;
            justify-content: center;
        }

        .link_form form{
            height:70px;
            width:clamp(300px, 50%, 400px);
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .link_form form input{
            flex-basis: 70%;
            height: 100%;
            border:solid 2px var(--red-color);
            padding:0 0.5rem;
            font-size:1rem;
        }
        .link_form form button{
            flex-basis: 30%;
            height: 100%;
            background: var(--red-color);
            border: none;
        }


        /* footer */

        footer{
            width:100vw;
            height:200px;
            background:#111;
            position:relative;
        }

        .footer_after{
            content: "?";
            position:absolute;
            top:-30px;
            width:60px;
            height:60px;
            background:var(--red-color);
            display:grid;
            place-items: center;
            color:#fff;
            font-size: 2rem;
            left:50px;
            transform: rotateZ(45deg);
            
        }
        
        .footer_after_text{
            
            transform: rotateZ(-45deg);
        }

        .footer_header{
            width:100%;
            height:50px;
            padding: 0 20%;
            color:var(--red-color);
            
        }

        .footer_header_text{
            height:100%;
            display: grid;
            place-items: center;
            font-size:2rem;
            justify-content: center;
            align-items: center;
        }

        .footer_header_text sub,.footer_header_text sup{
            height: 80%;
            flex-basis:20px;
            display:inline-block;
        }
        .footer_header_text sub{
            display:inline-flex;
            align-items:flex-end;
            font-size:0.8rem;
        }
    </style>
</head>
<body>
    <main>
        <h1 class="header_title">Youtube DownLoader</h1>
        <h3 class="header_title">Paste Url</h3>
        <div class="link_form">
            <form action="" method="get">
                <input type="url" name="url" id="url">
                <button type="submit">CONVERT</button>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer_header">
                <h2 class="footer_header_text">YouTube DownLoader</h2>
            </div>
        <div class="footer_header "  >
                <h3 class="footer_header_text" style='font-size:1.2rem;display:flex;'> <sub>By</sub> &nbsp;  ANIEZEOFOR CHIBUEZE MICHAEL &nbsp;<sup> Codad5</sup></h2>
            </div>
        <div class="footer_after">
            

            <span class="footer_after_text">
                ?
            </span>
        </div>

    </footer>
</body>
</html>