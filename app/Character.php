<?php declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * App\Character
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $energy
 * @property int $xp
 * @property int $level
 * @property int $money
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereEnergy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Character whereXp($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @property-read int|null $items_count
 */
class Character extends Model
{
    public function items(): MorphToMany
    {
        return $this->morphToMany(Item::class, 'itemable');
    }
}
