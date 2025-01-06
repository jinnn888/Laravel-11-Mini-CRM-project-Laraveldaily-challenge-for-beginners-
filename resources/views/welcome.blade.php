<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  {{-- JetBrains Mono Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
  
  {{-- Animation --}}
    <style type="text/css">
    .animated {
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }
    .animated.show {
      transform: translateY(100%);
      opacity: 1;
    }
  </style>


  {{--  --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
  <header class='w-[100vw] h-[50vh] bg-blue-900'>
    <div class='w-full h-full flex items-center justify-center'>
      <h2 
        class=' animated font-bold text-white text-6xl' 
        style='font-family: "JetBrains Mono";'>Simple CRM Project</h2>      
    </div>
  </header>


  <section 
    class='px-12 h-fit flex items-center justify-center bg-white '>
    <div class='flex flex-col gap-2'>
      <a 
      href="/login" 
      class='animated bg-blue-700 text-white font-bold  w-[300px] p-4 shadow-md text-gray-800 rounded'>Login</a>

       <a 
      href="/register" 
      class='border border-2 border-blue-700 text-blue-700 font-bold animated w-[300px] p-4 
      shadow-md text-gray-800 rounded'>Sign Up</a>

    </div>
  </section>

  {{-- Onload Animation Script --}}
  <script type="text/javascript" defer>
     const animatedElements = document.querySelectorAll('.animated');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        // If the element enters the viewport add the show animation
        if (entry.isIntersecting) {
          console.log(entry.target)
          entry.target.classList.add('show');
        } else {
          entry.target.classList.remove('show');
        }
      })
    })

    animatedElements.forEach(function(element) {
      observer.observe(element)
    });


  </script>

</body>
</html>