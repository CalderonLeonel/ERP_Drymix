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
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $itemModel->insertItem($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateItem()
    {
        $itemModel = new ItemModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $itemModel->updateItem($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteItem()
    {
        $itemModel = new ItemModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $itemModel->deleteItem($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readItem()
    {
        $itemModel = new ItemModel();
        $itemModel->readItems();
        return view('Acquisition/AcquisitionList');
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
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $itemTypeModel->insertItemType($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $itemTypeModel->updateItemType($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteItemType()
    {
        $itemTypeModel = new ItemTypeModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $itemTypeModel->deleteItemType($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readItemType()
    {
        $itemTypeModel = new ItemTypeModel();
        $itemTypeModel->readItemTypes();
        return view('Acquisition/AcquisitionList');
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
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $storageModel->insertStorage($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateStorage()
    {
        $storageModel = new StorageModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $storageModel->updateStorage($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteStorage()
    {
        $storageModel = new StorageModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $storageModel->deleteStorage($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readStorage()
    {
        $storageModel = new StorageModel();
        $storageModel->readStorages();
        return view('Acquisition/AcquisitionList');
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
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $sectionModel->insertSection($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateSection()
    {
        $sectionModel = new SectionModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $sectionModel->updateSection($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteSection()
    {
        $sectionModel = new SectionModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
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
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $standModel->insertStand($data);
        return view('Acquisition/AcquisitionList');
    }

    public function UpdateStand()
    {
        $standModel = new StandModel();
        $id = ['idAcquisition' => $this->request->getVar('idAcquisition')];
        $data = [   
            'name' => $this->request->getVar('AcquisitionName')
        ];
        $standModel->updateStand($id ,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function DeleteStand()
    {
        $standModel = new StandModel();

        $id = [
            'idAcquisition' => $this->request->getVar('idAcquisition')
        ];
        $data = [   
            'quoteState' => $this->request->getVar('quoteState')
        ];
        $standModel->deleteStand($id,$data);
        return view('Acquisition/AcquisitionList');
    }

    public function readStand()
    {
        $standModel = new StandModel();
        $standModel->readStands();
        return view('Acquisition/AcquisitionList');
    }

    #StorageItem
    
}
