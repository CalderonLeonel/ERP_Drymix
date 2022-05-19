<?php

namespace App\Controllers;
use App\Models\ItemModel;
use App\Models\ItemTypeModel;
use App\Models\StorageModel;
use App\Models\SectionModel;
use App\Models\StandModel;
use App\Models\StorageItemModel;

class StorageManagementController extends BaseController
{
    public function index()
    {
        return view('Inventory/InventoryDashboard');
        //return view('testConnection');
    }
    #Item
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
    public function InsertItem()
    {
        $itemModel = new ItemModel();

        $data = [
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->insertItem($data);
        return view('Inventory/Item/ItemList');
    }

    public function UpdateItem()
    {
        $itemModel = new ItemModel();
        $id = ['idItem' => $this->request->getVar('idItem')];
        $data = [   
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->updateItem($id ,$data);
        return view('Inventory/Item/ItemList');
    }

    public function DeleteItem()
    {
        $itemModel = new ItemModel();

        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $data = [   
            'state' => $this->request->getVar('state')
        ];
        $itemModel->deleteItem($id,$data);
        return view('Inventory/Item/ItemList');
    }

    public function readItem()
    {
        $itemModel = new ItemModel();
        $itemModel->readItems();
        return view('Inventory/Item/ItemList');
    }
    #ItemType
    public function createItemType()
    {
        return view('Inventory/ItemType/CreateItemType');
    }
    public function editItemType()
    {
        return view('Inventory/ItemType/EditItemType');
    }
    public function listItemTypes()
    {
        return view('Inventory/ItemType/ItemTypelist');
    }
    public function InsertItemType()
    {
        $itemTypeModel = new ItemTypeModel();

        $data = [
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->insertItemType($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $id = ['idItemTypeName' => $this->request->getVar('idItemTypeName')];
        $data = [   
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->updateItemType($id ,$data);
        return view('Inventory/ItemType/ItemTypelist');
    }

    public function DeleteItemType()
    {
        $itemTypeModel = new ItemTypeModel();

        $id = [
            'idItemTypeName' => $this->request->getVar('idItemTypeName')
        ];
        $data = [   
            'state' => $this->request->getVar('state')
        ];
        $itemTypeModel->deleteItemType($id,$data);
        return view('Inventory/ItemType/ItemTypelist');
    }

    public function readItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist');
    }

    #Storage
    public function createStorage()
    {
        return view('Inventory/Storage/CreateStorage');
    }
    public function editStorage()
    {
        return view('Inventory/Storage/EditStorage');
    }
    public function listStorages()
    {
        return view('Inventory/Storage/StorageList');
    }
    public function InsertStorage()
    {
        $storageModel = new StorageModel();

        $data = [
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->insertStorage($data);
        return view('Inventory/Storage/StorageList');
    }

    public function UpdateStorage()
    {
        $storageModel = new StorageModel();
        $id = ['idStorage' => $this->request->getVar('idStorage')];
        $data = [   
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->updateStorage($id ,$data);
        return view('Inventory/Storage/StorageList');
    }

    public function DeleteStorage()
    {
        $storageModel = new StorageModel();

        $id = [
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $data = [   
            'state' => $this->request->getVar('state')
        ];
        $storageModel->deleteStorage($id,$data);
        return view('AInventory/Storage/StorageList');
    }

    public function readStorage()
    {
        $storageModel = new StorageModel();
        $storageModel->readStorages();
        return view('Inventory/Storage/StorageList');
    }

    #Section
    public function createSection()
    {
        return view('Inventory/Section/CreateSection');
    }
    public function editSection()
    {
        return view('Inventory/Section/EditSection');
    }
    public function listSections()
    {
        return view('Inventory/Section/SectionList');
    }
    public function InsertSection()
    {
        $sectionModel = new SectionModel();

        $data = [
            'sectionName' => $this->request->getVar('sectionName'),
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $sectionModel->insertSection($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateSection()
    {
        $sectionModel = new SectionModel();
        $id = ['idSection' => $this->request->getVar('idSection')];
        $data = [   
            'sectionName' => $this->request->getVar('sectionName'),
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $sectionModel->updateSection($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteSection()
    {
        $sectionModel = new SectionModel();

        $id = [
            'idSection' => $this->request->getVar('idSection')
        ];
        $data = [   
            'state' => $this->request->getVar('state')
        ];
        $sectionModel->deleteSection($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readSection()
    {
        $sectionModel = new SectionModel();
        $sectionModel->readSections();
        return view('Acquisition/AcquisitionList');
    }
    #Stand
    public function createStand()
    {
        return view('Inventory/Stand/CreateStand');
    }
    public function editStand()
    {
        return view('Inventory/Stand/EditStand');
    }
    public function listStand()
    {
        return view('Inventory/Stand/StandList');
    }
    public function InsertStand()
    {
        $standModel = new StandModel();

        $data = [
            'standName' => $this->request->getVar('standName'),
            'idSection' => $this->request->getVar('idSection')
        ];
        $standModel->insertStand($data);
        return view('Inventory/Stand/StandList');
    }

    public function UpdateStand()
    {
        $standModel = new StandModel();
        $id = ['idStand' => $this->request->getVar('idStand')];
        $data = [   
            'standName' => $this->request->getVar('standName')
        ];
        $standModel->updateStand($id ,$data);
        return view('Inventory/Stand/StandList');
    }

    public function DeleteStand()
    {
        $standModel = new StandModel();

        $id = [
            'idStand' => $this->request->getVar('idStand')
        ];
        $data = [   
            'state' => $this->request->getVar('state')
        ];
        $standModel->deleteStand($id,$data);
        return view('Inventory/Stand/StandList');
    }

    public function readStand()
    {
        $standModel = new StandModel();
        $standModel->readStands();
        return view('Inventory/Stand/StandList');
    }

    #StorageItem
    
}
