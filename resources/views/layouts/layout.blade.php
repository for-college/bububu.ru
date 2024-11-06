<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=0.5">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>
<body>
<header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-2">
  @if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
      @auth
        <a
          href="{{ url('/logout') }}"
          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
          Logout
        </a>
      @else
        <a
          href="{{ route('login') }}"
          class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
          Log in
        </a>

        @if (Route::has('register'))
          <a
            href="{{ route('register') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
          >
            Register
          </a>
        @endif
      @endauth
    </nav>
  @endif
</header>

<main>
  @yield('content')
</main>


<footer>
  footer
</footer>
</body>
</html>
