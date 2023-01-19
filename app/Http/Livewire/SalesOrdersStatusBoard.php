<?php

namespace App\Http\Livewire;

class SalesOrdersStatusBoard extends LivewireStatusBoard
{
    public function statuses(): Collection
    {
        return collect([
            [
                'id' => 'registered',
                'title' => 'Registered',
            ],
            [
                'id' => 'awaiting_confirmation',
                'title' => 'Awaiting Confirmation',
            ],
            [
                'id' => 'confirmed',
                'title' => 'Confirmed',
            ],
            [
                'id' => 'delivered',
                'title' => 'Delivered',
            ],
        ]);
    }

    public function records(): Collection
    {
        return SalesOrder::query()
            ->map(function (SalesOrder $salesOrder) {
                return [
                    'id' => $salesOrder->id,
                    'title' => $salesOrder->client,
                    'status' => $salesOrder->status,
                ];
            });
    }

}
