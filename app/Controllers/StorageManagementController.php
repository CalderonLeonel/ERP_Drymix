<?php

namespace App\Controllers;

class StorageManagementController extends BaseController
{
    public function index()
    {
        return view('Inventory/InventoryDashboard');
    }
    public function createItem()
    {
        return view('Inventory/Item/CreateItem');
    }
    public function editItem()
    {
        return view('Inventory/Item/EditItem');
    }
    public function listItem()
    {
        return view('Inventory/Item/ItemList');
    }
    public function createItemType()
    {
        return view('Inventory/ItemType/CreateItemType');
    }
    public function editItemType()
    {
        return view('Inventory/ItemType/EditItemType');
    }
    public function listItems()
    {
        return view('Inventory/ItemType/listItemType');
    }
}
