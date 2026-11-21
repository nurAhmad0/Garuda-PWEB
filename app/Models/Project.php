<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    public const UPDATED_AT = null;
        protected $table = 'projects';
    protected $fillable = [
        'client_id', 'judul', 'deskripsi', 'kategori',
        'budget_min', 'budget_max', 'batas_lelang',
    ];
    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function bids(): HasMany
    {
        return $this->hasMany(Bid::class, 'project_id');
    }
    public function isOpen(): bool
    {
        return $this->status === 'terbuka'
            && (string) $this->batas_lelang >= date('Y-m-d');
    }
    public function scopeSearch(Builder $query, string $cari): Builder
    {
        if ($cari === '') {
            return $query;
        }
        $like = '%' . addcslashes($cari, '\\%_') . '%';
        return $query->where(function (Builder $q) use ($like) {
            $q->where('judul', 'like', $like)
                ->orWhere('kategori', 'like', $like);
        });
    }
}

