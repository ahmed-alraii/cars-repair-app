<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bill
 *
 * @property int $id
 * @property int $car_id
 * @property int $bill_type_id
 * @property string $price
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereBillTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereUpdatedAt($value)
 */
	class Bill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BillType
 *
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BillType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereUpdatedAt($value)
 */
	class BillType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $name
 * @property string $model
 * @property string $color
 * @property string $quality_number
 * @property string $brand
 * @property string $vin
 * @property string $notes
 * @property int|null $container_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Container|null $container
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereContainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereQualityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereVin($value)
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarSparPart
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CarSparPart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarSparPart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarSparPart query()
 */
	class CarSparPart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClientCar
 *
 * @property int $id
 * @property string $client_name
 * @property string|null $client_phone
 * @property string $sell_price
 * @property string $show_date
 * @property string $sell_date
 * @property string $car_name
 * @property string $car_model
 * @property string $car_color
 * @property string $car_quality_number
 * @property string $car_brand
 * @property string $car_vin
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarQualityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCarVin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereClientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereClientPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereSellDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereSellPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereShowDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClientCar whereUpdatedAt($value)
 */
	class ClientCar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Container
 *
 * @property int $id
 * @property string $container_name
 * @property string $container_number
 * @property string $bill_number
 * @property string $arrival_date
 * @property string $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Car> $cars
 * @property-read int|null $cars_count
 * @method static \Illuminate\Database\Eloquent\Builder|Container newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Container newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Container query()
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereArrivalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereContainerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereContainerNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Container whereUpdatedAt($value)
 */
	class Container extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MenuItem
 *
 * @property-read \App\Models\Restaurant|null $restaurant
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuItem query()
 */
	class MenuItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MenuItem> $menuItems
 * @property-read int|null $menu_items_count
 * @property-read \App\Models\OrderStatus|null $orderStatus
 * @property-read \App\Models\Restaurant|null $restaurant
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderStatus
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus query()
 */
	class OrderStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Restaurant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MenuItem> $menuItems
 * @property-read int|null $menu_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restaurant query()
 */
	class Restaurant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $role_id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Restaurant> $restaurant
 * @property-read int|null $restaurant_count
 * @property-read \App\Models\Role $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

