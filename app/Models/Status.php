<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public static function getCount()
    {
        return Idea::query()
            ->selectRaw("COUNT(*) as all_status")
            ->selectRaw("COUNT(CASE WHEN status_id = 1 THEN 1 END) as open")
            ->selectRaw("COUNT(CASE WHEN status_id = 2 THEN 1 END) as considering")
            ->selectRaw("COUNT(CASE WHEN status_id = 3 THEN 1 END) as in_progress")
            ->selectRaw("COUNT(CASE WHEN status_id = 4 THEN 1 END) as implemented")
            ->selectRaw("COUNT(CASE WHEN status_id = 5 THEN 1 END) as closed")
            ->first()
            ->toArray();
    }
}
