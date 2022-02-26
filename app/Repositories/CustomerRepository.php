<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    public function getAll()
    {
        return Customer::where('active', 1)
            ->with('user')
            ->get()
            ->map(function ($customer) {
                return [
                    'customer_id' => $customer->id,
                    'name' => $customer->name,
                    'created_by' => $customer->user->email,
                    'updated_at' => $customer->updated_at->diffforhumans(),
                ];
            });
    }
}
