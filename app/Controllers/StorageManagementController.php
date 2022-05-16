<?php

namespace App\Controllers;

class StorageManagementController extends BaseController
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
        return view('ItemType/CreateItem');
    }
    public function editItemType()
    {
        return view('ItemType/EditItem');
    }
    public function listItems()
    {
        return view('ItemType/ItemTypeList');
    }
}
