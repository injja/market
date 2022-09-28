<?php

namespace App\Services\Items;

use App\Models\Items\Item;

class ItemService
{
    public Item $ItemModel;
    public function __construct(Item $itemModel)
    {
        $this->itemModel = $itemModel;
    }
    public function create($newItem)
    {
        return $this->itemModel::create($newItem);
    }
    public function get($id)
    {
        $item = $this->itemModel->find($id);
        return $item;
    }
    public function destroy($id)
    {
        return $this->itemModel->destroy($id);
    }
    public function update($newItem, $id)
    {
        $item = $this->get($id);
        return $item->update($newItem);
    }
}
