<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.event.create');
    }

    public function list()
    {
        $events = Event::paginate(8);

        return view('admin.event.list', compact('events'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'date' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return self::index($request)->withErrors($validator->errors());
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = Str::random(3) . time() . $image->getClientOriginalName();
            $destinationPath = public_path('/storage/images/events/');
            $image->move($destinationPath, $image_name);
        }

        Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'image' => $image_name
        ]);

        return redirect()->route('admin.event.list')->with('success', 'event added successfully');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        $image_name = $event->image;

        if (($request->hasFile('image'))) {
            $file_path = public_path('storage/images/events/') . $event->image;
            unlink($file_path);
            $image = $request->file('image');
            $image_name = Str::random(3) . time() . $image->getClientOriginalName();
            $destinationPath = public_path('storage/images/events');
            $image->move($destinationPath, $image_name);
        }

        Event::where('id', $id)->update([
            'name' => $request->name,
            'date' => $request->date,
            'image' => $image_name
        ]);

        return redirect()->route('admin.event.list')->with('success', 'event updated successfully');
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('admin.event.list')->with('success', 'event deleted successfully');
    }
}
