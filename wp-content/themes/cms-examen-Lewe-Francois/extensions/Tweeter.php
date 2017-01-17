<?php
/*
require"vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

/*$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
*/

/*$connection = new TwitterOAuth(	"nXONPncHUs4Jk4WltBDOzpdi4","v0B1LjRT3A7R0uIDkglSYiXXPiEz9OL7aBJON7aVF6h8lrWCoc", "3194035073-sPBD5eVtTZhy9Xc73o6rHtrMAXxRftSiQ8SUbat","SYqo39vs9vSvCFi1UmNTXFcsFhtwsCGx2SL4tGcNAh25a");
$content = $connection->get("account/verify_credentials");
var_dump($content);*/


require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
global $wp;
class Tweets
{
    private $key = "nXONPncHUs4Jk4WltBDOzpdi4";
    private $secret_key = "v0B1LjRT3A7R0uIDkglSYiXXPiEz9OL7aBJON7aVF6h8lrWCoc";
    private $access_token = "3194035073-sPBD5eVtTZhy9Xc73o6rHtrMAXxRftSiQ8SUbat";
    private $access_token_secret = "SYqo39vs9vSvCFi1UmNTXFcsFhtwsCGx2SL4tGcNAh25a";
    private $connection;
    function __construct()
    {
        /*
         * Ajoute une action qui s'éxecute lors de la création du menu du back-office
         */
        add_action('admin_menu', array($this, 'init'));
        $this->connection = new TwitterOAuth(
            $this->key,
            $this->secret_key,
            $this->access_token,
            $this->access_token_secret
        );
    }
    /**
     * Crée une nouvelle page coté back-office et ajoute le lien de la nouvelle page dans le menu du back-office
     */
    public function init()
    {
        add_options_page("Tweets", 'Tweets', 'administrator', 'tweets.php', array($this, 'displayAdminPage'));
    }
    /**
     * Affiche la page du back-office
     */
    public function displayAdminPage()
    {
        ob_start();
        echo 'test';
    }
    /*
     * Va checrher le dernier tweets
     * Premier paramètre est la limit de tweet
     * Deuxième paramètre est le nom de la page twitter
     */
    public function getTweets($limit, $nameTwitter)
    {
        $this->connection->get("account/verify_credentials");
        $result = $this->connection->get('statuses/user_timeline', [
            'screen_name' => $nameTwitter,
            'exclude_replies' => true,
            'count' => $limit
        ]);
        return array_splice($result, 0, 25);
    }
    /*
     * Crée des nouveau post avec les tweets
     */
    public function generate($limit, $nameTwitter){
        if(get_term_by('name', 'Tweet', 'category') === false){
            $category = wp_insert_term(
                'Tweet',
                'category',
                array(
                    'description' => 'Tweets',
                    'slug' => 'tweets',
                )
            );
        }else{
            $term = get_term_by('name', 'Tweet', 'category');
            $category = array('term_id' => $term->term_id);
        }
        foreach ($this->getTweets($limit, $nameTwitter) as $tweet){
            $my_post = array(
                'post_title' => 'Twitter',
                'post_content' => $tweet->text,
                'post_status' => 'publish',
                'post_type' => 'post',
                'post_author' => 1,
                'post_category' => array($category['term_id']),
            );
            wp_insert_post($my_post);
        }
    }
    /**
     * Add cron action in wp-cron
     */
    public function cron()
    {
        wp_schedule_event(time(), 'hourly', array($this, 'generate'));
    }
}
?>