<?php

namespace oct\Http\Controllers;

use Illuminate\Http\Request;
use oct\Student;
class StudentCtrl extends Controller
{
    public function enroll() {
      return view('admin.enroll');
    }

    public function postEnroll(Request $request) {
      $student = new Student();

      $student->first_name = $request->input('first_name');
      $student->middle_name = $request->input('middle_name');
      $student->last_name = $request->input('last_name');
      $student->national_id = $request->input('national_id');
      $student->gender = $request->input('gender');
      $student->dob = $request->input('dob');
      $student->reg_no = $request->input('reg_no');
      $student->course = $request->input('course');
      $student->department = $request->input('department');
      $student->email = $request->input('email');
      $student->mobile = $request->input('mobile');
      $student->postal_address = $request->input('postal_address');
      $student->next_of_kin = $request->input('next_of_kin');
      $student->next_of_kin_contact = $request->input('next_of_kin_contact');
      $student->guardian = $request->input('guardian');
      $student->save();

      return redirect()->back();
    }
}
