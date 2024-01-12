<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\singlemodel;
use App\Http\Controllers\logincontroller;
use Illuminate\Routing\Controller;


class management extends Controller
{
    public function dashboardAction(Request $request)
    {

        if ($request->session()->has('user_data')) {
            $userData = $request->session()->get('user_data');


            return view('dashboard', compact('userData'));
        } else {

            return redirect('login');
        }
    }
    // public function enterdetailspage(Request $request)
    // {
    //     if ($request->session()->has('user_data')) {
    //         $userData = $request->session()->get('user_data');

    //         $param = array();
    //         $sy = singlemodel::call_procedure('proc_select_from_symptoms', $param);

    //         return view('enterdetails', compact('userData', 'sy'));
    //     } else {

    //         return redirect('login');
    //     }
    // }


    public function getinfodetailspage(Request $request)
    {
        if ($request->session()->has('user_data')) {
            $userData = $request->session()->get('user_data');
            $param = array();
            $sy = singlemodel::call_procedure('proc_select_from_symptoms', $param);

            return view('getinfo', compact('userData', 'sy'));
        } else {
            return redirect('login');
        }
    }
    public function senddatasymptoms(Request $request)
    {
        if ($request->session()->has('user_data')) {
            $userData = $request->session()->get('user_data');

            $param = array();
            $sy = singlemodel::call_procedure('proc_select_from_symptoms', $param);

            return view('enterdetails', compact('userData', 'sy'));
        } else {
            return redirect('login');
        }
    }

    public function getPatientInfo(Request $request)
    {
        $phone_no = $request->input('phone');

        $param = array($phone_no);
        $patientInfo = singlemodel::call_procedure('proc_get_patient_by_phone', $param);

        if (empty($patientInfo)) {

            $request->session()->flash('alert', 'Patient information not found with this phone No.');
            return redirect('/dash-board/get-info');
        }
        $param = array();
        $sy = singlemodel::call_procedure('proc_select_from_symptoms', $param);

        return view('getinfo', compact('patientInfo', 'sy'));
    }
    public function store(Request $request)
    {

        $f_name = $request->input('first-name');
        $L_name = $request->input('last-name');
        $d_o_b = $request->input('dob');
        $gender = $request->input('gender');
        $phone_no = $request->input('phone');
        $email_add = $request->input('email');
        $address = $request->input('address');

        $param = array($f_name, $L_name, $d_o_b, $gender, $phone_no, $email_add, $address);
        $patients = singlemodel::call_procedure('proc_insert_into_pat', $param);


        if ($patients && isset($patients[0])) {
            $patient_id = $patients[0]->id;
            $symptom = $request->input('symptom');
            $descripion = $request->input('description');
            $treatment = $request->input('treatment');


            $param = array($patient_id, $symptom, $descripion, $treatment);
   



            $data = singlemodel::call_procedure('proc_insert_into_patients_history', $param);
            if ($data) {
                return redirect('/dash-board')->with('success', 'Form submitted successfully.');
            }

            return redirect('/dash-board/enter-details')->with('failed', 'Failed to submit the form. Please try again.');
        }
    }
    public function editpatients(Request $request, $id)
    {

        if ($request->session()->has('user_data')) {
            $userData = $request->session()->get('user_data');

            $param = array($id);
            //  dd($param);

            $patient_Info = singlemodel::call_procedure('proc_get_patient_by_id', $param);
            $param = array();
            $sy = singlemodel::call_procedure('proc_select_from_symptoms', $param);


            return view('editinfo', ['patientInfo' => $patient_Info]);
        } else {
            return redirect('login');
        }
    }
    public function updatePatientInfo(Request $request, $id)
    {
        $newFName = $request->input('f_name');
        $newLName = $request->input('l_name');
        $newDOB = $request->input('dob');
        $formattedDOB = date('Y-m-d', strtotime($newDOB));
        $newGender = $request->input('gender');
        $newPhoneNo = $request->input('phone');
        $newEmail = $request->input('email');
        $newAddress = $request->input('address');
        $newSymptom = $request->input('symptom');
        $newDescription = $request->input('description');
        $newTreatment = $request->input('treatment');

        $param = array(
            $id, $newFName, $newLName, $formattedDOB, $newGender, $newPhoneNo,
            $newEmail, $newAddress
        );


        $updaepatient = singlemodel::call_procedure('proc_update_into_patientss', $param);


        $param = array($id, $newSymptom, $newDescription, $newTreatment);

        $updatehistory = singlemodel::call_procedure('proc_update_into_patients_history', $param);

        if ($updaepatient && $updatehistory) {
            return redirect('/dash-board/get-info')->with('success', 'Patient information updated successfully.');
        } else {
            return redirect('/dash-board/get-info')->with('failed', 'Failed to update patient information. Please try again.');
        }
    }

    public function insertnewsymptoms(Request $request, $id)
    {
        $sameid = $id;
        $newsymptom = $request->input('newSymptom');
        $newdescriptions = $request->input('newDescription');
        $treatment = $request->input('newTreatment');

        $param = array($sameid, $newsymptom, $newdescriptions, $treatment);


        $data = singlemodel::call_procedure('proc_insert_into_patients_history_with_new_elements', $param);
    }

    public function getsymptombyapi($id = null)
    {

        $param = array($id);
        $data = singlemodel::call_procedure('proc_select_from_symptoms_new', $param);
        return $data;
    }
    public function listsymptom()
    {
        return view('symptomdrop');
    }

    public function sypost(Request $request)
    {
        $new = $request->input('symptom');
        dd($new);
    }
    public function listing($id = null)
    {
        $param = [$id];
        $listing = singlemodel::call_procedure('proc_for_listing_api', $param);
        return $listing;
    }
    public function patientlisitng()
    {
        return view('patientlisting');
    }
}
