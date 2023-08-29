<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InstitutionController extends Controller
{
    public function search(Request $request)
    {
        try{
            $query = Institution::query();
    
            if ($request->municipality) {
                $query->where('municipality_id', $request->municipality);
            }
    
            if ($request->serviceProvider) {
                $query->where('service_provider_id', $request->serviceProvider);
            }
    
            if ($request->activities) {
                $activities = json_decode($request->activities, true);
                $query->whereHas('activities', function ($query) use ($activities) {
                    $query->whereIn('activities.id', $activities);
                });
            }
    
            return $query->with(['municipality:id,name','serviceProvider:id,name','activities:id,name'])->get();
        } catch (Exception $ex){
            Log::info("Error");
            Log::info($ex);
        }
    }

    public function store(Request $request)
    {
        try{
            Log::info("image");
            Log::info($request->image);
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $imagePath = $request->file('image')->store('/', 'public_images');
            $request = $request->all();
            $request['image_url'] = Storage::disk('public_images')->url($imagePath);
            return Institution::create($request);
            
        } catch (Exception $ex){
            Log::info("Error");
            Log::info($ex);
            return $ex;
        }
    }
}
