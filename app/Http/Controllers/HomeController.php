<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Flight;
use App\Models\Hotel;
use App\Models\Facility;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $banner = Banner::where('page_type', 'homepage')->first();
        } catch(Exception $e) {
            $banner = null;
        }

        return view('landing.home', compact('banner'));
    }

    public function hotelView()
    {
        return view('landing.holiday-listing');
    }

    public function buslisting()
    {
        return view('landing.bus-listing');
    }

    public function buspayment()
    {
        return view('landing.bus-payment');
    }

    public function flightlisting(Request $request)
    {
        $query = $request->all();

        $validated = request()->validate([
            'departure_city' => 'required|string',
            'arival_city' => 'required|string',
            'departure_date' => 'required|date_format:Y-m-d',
            'travelClass' => 'required|string'
        ]);

        $flights = Flight::where([
                ['departure_city', 'LIKE', '%'.$request->input('departure_city').'%'],
                ['arival_city', 'LIKE', '%'.$request->input('arival_city').'%'],
                ['departure_date', '=', date('Y-m-d', strtotime($request->input('departure_date')))],
                ['class', 'LIKE', '%'.$request->input('travelClass').'%'],
            ])->with(['airline', 'route', 'price', 'stops']);

        if($request->has('adult')) {
            $flights->whereHas('price', function($q) use($request) {
                $q->where('available_seat', '>=', $request->input('adult'));
            });
        }

        

        $flights = $flights->get();
        
        if($request->has('return_date')) {

            $return_flights = Flight::where([
                ['departure_city', 'LIKE', '%'.$request->input('arival_city').'%'],
                ['arival_city', 'LIKE', '%'.$request->input('departure_city').'%'],
                ['departure_date', '=', date('Y-m-d', strtotime($request->input('return_date')))],
                ['class', 'LIKE', '%'.$request->input('travelClass').'%'],
            ])->with(['airline', 'price', 'route', 'stops']);
           
            if($request->has('adult')) {
                $return_flights->whereHas('price', function($q) use($request) {
                    $q->where('available_seat', '>=', $request->input('adult'));
                });
            }
            
            $flights = $flights->merge($return_flights->get());
            
            
        }


        return view('landing.flight-listing', \compact('flights', 'query'));
    }


    public function customlist()
    {
        // $flights = Flight::all();
        $flights = Flight::orderBy('id', 'desc')->paginate(5);
        return view('landing.flight-list-custom', compact('flights'));
    }

    public function flightpayment()
    {
        return view('landing.flight-payment');
    }

    public function holidaydetail()
    {
        return view('landing.holiday-detail');
    }

    public function holidaylisting()
    {
        return view('landing.holiday-listing');
    }

    public function hoteldetail(Request $request, Hotel $hotel)
    {
        $query = \Session::get('query');

        $date1 = new \DateTime($query['check_in']);
        $date2 = new \DateTime($query['check_out']);
        // this calculates the diff between two dates, which is the number of nights
        $numberOfNights= $date2->diff($date1)->format("%a"); 
        return view('landing.hotel-detail', compact('hotel', 'query', 'numberOfNights'));
    }

    public function hotellisting(Request $request)
    {
        $query = collect($request->all());

        \Session::put('query', $query);

        $facilities = Facility::where('type', 'hotel')->get();

        $validate = $request->validate([
            'location' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        $hotels = Hotel::with('rooms')->where('status', 'enabled');
        
        
        $locations = $hotels->pluck('location');
        
        if($request->has('location')) {
            $hotels->where('location', "LIKE", '%'.$request->input('location').'%');
        }

        $hotels = $hotels->get();

        return view('landing.hotel-listing', compact('hotels', 'locations', 'facilities'));
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function aboutus()
    {
        return view('landing.aboutus');
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function blog()
    {
        return view('landing.blog');
    }

    public function blogoverview()
    {
        return view('landing.blogoverview');
    }


    public function filter_hotels(Request $request) {

        $hotels = Hotel::with('rooms')->where('status', 'enabled');

        if($request->has('location')) {
            $hotels->where('location', "LIKE", '%'.$request->input('location').'%');
        }
        
        if($request->has('locations')) {
            $hotels->where(function($query) use($request) {
                foreach($request->input('locations') as $location) {
                    $query->orwhere('location', "LIKE", '%'.$location.'%');
                }
            });
        }
        
        
        if($request->has('hotel_name')) {
            $hotels->where('name', "LIKE", '%'.$request->input('hotel_name').'%');
        }
        

        // if($request->has('adults')) {
        //     $hotels->whereHas('rooms', function($query) use($request) {
        //         $query->where('max_adults', ">=", $request->input("adults"));
        //     });
        // }

        // if($request->has('children')) {
        //     $hotels->whereHas('rooms', function($query) use($request) {
        //         $query->where('max_children', ">=", $request->input('children'));
        //     });
        // }

        if($request->has('stars')) {
            $hotels->whereIn('stars', $request->input('stars'));
        }

        if($request->has('price')) {
            $hotels->whereHas('rooms', function($query) use($request){
                $query->where('price', "<=", $request->input('price'));
            });
        }

        if($request->has('facilities')) {
            $hotels->where(function($query) use($request){
                foreach($request->input('facilities') as $facility) {
                    $query->where('facilities', 'like', '%'.$facility.'%');
                }
            });
        }

        $hotels = $hotels->get();

        return view('landing.partials.hotel_filter', compact('hotels'));
    }


    public function flights_filter(Request $request) {

        $validated = request()->validate([
            'departure_city' => 'required|string',
            'arival_city' => 'required|string',
            'departure_date' => 'required|date_format:Y-m-d',
            'travelClass' => 'required|string'
        ]);

        $flights = Flight::where([
                ['departure_city', 'LIKE', '%'.$request->input('departure_city').'%'],
                ['arival_city', 'LIKE', '%'.$request->input('arival_city').'%'],
                ['departure_date', '=', date('Y-m-d', strtotime($request->input('departure_date')))],
                ['class', 'LIKE', '%'.$request->input('travelClass').'%'],
            ])->withCount('stops')->with(['airline', 'route', 'price', 'stops']);

        if($request->has('adult')) {
            $flights->whereHas('price', function($q) use($request) {
                $q->where('available_seat', '>=', $request->input('adult'));
            });
        }

       

        if($request->has('priceFrom')) {
            $flights->whereHas('price', function($q) use ($request) {
                $q->whereBetween('price_per_adult', array($request->input('priceFrom'), $request->input('priceTo')));
            });
        }

        if($request->has('stops')) {
            if($request->input('stops') == 0) {
                $flights->having('stops_count', 0);
            } elseif($request->input('stops') > 0) {
                $flights->having('stops_count', '>=', $request->input('stops'));
            }
        }

        if($request->has('travelClass')) {
            $flights->where('class', 'LIKE', '%'.$request->input('travelClass').'%');
        }

        if($request->has('airline')) {
            $flights->whereHas('airline', function($q) use($request) {
                $q->where('name', 'LIKE', '%'.$request->input('airline').'%');
            });
        }

        $flights = $flights->get();

        if ($request->has('departure_from')) {
            $flights = $flights->filter(function($item) use($request) {
               if($this->filterBetween($request, $item)) {
                   return $item;
               }
            });
        }

        if($request->has('return_date')) {

            $return_flights = Flight::where([
                ['departure_city', 'LIKE', '%'.$request->input('arival_city').'%'],
                ['arival_city', 'LIKE', '%'.$request->input('departure_city').'%'],
                ['departure_date', '=', date('Y-m-d', strtotime($request->input('return_date')))],
                ['class', 'LIKE', '%'.$request->input('travelClass').'%'],
            ])->with(['airline', 'price', 'route', 'stops']);

            if($request->has('adult')) {
                $return_flights->whereHas('price', function($q) use($request) {
                    $q->where('available_seat', '>=', $request->input('adult'));
                });
            }

            $flights = $flights->merge($return_flights->get());

        }

        return view('landing.partials.flight_filter', compact('flights'));
    }

    protected function filterBetween($request, $item) {

        $departure_time = strtotime($item->departure_date.$item->departure_time);

        $filter_time1 = strtotime($request->input('departure_from'));

        $filter_time2 = strtotime($request->input('departure_to'));

        if($departure_time >= $filter_time1 && $departure_time <=  $filter_time2) {
            return true;
        }
        return false;
    }
}
