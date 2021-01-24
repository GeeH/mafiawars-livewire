<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Quest
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property int $energy_cost
 * @property int $reward_xp
 * @property int $reward_money
 * @property int $level
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereEnergyCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereRewardMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereRewardXp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Quest extends Model
{
    //
}
