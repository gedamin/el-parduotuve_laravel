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

<p>Pranešimas iš kontaktų formos</p>

{{--{{dump($data)}}--}}
<p>Vardas: {{$data ['ContactFormName'] }}</p>
<p>El. paštas: {{$data ['ContactFormEmail'] }}</p>
<p>Klausimas: {{$data ['ContacFormSubject'] }}</p>
<p>Žinutė: {{$data ['ContactFormMessage'] }}</p>

</body>
</html>