<?php

namespace frontend\modules\api\resources;

use common\models\User;

class UserResource extends User
{
    //todo make comment (IMPORTANT!)
    public function fields()
    {
        return ['id','username','password','email','street','zip_code','area','phone_number','nif','gender'];
    }
}