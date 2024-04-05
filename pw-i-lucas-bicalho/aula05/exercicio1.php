<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function mudaCor(novaCor){
            const elem = document.getElementById("paragrafo";)
            elem.style.color = novaCor;
        }
    </script>
</head>
<body>
        <p id="paragrafo">Textinho</p>
        <button onclick = "mudaCor('blue');">blue</button>
        <button onclick = "mudaCor('red');">red</button>
    
</body>
</html>