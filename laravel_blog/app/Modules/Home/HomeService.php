<?php 

declare(strict_types=1);
namespace App\Modules\Home;
use App\Modules\Blogs\BlogsService;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Log; // Import the Log class


class HomeService
{
    const PAGE_LENGTH =10;

    //inject our BlogsServices file here. This will create Instance of BlogService Here , so we can use its methods & Variables.
  public function __construct(
    private readonly BlogsService $service  //give it to  a name $service.
  )
  {
    
  }

    public function home(Request $request):array
    {
        $totalCount =$this->service->getTotalCount();
        $page=$this->getPageNumber($request,$totalCount);
        $blogs= $this->service->UIList($page,self::PAGE_LENGTH);
       

        return  [
                "title" => "My Blog",
                "page_length" =>self::PAGE_LENGTH,
                "total_blogs" =>$totalCount, //get the total number of blog from BlogService Modules.
                "page_number" =>$page,
        
                "blogs" => $this->service->UIList($page,self::PAGE_LENGTH),
                   
                   
                   

                    
                
                    "trending" =>[
                        [
                        "url" =>"/",
                        "is_trending" => true,
                        "author" => "sonu",
                        "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                        "image_url_portait" => "https://picsum.photos/200/300",
                        "image_url_landscape" => "https://picsum.photos/536/354",
                        "title" => "Laravel websocket | Chat Application",
                        "date" =>"August 27, 2023",
                        "description" => "how to learn about websocket development",
                        "tags" =>"tag1,tag2,tag3"
                        ],
                        [
                            "url" =>"/",
                            "is_trending" => true,
                            "author" => "sonu",
                            "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                            "image_url_portait" => "https://picsum.photos/200/300",
                            "image_url_landscape" => "https://picsum.photos/536/354",
                            "title" => "Laravel websocket | Chat Application",
                            "date" =>"August 27, 2023",
                            "description" => "how to learn about websocket development",
                            "tags" =>"tag1,tag2,tag3"
                        ],
                        [
                            "url" =>"/",
                            "is_trending" => true,
                            "author" => "sonu",
                            "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                            "image_url_portait" => "https://picsum.photos/200/300",
                            "image_url_landscape" => "https://picsum.photos/536/354",
                            "title" => "Laravel websocket | Chat Application",
                            "date" =>"August 27, 2023",
                            "description" => "how to learn about websocket development",
                            "tags" =>"tag1,tag2,tag3"
                            ]
                        ],
        
                    "recents" =>[
                        [
                        "url" =>"/",
                        "is_trending" => true,
                        "author" => "sonu",
                        "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                        "image_url_portait" => "https://picsum.photos/200/300",
                        "image_url_landscape" => "https://picsum.photos/536/354",
                        "title" => "Laravel websocket | Chat Application",
                        "date" =>"August 27, 2023",
                        "description" => "how to learn about websocket development",
                        "tags" =>"tag1,tag2,tag3"
                        ],
                        [
                            "url" =>"/",
                            "is_trending" => true,
                            "author" => "sonu",
                            "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                            "image_url_portait" => "https://picsum.photos/200/300",
                            "image_url_landscape" => "https://picsum.photos/536/354",
                            "title" => "Laravel websocket | Chat Application",
                            "date" =>"August 27, 2023",
                            "description" => "how to learn about websocket development",
                            "tags" =>"tag1,tag2,tag3"
                        ],
                        [
                            "url" =>"/",
                            "is_trending" => true,
                            "author" => "sonu",
                            "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
                            "image_url_portait" => "https://picsum.photos/id/237/200/300",
                            "image_url_landscape" => "https://picsum.photos/id/237/536/354",
                            "title" => "Laravel websocket | Chat Application",
                            "date" =>"August 27, 2023",
                            "description" => "how to learn about websocket development",
                            "tags" =>"tag1,tag2,tag3"
                            ]
                        ],
                    "tags" => [
                                [
                                    "url" => "/",
                                    "name" => "laravel"
                                ],
                                [
                                    "url" => "/",
                                    "name" => "laravel"
                                ],
                                [
                                    "url" => "/",
                                    "name" => "laravel"
                                ]
                    ]
                ];
        


    }

    private function getPageNumber(Request $request,int $totalCount):int
    {
        $maxNumberOfPages=ceil($totalCount/self::PAGE_LENGTH);
        $page=$request->query("page",1);
        
        try {
            $request->validate(
                ["page" =>"numeric|min:1|max:$maxNumberOfPages"],
                ["page" => $page]
            );
           
        } catch (ValidationException $error) {
            Log::error($error->getMessage());
            abort(404);
         
        }
        return (int)$page;
    }
}