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
        return view('ItemType/CreateItemType');
    }
    public function editItemType()
    {
        return view('ItemType/EditItemType');
    }
    public function listItems()
    {
        return view('ItemType/listItemType');
    }
}
