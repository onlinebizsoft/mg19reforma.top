<?php 
/* We will redirect to the checkout/cart for exemple */
class Smartbees_Instagramapi_Model_Instagramapi{
    public function getImagesUrl()
    {
        $imagesURL = array();
        define( 'IG_CLIENT_ID', '8077fa35f8764e138a02918f1018e738' );
        define( 'IG_CLIENT_SECRET', '6ebefccf1a53429db22f2dd17abc1ff9 ' );
        define( 'IG_REDIRECT_URI', 'https://reforma.dev.wdsdev.pl' );
        define( 'IG_ACCESS_TOKEN', '4161518950.8077fa3.ee76a003bfc64b1f89ffad32e650be20' );
      
        $ch = curl_init( 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' . IG_ACCESS_TOKEN );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        $response_raw = curl_exec( $ch );
        $response = json_decode( $response_raw, true );
        curl_close( $ch );
        $imagesNumber = count($response['data']);
        for( $x = 0; $x < $imagesNumber; $x++ ){
            $imagesURL[]=$response['data'][$x]['images']['low_resolution']['url'];
        }
        return $imagesURL;
    }
    public function getImagesUrlEu()
    {
        $imagesURL = array();
        define( 'IG_CLIENT_ID', 'a7602b5392ba4982aee7a867d887fb7d' );
        define( 'IG_CLIENT_SECRET', 'ca7ef56feeed476da779991458d36d48' );
        define( 'IG_REDIRECT_URI', 'https://reforma.top/' );
        define( 'IG_ACCESS_TOKEN', '2956046434.a7602b5.d8734f0d0ff9429ab486dc228151168c' );
      
        $ch = curl_init( 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' . IG_ACCESS_TOKEN );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
        $response_raw = curl_exec( $ch );
        $response = json_decode( $response_raw, true );
        curl_close( $ch );
        // var_dump($response);die;
        if(isset($response['data']))
        {$imagesNumber = count($response['data']);
        for( $x = 0; $x < $imagesNumber; $x++ ){
            $imagesURL[]=$response['data'][$x]['images']['low_resolution']['url'];
        }}
        return $imagesURL;
    }
}
?>