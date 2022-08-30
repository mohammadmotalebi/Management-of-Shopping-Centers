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
 * App\Models\Bank
 *
 * @property int $id
 * @property string|null $bank_name
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereId($value)
 * @mixin \Eloquent
 */
	class Bank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bill
 *
 * @property int $id
 * @property int|null $bill_number
 * @property int|null $shop_id
 * @property int|null $user_id
 * @property string|null $buy_date
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BillItem[] $billItems
 * @property-read int|null $bill_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereBuyDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereUserId($value)
 * @mixin \Eloquent
 */
	class Bill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BillItem
 *
 * @property int $id
 * @property int $bill_id
 * @property int|null $item_id
 * @property int|null $item_price_id
 * @property int|null $item_credit_id
 * @property int|null $item_score_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereItemCreditId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereItemPriceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereItemScoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class BillItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Building
 *
 * @property int $id
 * @property string|null $building_name
 * @property-read \Illuminate\Database\Eloquent\Collection|Building[] $details
 * @property-read int|null $details_count
 * @method static \Illuminate\Database\Eloquent\Builder|Building newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Building newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Building query()
 * @method static \Illuminate\Database\Eloquent\Builder|Building whereBuildingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Building whereId($value)
 * @mixin \Eloquent
 */
	class Building extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BuildingDetail
 *
 * @property int $id
 * @property int|null $building_id
 * @property int|null $contact_type_id
 * @property string|null $contact
 * @property string|null $note
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail whereContactTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuildingDetail whereNote($value)
 * @mixin \Eloquent
 */
	class BuildingDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Card
 *
 * @property int $id
 * @property string|null $card_number
 * @property int|null $shop_id
 * @property int|null $user_id
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card query()
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUserId($value)
 * @mixin \Eloquent
 */
	class Card extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CardToUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CardToUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardToUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardToUser query()
 * @mixin \Eloquent
 */
	class CardToUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChargePayment
 *
 * @property int $id
 * @property string|null $payment_method
 * @property string|null $payment_date
 * @property string|null $cheque_number
 * @property mixed|null $estate_id
 * @property mixed|null $user_id
 * @property string|null $contract_unique_id
 * @property mixed|null $fee
 * @property string|null $cheque_date
 * @property int|null $bank
 * @property string|null $bank_branch
 * @property string|null $account_number
 * @property mixed|null $payment_reason_id
 * @property int|null $passed
 * @property string|null $payment_note
 * @property string|null $setting_unique_key
 * @property string|null $bill_unique_key
 * @property string|null $charge_start_date
 * @property-read \App\Models\Estate|null $estate
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereBillUniqueKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereChargeStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereChequeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereChequeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereContractUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereEstateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment wherePaymentReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereSettingUniqueKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargePayment whereUserId($value)
 * @mixin \Eloquent
 */
	class ChargePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChargeSetting
 *
 * @property int $id
 * @property int|null $charge_per_months
 * @property int|null $charge_price
 * @property string|null $start_date
 * @property string|null $min_dimension
 * @property int|null $delay_for_pay_charge_days
 * @property int|null $send_sms_after_expire_charge_delay_days
 * @property int|null $owner_charge_per_months
 * @property string|null $unique_key
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereChargePerMonths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereChargePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereDelayForPayChargeDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereMinDimension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereOwnerChargePerMonths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereSendSmsAfterExpireChargeDelayDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChargeSetting whereUniqueKey($value)
 * @mixin \Eloquent
 */
	class ChargeSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string|null $city_name
 * @property int|null $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStatus($value)
 * @mixin \Eloquent
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Color
 *
 * @property int $id
 * @property string $color_name
 * @property int $status
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereColorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Color extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string|null $contact
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @mixin \Eloquent
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contract
 *
 * @property int $id
 * @property string|null $contract_unique_id
 * @property mixed|null $estate_id
 * @property mixed|null $renter_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property mixed|null $rent
 * @property mixed|null $deposit
 * @property mixed|null $rent_monthly
 * @property mixed|null $deposit_discount
 * @property mixed|null $rent_discount
 * @property int|null $active
 * @property string|null $ban_date
 * @property mixed|null $ban_reason
 * @property string|null $note
 * @property string|null $scanned_contract
 * @property mixed $charge
 * @property-read \App\Models\Estate|null $Estate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Contract active()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereBanDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereBanReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereContractUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDepositDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereEstateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereRent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereRentDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereRentMonthly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereRenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereScannedContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStartDate($value)
 * @mixin \Eloquent
 */
	class Contract extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cost
 *
 * @property int $id
 * @property string|null $cost_method
 * @property mixed|null $cost_type_id
 * @property string|null $cost_date
 * @property mixed|null $price
 * @property string|null $note
 * @property string|null $cheque_number
 * @property string|null $cheque_date
 * @property int|null $bank
 * @property string|null $bank_branch
 * @property string|null $account_number
 * @property int|null $passed
 * @property-read \App\Models\CostType|null $cost_type
 * @method static \Illuminate\Database\Eloquent\Builder|Cost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cost query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereChequeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereChequeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereCostDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereCostMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereCostTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cost wherePrice($value)
 * @mixin \Eloquent
 */
	class Cost extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CostType
 *
 * @property int $id
 * @property string|null $cost_type
 * @property mixed|null $fund_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cost[] $costs
 * @property-read int|null $costs_count
 * @property-read \App\Models\Fund|null $fund
 * @method static \Illuminate\Database\Eloquent\Builder|CostType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CostType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CostType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CostType whereCostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CostType whereFundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CostType whereId($value)
 * @mixin \Eloquent
 */
	class CostType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Estate
 *
 * @property int $id
 * @property string|null $old_id
 * @property string|null $code
 * @property mixed|null $building_id
 * @property string|null $dimension
 * @property mixed|null $floor_id
 * @property string|null $telephone
 * @property string|null $powerid
 * @property string|null $postal
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChargePayment[] $charges
 * @property-read int|null $charges_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Estate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereDimension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereFloorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereOldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate wherePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate wherePowerid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estate whereTelephone($value)
 */
	class Estate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EstateDetail
 *
 * @property int $id
 * @property int|null $estate_id
 * @property string|null $price
 * @property string|null $rent
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $active
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereEstateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereRent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EstateDetail whereStartDate($value)
 * @mixin \Eloquent
 */
	class EstateDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExcelImport
 *
 * @property string|null $imported_item_supplier
 * @property string|null $imported_Item_category
 * @method static \Illuminate\Database\Eloquent\Builder|ExcelImport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExcelImport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExcelImport query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExcelImport whereImportedItemCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExcelImport whereImportedItemSupplier($value)
 */
	class ExcelImport extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Field
 *
 * @property int $id
 * @property string $filed_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @method static \Illuminate\Database\Eloquent\Builder|Field newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field query()
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereFiledName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereId($value)
 */
	class Field extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Floor
 *
 * @property int $id
 * @property string|null $floor
 * @property int|null $building_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Estate[] $estates
 * @property-read int|null $estates_count
 * @method static \Illuminate\Database\Eloquent\Builder|Floor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Floor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Floor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Floor whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Floor whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Floor whereId($value)
 */
	class Floor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fund
 *
 * @property int $id
 * @property string|null $fund_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CostType[] $cost_types
 * @property-read int|null $cost_types_count
 * @property-read \App\Models\Cost|null $costs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PaymentReason[] $payment_reasons
 * @property-read int|null $payment_reasons_count
 * @property-read \App\Models\Payment|null $payments
 * @method static \Illuminate\Database\Eloquent\Builder|Fund newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fund newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fund query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fund whereFundName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fund whereId($value)
 * @mixin \Eloquent
 */
	class Fund extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gender
 *
 * @property int $id
 * @property string|null $gender_name
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereGenderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Gender extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemCategory
 *
 * @property int $id
 * @property string $item_category
 * @property int $shop_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemType[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory whereItemCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCategory whereShopId($value)
 */
	class ItemCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemCode
 *
 * @property int $id
 * @property string $item_id
 * @property string $item_code
 * @property string|null $qrcode
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereItemCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereQrcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCode whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ItemCode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemColor
 *
 * @property int $id
 * @property string|null $item_color
 * @method static \Illuminate\Database\Eloquent\Builder|ItemColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemColor query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemColor whereItemColor($value)
 * @mixin \Eloquent
 */
	class ItemColor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemCredit
 *
 * @property int $id
 * @property string $unique_code
 * @property int $item_credit
 * @property string|null $add_date
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereAddDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereItemCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemCredit whereUniqueCode($value)
 * @mixin \Eloquent
 */
	class ItemCredit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemModel
 *
 * @property int $id
 * @property string|null $item_model
 * @property int|null $item_type_id
 * @property-read \App\Models\ItemType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel whereItemModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemModel whereItemTypeId($value)
 * @mixin \Eloquent
 */
	class ItemModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemPrice
 *
 * @property int $id
 * @property string $unique_code
 * @property string $item_price
 * @property string $add_date
 * @property int $status
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice whereAddDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice whereItemPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemPrice whereUniqueCode($value)
 * @mixin \Eloquent
 */
	class ItemPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemScore
 *
 * @property int $id
 * @property string $unique_code
 * @property int $item_score
 * @property string|null $add_date
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereAddDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereItemScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemScore whereUniqueCode($value)
 * @mixin \Eloquent
 */
	class ItemScore extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemSize
 *
 * @property int $id
 * @property string|null $item_size
 * @property int|null $item_type_id
 * @property-read \App\Models\ItemType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize whereItemSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSize whereItemTypeId($value)
 * @mixin \Eloquent
 */
	class ItemSize extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemSupplier
 *
 * @property int $id
 * @property int $supplier_code
 * @property string $item_supplier
 * @property int $shop_id
 * @property string|null $add_date
 * @property int|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereAddDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereItemSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemSupplier whereSupplierCode($value)
 */
	class ItemSupplier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ItemType
 *
 * @property int $id
 * @property string $item_type
 * @property int $shop_item_category_id
 * @property int $shop_id
 * @property-read \App\Models\ShopItem $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemModel[] $models
 * @property-read int|null $models_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemSize[] $sizes
 * @property-read int|null $sizes_count
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType whereItemType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemType whereShopItemCategoryId($value)
 * @mixin \Eloquent
 */
	class ItemType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string|null $job_name
 * @property int|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereStatus($value)
 * @mixin \Eloquent
 * @property string $queue
 * @property string $payload
 * @property int $attempts
 * @property int|null $reserved_at
 * @property int $available_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereAvailableAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereReservedAt($value)
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property string|null $payment_method
 * @property string|null $payment_date
 * @property string|null $cheque_number
 * @property mixed|null $user_id
 * @property string|null $contract_unique_id
 * @property mixed|null $fee
 * @property string|null $cheque_date
 * @property int|null $bank
 * @property string|null $bank_branch
 * @property string|null $account_number
 * @property mixed|null $payment_reason_id
 * @property int|null $passed
 * @property string|null $payment_note
 * @property-read \App\Models\Contract|null $contract
 * @property-read Payment|null $payment_reason
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChequeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereChequeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereContractUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 * @mixin \Eloquent
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentReason
 *
 * @property int $id
 * @property string|null $reason
 * @property int|null $fund_id
 * @property int|null $for_contract
 * @property-read \App\Models\Fund|null $fund
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason whereForContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason whereFundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentReason whereReason($value)
 * @mixin \Eloquent
 */
	class PaymentReason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $label
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reason
 *
 * @property int $id
 * @property string|null $reason
 * @method static \Illuminate\Database\Eloquent\Builder|Reason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reason whereReason($value)
 * @mixin \Eloquent
 */
	class Reason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $label
 * @property int|null $access_to_app
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereAccessToApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int|null $min_insert_shop_item
 * @property int|null $max_insert_shop_item
 * @property float|null $max_time_in_store
 * @property float|null $base_time_for_score
 * @property float|null $score_of_in_store
 * @property float|null $cash_score
 * @property float|null $cashless_score
 * @property int|null $number_of_item_code_digit
 * @property int|null $number_of_shop_unique_code_digit
 * @property int|null $credit_by_price
 * @property int|null $credit_by_credit
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereBaseTimeForScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCashScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCashlessScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreditByCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreditByPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMaxInsertShopItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMaxTimeInStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMinInsertShopItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereNumberOfItemCodeDigit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereNumberOfShopUniqueCodeDigit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereScoreOfInStore($value)
 * @mixin \Eloquent
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shop
 *
 * @property int $id
 * @property string|null $shop_name
 * @property mixed|null $estate_id
 * @property int|null $field_id
 * @property int $shop_unique_id
 * @property string|null $email
 * @property string|null $website
 * @property int|null $shop_manager
 * @property mixed $field
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Estate[] $estate
 * @property-read int|null $estate_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShopItem[] $shopItems
 * @property-read int|null $shop_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemType[] $types
 * @property-read int|null $types_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $userFavs
 * @property-read int|null $user_favs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereEstateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereFieldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereShopUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWebsite($value)
 * @mixin \Eloquent
 */
	class Shop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopItem
 *
 * @property int $id
 * @property string $unique_code
 * @property string $item_name
 * @property int $shop_id
 * @property int $item_count
 * @property int $item_supplier_id
 * @property int $item_cat_id
 * @property int|null $item_type_id
 * @property int|null $item_model_id
 * @property int|null $item_color_id
 * @property int|null $item_size_id
 * @property string|null $item_note
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemCode[] $codes
 * @property-read int|null $codes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ItemImage[] $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereItemTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopItem whereUniqueCode($value)
 * @mixin \Eloquent
 */
	class ShopItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopItemImage
 *
 * @property int $id
 * @property string|null $item_id
 * @property string|null $url
 * @property string|null $caption
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemImage whereUrl($value)
 * @mixin \Eloquent
 */
	class ShopItemImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShopperCredit
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $credit
 * @property string|null $credit_date
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit whereCreditDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopperCredit whereUserId($value)
 * @mixin \Eloquent
 */
	class ShopperCredit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int|null $id
 * @property string|null $name
 * @property int|null $shahr_type
 * @property int|null $ostan
 * @property int|null $shahrestan
 * @property int|null $bakhsh
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereBakhsh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereOstan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereShahrType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereShahrestan($value)
 * @mixin \Eloquent
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Status
 *
 * @property int $id
 * @property string $status
 * @property string $create_at
 * @property string $update_at
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdateAt($value)
 * @mixin \Eloquent
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Table
 *
 * @property int $id
 * @property string $name
 * @property string $label
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Table newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Table query()
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Table whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Table extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $identity_code
 * @property string|null $name
 * @property string|null $family
 * @property int|null $building_id
 * @property int|null $gender
 * @property string|null $birthday
 * @property string $mobile
 * @property string|null $mobile_back
 * @property string|null $shenasnameh
 * @property string|null $sadereh
 * @property string|null $ref_user
 * @property string|null $tel
 * @property int|null $city
 * @property int|null $state
 * @property string|null $address
 * @property string|null $password
 * @property string|null $email
 * @property int|null $job
 * @property string|null $father_name
 * @property string|null $wedding_date
 * @property string|null $weight
 * @property string|null $height
 * @property int|null $int_color
 * @property int|null $active
 * @property string|null $remember_token
 * @property string|null $user_pic
 * @property bool|null $is_admin
 * @property int|null $mobile_app
 * @property string|null $default_theme
 * @property int|null $darktheme
 * @property int|null $auto_darktheme
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Card[] $cards
 * @property-read int|null $cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contract[] $contracts
 * @property-read int|null $contracts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShopperCredit[] $credits
 * @property-read int|null $credits_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Estate[] $estates
 * @property-read int|null $estates_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $favShops
 * @property-read int|null $fav_shops_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shop[] $shops
 * @property-read int|null $shops_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VerificationCode[] $verificationCode
 * @property-read int|null $verification_code_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAutoDarktheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDarktheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdentityCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIntColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRefUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSadereh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereShenasnameh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWeddingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWeight($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserCategories
 *
 * @property int $id
 * @property string|null $category_name
 * @property string|null $score سقف اعتبار قابل استفاده در روز
 * @property string|null $glyphs
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories whereGlyphs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCategories whereScore($value)
 * @mixin \Eloquent
 */
	class UserCategories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VerificationCode
 *
 * @property int $id
 * @property string|null $valid_mobile
 * @property int|null $verification_code
 * @property string $generate_time
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereGenerateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereValidMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VerificationCode whereVerificationCode($value)
 * @mixin \Eloquent
 */
	class VerificationCode extends \Eloquent {}
}

