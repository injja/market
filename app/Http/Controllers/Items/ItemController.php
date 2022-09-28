<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Services\Items\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public ItemService $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }
    public function create(Request $request)
    {
        $item = $request->get('item');

        //$item['user_id'] = $request->user()->id;

        $this->itemService->create($item);
    }
    public function get($id)
    {
        $item = $this->itemService->get($id);
        return response()->json(['item' => $item]);
    }
    public function destroy($id)
    {
        $this->itemService->destroy($id);
        return response()->json(['message' => 'Item usunięty pomyśle']);
    }
    public function update(Request $request, $id)
    {
        $item = $request->get('item');
        $this->itemService->update($item, $id);
        return response()->json(['message' => 'Prawidłowo zaaktualizowano Item']);
    }
}
