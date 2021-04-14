<?php 
function get_user(){
    return json_decode(file_get_contents('users.json'),true);
}

function get_user_byID($id){
    $users = get_user();
    foreach($users as $user){
        if($user['id'] == $id){
            return $user;
        }
    }
    return null;
}

function update_user($data,$id){
    $users = get_user();
    foreach($users as $i=>$user){
        if($user['id'] == $id){
            $users[$i] = array_merge($user,$data);
        }
    }
    file_put_contents('users.json', json_encode($users));
    return null;


}


function delete_user($id){
    $users = get_user();
    foreach($users as $i=>$user){
        if($user['id'] == $id){
            array_splice($users, $i, 1);
        }
    }
    putJson($users);


    echo "USER DELETED";
    return null;
}

function create_user($data){
    $users = get_user();
    $data['id'] = rand(1000000, 2000000);

    $users[] = $data;

    putJson($users);

    return $data;
}

function putJson($users){
    file_put_contents('users.json', json_encode($users));
}

function isauth($username,$pwd){
    $users = get_user();
    foreach($users as $user){
        if($user['username'] == $username){
            if($user['pass'] ==$pwd){
                $_SESSION['username'] = $username;
                $_SESSION['pass']=$pwd;
                return 1;
            }
            else{
                return 0;
            }
        }
    }
    
}
?>
