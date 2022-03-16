<?php

function storeFileLocally($request , $fileName='image', $directory='images'){
    return $request->file($fileName)->store($directory);
}
