<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontaktų formos pranešimas</title>
</head>
<body>

<h3>Pranešimas iš kontaktų formos</h3>
    <p><strong>Vardas:</strong> {{$data ['ContactFormName'] }}</p>
    <p><strong>El. paštas:</strong> {{$data ['ContactFormEmail'] }}</p>
    <p><strong>Klausimas:</strong> {{$data ['ContacFormSubject'] }}</p>
    <p><strong>Žinutė:</strong> {{$data ['ContactFormMessage'] }}</p>
</body>
</html>