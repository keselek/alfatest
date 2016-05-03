<?php

switch ($modx->event->name) {
    case 'OnHandleRequest':
    case 'OnLoadWebDocument':


        $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

        if (
        empty($_REQUEST['alfatest'])
        ) {
            return;
        }

        $action = trim($_REQUEST['alfatest']);


        /** @var Documents $Documents */
        switch ($action) {
            case 'test1':
                $response = 'result';
                break;





        }
        exit($response);


}