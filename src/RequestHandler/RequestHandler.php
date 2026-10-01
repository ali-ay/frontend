<?php
/**
 * Created by PhpStorm.
 * User: harun.akgun
 * Date: 31/01/2017
 * Time: 13:56
 */

namespace App\RequestHandler;


interface RequestHandler
{
    //@return Response
    public function handle(Request $request);
}