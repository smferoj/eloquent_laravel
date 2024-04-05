

## insert data
public function create(){
    $obj = new Student;
    $obj->name = 'SM';
    $obj->save();
  }

## show data 
  public function index(){
    $all_data = Student::get(); or
    $all_data = Student::all();
        dd($all_data);

 ## show data with where and orderBy
 $all_data = Student::where('country','USA')->orderBy('name', 'asc')->get();
    dd($all_data);

 ## show single data
  $data = Student::find(2);
    dd($data);

## show data using findOrFail (It is good practice to use findOrFail)
    public function index(){
    $data = Student::findOrFail(2);
     dd($data);
   }

## show first data
  $data = Student::where('name', 'Farhan')->first();
   dd($data);



## update 

 // $data = Student::find(3); or
  $data = Student::where('id',2)->first();
  $data->age = "65";
  $data->save();

## delete 

  // $data = Student::find(3);
  $data = Student::where('id',2)->first();
  $data->delete();

  }

      Relationship 
   ==one to one (student(main) v student_profile) ========
## one to one relationship (student->student_profile)

=> model 
  public function profile(){
          return $this->hasOne(StudentProfile::class);
    }
=> controller
   $single = Student::with('profile')->first();
   dd($single);
  
  $single = Student::with('profile')->find(1);
  dd($single);

  $allStudents = Student::with('profile')->get();
  dd($allStudents);

## one to one reverse relationship (student_profile->student)

   => model 
     public function student(){
        return $this->belongsTo(Student::class);
    }
    =>controller
      $studentProfile = StudentProfile::with('student')->find(1);
      dd($studentProfile);

## one to many relationship (departments & employees)

=> model (Dept)
 public function employee(){
        return $this->hasMany(Employee::class);
    }
=>controller 
 $data = Department::with('employee')->find(1);
      dd($data);
    $data = Department::with('employee')->get();
       dd($data);

## one to many reverse relationship (employees & department)

=> model(Employee)
public function department(){
        return $this->belongsTo(Department::class);
    }
=>controller 
$data = Employee::with('department')->get();
       dd($data);