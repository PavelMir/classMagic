<?php
class Students{
	public $firstname;
	public $lastname;
	public $gender;
	public $status;
	public $gpa;
	
	public function __construct($firstname, $lastname, $gender, $status, $gpa){
		$this->firstname=$firstname;
		$this->lastname=$lastname;
		$this->gender=$gender;
	    $this->status=$status;
		$this->gpa=$gpa;
	}
	
	public function __call($name,array $params){
	var_dump(get_object_vars($this));
	}
	
	public function studyTime($study_time){
		if($this->gpa>4){$this->gpa = 4;}
		$this->gpa += log($study_time);
		return round($this->gpa, 5);
	}
}

$arr=[];//array of students
$arr[0]=['firstname'=>'Mike', 'lastname'=>'Barnes', 'status'=>'freshman', 'gender'=>'male', 'gpa'=>4];
$arr[1]=['firstname'=>'Jim', 'lastname'=>'Nickerson', 'status'=>'sophomore', 'gender'=>'male', 'gpa'=>3];
$arr[2]=['firstname'=>'Jack', 'lastname'=>'Indabox', 'status'=>'junior', 'gender'=>'male', 'gpa'=>2.5];
$arr[3]=['firstname'=>'Jane', 'lastname'=>'Miller', 'status'=>'senior', 'gender'=>'female', 'gpa'=>3.6];
$arr[4]=['firstname'=>'Mary', 'lastname'=>'Scott', 'status'=>'senior', 'gender'=>'female', 'gpa'=>2.7];

for($i=0; $i<count($arr); $i++){
	$objArr[] = new Students($arr[$i]['firstname'], ['lastname'], ['status'], ['gender'], ['gpa']);
}

foreach($objArr as $value){
  echo $value->showMyself();
}

foreach($objArr as $value){//echo all values
  echo $value->firstname.' ';
  echo $value->lastname.' ';
  echo $value->status.' ';
  echo $value->gender.' ';
  echo $value->gpa.' ';
  echo $value->study_time.' '; 
}

foreach($objArr as $value){
  echo $value->studyTime($value->study_time);
}

foreach($objArr as $value){
  echo $value->showMyself();
}
