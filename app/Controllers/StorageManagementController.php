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
        echo view('import/Header');
        $itemModel = new ItemModel();
        $itemTypeModel = new ItemTypeModel;
        #$data['table1'] = $itemModel->readItems();
        #$data['table2'] = $itemTypeModel->readItems();
        #return view('Inventory/InventoryDashboard', $data);
        $itemTypeModel = new ItemTypeModel();
        $data['data'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypeList',$data);
        echo view('import/Footer');
    }
    #Item
    public function createItem()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/Item/CreateItem',$data);
        echo view('import/Footer');
    }
    public function editItem()
    {
        echo view('import/Header');
        $itemModel = new ItemModel();
        $id = [
            'idItem' => $this->request->getVar('idItem')
        ];
        $itemTypeModel = new ItemTypeModel();
        $data['list'] = $itemTypeModel->readItemTypes();
        $data['table'] =$itemModel ->readItem($id);
        return view('Inventory/Item/EditItem',$data);
        echo view('import/Footer');
    }
    public function listItem()
    {
        echo view('import/Header');
        $itemModel = new ItemModel();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
        echo view('import/Footer');
    }
    public function InsertItem()
    {
        echo view('import/Header');
        $itemModel = new ItemModel();
        $data1 = [
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->createItem($data1);
        $table['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$table);
        echo view('import/Footer');   
    }

    public function UpdateItem()
    {
        echo view('import/Header');
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
        echo view('import/Footer');    
    }

    public function DeleteItem()
    {
        echo view('import/Header');
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
        echo view('import/Footer');    
    }

    public function readItem()
    {
        echo view('import/Header');
        $itemModel = new ItemModel();
        $data['data'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
        echo view('import/Footer');
      
    }
    #ItemType
    public function createItemType()
    {
        echo view('import/Header');
        return view('Inventory/ItemType/CreateItemType');
        echo view('import/Footer');
    }
    public function editItemType()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();
        $id = [
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $data['data'] = $itemTypeModel->readItemType($id);
        return view('Inventory/ItemType/EditItemType',$data);
        echo view('import/Footer');  
    }
    public function listItemTypes()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
        echo view('import/Footer');
      
        
    }
    public function InsertItemType()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();

        $data = [
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->createItemType($data);
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
        echo view('import/Footer');
        
    }

    public function UpdateItemType()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();
        $id = ['idItemType' => $this->request->getVar('idItemType')];
        $data = [   
            'itemTypeName' => $this->request->getVar('itemTypeName')
        ];
        $itemTypeModel->updateItemType($id ,$data);
        $data['data'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
        echo view('import/Footer');
      
    }

    public function DeleteItemType()
    {
        echo view('import/Header');
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
        echo view('import/Footer');
       
    }

    public function readItemType()
    {
        echo view('import/Header');
        $itemTypeModel = new ItemTypeModel();
        $data['table'] = $itemTypeModel->readItemTypes();
        return view('Inventory/ItemType/ItemTypelist',$data);
        echo view('import/Footer');
       
    }

    #Storage
    public function createStorage()
    {
        echo view('import/Header');
        return view('Inventory/Storage/CreateStorage');
        echo view('import/Footer');
       
    }
    public function editStorage()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();
        $id = [
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $data['data'] = $storageModel->readStorage($id);
        return view('Inventory/Storage/EditStorage',$data);
        echo view('import/Footer');
       
    }
    public function listStorages()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
        echo view('import/Footer');
       
    }
    public function InsertStorage()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();

        $data = [
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->createStorage($data);
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
        echo view('import/Footer');
       
    }

    public function UpdateStorage()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();
        $id = ['idStorage' => $this->request->getVar('idStorage')];
        $data = [   
            'storageName' => $this->request->getVar('storageName')
        ];
        $storageModel->updateStorage($id ,$data);
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
        echo view('import/Footer');
        
    }

    public function DeleteStorage()
    {
        echo view('import/Header');
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
        echo view('import/Footer');
       
    }

    public function readStorage()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();
        $data['table'] = $storageModel->readStorages();
        return view('Inventory/Storage/StorageList',$data);
        echo view('import/Footer');
       
    }

    #Section
    public function createSection()
    {
        echo view('import/Header');
        $storageModel = new StorageModel();
        $data['list1'] = $storageModel->readStorages();
        return view('Inventory/Section/CreateSection',$data);
        echo view('import/Footer');
       
    }
    public function editSection()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();
        $id = [
            'idSection' => $this->request->getVar('idSection')
        ];
        $storageModel = new StorageModel();
        $data['list1'] = $storageModel->readStorages();
        $data['table'] =$sectionModel ->readSection($id);
        return view('Inventory/Section/EditSection',$data);
        echo view('import/Footer');
       
    }
    public function listSections()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
        echo view('import/Footer');
       
    }
    public function InsertSection()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();

        $data = [
            'sectionName' => $this->request->getVar('sectionName'),
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $sectionModel->createSection($data);
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
        echo view('import/Footer');
       
    }

    public function UpdateSection()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();
        $id = ['idSection' => $this->request->getVar('idSection')];
        $data = [   
            'sectionName' => $this->request->getVar('sectionName'),
            'idStorage' => $this->request->getVar('idStorage')
        ];
        $sectionModel->updateSection($id ,$data);
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
        echo view('import/Footer');
       
    }

    public function DeleteSection()
    {
        echo view('import/Header');
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
        echo view('import/Footer');
       
    }

    public function readSection()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();
        $data['table'] = $sectionModel->readSections();
        return view('Inventory/Section/SectionList',$data);
        echo view('import/Footer');
       
    }
    #Stand
    public function createStand()
    {
        echo view('import/Header');
        $sectionModel = new SectionModel();
        $storageModel = new StorageModel();
        $data['list2'] = $sectionModel->readSections();
        $data['list1'] = $storageModel->readStorages();
        return view('Inventory/Stand/CreateStand',$data);
        echo view('import/Footer');
       
    }
    public function editStand()
    {
        echo view('import/Header');
        $standModel = new StandModel();
        $id = [
            'idStand' => $this->request->getVar('idStand')
        ];
        $sectionModel = new SectionModel();
        $data['list2'] = $sectionModel->readSections();
        $data['table'] =$standModel ->readStand($id);
        return view('Inventory/Stand/EditStand',$data);
        echo view('import/Footer');
       
    }
    public function listStand()
    {
        echo view('import/Header');
        $standModel = new StandModel();
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
        echo view('import/Footer');
       
    }
    public function InsertStand()
    {
        echo view('import/Header');
        $standModel = new StandModel();

        $data = [
            'standName' => $this->request->getVar('standName'),
            'idSection' => $this->request->getVar('idSection')
        ];
        $standModel->createStand($data);
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
        echo view('import/Footer');
        
    }

    public function UpdateStand()
    {
        echo view('import/Header');
        $standModel = new StandModel();
        $id = ['idStand' => $this->request->getVar('idStand')];
        $data = [   
            'standName' => $this->request->getVar('standName')
        ];
        $standModel->updateStand($id ,$data);
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
        echo view('import/Footer');
       
    }

    public function DeleteStand()
    {
        echo view('import/Header');
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
        echo view('import/Footer');
        
    }

    public function readStand()
    {
        echo view('import/Header');
        $standModel = new StandModel();
        $data['table'] = $standModel->readStands();
        return view('Inventory/Stand/StandList',$data);
        echo view('import/Footer');
       
    }

    #StorageItem
    public function InsertItemStorage()
    {
        echo view('import/Header');
        $itemModel = new StorageItemModel();

        $data = [
            'itemName' => $this->request->getVar('itemName'),
            'idItemType' => $this->request->getVar('idItemType')
        ];
        $itemModel->insertItem($data);
        $itemModel->readItems();
        $data['table'] = $itemModel->readItems();
        return view('Inventory/Item/ItemList',$data);
        echo view('import/Footer');
       
    }

    public function UpdateItemStorage()
    {
        echo view('import/Header');
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
        echo view('import/Footer');
       
    }
}
