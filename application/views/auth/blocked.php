<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/blocked.css'). '?v=' . time();?>">
    <title>403 Forbidden</title>
</head>
<body>
    <h1>Forbidden!</h1>
    <h2>Code 403</h2>
    <div id="jail">
        <svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xhtml="http://www.w3.org/1999/xhtml"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
            viewBox="0 0 1000 1000"
            preserveAspectRatio="xMinYMin"
            id="spinner"
            >
            <defs>
            <path id="textPath" d="M 250 500 A 250,250 0 1 1 250 500.0001"/>
            </defs>
            <text x="0" y="0" text-anchor="left" style="font-size:90pt;"><textPath xlink:href="#textPath" startOffset="0%" >MOUSE JAIL</textPath><textPath xlink:href="#textPath" startOffset="50%" >MOUSE JAIL</textPath></text>
        </svg>
        <div id="cursor"></div>
    </div>
    <p class="credit">Credit By :<a href="https://codepen.io/joshuaseigler/pen/gPxoZZ">Joshua Sigler</a></p>
    <script src="<?= base_url('assets/js/blocked.js')?>"></script>
</body>
</html>