<?php

namespace App\Models;


use App\Models\Booking;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'make',
        'model',
        'year',
        'engine',
        'transmission',
        'price',
    ];

    //Always query with these relations
    public $with = ['images', 'bookings'];

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function customUpdate(Request $request): self
    {
        DB::transaction(function() use($request){
            //Old Images
            $oldImages = $request->input('old_images') ?? [];
            //Detach old images
            CarImage::where('car_id',$this->id)->whereNotIn('name', $oldImages)->forceDelete();
            //Create or update images - attach new images
            //New Images
            $images = $request->file('images');
            if ($images) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }

            $this->syncAll($request)->fill($request->input())->save();
        });

        return $this;
    }

    public static function customCreate(Request $request): self
    {
        return DB::transaction(function() use($request){
            // $movie = (new self())->fill($request->inputs())->save();
            $movie = self::create($request->input());
            $movie->syncAll($request);
            $images = $request->file('images');

            if ($images) {
                $images = $movie->uploadImages($images);
                $movie->insertImages($images);
            }

            return $movie;
        });
    }

    public function insertImages($images): self
    {
        collect($images)->each(function (string $item, int $key) {
            CarImage::updateOrCreate([
                'name' => $item,
                'car_id' => $this->id
            ]);
        });
        return $this;
    }

    public function syncAll(Request $request): self
    {
        // $this->genres()->sync($request->get('genres'));
        // $this->countries()->sync($request->get('countries'));
        // $this->languages()->sync($request->get('languages'));
        // $this->actors()->sync($request->get('actors'));
        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/car_images/$imageName")) {
               continue;
            }

            $image->storeAs(
                'public/car_images',
                $image->getClientOriginalName()
            );

        }

        return $paths;
    }
}
