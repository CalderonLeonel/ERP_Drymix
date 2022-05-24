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
        $itemModel = new ItemModel();
        $itemTypeModel = new ItemTypeModel;
        #$data['table1'] = $itemModel->readItems();
        #$data['table2'] = $itemTypeModel->readItems();
        #return view('Inventory/InventoryDashboard', $data);
        $itemTypeModel = new ItemTypeModel();
        $data['data'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypeList',$data);
    }
    #Item
    public function createItem()
    {
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/Item/CreateItem',$data);
    }
    public function editItem()
    {
        $itemModel = new ItemModel();
        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $itemTypeModel = new ItemTypeModel();
        $data['list'] = $itemTypeModel->readItemTypes();
        $data['table'] =$itemModel ->readItem($id);
        return view('Inventory/Item/EditItem',$data);
    }
    public function listItem()
    {
        $itemModel = new ItemModel();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }
    public function InsertItem()
    {
        $itemModel = new ItemModel();
        $data1 = [
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->createItem($data1);
        $table['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$table);
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
        $itemModel->readItems();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }

    public function DeleteItem()
    {
        $itemModel = new ItemModel();

        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $data = [   
            'state' => 0
        ];
        $itemModel->deleteItem($id,$data);
        $itemModel->readItems();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }

    public function readItem()
    {
        $itemModel = new ItemModel();
        $data['data'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }

    
    #ItemType
    public function createItemType()
    {
        return view('Inventory/ItemType/CreateItemType');
    }
    public function editItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $id = [
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $data['data'] = $itemTypeModel->readItemType($id);
        return view('Inventory/ItemType/EditItemType',$data);
    }
    public function listItemTypes()
    {
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
    }
    public function InsertItemType()
    {
        $itemTypeModel = new ItemTypeModel();

        $data = [
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->createItemType($data);
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
    }

    public function UpdateItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $id = ['idItemType' => $this->request->getVar('idItemType')];
        $data = [   
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->updateItemType($id ,$data);
        $data['data'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
    }

    public function DeleteItemType()
    {
        $itemTypeModel = new ItemTypeModel();

        $id = [
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $data = [   
            'state' => 0
        ];
        $itemTypeModel->deleteItemType($id,$data);
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
    }

    public function readItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
    }

    #Storage
    public function createStorage()
    {
        return view('Inventory/Storage/CreateStorage');
    }
    public function editStorage()
    {
        $storageModel = new StorageModel();
        $id = [
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $data['data'] = $storageModel->readStorage($id);
        return view('Inventory/Storage/EditStorage',$data);
    }
    public function listStorages()
    {
        $storageModel = new StorageModel();
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
    }
    public function InsertStorage()
    {
        $storageModel = new StorageModel();

        $data = [
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->createStorage($data);
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
    }

    public function UpdateStorage()
    {
        $storageModel = new StorageModel();
        $id = ['idStorage' => $this->request->getVar('idStorage')];
        $data = [   
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->updateStorage($id ,$data);
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
    }

    public function DeleteStorage()
    {
        $storageModel = new StorageModel();

        $id = [
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $data = [   
            'state' => 0
        ];
        $storageModel->deleteStorage($id,$data);
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
    }

    public function readStorage()
    {
        $storageModel = new StorageModel();
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
    }

    #Section
    public function createSection()
    {
        $storageModel = new StorageModel();
        $data['list1'] = $storageModel->readStorages();
        return view('Inventory/Section/CreateSection',$data);
    }
    public function editSection()
    {
        $sectionModel = new SectionModel();
        $id = [
            'idSection' => $this->request->getVar('idSection')
        ];
        $storageModel = new StorageModel();
        $data['list1'] = $storageModel->readStorages();
        $data['table'] =$sectionModel ->readSection($id);
        return view('Inventory/Section/EditSection',$data);
    }
    public function listSections()
    {
        $sectionModel = new SectionModel();
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
    }
    public function InsertSection()
    {
        $sectionModel = new SectionModel();

        $data = [
            'sectionName' => $this->request->getVar('sectionName'),
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $sectionModel->createSection($data);
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
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
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
    }

    public function DeleteSection()
    {
        $sectionModel = new SectionModel();

        $id = [
            'idSection' => $this->request->getVar('idSection')
        ];
        $data = [   
            'state' => 0
        ];
        $sectionModel->deleteSection($id,$data);
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
    }

    public function readSection()
    {
        $sectionModel = new SectionModel();
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
    }
    #Stand
    public function createStand()
    {
        $sectionModel = new SectionModel();
        $storageModel = new StorageModel();
        $data['list2'] = $sectionModel->readSections();
        $data['list1'] = $storageModel->readStorages();
        return view('Inventory/Stand/CreateStand',$data);
    }
    public function editStand()
    {
        $standModel = new StandModel();
        $id = [
            'idStand' => $this->request->getVar('idStand')
        ];
        $sectionModel = new SectionModel();
        $data['list2'] = $sectionModel->readSections();
        $data['table'] =$standModel ->readStand($id);
        return view('Inventory/Stand/EditStand',$data);
    }
    public function listStand()
    {
        $standModel = new StandModel();
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
    }
    public function InsertStand()
    {
        $standModel = new StandModel();

        $data = [
            'standName' => $this->request->getVar('standName'),
            'idSection' => $this->request->getVar('idSection')
        ];
        $standModel->createStand($data);
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
    }

    public function UpdateStand()
    {
        $standModel = new StandModel();
        $id = ['idStand' => $this->request->getVar('idStand')];
        $data = [   
            'standName' => $this->request->getVar('standName')
        ];
        $standModel->updateStand($id ,$data);
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
    }

    public function DeleteStand()
    {
        $standModel = new StandModel();

        $id = [
            'idStand' => $this->request->getVar('idStand')
        ];
        $data = [   
            'state' => 0
        ];
        $standModel->deleteStand($id,$data);
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
    }

    public function readStand()
    {
        $standModel = new StandModel();
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
    }

    #StorageItem
    public function InsertItemStorage()
    {
        $itemModel = new StorageItemModel();

        $data = [
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->insertItem($data);
        $itemModel->readItems();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }

    public function UpdateItemStorage()
    {
        $itemModel = new StorageItemModel();
        $id = ['idItem' => $this->request->getVar('idItem')];
        $data = [   
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->updateItem($id ,$data);
        $itemModel->readItems();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
    }
}
