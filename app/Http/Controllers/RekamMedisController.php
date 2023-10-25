<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekamMedisController extends Controller
{
    public function index(){
        $pasienData = DB::table("pasien")->select('id', 'nama')->get();
        $dokterData = DB::table("dokter")->select('id', 'nama')->get();
        return view("dashboard",["pasienData"=>$pasienData, "dokterData"=>$dokterData]);
    }

    public function seeMedicalRecord(){
        $patientData = DB::table('rekam_medis')
        ->select('pasien.nama AS pasien_nama', 'dokter.nama AS dokter_nama', 'kondisi_kesehatan', 'suhu_tubuh')
        ->join('pasien', 'rekam_medis.pasien_id', '=', 'pasien.id')
        ->join('dokter', 'rekam_medis.dokter_id', '=', 'dokter.id')
        ->get();

        return view('viewdata', ['patientData' => $patientData]);
    }

    public function seeMedicalRecordByPatientId($id){
        $pasienId = intval($id);
        $patientData = DB::table('rekam_medis')
        ->select('pasien.nama AS pasien_nama', 'dokter.nama AS dokter_nama', 'kondisi_kesehatan', 'suhu_tubuh')
        ->join('pasien', 'rekam_medis.pasien_id', '=', 'pasien.id')
        ->join('dokter', 'rekam_medis.dokter_id', '=', 'dokter.id')
        ->where('rekam_medis.pasien_id', '=', $pasienId)
        ->get();

        return view('viewdatabypasien', ['patientData' => $patientData]);
    }

    public function seeMedicalRecordByDoctorId($id){
        $dokterId = intval($id);
        $patientData = DB::table('rekam_medis')
        ->select('pasien.nama AS pasien_nama', 'dokter.nama AS dokter_nama', 'kondisi_kesehatan', 'suhu_tubuh')
        ->join('pasien', 'rekam_medis.pasien_id', '=', 'pasien.id')
        ->join('dokter', 'rekam_medis.dokter_id', '=', 'dokter.id')
        ->where('rekam_medis.dokter_id', '=', $dokterId)
        ->get();

        return view('viewdatabydokter', ['patientData' => $patientData]);
    }

    // public function insertMedicalRecord(Request $request){
        
    // }
}
