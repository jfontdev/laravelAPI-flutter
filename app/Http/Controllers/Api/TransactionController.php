<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return TransactionResource::collection(
            Transaction::with('category')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request): TransactionResource
    {
        return new TransactionResource(Transaction::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction): TransactionResource
    {
        return new TransactionResource($transaction);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTransactionRequest $request, Transaction $transaction): TransactionResource
    {
        $transaction->update($request->validated());

        return new TransactionResource($transaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction): Response
    {
        $transaction->delete();

        return response()->noContent();
    }
}
