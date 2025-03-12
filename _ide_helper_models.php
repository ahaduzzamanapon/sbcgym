<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class AboutUs
 *
 * @package App\Models
 * @version November 27, 2024, 8:01 am UTC
 * @property string $Text
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereUpdatedAt($value)
 */
	class AboutUs extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AdmissionQuestions
 *
 * @package App\Models
 * @version December 9, 2024, 5:22 am UTC
 * @property string $questions
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions whereQuestions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmissionQuestions whereUpdatedAt($value)
 */
	class AdmissionQuestions extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AssetsCategory
 *
 * @package App\Models
 * @version November 20, 2024, 9:54 am UTC
 * @property string $category_name
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsCategory whereUpdatedAt($value)
 */
	class AssetsCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AssetsManagement
 *
 * @package App\Models
 * @version November 20, 2024, 7:13 am UTC
 * @property string $item_name
 * @property string $item_description
 * @property string $location
 * @property string $status
 * @property int $id
 * @property int|null $branch_id
 * @property int $assets_categories_id
 * @property string|null $item_quantity
 * @property string $asset_for
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereAssetFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereAssetsCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereItemDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereItemQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetsManagement whereUpdatedAt($value)
 */
	class AssetsManagement extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Attendence
 *
 * @package App\Models
 * @version November 21, 2024, 4:21 am UTC
 * @property string $date
 * @property integer $member_id
 * @property string $status
 * @property int $id
 * @property string $member_type
 * @property string|null $in_time
 * @property string|null $out_time
 * @property string $attendence_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereAttendenceStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereInTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereMemberType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereOutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendence whereUpdatedAt($value)
 */
	class Attendence extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string $title_slug
 * @property string $image
 * @property string $description
 * @property int $status 0: hide, 1: show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitleSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property int $status 0: pending, 1: accepted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ContactMassage
 *
 * @package App\Models
 * @version November 27, 2024, 9:54 am UTC
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property int $id
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMassage whereUpdatedAt($value)
 */
	class ContactMassage extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Coupon
 *
 * @package App\Models
 * @version November 18, 2024, 11:45 am UTC
 * @property string $title
 * @property string $coupon_code
 * @property string $expire_date
 * @property integer $amount
 * @property string $note
 * @property int $id
 * @property int $type 0= fixed, 1 = percent%
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DailyWorkOutDetails
 *
 * @property int $id
 * @property int $member_id
 * @property string $day
 * @property string $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkOutDetails whereUpdatedAt($value)
 */
	class DailyWorkOutDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DailyWorkouts
 *
 * @package App\Models
 * @version December 10, 2024, 9:18 am UTC
 * @property integer $member_id
 * @property string $day
 * @property integer $workout_category
 * @property string $exercise_name
 * @property string $reputation
 * @property string $sets
 * @property string $duration_minutes
 * @property int $id
 * @property int $daily_work_out_details_id
 * @property string|null $create_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts query()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereCreateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereDailyWorkOutDetailsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereExerciseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereReputation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereSets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyWorkouts whereWorkoutCategory($value)
 */
	class DailyWorkouts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DemuRequest
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $company_name
 * @property string|null $company_size
 * @property string|null $module
 * @property string|null $region
 * @property int $status 0: pending, 1: accepted
 * @property string $service 0: RMS HRM, 1: Corporate HRM
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereCompanySize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DemuRequest whereUpdatedAt($value)
 */
	class DemuRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DietChartRequest
 *
 * @package App\Models
 * @version February 25, 2025, 8:29 am UTC
 * @property string $member
 * @property string $note
 * @property int $id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DietChartRequest whereUpdatedAt($value)
 */
	class DietChartRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Expenses
 *
 * @package App\Models
 * @version November 18, 2024, 9:25 am UTC
 * @property string $title
 * @property integer $amount
 * @property string $description
 * @property int $id
 * @property int|null $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expenses whereUpdatedAt($value)
 */
	class Expenses extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property int $status 0: hide, 1: show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FoodPlan
 *
 * @property int $id
 * @property int $meal_plan_id
 * @property string $meal_name
 * @property string $meal_time
 * @property string $food_items
 * @property string $quantity
 * @property int $calories
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereCalories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereFoodItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereMealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereMealPlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereMealTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodPlan whereUpdatedAt($value)
 */
	class FoodPlan extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Group
 *
 * @package App\Models
 * @version November 19, 2024, 3:59 am UTC
 * @property string $name
 * @property string $key
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models{
/**
 * Class GroupPermition
 *
 * @package App\Models
 * @version November 19, 2024, 4:18 am UTC
 * @property integer $group_id
 * @property integer $permission_id
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupPermition whereUpdatedAt($value)
 */
	class GroupPermition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GymDietChart
 *
 * @property int $id
 * @property int $member_id
 * @property string $member_name
 * @property int $age
 * @property string $gender
 * @property float $height
 * @property float $weight
 * @property float|null $body_fat_percentage
 * @property string $goal
 * @property string $meal_preference
 * @property int $caloric_requirement
 * @property float|null $protein_grams
 * @property float|null $carbs_grams
 * @property float|null $fats_grams
 * @property float|null $water_intake
 * @property string|null $special_instructions
 * @property int|null $meal_plan_id
 * @property string|null $from_date
 * @property string|null $to_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart query()
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereBodyFatPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereCaloricRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereCarbsGrams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereFatsGrams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereMealPlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereMealPreference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereMemberName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereProteinGrams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereSpecialInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereWaterIntake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymDietChart whereWeight($value)
 */
	class GymDietChart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GymMealPlan
 *
 * @property int $id
 * @property int $diet_chart_id
 * @property string $meal_name
 * @property string $meal_time
 * @property string $food_items
 * @property float $quantity
 * @property float $calories
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GymDietChart $dietChart
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereCalories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereDietChartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereFoodItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereMealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereMealTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GymMealPlan whereUpdatedAt($value)
 */
	class GymMealPlan extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Healthmetrics
 *
 * @package App\Models
 * @version November 18, 2024, 6:30 am UTC
 * @property \App\Models\members $members
 * @property integer $member_id
 * @property string $measurement_date
 * @property string $weight
 * @property string $height
 * @property string $bmi
 * @property string $body_fat_percentage
 * @property string $muscle_mass
 * @property string $hydration_level
 * @property int $id
 * @property string|null $bmi_status
 * @property string $chest
 * @property string $waist
 * @property string $hips
 * @property string $thighs
 * @property string $arms
 * @property string $forearms
 * @property string $neck
 * @property string $shoulders
 * @property string $calves
 * @property string $resting_heart_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics query()
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereArms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereBmi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereBmiStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereBodyFatPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereCalves($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereChest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereForearms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereHips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereHydrationLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereMeasurementDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereMuscleMass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereNeck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereRestingHeartRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereShoulders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereThighs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereWaist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Healthmetrics whereWeight($value)
 */
	class Healthmetrics extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Income
 *
 * @package App\Models
 * @version November 18, 2024, 9:26 am UTC
 * @property string $title
 * @property integer $amount
 * @property string $description
 * @property int $id
 * @property int|null $branch_id
 * @property int|null $member_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Income newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income query()
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereUpdatedAt($value)
 */
	class Income extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Locker
 *
 * @package App\Models
 * @version January 9, 2025, 5:11 am UTC
 * @property string $locker_number
 * @property string $location
 * @property string $status
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Locker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Locker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Locker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereLockerNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locker whereUpdatedAt($value)
 */
	class Locker extends \Eloquent {}
}

namespace App\Models{
/**
 * Class LockerAssignment
 *
 * @package App\Models
 * @version January 9, 2025, 5:20 am UTC
 * @property integer $locker_id
 * @property integer $member_id
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 * @property int $id
 * @property int|null $coupons_id
 * @property int|null $amount
 * @property int|null $tax
 * @property int|null $coupon_amount
 * @property int|null $admission_fee
 * @property int|null $gross_amount
 * @property int|null $pay_amount
 * @property int|null $due_amount
 * @property int|null $pay_status 1 for pending, 2 for due, 3 for fully payment
 * @property string|null $expired_date
 * @property string|null $due_date
 * @property int|null $payment_mode
 * @property string|null $payment_date
 * @property int|null $payment_amount
 * @property string|null $payment_note
 * @property string|null $payment_doc
 * @property string|null $payment_number
 * @property int|null $payment_status
 * @property string|null $active_status
 * @property string|null $inactive_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereAdmissionFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereCouponAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereCouponsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereGrossAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereInactiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereLockerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePayAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentDoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LockerAssignment whereUpdatedAt($value)
 */
	class LockerAssignment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MealPlan
 *
 * @property int $id
 * @property string $meal_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan whereMealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MealPlan whereUpdatedAt($value)
 */
	class MealPlan extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Member
 *
 * @package App\Models
 * @version November 18, 2024, 4:33 am UTC
 * @property string $mem_name
 * @property string $mem_father
 * @property string $mem_address
 * @property string $mem_admission_date
 * @property string $mem_cell
 * @property string $mem_email
 * @property string $mem_img_url
 * @property int $id
 * @property string $member_unique_id
 * @property string|null $last_name
 * @property string|null $nid
 * @property string|null $mem_mother
 * @property string|null $mem_gender
 * @property int|null $mem_admission_fees
 * @property string|null $date_of_birth
 * @property string|null $mem_type
 * @property int|null $punch_id
 * @property int|null $branch_id
 * @property int|null $height
 * @property int|null $weight
 * @property int|null $bmi
 * @property int|null $waist
 * @property string|null $blood_group
 * @property string|null $blood_pressure
 * @property string|null $pulse_rate
 * @property string|null $profession
 * @property string|null $office_address
 * @property string|null $exercise_goal
 * @property string|null $current_diet_routine
 * @property string|null $sassoon_exercise_time
 * @property string|null $sleep_time
 * @property string|null $wake_up_time
 * @property string|null $work_time
 * @property string|null $exercise_history
 * @property string|null $medicine_history
 * @property string|null $injury_or_health_issue
 * @property string|null $like_or_dislike_exercise
 * @property string|null $like_or_dislike_food
 * @property string|null $push_up_count
 * @property string|null $pull_up_count
 * @property string|null $lift_count_kg
 * @property string|null $question
 * @property string|null $term_con
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereBloodGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereBloodPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereBmi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCurrentDietRoutine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereExerciseGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereExerciseHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereInjuryOrHealthIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLiftCountKg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLikeOrDislikeExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereLikeOrDislikeFood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMedicineHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemAdmissionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemAdmissionFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemCell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemFather($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemMother($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereMemberUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereNid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereOfficeAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePullUpCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePulseRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePunchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePushUpCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereSassoonExerciseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereSleepTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereTermCon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereWaist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereWakeUpTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereWorkTime($value)
 */
	class Member extends \Eloquent {}
}

namespace App\Models{
/**
 * Class MultiBranch
 *
 * @package App\Models
 * @version December 10, 2024, 4:23 am UTC
 * @property string $branch_name
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property string $manager_name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch query()
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereBranchName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereManagerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultiBranch whereUpdatedAt($value)
 */
	class MultiBranch extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Notice
 *
 * @package App\Models
 * @version December 1, 2024, 10:52 am UTC
 * @property string $title
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notice whereUpdatedAt($value)
 */
	class Notice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Offer
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUpdatedAt($value)
 */
	class Offer extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Package
 *
 * @package App\Models
 * @version November 18, 2024, 5:36 am UTC
 * @property string $pack_name
 * @property integer $pack_admission_fee
 * @property string $pack_duration
 * @property integer $pack_status
 * @property int $id
 * @property int|null $branch_id
 * @property string|null $pack_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackAdmissionFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePackStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 */
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PackageSection
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageSection whereUpdatedAt($value)
 */
	class PackageSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Package_class
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package_class whereUpdatedAt($value)
 */
	class Package_class extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PaymentMethod
 *
 * @package App\Models
 * @version January 12, 2025, 10:51 am UTC
 * @property string $name
 * @property integer $branch_id
 * @property string $payment_number
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Permission
 *
 * @package App\Models
 * @version November 19, 2024, 4:02 am UTC
 * @property string $name
 * @property string $key
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Product
 *
 * @package App\Models
 * @version November 18, 2024, 5:51 am UTC
 * @property string $product_name
 * @property integer $product_price
 * @property integer $product_qty
 * @property string $product_img_url
 * @property int $id
 * @property int|null $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Punch_model
 *
 * @property int $id
 * @property string $punch_id
 * @property string $punch_time
 * @property int $process_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model query()
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model whereProcessStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model wherePunchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model wherePunchTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Punch_model whereUpdatedAt($value)
 */
	class Punch_model extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PurchasePackage
 *
 * @package App\Models
 * @version November 19, 2024, 7:18 am UTC
 * @property integer $member_id
 * @property integer $package_id
 * @property integer $coupons_id
 * @property integer $amount
 * @property integer $tax
 * @property integer $coupon_amount
 * @property integer $gross_amount
 * @property int $id
 * @property int|null $admission_fee
 * @property int $pay_amount
 * @property int $due_amount
 * @property int $status 1 for pending, 2 for due, 3 for fully payment
 * @property string|null $expired_date
 * @property string|null $due_date
 * @property string|null $active_status
 * @property string|null $inactive_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereActiveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereAdmissionFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereCouponAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereCouponsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereGrossAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereInactiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage wherePayAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePackage whereUpdatedAt($value)
 */
	class PurchasePackage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PurchasePayment
 *
 * @property int $id
 * @property int|null $purchase_purchase_id
 * @property string|null $payment_mode
 * @property string|null $payment_date
 * @property string|null $payment_amount
 * @property string|null $payment_note
 * @property string|null $payment_doc
 * @property string|null $payment_number
 * @property int $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentDoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment wherePurchasePurchaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PurchasePayment whereUpdatedAt($value)
 */
	class PurchasePayment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Requisition
 *
 * @package App\Models
 * @version November 18, 2024, 8:55 am UTC
 * @property string $Title
 * @property integer $member_id
 * @property integer $product_id
 * @property integer $status
 * @property int $id
 * @property int|null $qty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Requisition whereUpdatedAt($value)
 */
	class Requisition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sales_productModel
 *
 * @property int $id
 * @property int $sale_id
 * @property int $member_id
 * @property string $sale_date
 * @property string $subtotal
 * @property string $discount
 * @property string $tax
 * @property string $total_amount
 * @property string $payment_method
 * @property string $status
 * @property string $payment_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sales_product_itemModel> $items
 * @property-read int|null $items_count
 * @property-read \App\Models\Member|null $member
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel wherePaymentNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereSaleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_productModel whereUpdatedAt($value)
 */
	class Sales_productModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sales_product_itemModel
 *
 * @property int $id
 * @property int $sale_id
 * @property int $product_id
 * @property string $product_name
 * @property int $quantity
 * @property string $unit_price
 * @property string|null $total_price
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Sales_productModel $sale
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sales_product_itemModel whereUpdatedAt($value)
 */
	class Sales_product_itemModel extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Schedulebooking
 *
 * @package App\Models
 * @version November 18, 2024, 9:35 am UTC
 * @property integer $member_id
 * @property string $booking_date
 * @property string $service_type
 * @property integer $status
 * @property string $note
 * @property int $id
 * @property string|null $booking_time
 * @property int|null $asset_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereBookingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereBookingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedulebooking whereUpdatedAt($value)
 */
	class Schedulebooking extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string|null $facebook_link
 * @property string|null $twitter_link
 * @property string|null $telegram_link
 * @property string|null $whatsapp_link
 * @property string|null $youtube_link
 * @property string|null $phone_number
 * @property string|null $call_number
 * @property string|null $email
 * @property string|null $address
 * @property string|null $yeras_of_experience
 * @property string|null $total_clients
 * @property string|null $rmg_sector
 * @property string|null $hr_pdf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCallNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereHrPdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereRmgSector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTelegramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTotalClients($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitterLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereWhatsappLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereYerasOfExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereYoutubeLink($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * Class SiteFeature
 *
 * @package App\Models
 * @version November 27, 2024, 6:56 am UTC
 * @property string $title
 * @property string $image
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteFeature whereUpdatedAt($value)
 */
	class SiteFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * Class SiteProfile
 *
 * @package App\Models
 * @version November 27, 2024, 5:59 am UTC
 * @property string $logo_name
 * @property string $banner_status
 * @property string $banner_image
 * @property string $banner_video
 * @property string $title
 * @property string $small_banner_text
 * @property string $big_banner_text
 * @property string $fotter_text
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereBannerStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereBannerVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereBigBannerText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereFotterText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereLogoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereSmallBannerText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteProfile whereUpdatedAt($value)
 */
	class SiteProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * Class SiteSetting
 *
 * @package App\Models
 * @version November 21, 2024, 11:31 am UTC
 * @property string $name
 * @property string $logo
 * @property string $slogan
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereUpdatedAt($value)
 */
	class SiteSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * Class SiteTrainer
 *
 * @package App\Models
 * @version November 27, 2024, 9:06 am UTC
 * @property string $trainer_name
 * @property string $trainer_type
 * @property string $image
 * @property string $description
 * @property string $facebook_link
 * @property string $twitter
 * @property string $linkedin
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereTrainerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereTrainerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteTrainer whereUpdatedAt($value)
 */
	class SiteTrainer extends \Eloquent {}
}

namespace App\Models{
/**
 * Class TermAndCondition
 *
 * @package App\Models
 * @version December 9, 2024, 4:45 am UTC
 * @property string $title
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition query()
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TermAndCondition whereUpdatedAt($value)
 */
	class TermAndCondition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property int|null $member_id
 * @property int|null $group_id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class WorkoutCategory
 *
 * @package App\Models
 * @version December 10, 2024, 9:07 am UTC
 * @property string $title
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutCategory whereUpdatedAt($value)
 */
	class WorkoutCategory extends \Eloquent {}
}

