<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>
<body class="bg-light">
   
    @include("layout.navbar")

    <div class="container ps-5 pe-5">
        <div class="row">
            <div class="col-12 p-2 text-center mt-4 mb-4  border-bottom-black">
                <h1>Welcome to my blog</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima illo, autem eligendi aliquid reiciendis? Libero, maiores. Voluptate impedit delectus, aperiam porro ipsam distinctio, explicabo et pariatur fuga quo reprehenderit?</p>

            </div>
        </div>

        <div class="row">
            @include('home.blog')
           
            <div class="col-lg-2 col-0"></div>

            <div class="col-lg-3 col-12 mt-5 ">

                <div class="row">
                    @include('home.trending')
                    @include('home.recent')
                    @include('home.tags')                              
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 g-0 mt-2">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page_item @if($page_number===1) disabled @endif">
                            <a href="/page={{$page_number-1}}" class="page-link">Previous</a>
                        </li>

                         @for ($i = 0; $i < ceil($total_blogs / $page_length); $i++)
                            <li class="page-item @if($page_number ===$i+1) active @endif">
                                <a class="page-link" href="/?page={{$i+1}}">{{$i+1}}</a>
                            </li>
                            
                         @endfor  

                        <li class="page_item @if($page_number >= ceil($total_blogs / $page_length)) disabled @endif">
                            <a href="/page={{$page_number+1}}" class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


    </div>

     <script type="module" src='{{asset('js/app.js')}}' defer></script>
    {{-- <script>

        function redirectTo(url){
             window.location.href = url;
        }

    </script> --}}

</body>
</html>

