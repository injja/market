<?php


namespace App\Services\Categories;

use App\Models\Items\Category;


class CategoryService
{
    public Category $categoryModel;
    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }


    public function create($newCategory)
    {
        return $this->categoryModel::create($newCategory);
    }
    public function get($id)
    {
        $category = $this->categoryModel->find($id);
        return $category;
    }
    public function destroy($id)
    {
        return $this->categoryModel->destroy($id);
    }
    public function update($newCategory, $id)
    {
        $category = $this->get($id);
        return $category->update($newCategory);
    }
}
