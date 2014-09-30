<?php

class ApiV1Controller extends BaseController {

    public function getIndex()
    {
        return View::make('apiv1');
    }

}
