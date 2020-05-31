<?php

namespace App\Http\Controllers;

use App\{Guardy, Plage, Servuser, Comment};
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Auth;
use Validator;



class GuardyController extends Controller
{

    public function loopCalendar(Array $events, Guardy $guardy){

        $first_date = Carbon::parse($guardy->date_start);
        $last_date = Carbon::parse($guardy->date_end);

        while ($first_date <= $last_date ) {


            $first_date_string = $first_date->format('Y-m-d');
            $time_start_string = Carbon::parse($guardy->plage->time_start)->format('H:i');
            $time_end_string = Carbon::parse($guardy->plage->time_end)->format('H:i');
            //dd($first_date_string, $time_start_string, $time_end_string);
            $first_date_time_start_string = $first_date_string . ' ' .$time_start_string;
            $first_date_time_end_string = $first_date_string . ' ' . $time_end_string;

            $first_date_time_start = Carbon::parse($first_date_time_start_string);
            $first_date_end_start = Carbon::parse($first_date_time_end_string);

            //dd($first_date_time_start->toDateTimeString());

            //dd( new \DateTime( $first_date_time_start->toDateTimeString() ) );
            //return Carbon::createFromFormat('d/m/Y H:i' ,$first_date_time_start_string ) ;

            $events[] = \Calendar::event(
                $guardy->name, //event title
                false, //full day event?
                //new \DateTime($value->start_date), //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
                    //Carbon::createFromFormat('d/m/Y H:i'
                    new \DateTime( $first_date_time_start->toDateTimeString() ),  
                //new \DateTime($value->end_date.' +1 day'), //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
                    new \DateTime( $first_date_end_start->toDateTimeString() ),
                    2, //optional event ID
                [
                    'color' => '#f05050',
                    'url' => 'http://full-calendar.io'
                ]
            );
            
            $first_date->addDay();
        }

        return $events;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guardies = Guardy::all();
        return view('guardies.index', compact('guardies'));
    }



    public function generalCalendar(){

        $guardies = Guardy::all();

        $events = [];

        $newEvents;

        foreach($guardies as $guardy){
            $newEvents = self::loopCalendar($events, $guardy);

            $events = array_merge($events, $newEvents);
        }

        


        $calendar = \Calendar::addEvents($events)->setOptions([ //set fullcalendar options
            'firstDay' => 1,
            'plugins'=> [ 'dayGrid', 'interaction'],
            'defaultView'=> 'dayGridMonth',
            'header' => [ 'left'=> 'prev,next', 'center'=> 'title', 'right'=> 'dayGridDay,dayGridWeek,dayGridMonth'],
            'defaultDate' => date("Y-m-d"),
            'navLinks' => true,
            'editable' => true,
            'selectable' => true,
            'eventLimit' => true,
            'locale' => 'fr'

        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}'
        ]);

        //return response()->json($calendar);

        if(Auth::check()){

            return view('guardies.general-calendar', compact('calendar'));

        }else{

            return view('guardies.g-calendar-guest', compact('calendar'));

        }

        


    }




    public function calendar(Guardy $guardy)
    {
        $events = [];



        $events = self::loopCalendar($events, $guardy);


        $calendar = \Calendar::addEvents($events)->setOptions([ //set fullcalendar options
            'firstDay' => 1,
            'plugins'=> [ 'dayGrid', 'interaction'],
            'defaultView'=> 'dayGridMonth',
            'header' => [ 'left'=> 'prev,next', 'center'=> 'title', 'right'=> 'dayGridDay,dayGridWeek,dayGridMonth'],
            'defaultDate' => date("Y-m-d"),
            'navLinks' => true,
            'editable' => true,
            'selectable' => true,
            'eventLimit' => true,
            'locale' => 'fr'

        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}'
        ]);

        //return response()->json($calendar);

        return view('guardies.calendar', compact('calendar'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plages = Plage::all();
        $servusers = Servuser::all();
        return view('guardies.create', compact('plages', 'servusers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'unique:guardies',
        ]);


        $date_start = Carbon::parse($request->date_start);
        $date_end = Carbon::parse($request->date_end);

        $guardy_request = $request->toArray();

        $guardy_request['date_start'] = $date_start->toDateString();
        $guardy_request['date_end'] = $date_end->toDateString('Y-m-d');


        if( $date_start < $date_end ){

            $guardy = Guardy::create($guardy_request);


            return view('guardies.show', compact('guardy'));

        }else{

            return back()
            ->withInput()
            ->withErrors([]) ;
            //['name.required', 'Name is required']

        }
        //$plage = Plage::create(['name' => $request->name]);
        return 'NOT STORED';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guardy  $guardy
     * @return \Illuminate\Http\Response
     */
    public function show(Guardy $guardy)
    {
        return view('guardies.show', compact('guardy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guardy  $guardy
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardy $guardy)
    {
        $plages = Plage::all();

        $servusers = Servuser::all();

        return view('guardies.edit', compact('guardy', 'plages', 'servusers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guardy  $guardy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardy $guardy)
    {
        $validation = Validator::make($request->all(), [

        ]);


        $date_start = Carbon::parse($request->date_start);
        $date_end = Carbon::parse($request->date_end);

        $guardy_request = $request->toArray();

        $guardy_request['date_start'] = $date_start->toDateString();
        $guardy_request['date_end'] = $date_end->toDateString('Y-m-d');


        if( $date_start < $date_end ){

            $guardy->update($guardy_request);


            return view('guardies.show', compact('guardy'));

        }else{

            return back()
            ->withInput()
            ->withErrors([]) ;
            //['name.required', 'Name is required']

        }
        //$plage = Plage::create(['name' => $request->name]);
        return 'NOT STORED';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guardy  $guardy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardy $guardy)
    {
        $guardy->delete();

        return true;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Guardy  $guardy
     * @return \Illuminate\Http\Response
     */
    public function history(Guardy $guardy)
    {
        return view('guardies.history', compact('guardy'));
    }


    public function comments(Guardy $guardy)
    {
        return view('guardies.comments', compact('guardy'));
    }


    public function indexExtended()
    {
        return view('guardies.index-extended');
    }

    public function indexExtendedData()
    {

        //return Guardy::all()->count();

        if(Guardy::all()->count()){

            return datatables(Guardy::all())->toJson();

        }
        else{
            return response()->json(Guardy::all());
        }
        
    }

    



}
