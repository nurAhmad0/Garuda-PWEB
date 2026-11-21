<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bid extends Model
{
    public const UPDATED_AT = null;
    protected $table = 'bids';
    protected $fillable = ['project_id', 'developer_id', 'harga', 'durasi', 'proposal'];

    protected function casts(): array
    {
        return [
            'is_winner' => 'boolean',
        ];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function developer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'developer_id');
    }
}
