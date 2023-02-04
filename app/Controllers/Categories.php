<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    protected $categoryModel;
    protected $subCategoryModel;
    protected $session;

    public function __construct()
    {
        $this->categoryModel = new \App\Models\CategoryModel();
        $this->subCategoryModel = new \App\Models\SubCategoryModel();
        helper(['url', 'form']);
        $this->session = session();
    }

    public function CategoryList()
    {
        $data['categories'] = $this->categoryModel->findAll();

        return view('AdminDash/CategoryListView', $data);
    }

    public function subCategoryList()
    {
        $data['sub_category'] = $this->subCategoryModel->findAll();

        return view('AdminDash/subCategoryview', $data);
    }

    public function addCategory()
    {
        $features = $this->request->getPost('features[]');
        $img = $this->request->getFile('image');
        if (count($features) > 1) {
            $feature = $features[0] . ',' . $features[1];
        } else {
            $feature = $features[0];
        }

        if (!$img->hasMoved()) {
            $img->move(FCPATH . 'img/category');
            $data = [
                'category_name' => $this->request->getPost('name'),
                'product_features' => $feature,
                'category_image' => $img->getClientName(),

            ];
            $this->categoryModel->insert($data);
        }
        return redirect()->route('categoryList');
    }
    public function addSubCategory()
    {
        $img = $this->request->getFile('image');

        if (!$img->hasMoved()) {
            $img->move(FCPATH . 'img/sub_category');
            $data = [
                'sub_category_name' => $this->request->getPost('name'),
                'category_id' => $this->request->getPost('category'),
                'sub_category_image' => $img->getClientName(),

            ];
            $this->subCategoryModel->insert($data);
        }
        return redirect()->route('subCategory');
    }
    public function updateCategory()
    {
        $size = $this->request->getPost('size');
        $color = $this->request->getPost('color');
        $features = '';
        if (isset($color) && isset($size)) {
            $features = 'size,color';
        } elseif (isset($color) && !isset($size)) {
            $features = 'color';
        } elseif (!isset($color) && isset($size)) {
            $features = 'size';
        }

        $img = $this->request->getFile('image');
        $id = $this->request->getPost('id');
        $data = [
            'category_name' => $this->request->getPost('name'),
            'product_features' => $features,
        ];
        if ($_FILES['image']['name']) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/category');
                $data['category_image'] =  $img->getClientName();
            }
        }


        $this->categoryModel->update($id, $data);
        return redirect()->route('categoryList');
    }

    public function updateSubCategory()
    {
        $img = $this->request->getFile('image');
        $id = $this->request->getPost('id');
        $data = [
            'sub_category_name' => $this->request->getPost('name'),
        ];
        if ($_FILES['image']['name']) {
            if (!$img->hasMoved()) {
                $img->move(FCPATH . 'img/sub_category');
                $data['sub_category_image'] =  $img->getClientName();
            }
        }

        $this->subCategoryModel->update($id, $data);
        return redirect()->route('subCategory');
    }

    public function statusUpdate($id, $status)
    {
        $this->categoryModel->set('status', $status)->where('id', $id)->update();
        $this->session->setFlashdata('success', 'Status has been updated succesfully');

        return redirect()->route('categoryList');
    }
    public function subStatusUpdate($id, $status)
    {
        $this->subCategoryModel->set('sub_category_status', $status)->where('id', $id)->update();
        $this->session->setFlashdata('success', 'Status has been updated succesfully');

        return redirect()->route('subCategory');
    }

    public function subCategory()
    {
        $data = [
            'sub_category' => $this->subCategoryModel->select('*, sub_category.id')
                ->join('product_category', 'sub_category.category_id = product_category.id', 'inner')
                ->get()->getResultArray(),
            'category_name' => $this->categoryModel->findAll(),

        ];

        return view('admindash/subcategoryview', $data);
    }
    public function category($id)
    {
        $data = [
            'categories' => $this->categoryModel
                ->where('id', $id)->find(),
        ];
        return view('admindash/categorylistview', $data);
    }
}
