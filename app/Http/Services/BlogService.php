<?php

namespace App\Http\Services;

use App\Models\BlogModel;
use Ramsey\Collection\Collection;

class BlogService
{

    /**
     * Create
     *
     * @param array $data
     * @return BlogModel
     */
    public function create(array $data): BlogModel
    {
        $blogData['message'] = $data['message'];
        $blogData ['name']   = auth()->user()->name;
        $blogData['email']   = auth()->user()->email;

        return BlogModel::create($blogData);
    }

    /**
     * My blog
     *
     */
    public function myBlog($sort)
    {
        $email =auth()->user()->email;

        return BlogModel::where('email', $email)
            ->orderBy('created_at', $sort)
            ->get();
    }

    /**
     * One blog
     *
     * @param int $id Id
     */
    public function oneBlog(int $id)
    {
        return BlogModel::find($id);
    }

    /**
     * One blog update
     *
     * @param array $data Data
     */
    public function oneBlogUpdate(array $data)
    {

        $blog = BlogModel::find($data['id']);

        $blog->message =$data['message'];

        $blog->save();
    }

    /**
     * One blog delete by id
     *
     * @param int $id ID
     */
    public function oneBlogDelete (int $id)
    {
       return BlogModel::find($id)->delete();
    }

}
