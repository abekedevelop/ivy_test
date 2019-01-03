<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>
<body>
    <form method="post" id="form" enctype="multipart/form-data">
        @csrf
        <label for="name">Enter your name</label>
        <input type="text" id="name" name="name"><br/>
        <label for="surname">Enter your surname</label>
        <input type="text" id="surname" name="surname"><br/>
        <label for="email">Enter your email</label>
        <input type="email" id="email" name="email"><br/>
        <label for="phone">Enter your phone number</label>
        <input type="tel" id="phone" name="phone"><br/>
        <label for="password">Enter your phone password</label>
        <input type="password" id="password" name="password"><br/>
        <button type="button" id="submit" onclick="sendForm()">Send data</button>
    </form>
<script>
    function sendForm() {
        let form = document.querySelector('form');
        let data = new FormData(form);
        let xhr = new XMLHttpRequest();
        xhr.open('POST','/submit');
        xhr.send(data);
//        let myHeaders = new Headers({
//            "Content-Type": "text/plain",
//            "X-Custom-Header": "ProcessThisImmediately",
//            "X-CSRF-TOKEN": document.querySelector('[name="csrf-token"]').getAttribute('content')
//        });
//        fetch('/submit', {
//            method: 'POST',
//            data: data,
//            headers: myHeaders
//        }).then( response => response.json())
//            .then(data => {
//                let d = data.results;
//                console.log(d)
//            })
    }
</script>
</body>
</html>