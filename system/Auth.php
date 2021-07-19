<?php

namespace App\Core;

class Auth
{
    /**
     * This will check if authenticated
     * 
     */
    public static function isAuthenticated()
    {
        if (!empty(static::user('id'))) {
            redirect('/home');
        }
    }

    /**
     * This will authenticate the users information
     * 
     * @param array $datas
     */
    public static function authenticate($request)
    {
        $datas = DB()->select("*", "users", "username = '$request[username]'")->get();
        $passchecker = checkHash($request['password'], $datas['password']);

        if ($passchecker == "") {
            redirect('/login', ["message" => "User not found.", "status" => 'danger']);
        }

        $users = [];
        foreach ($datas as $key => $data) {
            if ($key != 'password') {
                $users[$key] = $data;
            }
        }

        $_SESSION["AUTH"] = $users;
        Request::invalidateOld();
        Request::renewCsrfToken();

        redirect('/home');
    }

    /**
     * stores the authenticated user's data
     * 
     * @param string $record
     */
    public static function user($record)
    {
        return $_SESSION['AUTH'][$record];
    }

    /**
     * This will protect the routes if not authenticated
     * 
     */
    public static function routeGuardian($middleware)
    {
        if (!empty($middleware)) {
            if (in_array('auth', $middleware)) {
                if (empty(static::user('id'))) {
                    redirect('/login');
                }
            }
        }
    }

    /**
     * removed the authenticated information stored in session
     * 
     */
    public static function logout($request = '')
    {
        if (!empty($request)) {
            Request::verifyCsrfToken($request['csrf_token']);
            static::sessionInvalidate();
            redirect('/');
        } else {
            static::sessionInvalidate();
            redirect('/');
        }
    }

    /**
     * reset users password
     * used in profile reset password
     * 
     */
    public static function resetPassword($request)
    {
        $user_id = Auth::user('id');
        $userCurrent = DB()->select('password', 'users', "id = '$user_id'")->get();
        $passwordCheck = checkHash($request["old-password"], $userCurrent['password']);

        if ($passwordCheck) {
            if ($request["new-password"] == $request["confirm-password"]) {
                $update_pass = [
                    'password' => bcrypt($request["new-password"]),
                    'updated_at' => date("Y-m-d H:i:s")
                ];
                DB()->update('users', $update_pass, "id = '$user_id'");
                $response_message = ["message" => "Password has changed.", "status" => "success"];
            } else {
                $response_message = ["message" => "Passwords must match.", "status" => "danger"];
            }
        } else {
            $response_message = ["message" => "Old password did not match.", "status" => "danger"];
        }

        return $response_message;
    }

    /**
     * will reset password using a token
     * used in forgot-password module
     * 
     */
    public static function resetPasswordWithToken($request)
    {
        $isTokenLegit = DB()->select("email", "password_resets", "token = '$request[token]'")->get();

        if ($isTokenLegit) {

            if ($request["new_password"] == $request["confirm_password"]) {

                $reset_password = [
                    'password' => bcrypt($request['new_password']),
                    'updated_at' => date("Y-m-d H:i:s")
                ];

                DB()->update("users", $reset_password, "email = '$isTokenLegit[email]'");

                DB()->delete("password_resets", "email = '$isTokenLegit[email]' AND token = '$request[token]'");

                redirect('/login', ["message" => "Success reset password", "status" => "success"]);
            } else {
                redirect('/reset/password/' . $request['token'], ["message" => "Passwords must match.", "status" => "danger"]);
            }
        } else {
            redirect('/reset/password/' . $request['token'], ["message" => "Token is not authorized.", "status" => "danger"]);
        }
    }

    /**
     * check if the user is allowed to 
     * access a page base on roles
     * 
     */
    public static function userIsAuthorized()
    {
        if (static::user('role_id') != 1) {
            redirect('/home');
        }
    }

    public static function sessionInvalidate()
    {
        session_destroy();
    }
}
