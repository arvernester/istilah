<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Index;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request): JsonResponse
    {
        $this->validate($request, [
            'keyword' => 'nullable|string',
        ]);

        $indices = Index::where('title', 'LIKE', "%{$request->keyword}%")
            ->orWhere('description', 'LIKE', "%{$request->keyword}%")
            ->whereIsPublic(true)
            ->with('indexable')
            ->paginate();
        $indices->appends($request->only('keyword'));

        return response()->json($indices);
    }
}
