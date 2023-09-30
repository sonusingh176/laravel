<?php

declare(strict_types=1);

// declare(strict_types=1); enforces strict type checking in PHP,
// requiring functions and methods to receive and return data of the 
// expected types

namespace App\Modules\Blogs;// this will tell  where 'BlogsService'   code is located

use App\Models\Blogs; //import Blogs Model 

class BlogsRepository 
{
    public function getTotalCount():int
    {
        // return $this->respository->getTotalCount();
        // return 33;
        return Blogs::all()->count();
       
    }
  

    /**
     * @return Blogs[]
     */

    public function UIList(int $page, int $pageLength):array{
        return Blogs::with(["tags"])
            ->where("id", ">", 0)
            ->limit($pageLength)
            ->offset(($page-1) * $pageLength)
            ->get()
            ->toArray();

    }
}