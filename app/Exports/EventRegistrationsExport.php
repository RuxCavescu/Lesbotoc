<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class EventRegistrationsExport implements FromCollection, WithHeadings
{

  private $id;

  public function __construct(int $id) 
  {
      $this->id = $id;
  }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return User::select("id", "name", "email")->get();

        $registrations = DB::table("registrations")
                                  ->select('contacts.name', 'contacts.email')
                                  // ->with("contact")
                                  ->where("event_id", $this->id)
                                  ->leftJoin('contacts', 'registrations.contact_id', '=', 'contacts.id')
                                  ->get();
        
        
        
        
        return $registrations;
    }


    public function headings(): array
    {
        return ["Name", "Email"];
    }


}
