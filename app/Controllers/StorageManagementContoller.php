<?php

namespace App\Controllers;

class StorageContoller extends BaseController
{
    public function index()
    {
        return view('Item/ItemDashboard');
    }
    public function createItem()
    {
        return view('Item/CreateItem');
    }
    public function editItem()
    {
        return view('Item/EditItem');
    }
    public function listItem()
    {
        return view('Item/ItemList');
    }
    public function createItemType()
    {
        return view('Item/CreateItem');
    }
    public function editItemType()
    {
        return view('Item/EditItem');
    }
    public function listItems()
    {
        return view('Item/ItemTypeList');
    }
}
