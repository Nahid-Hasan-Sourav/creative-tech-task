<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    
    <title>Hello, world!</title>
  </head>
  <body>
  

    <div class="section-top container">
       <div class="section-top top-flex">
        <h1>Start Time : 4:30</h1>
        <h1>End Time : 5:30</h1>
       </div>

       <div class="main-section">
        <div class="left-sidebar">
          <h6>Name : Nahid Hasan Sourav</h1>
          <h6>Designation : Full Stack Developer</h6>
          <h5>About</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora error veritatis mollitia temporibus laborum minima illo, deserunt optio natus consequuntur necessitatibus perspiciatis consectetur! Debitis iure rem, dolores impedit beatae expedita labore ipsam, unde obcaecati vitae sed quaerat sequi at autem vel sint cum magnam accusamus modi commodi voluptatibus? Tenetur sunt aperiam fugit rem incidunt vel aliquam sed eveniet corrupti saepe.</p>
        </div>
        <div class="right-body">
           <section class="right-content">
            @foreach ($posts as $post)
            <div class="cards">
                <img src="{{ asset( $post->image) }}" alt="{{ $post->title }}"> 
                <p ><span class="titles">Title : </span>{{  $post->title }}</p>
                <div >
                   <span  class="titles">Description : </span>
                    <span>
                        {{$post->description }}
                    </span>
                </div>
            </div>
             @endforeach
         

           </section>
           <section class="footer-content">
            <h3><a href="https://github.com/Nahid-Hasan-Sourav/creative-tech-task">Git Repository </a> </h3>
           </section>
        </div>
       </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
   <style>
    .top-flex{
        display: flex;
        justify-content: space-between;
        background-color: #cce5ff;
        padding: 20px;
    }
    .main-section {
            display: grid;
            grid-template-columns: 1fr 3fr; 
            gap: 20px; 
        }

        .left-sidebar {
            background-color: #cce5ff;
            padding:20px; 
        }

        .right-body {
            background-color: #f0f0f0; 
            padding:30px 10px 10px 10px; 
        }
        .right-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px; 
        }

        .right-content div {
            border: 1px solid #ddd;
            padding: 20px; 
            text-align: center;
        }
        img{
            height:40%;
            width: 100%;
        }
        .titles{
            font-size: 20px;
            font-weight: bold;
        }
        .cards{
            padding: 20px;
        }
        .footer-content{
            background: rgb(193, 193, 222);
        }

   </style>
   
  </body>
</html>