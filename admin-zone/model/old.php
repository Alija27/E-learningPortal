<?php



function get_course()
{
    $conn = db_connect();
    $sql = "select course_id,c_name from course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}


function get_subject()
{
    $conn = db_connect();
    $sql = "SELECT sid,sub_name from subject";

    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}
//for getting subject by id
/* function get_subject($cid, $sem)
{
    $conn = db_connect();

    $sql = "SELECT sid,sub_name from subject where course_id = $cid and semester_num = $sem";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
} */
function get_semester()
{
    $conn = db_connect();
    $sql = "select smester_num,c_name from subject";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}





function view_users()
{
    $conn = db_connect();
    $sql = "select * from usertb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function update_user_by_id($firstname, $lastname, $email, $faculty, $address, $password, $target, $userid)
{
    $conn = db_connect();
    $stmt = $conn->prepare("update usertb set firstname = ? ,lastname = ? , email = ? ,faculty = ? , password = ? , address= ? , image_url = ? where user_id = ?");
    $stmt->bind_param('sssssssi', $firstname, $lastname, $email, $faculty, $address, $password, $target, $userid);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

/* function update_user_by_id($firstname, $lastname, $email, $faculty, $address, $password, $target, $userid)
{
    $conn = db_connect();
    $stmt = $conn->prepare("update usertb set firstname = ? ,lastname = ? , email = ? ,faculty = ? , password = ? , address= ? , image_url = ? where user_id = ?");
    $stmt->bind_param('sssssssi', $firstname, $lastname, $email, $faculty, $address, $password, $target, $userid);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
} */

function  view_message()

{
    $conn = db_connect();
    $sql = "select * from contacttb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}
function  view_course()

{
    $conn = db_connect();
    $sql = "select * from course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function  view_subject()

{
    $conn = db_connect();
    $sql = "select * from subject";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function  view_syllabus()

{
    $conn = db_connect();
    $sql = "select * from syllabus";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function  view_note()

{
    $conn = db_connect();
    $sql = "select * from note";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function view_oldquestion()
{
    $conn = db_connect();
    $sql = "select * from oldquestion";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}


function get_aboutus()
{
    $conn = db_connect();
    $sql = "SELECT * FROM aboutus ";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}
function find_user_by_email($email)
{
    $conn = db_connect();
    $sql = "SELECT * FROM usertb where email='$email' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function find_user_by_id($id)
{
    $conn = db_connect();
    $sql = "SELECT * FROM usertb where id=$id limit 1";
    $result = $conn->query($sql);
    //var_dump($result);die;
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

/* function signup_new_user($firstname, $lastname, $email, $address, $password, $target, $usertype)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO usertb(firstname,lastname,email,address,password,image_url,usertype) values(?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssi', $firstname, $lastname, $email, $address, $password, $target, $usertype);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
} */




function signup_new_user($firstname, $lastname, $email, $address, $password, $target, $usertype)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO usertb(firstname,lastname,email,address,password,image_url,usertype) values(?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param('ssssssi', $firstname, $lastname, $email,  $address, $password, $target, $usertype);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}




//for uploading notes into database
function uploadnote($name, $course_id, $semester_num, $sid, $target)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO note(name,course_id,semester_num,sid,upload) values(?,?,?,?,?)");
    $stmt->bind_param('siiis', $name, $course_id, $semester_num, $sid, $target);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}






function uploadsyllabus($name, $course_id, $semester_num, $sid, $target)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO syllabus(name,course_id,semester_num,sid,upload) values(?,?,?,?,?)");
    $stmt->bind_param('siiis', $name, $course_id, $semester_num, $sid, $target);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}





function uploadoldquestion($years, $course_id, $semester_num, $sid, $target)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO oldquestion(years,course_id,semester_num,sid,upload) values(?,?,?,?,?)");
    $stmt->bind_param('siiis', $years, $course_id, $semester_num, $sid, $target);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}










//for adding notice into database
function notice($heading, $notice)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO noticetb(heading,notice) values(?,?)");
    $stmt->bind_param('ss', $heading, $notice);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
//for new course into database
function add_new_course($c_name, $c_description, $c_duration, $banner, $semester)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO course( c_name, c_description, c_duration,banner,semester) values(?,?,?,?,?)");
    $stmt->bind_param('ssisi',  $c_name, $c_description, $c_duration, $banner, $semester);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
//for adding new subject into database
function add_new_subject($sub_name, $course_id, $semester_num, $sub_code, $credit_hr, $is)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO subject(sub_name,course_id,semester_num,sub_code,credit_hr,is_elective) values(?,?,?,?,?,?)");
    $stmt->bind_param('siisii', $sub_name, $course_id, $semester_num, $sub_code, $credit_hr, $is);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}


function employer_signup_new_user($name, $cname, $csize, $email, $password, $address, $phone, $target, $date)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO employer (name,cname,csize,email,password,address,phone,img_url,date) values(?, ?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param('ssssssisi', $name, $cname, $csize, $email, $password, $address, $phone, $target, $date);
    $result = $stmt->execute();

    if ($result) {

        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
//for login
function db_login($email, $password)
{

    $conn = db_connect();

    $sql = "SELECT userid, email,usertype FROM usertb where email='$email' and password='$password' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}


function uplode_cv($fk_id, $target)
{
    $conn = db_connect();
    $sql = "INSERT into resume(fk_id,file) values($fk_id,$target)";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function my_job_post()
{
    $conn = db_connect();
    $sql = "SELECT * FROM jobpost where fk_id=" . $_SESSION['employer']["user_id"];
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function all_job_post()
{
    $conn = db_connect();
    $sql = "SELECT * FROM jobpost order by id desc ";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function highly_paid()
{
    $conn = db_connect();

    $sql = "SELECT * FROM jobpost order by salary desc ";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function view_post($fk_id)
{
    $conn = db_connect();

    $sql = "SELECT * FROM jobpost where id=$fk_id ";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function delete_jobpost_by_id($id)
{
    $conn = db_connect();
    $sql = "Delete from jobpost where id=$id";
    $conn->query($sql);
    if ($conn->affected_rows > 0) {
        $conn->close();
        return TRUE;
    } else {
        $conn->close();
        return false;
    }
}

function create_job_post($fk_id, $job_title, $company_name, $company_add, $experience, $salary, $vacency, $end_date, $qualification, $contact_us, $create_date)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO jobpost (fk_id,job_title,company_name,company_add,experience,salary,vacency,end_date,qualification,contact_us,create_date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('issssssissi', $fk_id, $job_title, $company_name, $company_add, $experience, $salary, $vacency, $end_date, $qualification, $contact_us, $create_date);

    if ($stmt->execute()) {
        return $conn;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

function update_post($fk_id, $job_title, $company_name, $experience, $salary, $vacancy, $end_date, $qualification, $contact_us)
{
    $conn = db_connect();
    $update = "Update jobpost set job_title='$job_title', company_name='$company_name', experience ='$experience',salary='$salary',vacency='$vacancy',end_date='$end_date',qualification='$qualification',contact_us='$contact_us' "
        . "where id=$fk_id and fk_id=" . $_SESSION['employer']['user_id'];
    $result = $conn->query($update);

    if ($result) {
        return $conn;
    } else {
        $conn->close();
        return false;
    }
}

function find_jobpost_by_id($id)
{
    $conn = db_connect();
    $sql = "SELECT * FROM resume RIGHT JOIN jobpost ON jobpost.id=resume.fk_jobpost_id WHERE fk_user_id=$id order by resume.id desc";
    $result = $conn->query($sql);

    $conn->close();
    if ($result->num_rows > 0) {

        return $result;
    } else {

        return false;
    }
}

function find_post_by_id($id)
{
    $conn = db_connect();
    $sql = "SELECT * FROM jobpost where id=$id limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function find_user_by_apply_job($id, $today = FALSE)
{
    $conn = db_connect();
    $todayQuery = "";
    if ($today) {
        $todayQuery = " AND resume.post_date>" . strtotime("today") . " AND resume.post_date<" . strtotime("tomorrow");
    }
    $sql = "SELECT * FROM resume RIGHT JOIN jobpost ON jobpost.fk_id=resume.fk_jobpost_id RIGHT JOIN user ON user.id=resume.fk_user_id WHERE jobpost.fk_id=$id $todayQuery ORDER BY resume.id desc";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function find_employer_by_id($id)
{
    $conn = db_connect();
    $sql = "SELECT * FROM employer where id=$id limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function create_note($title, $description, $fk_user_id, $create_date)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO notes (title,description,fk_user_id,create_date) values(?, ?, ?, ?)");
    $stmt->bind_param('ssii', $title, $description, $fk_user_id, $create_date);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

function search_job_by_key($key)
{
    $conn = db_connect();


    $sql = "SELECT * FROM jobpost where job_title like '%$key%' or qualification like '%$key%' ";
    $result = $conn->query($sql);
    $conn->close();

    // var_dump($result);
    // die();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function search_job_by_key_paid($key)
{
    $conn = db_connect();


    $sql = "SELECT * FROM jobpost where job_title like '%$key%' or qualification like '%$key%'  order by salary desc";
    $result = $conn->query($sql);
    $conn->close();

    // var_dump($result);
    // die();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function images_upload()
{
    $id = $_SESSION['employer']['user_id'];
    $db = mysqli_connect("localhost", "root", "", "project");
    $result = mysqli_query($db, "SELECT * FROM employer where id=$id");
    $row = mysqli_fetch_array($result);
    return $row;
    //       echo "<img src='images/".$row['images']." ' height=200px;>";
    //   
    //    
}

function images_view()
{
    $id = $_SESSION['user']['user_id'];
    $db = mysqli_connect("localhost", "root", "", "project");
    $result = mysqli_query($db, "SELECT * FROM user where id=$id");
    $row = mysqli_fetch_array($result);
    return $row;
    //       echo "<img src='images/".$row['images']." ' height=200px;>";
    //   
    //    
}

function get_jobpost($uid)
{
    // $sql = "SELECT  resume.fk_jobpost_id as jobid,resume.name as username,resume.cv as image, jobpost.job_title as job_title FROM resume "
    //       . "INNER JOIN jobpost ON resume.fk_jobpost_id=jobpost.id where jobpost.fk_id=$fk_user_id order by resume.id desc";
    $conn = db_connect($uid);
    $sql = "SELECT *  FROM jobpost where fk_id=$uid";
    $result = $conn->query($sql);

    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

/* function apply_post($uid) {

    $conn = db_connect($uid);
    $sql = "SELECT  resume.fk_jobpost_id as jobid,resume.name as username,resume.cv as image, jobpost.job_title as job_title FROM resume "
            . "INNER JOIN jobpost ON resume.fk_jobpost_id=jobpost.id where jobpost.fk_id=$fk_user_id order by resume.id desc";
    $result = $conn->query($sql);

    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
} */

function get_resume($pid)
{
    $conn = db_connect();
    $sql = "SELECT *  FROM resume where fk_jobpost_id=$pid order by id desc";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function apply_resume($uid)
{
    $conn = db_connect();
    $sql = "SELECT *  FROM resume where fk_user_id=$uid order by id desc";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function resume_view($fk_user_id, $fk_jobpost_id)
{
    $conn = db_connect();
    $sql = "SELECT *  FROM resume where fk_user_id=$fk_user_id and fk_jobpost_id=$fk_jobpost_id";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
    //       echo "<img src='images/".$row['images']." ' height=200px;>";
    //   
    //    
}

function upload_resume($fk_user_id, $fk_jobpost_id, $name, $target, $time)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO resume (fk_user_id,fk_jobpost_id,name,cv,post_date) values(?,?, ? ,?,?)");

    $stmt->bind_param('iissi', $fk_user_id, $fk_jobpost_id, $name, $target, $time);
    $result = $stmt->execute();

    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
