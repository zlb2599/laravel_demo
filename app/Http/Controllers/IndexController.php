<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7 0007
 * Time: 13:52
 */
namespace  App\Http\Controllers;
use Libs;
class IndexController extends  Controller{


    public function index(){
        $cl = new SphinxClient ();
        $cl->SetServer ( 'localhost', 9312 );
        $cl->SetConnectTimeout ( 1 );
        $cl->SetArrayResult ( true );
        $cl->SetMatchMode ( SPH_MATCH_ALL );
        $cl->SetRankingMode ( SPH_RANK_PROXIMITY_BM25 );
        $res = $cl->Query ( 1, 'mytable' );
        var_dump($res);

    }
}