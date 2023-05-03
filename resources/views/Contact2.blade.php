<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact to Treasure Solution</title>
</head>
<body>
    <section id="header" style="margin-bottom: 50px;">
        @include('header')
    </section>
    <main>
        <section id="contact">
            <h2>Contact Me</h2>
            <form action="{{ route('Contact') }}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
                <input type="submit" value="Send">
            </form>

            @if (session('status'))
                <p>{{ session('status') }}</p>
            @endif
        </section>
    </main>
</body>
</html>
