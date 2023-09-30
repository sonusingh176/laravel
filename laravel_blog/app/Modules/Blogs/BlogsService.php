<?php

declare(strict_types=1);

// declare(strict_types=1); enforces strict type checking in PHP,
// requiring functions and methods to receive and return data of the 
// expected types

namespace App\Modules\Blogs;// this will tell  where 'BlogsService'   code is located
use App\Modules\Blogs\BlogsRepository;

class BlogsService
{
    public function __construct(
        private readonly BlogsRepository $repository
    )
    {
        
    }

    //this will call repository for total count of blog, not call database here. 
    public function getTotalCount() :int
    {
        return $this->repository->getTotalCount();
    }

    public function UIList(int $page, int $pageLength):array{
        // $blogs=$this->repository->UIList($page,$pageLength);
        // dd($blogs);

        return $this->repository->UIList($page,$pageLength);
      

    }
}