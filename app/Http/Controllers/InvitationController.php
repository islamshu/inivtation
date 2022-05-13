<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Invitation;
use App\InvitationUser;
use App\Userinv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function index()
    {
        return view('invitation.index')->with('invitiations',Userinv::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invitation.create');
    }
    public function get_form($id)
    {
        $inv = Invitation::find($id);
        return view('invitation.form')->with('inv',$inv);
    }
    public function get_form_new()
    {
        return view('invitation.form');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // for($i=0;$i<count($parents);$i++)
        for( $i = 0 ;$i < $request->count ;$i++){
            $in = new Invitation();
            $in->save();
            $url = config('app.url').'/show_invitation/'.$in->id;
            $image = QrCode::format('svg')
            ->size(200)->errorCorrection('H')
            ->generate($url);
            $output_file =  time() + $in->id . '.svg';
            $file =  Storage::disk('local')->put($output_file, $image); 
            $in->qr_code =$output_file;
            $in->save();

            
        }
        return redirect()->back();
    }
    public function store_inv_new(Request $request)
    {
        $int = new Userinv();
        $int->name = $request->name;
        $int->email = $request->email;
        $int->phone = $request->phone;
        $int->people_number =$request->people_number;
        $int->people = json_encode($request->gust);
        $int->save();

    } 


 
    public function generate_pdf($id)
  {
      $inv = Invitation::find($id);
    $data = [
      'id' => $id,
      'qr_code'=>$inv->qr_code
    ];
    return view('invitation.pdf')->with('qr_code',$inv->qr_code);
    $pdf = PDF::loadView('invitation.pdf', $data);
    return $pdf->stream('invitation.pdf');
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function show(Invitation $invitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitation $invitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitation $invitation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitation $invitation)
    {
        //
    }
}
