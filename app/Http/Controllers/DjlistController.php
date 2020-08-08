<?php

namespace App\Http\Controllers;

use App\Djlist;
use Illuminate\Http\Request;

class DjlistController extends Controller
{

    //Function for Decryption
    public function decryptthis(Request $request)
    {
        $data = $request->data;
        $key =$this->hex2base64($request->key);
        $encryption_key = base64_decode($key);
        list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
        return  openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 1, $iv);
    }

    public function encryptthis(Request $request)
    {
        $data = $request->data;
        $key =$this->hex2base64($request->key);
        $data = $data . " ";
        $encryption_key = base64_decode($key);
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 1, $iv);
        return base64_encode($encrypted . '::' . $iv);
    }

    public function testdecrypt(Request $request)
    {
        $data = $request->data;
        $key = $request->key;
        $key = pack('H*', $key);
        $raw = hex2bin($data);
        $decrypt = openssl_decrypt($raw, 'aes-256-ecb', $key, OPENSSL_ZERO_PADDING | OPENSSL_RAW_DATA);
        return ($decrypt);
    }

    public function testencrypt(Request $request)
    {
    
        $data = hex2bin($request->data);
        $key = $request->key;
        $key = pack('H*', $key);
        $encryptedData = openssl_encrypt($data, 'aes-256-ecb', $key, OPENSSL_ZERO_PADDING | OPENSSL_RAW_DATA);
        return bin2hex($encryptedData);

    }

    public function hex2base64( $hexadecimal_string ){
        $hexadecimal_string= str_replace(":","",$hexadecimal_string);
        $hexEncode =  base64_encode(pack('H*',$hexadecimal_string));
        if(strpos($hexEncode, "=") !== false){
            $hexEncode= str_replace("=","",$hexEncode);
        }
       return $hexEncode;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDJ(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Djlist  $djlist
     * @return \Illuminate\Http\Response
     */
    public function show(Djlist $djlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Djlist  $djlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Djlist $djlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Djlist  $djlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Djlist $djlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Djlist  $djlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Djlist $djlist)
    {
        //
    }
}