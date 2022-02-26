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
                // return $this->transform($customer);
            });
    }

    public function getById($id)
    {
        return Customer::where('id', $id)
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

    protected function transform($customer)
    {
        return [
            'customer_id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->user->email,
            'updated_at' => $this->updated_at->diffforhumans(),
        ];
    }
}
