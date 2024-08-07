<?php

namespace App\Services;

use App\Models\Business;
use Illuminate\Pagination\LengthAwarePaginator;

class BusinessService
{
    public function getAllPaginated(int $perPage = 10): LengthAwarePaginator
    {
        return Business::latest()->paginate($perPage);
    }

    public function create(array $data): Business
    {
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $filteredData['user_id'] = 1; // You might want to handle this differently

        return Business::create($filteredData);
    }

    public function update(Business $business, array $data): bool
    {
        return $business->update($data);
    }

    public function delete(Business $business): bool
    {
        return $business->delete();
    }
}
